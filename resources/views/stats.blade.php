<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museum bragging page</title>
</head>
<body>
    <h1>Üdvözlünk a házifeladat kezelő alkalmazásban!</h1>
    <p>Beadott feladatok száma: {{ $feladatcount }}</p>
    <p>Nem értékelt feladatok száma: {{ $feladatertekelve }}</p>
       <a href="{{ route('feladatok.index') }}">Feladatok listája</a>
</body>
</html>
