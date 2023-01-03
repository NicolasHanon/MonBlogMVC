
@extends('layout')
@section('contenu')
    @foreach($billets as $billet)
        <article>  
            <header>
                <h1 class="titreBillet"><a href="{{ route('billets.show',$billet->id) }}">{{ $billet->BIL_TITRE }}</a>
                <time>{{ $billet->BIL_DATE }}</time>
            </header>
            <p> {{ $billet->BIL_CONTENU }}</p>
        </article>
        <hr />
    @endforeach
@endsection