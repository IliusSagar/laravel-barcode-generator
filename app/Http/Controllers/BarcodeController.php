<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Picqer;
use Picqer\Barcode\BarcodeGeneratorPNG;

class BarcodeController extends Controller
{
    public function showBarcodeForm()
    {
        return view('barcode_form');
    }

    public function makeBarcode(Request $request)
    {
        // validate request
        $validator = Validator::make($request->all(), [
            'barcode' => 'required|string',
        ]);

        // make barcode
        if (!$validator->fails()) {
            $label = $request->input('barcode');
            $barcodeGenerator = new BarcodeGeneratorPNG();
            $barcode = $barcodeGenerator->getBarcode($label, $barcodeGenerator::TYPE_CODE_128);

            return view('barcode', ['label' => $label, 'barcode' => $barcode]);
        }

        // validation error
        return back()->withErrors($validator)->withInput();
    }
}
