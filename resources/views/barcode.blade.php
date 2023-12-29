<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $label}}</title>

    <style type="text/css">
        /* body {
            margin: 0;
            padding: 0;
            background: #ffffff;
        } */
    
        div,
        p,
        a,
        li,
        td {
            -webkit-text-size-adjust: none;
        }
    
        body {
            width: 88mm;
            height: 100%;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
    
        }
    
        p {
            padding: 0 !important;
            margin-top: 0 !important;
            margin-right: 0 !important;
            margin-bottom: 0 !important;
            margin- left: 0 !important;
        }
    
        .visibleMobile {
            display: none;
        }
    
        .hiddenMobile {
            display: block;
        }
    </style>
</head>
<body>
   
    <h4>{{ $label }}</h4>


    <!-- Header -->
<table width="100%" border="0" cellpadding='2' cellspacing="2" align="center" bgcolor="#ffffff" style="padding-top:4px;">
	<tbody>
		<tr>
			<td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 

18px; vertical-align: bottom; text-align: center;">
				<strong style="font-size:16px;">Shop Name</strong>
				<br>phone: 0403 - 247830 322
				<br>TRN: 34231123123123
				<br> Court Road, Manjeri, Malappuram
			</td>
		</tr>
		<tr>
			<td height="2" colspan="0" style="border-bottom:1px solid #e4e4e4 "></td>
		</tr>
	</tbody>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="2" align="center">
	<tbody>
		<tr>
			<td colspan="100" style="font-size: 14px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 

18px; vertical-align: bottom; text-align: center;">
 <img src="data:image/png;base64,{{ base64_encode($barcode) }}" alt="Barcode">
				<strong>Cash Receipt</strong>
			</td>
		</tr>
		<tr>
			<td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 

18px; vertical-align: bottom; text-align: left;">
				Customerasdf
				<br> TRN: 234234234234
			</td>
			<td style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height:18px; vertical-align: top; text-align: right;">
				<br>INVOICE: #32432432423
				<br>Date: Feb 27, 2018
			</td>
		</tr>
		<tr>
			<td height="2" colspan="100" style="padding-top:15px;border-bottom:1px solid #e4e4e4 "></td>
		</tr>
	</tbody>
</table>

<!-- /Header -->

<!-- Table Total -->
<table width="100%" border="0 " cellpadding="0" cellspacing="2" align="center" style="padding: 12px 0px 5px 2px">
	<tbody>
		<tr>
			<td style="font-size: 16px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 16px; vertical-align: top; text-align:left; padding-left:16px ">
				Amount:
			</td>
			<td style="font-size: 16px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 16px; vertical-align: top; text-align:left; white-space:nowrap; " width="100 ">
				150
			</td>
		</tr>

		<tr>
			<td height="2" colspan="100" style="padding-top:8px;border-bottom:1px solid #e4e4e4 "></td>
		</tr>
	</tbody>
</table>
<!-- /Table Total -->
<!-- Customer sign -->
<table width="100% " border="0 " cellpadding="0" cellspacing="2" align="center" style="padding: 12px 0px 5px 2px">
	<tbody>
		<tr>
		</tr>
		<tr>
			<td style="font-size: 14px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 16px; vertical-align: top; text-align:right; padding-top:16px ">
				Customer Signature
			</td>
		</tr>
		<tr>
			<td style="font-size: 14px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 16px; vertical-align: top; text-align:center; padding-top:16px">

			</td>
		</tr>
	</tbody>
</table>
    
</body>
</html>