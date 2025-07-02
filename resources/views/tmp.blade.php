<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "Vert San";
    ?>
    <h3>Welcome to  {{ $name }} Shop </h3>

    <p>
        <strong>Product Name:</strong> {{ $p_name }}<br>
        <strong>Price:</strong> {{ $p_price }}<br>
        <strong>Quantity in Stock:</strong> {{ $p_quantity }}<br>
    </p>

</body>
</html>
