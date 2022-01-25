<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Feladat értékelés</h1>
    <form method='POST' action="{{ route('feladatok.update', $feladat->id) }}">
        @method('PATCH')
        @csrf
        <div>
            <input type="hidden" name="nev" value="{{ $feladat->nev }}">
        </div>
        <div>
            <input type="hidden" name="feladat_url" value="{{ $feladat->feladat_url }}">
        </div>
        <div>
            Szöveges értékelés:<br>
            <input type="text" required name="szoveges_ertekeles" value="{{ $feladat->szoveges_ertekeles }}" >
        </div>
        <div>
            Pontszám:<br>
            <input type="number" name="pontszam" value="{{ $feladat->pontszam }}" min=0 max=100>
        </div>
        <div>
            <input type="submit" value="Értékelés">
        </div>
    </form>
</body>
</html>
