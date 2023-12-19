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
        <h1>Formulaire de modification</h1>
        <form action="{{ route('students.update', ['id' => $student->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="nom" value="{{ $student->nom }}">
            <input type="text" name="prenom" value="{{ $student->prenom }}">
            <input type="text" name="matricule" value="{{ $student->matricule }}">
            <input type="text" name="telephone" value="{{ $student->telephone }}">
            <button type="submit">Modifier</button>
        </form>
    </div>

</body>

</html>
