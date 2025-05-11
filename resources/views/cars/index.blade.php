<!DOCTYPE html>
<html>
<head>
    <title>Car Shop</title>
    <style>
        .car { border: 1px solid #ccc; padding: 10px; margin: 10px; width: 300px; display: inline-block; }
    </style>
</head>
<body>
    <h1>Available Cars</h1>

    @foreach($cars as $car)
        <div class="car">
            <h2>{{ $car->name }} - {{ $car->brand }}</h2>
            <p>Year: {{ $car->year }}</p>
            <p>Price: ${{ number_format($car->price, 2) }}</p>
           <p> {{ $car->type }} </p>
           <p> {{ $car->explai }} </p>
            @if($car->image)
                <img src="{{ asset('storage/' . $car->image) }}" width="200">
            @endif
        </div>
    @endforeach
</body>
</html>
