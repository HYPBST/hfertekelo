<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <tr>
            <th>Név</th>
            <th>Link</th>
            <th>Szöveges értékelés</th>
            <th>Pontszám</th>
            <th>Művelet</th>
        </tr>
    @foreach ($feladatok as $feladat)
        <tr>
            <td>{{ $feladat->nev }}</td>
            <td>{{ $feladat->feladat_url }}</td>
            <td>{{ $feladat->feladatertekelve }}</td>
            <td>{{ $feladat->pontszam }}</td>
            <td>
                <form method="POST" action="{{ route('feladatok.edit', $feladat->id) }}">
                    @csrf
                    @method('UPDATE')
                    <button type="submit">Értékelés</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
</body>
</html>
