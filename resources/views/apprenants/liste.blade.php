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
    <a href= "{{ route('students.create') }}" class="btn btn-primary">Ajouter</a>

    <div class="container mt-3">
        <h2>Liste des apprenants</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th> #</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Matricule</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($app as $listeApprenant)
                    <tr>
                        <td>{{ $listeApprenant->id }}</td>
                        <td>{{ $listeApprenant->nom }}</td>
                        <td>{{ $listeApprenant->prenom }}</td>
                        <td>{{ $listeApprenant->matricule }}</td>
                        <td><a href="{{ route('students.edit', ['id' => $listeApprenant->id]) }}"
                                class="btn btn-primary">modifier</a>


                            <form action="{{ route('students.delete', ['id' => $listeApprenant->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">supprimer</button>
                            </form>

                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
