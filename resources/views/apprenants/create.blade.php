<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h1>Formulaire d'ajout </h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('students.store') }}" method="post">

            @csrf
            <div class="mb-3 mt-3">
                <label>Nom</label>
                <input type="text" class="form-control" id="nom" name="nom">

            </div>
            <div class="mb-3 mt-3">
                <label>Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom">
            </div>
            <div class="mb-3 mt-3">
                <label>Matricule</label>
                <input type="text" class="form-control" id="matricule" name="matricule">

            </div>
            <div class="mb-3 mt-3">
                <label>Telephone</label>
                <input type="text" class="form-control" id="telephone" name="telephone">

            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>

</body>

</html>
