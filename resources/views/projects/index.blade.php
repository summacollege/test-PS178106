@extends('layouts.app')

@section('content')
@include('layouts.alerts')

<section class="bg-light" id="projects">
    <div class="container">
        <div class="col-lg-12 text-center pt-5 mt-5">
            <h2 class="body--title">Projects</h2>
            <p class="body--description">Bekijk een van onze Projecten!</p>
        </div>
        @foreach ($projects as $row)
        <div class="row-md-4">
            <div class="col-md-4">
                <a href="/projects/{{$row->id}}" title="Summa Fashion">
                    <img src="{{ URL::asset('../img/summafashion.jpg') }}" class="img-thumbnail" width="100%" height="100%" title="Summa Fashion" alt="Summa Fashion"/>
                    <div class="text-center">
                        <td>{{$row->title}}</td>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection
