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
            Szöveges értékelés:<br>
            <input type="text" name="person" value="{{ $feladat->szoveges_Ertekeles }}">
        </div>
        <div>
            Pontszám:<br>
            <input type="number" name="height" value="{{ $statue->pontszam }}">
        </div>
        <div>
            <input type="submit" value="Értékelés">
        </div>
    </form>
</body>
</html>
