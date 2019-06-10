@extends('layouts.app')

@section('content')
@include('layouts.alerts')

<section class="bg-light" id="projects">
    <div class="container">
        <div class="col-lg-12 text-center pt-5 mt-5">
            <h2 class="body--title">{{$projects->title}}</h2>
        </div>
        <div class="float-right">
            <h3 class="body--title">Informatie</h3>
            <td>{{$projects->description}}</td>
        </div>
        <div class="float-left">
            <img src="{{ URL::asset('../img/summafashion.jpg') }}" class="img-thumbnail float-left" width="50%" height="50%" title="Summa Fashion" alt="Summa Fashion"/>
        </div>


    </div>
</section>

@endsection
