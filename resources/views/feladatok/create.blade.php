<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Új feladat</h1>

    <!-- Összes hiba egy helyen -->

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

    <form method='POST' action="{{ route('feladatok.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Név:<br>
            <input type="text" name="nev" value="{{ old('nev') }}">
            @error('nev')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Feladat url:<br>
            <input type="text" name="feladat_url" value="{{ old('feladat_url') }}">
            @error('feladat_url')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Szöveges értékelés:<br>
            <input type="text" name="szoveges_ertekeles" value="{{ old('szoveges_ertekeles') }}">
            @error('szoveges_ertekeles')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Pontszám:<br>
            <input type="text" name="pontszam" value="{{ old('pontszam') }}">
            @error('pontszam')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="submit" value="Create">
        </div>
    </form>
</body>
</html>
