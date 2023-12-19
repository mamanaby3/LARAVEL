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
        <h2>{{ $student->nom }} {{ $student->prenom }}</h2>
        <br>
        @foreach ($mat as $listeMatieres)
            <h3>{{ $listeMatieres->nom }}</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Devoir</th>
                        <th>Examen</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>

                        @foreach ($notes as $listeNotes)
                            @if ($listeNotes->matieres_id == $listeMatieres->id && $listeNotes->apprenant_id == $student->id)
                                <td>{{ $listeNotes->devoir }}</td>
                                <td>{{ $listeNotes->examen }}</td>
                            @endif
                        @endforeach
                    </tr>

                </tbody>
            </table>
        @endforeach

    </div>

</body>

</html>
