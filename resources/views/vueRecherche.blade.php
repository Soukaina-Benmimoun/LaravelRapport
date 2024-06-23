<!DOCTYPE html>
<html>
<head>
    <title>Recherche Dossiers</title>
</head>
<body>
    <h1>Recherche Dossiers</h1>
    <form method="POST" action="{{ route('supprimerTous') }}">
        @csrf
        @foreach($dossiers as $dossier)
            <div>
                <input type="checkbox" name="ids[]" value="{{ $dossier->iddossier }}">
                <label>{{ $dossier->iddossier }} - {{ $dossier->date_ouverture }}</label>
            </div>
        @endforeach
        <button type="submit">Supprimer Sélectionnés</button>
    </form>
</body>
</html>
