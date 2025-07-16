<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{-- if statement --}}
    {{-- @if ($score >= 90)
    <p> The Result is A</p>

    @elseif ( $score >= 80)
    <p> {{$name}} The Result is B</p>
    @elseif ( $score >= 70)
    <p> {{$name}} The Result is C</p>
    @elseif ( $score >= 60)
    <p> {{$name}} The Result is D</p>
    @else
    <p> {{$name}} The Result is F</p>w
    @endif --}}


    {{-- for statement  --}}

    {{-- @for($i = 1; $i <= 20; $i++ )
    @if ( $i % 2 == 0)
    <p class="row-auto">{{ $i }}</p>
    @endif
    @endfor --}}

    {{-- foreach --}}
    {{-- @php
    $students = [
        [ 'id'=> 1001, 'name' => 'Vert'],
    [ 'id'=> 1002, 'name' => 'KOKO'],
    [ 'id'=> 1003, 'name' => 'MOMO']
];
    @endphp

@foreach ($students as $key => $student as $value)
<p>Id: {{ $student['id'] }}, name: {{ $student['name'] }}</p>
@endforeach --}}






{{-- while statement  --}}

{{-- @while ($i <=10)
<p>{{$i}}</p>
@php
    $i++;
@endphp
@endwhile --}}



{{-- @php
$i = 1;
$users = ['Vert', "KOKO", 'MOMO'];
@endphp



forelse

@forelse ($users as $u )
<p> Their name are {{$u}}</p>

@empty
<p>There is no data variable </p>
@endforelse --}}


<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
1. Chal

@php
$items = [1,2,3,4,5]

@endphp

@foreach ( $items as $item )
<li>
    Item {{$item}}
</li>

@endforeach


2. Chal

    @php
    $students = [
        [ 'id'=> 1, 'name' => 'Sok Dara'],
    [ 'id'=> 2, 'name' => ' Kim Sopheak'],
    [ 'id'=> 3, 'name' => 'Um Piseth']
];
    @endphp
<div>

</div>
@foreach ($students as $student  )
<li>Id: {{ $student['id'] }}, name: {{ $student['name'] }}</li>
@endforeach


3. Chal

<p class="text-green-500" >Event Number</p>
    @for($i = 1; $i <= 20; $i++ )
    @if ( $i % 2 == 0)

    <li class="row-auto">{{ $i }}</li>
    @endif
    @endfor


    4. Chal
    <div>
        <h3 class="text-red-500">Odd Number</h3>
    </div>
    @for($i = 1; $i <= 20; $i++ )
    @if ( $i % 3 == 0)

    <li class="row-auto">{{ $i }}</li>
    @endif
    @endfor

    5.
    <p class="text-green-500 row-auto"> Even numbers :</p>
     @for($i = 1; $i <= 100; $i++ )
    @if ( $i % 2 == 0)


    <span>{{$i}}</span>
    @endif
    @endfor

    <p class="text-red-500 row-auto"> Odd numbers :</p>
    @for($i = 1; $i <= 100; $i++ )
    @if ( $i % 3 == 0)
    <span>{{$i}}</span>
    @endif
    @endfor


</body>
</html>
