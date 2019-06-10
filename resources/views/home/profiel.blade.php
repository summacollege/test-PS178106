@extends('layouts.app')

@section('content')
@include('layouts.alerts')

<div class="container">
    <div class="column">
        <form action="/storecv" method="post">
            {{ csrf_field() }}
            <label>Cv</label>
            <br>
            <input type="text" name="cv">
            <br>
            <label>Motivatie</label>
            <br>
            <input type="text" name="motivatie">
            <br>
            <button type="submit" class="btn btn-primary" name="button">Voeg vacaturen toe!</button>
        </form>
    </div>
</div>

@endsection
