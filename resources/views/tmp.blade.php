<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php
    $name = "Vert San";

    $number = 7;
    @endphp
    <h3>Welcome to  {{ $name }} Shop </h3>

    <p>
        <strong>Product Name:</strong> {{ $p_name }}<br>
        <strong>Price:</strong> {{ $p_price }}<br>
        <strong>Quantity in Stock:</strong> {{ $p_quantity }}<br>
    </p>

    {{-- if statement  --}}
    @if ($number % 2 == 0 )
    <p>{{$number}} is even number</p>
    @else
    <p>{{$number}} is odd number</p>
    @endif

    {{-- unless statement --}}

    @unless($number % 2 ==0)
    <p>{{$number}} is odd number</p>
    @else
    <p>{{$number}} is even number</p>
    @endunless

    {{-- isset statement --}}
    @isset($number)
    <p>{{$number}} is set</p>
    @else
    <p>{{$number}} is not set</p>
    @endisset

    {{-- empty statement --}}
    @empty($number)
    <p>{{$number}} is empty</p>
    @else
    <p>{{$number}} is not empty</p>
    @endempty


   
</body>
</html>
