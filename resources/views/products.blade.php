<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Programs - SBKU University</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    @include('layouts.navbar')

    {{-- <div class="container my-5 algi">
        <h2 class="text-center mb-4">Our Products</h2>
        <div class="row text-center fw-bold mb-3">
            <div class="col">ID</div>
            <div class="col">Img</div>
            <div class="col">Name</div>
            <div class="col">Description</div>
            <div class="col">Price</div>
            <div class="col">Quantity</div>
        </div>
        @foreach ($products as $item)
            <div class="row align-items-center mb-3">
                <div class="col">{{ $item['id'] }}</div>
                <div class="col">
                    <img src="{{ $item['img'] }}" alt="{{ $item['name'] }}" style="max-width: 100px;">
                </div>
                <div class="col">{{ $item['name'] }}</div>
                <div class="col">
                    <!-- No 'desc' key, using name as placeholder -->
                    {{ $item['name'] }} Description
                </div>
                <div class="col">Price: ${{ $item['price'] }}</div>
                <div class="col">Quantity: {{ $item['quantity'] }}</div>
            </div>
        @endforeach
    </div> --}}

    <div class="container my-5">
        <table class="table table-bordered talbr-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Img</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td><img src="{{ $item['img'] }}" alt="{{ $item['name'] }}" style="max-width: 100px;"></td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['desc'] }}</td>
                        <td>Price: ${{ $item['price'] }}</td>
                        <td>Quantity: {{ $item['quantity'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
