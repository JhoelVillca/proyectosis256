<!DOCTYPE html>
<html>
<head>
    <title>Sumar</title>
</head>
<body>
    <h1>Suma de numeros</h1>

    <form action="{{ route('miSuma') }}" method="POST">
        @csrf
        A: <input type='text' name="varA" id = 'varA'><br>
        B: <input type='text' name="varB" id = 'varB'><br>
        <input type="submit" value="Sumar">
    </form>

    <p>{{ $a ?? '' }} + {{ $b ?? '' }} = {{ $s ?? '' }}</p>
</body>
</html>