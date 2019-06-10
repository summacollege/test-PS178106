@extends('layouts.app')

@section('content')
@include('layouts.alerts')

<section class="bg-light" id="facaturen">
    <div class="container">
        <div class="col-lg-12 text-center pt-5 mt-5">
            <h2 class="body--title">Vacaturen</h2>
            <p class="body--description">Vacaturen van bedrijven</p>
        </div>
        @foreach ($jobs as $row)
        <div class="row-md-4">
            <div class="col-md-4">
                <a href="/opdrachten/{{$row->id}}" title="Summa Fashion">
                    <div class="text-center">
                        <td>{{$row->jobtitle}}</td>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection
