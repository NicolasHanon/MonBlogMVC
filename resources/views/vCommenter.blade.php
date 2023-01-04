@extends('layout')
@section('contenu')
    @php
        $today = date('Y-m-d');
    @endphp
    <h2>Commenter le billet : {{ $billet->BIL_TITRE }}</h2>
    <form action="{{ route('commentaires.store') }}" method="POST">
        @csrf
        <p><i>Complétez le formulaire. Les champs marqué par </i><em>*</em> sont <em>obligatoires</em></p>
        <fieldset>
            <legend>Entrez votre commentaire :</legend>
            <div>
                <label for="COM_AUTEUR">Nom : <em>*</em></label>
                <input type="text" @error('COM_AUTEUR') is-invalid @enderror name="COM_AUTEUR" placeholder="Entrez votre nom">
                @error('COM_AUTEUR')
                    <div><em>{{ $message }}</em></div>
                @enderror
            </div>
            <br>
            <div>
                <label for="COM_CONTENU">Message : <em>*</em></label>
                <textarea name="COM_CONTENU" @error('COM_CONTENU') is-invalid @enderror name = "COM_CONTENU" placeholder ="Votre commentaire :" cols="30" rows="10"></textarea>
                @error('COM_CONTENU')
                    <div><em>{{ $message }}</em></div>
                @enderror
            </div>
            <div>
                <input type="text" name="COM_DATE" value="{{ $today }}">
            </div>
            <div>
                <input type="text" name="created_at" value="{{ $today }}">
            </div>
            <div>
                <input type="text" name="billet_id" value="{{ $idBillet}}">
            </div>
            <br>
            <button type="submit">Envoyer !</button>
        </fieldset>
    </form>
@endsection