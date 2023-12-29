<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $label}}</title>
</head>
<body>
    <img src="data:image/png;base64,{{base64_encode($barcode)}}" >
    <h4>{{$label}}</h4>
</body>
</html>