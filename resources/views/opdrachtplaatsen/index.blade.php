@extends('layouts.app')

@section('content')
@include('layouts.alerts')

<div class="container">
    <div class="column">
        <form action="/store" method="post">
            {{ csrf_field() }}
            <label>Naam</label>
            <br>
            <input type="text" name="name">
            <br>
            <label>Beschrijving van de werkzaamheden</label>
            <br>
            <input type="text" name="description">
            <br>
            <label>Datum</label>
            <br>
            <input type="date" name="date">
            <br>
            <button type="submit" class="btn btn-primary" name="button">Voeg vacaturen toe!</button>
        </form>
    </div>
</div>

@endsection
