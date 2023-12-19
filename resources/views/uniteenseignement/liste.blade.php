<!DOCTYPE html>
<html lang="en">

<head>
    <title> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Liste des matières</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Unité d'enseignement</th>
                    <th>Matières</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ue as $listeUE)
                    <tr>
                        <td>{{ $listeUE->nom }}</td>
                        <td>
                            @foreach ($mat as $listeMatieres)
                                @if ($listeMatieres->ue_id == $listeUE->id)
                                    {{ $listeMatieres->nom }}
                                    <br>
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
