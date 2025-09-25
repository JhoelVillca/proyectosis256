<!DOCTYPE html>
<html>
<head>
    <title>Ecuacion Cuadratica</title>
</head>
<body>
    <h1>Ecuacion Cuadratica </h1>
    <form action="{{ route('miEcuacionCuadratica') }}" method="POST">
        @csrf
        A: <input type='text' name="varA" id = 'varA'><br>
        B: <input type='text' name="varB" id = 'varB'><br>
        C: <input type='text' name="varC" id = 'varC'><br>
        <input type="submit" value="resEcuaCuadratica">
    </form>

    <p>Las soluciones de la ecuacion {{ $a ?? '' }}x² + {{ $b ?? '' }}x + {{ $c ?? '' }} son: 
    <br>
    x1 = {{ $x1 ?? '' }} 
    <br>
    x2 = {{ $x2 ?? '' }}  
    </p>
    
</body>
</html>