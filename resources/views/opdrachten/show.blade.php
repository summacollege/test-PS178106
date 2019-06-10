@extends('layouts.app')

@section('content')
@include('layouts.alerts')

<body>

<section class="bg-light">
    <div class="container">
        <div class="col-lg-12 text-center pt-5 mt-5">
            <h2 class="body--title">{{$jobs->jobtitle}}</h2>
        </div>
        <div class="float-right">
            <h3 class="body--title">Informatie</h3>
            <td>{{$jobs->jobdescription}}</td>
            <td>{{$jobs->date}}</td>
        </div>
        <div class="float-left">
            <img src="{{ URL::asset('../img/summafashion.jpg') }}" class="img-thumbnail float-left" width="50%" height="50%" title="Summa Fashion" alt="Summa Fashion"/>
        </div>
    </div>

    @if ( Auth::user()->role == 0 )
    <button type="submit" onclick="CheckFunction()">Solliciteer</button>

    @elseif ( Auth::user()->role == 1 )

    @elseif ( Auth::user()->role == 2 )

    @endif

    <script>
        function CheckFunction() {
            alert("Je hebt gesolliciteerd");
            location.href = "http://localhost:8000/opdrachten";
        }
    </script>
</section>

</body>

@endsection
