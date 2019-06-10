@extends('layouts.app')

@section('content')
@include('layouts.alerts')

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link type="text/css" href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<header class="gradient-hero">
    <div class="header-content">
        <p>
           <h1>Summa
            <span class="fashion">Fashion</span></h1>
        </p>
        <hr/>
        <h3>Meer te weten komen over Fashion?<br>
            dan ben je bij Summa Fashion
            goed terech.
        </h3>
        <form class="form-inline my-2 my-lg-0 custom-button" onclick="window.location.href = 'Contact.php'">
            <button  class="btn1 btn-outline-success my-2 my-sm-0" type="submit">Contact</button>
        </form>
    </div>
</header>
<body>
    <div class="container">
        <div class="row" style="margin-top:6%;">
            <div class="col-sm-7" style="text-align: left">
                <span class="text-font">Discover</span><br>
                <span class="text-header">Over Summa Fashion</span><br>
                <span class="text-normal">
                Volg jij de mode op de voet en ben je er het liefst de hele dag mee bezig? Ben je altijd op de hoogte van de trends?
                Summa Fashion stoomt je klaar om van mode je beroep te maken.<br><br>

                We helpen je graag om je talenten te ontwikkelen in een omgeving die bij je past.
                Praktijkopdrachten zijn belangrijk voor het ontwikkelen van vaardigheden als communiceren en samenwerken.
                Bedrijven, instellingen en organisaties zijn hier nauw bij betrokken. Met je loopbaanbegeleider bespreek je de voortgang,
                je leerwensen, je dromen en toekomstmogelijkheden. We dagen je uit om steeds een stapje verder te gaan,
                je grenzen te verleggen en het beste uit jezelf te halen.<br><br></span>

                <span class="text-header">Jouw toekomst in de mode</span><br>
                <span class="text-normal">
                De modebranche is kleurrijk, divers en constant in beweging. Met een diploma in dit vakgebied kun je dan ook veel kanten op. Benut je kansen in een atelier of een bij groot confectiebedrijf. Ook een eigen bedrijf behoort tot de mogelijkheden. Op de website kiesmbo.nl vind je meer informatie over mogelijke beroepen en de kans op werk. Natuurlijk kun je na je opleiding ook verder leren.
                </span>

            </div>
            <div class="col-sm-5" style="margin-top:5%;">
                <div class="container">
                    <div class="row text-contact">
                        <div class="w-100" style="margin-top: 7%"></div>
                        <div class="col-sm-2">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="col-sm-10">
                            5631 KA | Eindhoven
                        </div>

                        <div class="w-100" style="margin-top: 7%"></div>
                        <div class="col-sm-2">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="col-sm-10">
                            Summacollege@voorbeeld.nl | Mail
                        </div>

                        <div class="w-100" style="margin-top: 7%"></div>
                        <div class="col-sm-2">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="col-sm-10">
                            040 269 44 44 | Infopunt
                        </div>

                        <div class="w-100" style="margin-top: 7%"></div>
                        <div class="col-sm-2">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="col-sm-10">
                            040 269 48 20 | Administratie
                        </div>

                        <div class="w-100" style="margin-top: 7%"></div>
                        <div class="col-sm-12">
                            <p style="width: 100%;border-bottom: 1px solid black;"></p>
                        </div>

                        <div class="w-100" style="margin-top: 7%"></div>
                        <div class="col-sm-2"></div>

                        <div class="col-sm-2">
                            <a href="https://www.instagram.com/"  target="_blank" <i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="col-sm-2">
                            <a href="https://twitter.com/"  target="_blank"<i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="col-sm-2">
                            <a href="https://www.linkedin.com/"  target="_blank"<i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="col-sm-2">
                            <a href="https://www.facebook.com/"  target="_blank"<i class="fab fa-facebook-f"></i></a>
                        </div>

                        <div class="w-100" style="margin-top: 7%"></div>
                        <div class="col-sm-12">
                            <p style="width: 100%;border-bottom: 1px solid black;"></p>
                        </div>

                        <div class="w-100" style="margin-top: 2%"></div>
                        </div>
                        <div class="col-sm-12" style="font-size: 10px; text-align: center">
                            Copyright © 2019 Summa College. Alle rechten voorbehouden.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<main role="main" style="color: #495057;!important;">
    <h1 style="font-size: 30px!important;">Bekijk wat we doen</h1>
    <hr/>
    <div class="container">
        <div class="row">
            <div class="col-sm-4" style="text-align-all: center;">
                <img src="{{ URL::asset('../img/Summa Fashion (23).jpg') }}"  alt="" width="90%" height="60%">
                <span style="margin-top: 0%!important;" class="text-opties">Projecten</span><br>
                <span class="text-normal">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla tortor nunc,
                    sed commodo nisl dignissim a. Duis aliquam vitae velit et laoreet. Praesent et lorem ut turpis condimentum maximus ac non eros.
                    Integer ac sem lacus. Etiam eu est ac lacus interdum viverra.
                </span>
                <br><br>
                <form class="form-inline my-2 my-lg-0" onclick="window.location.href = 'Projecten.php'">
                    <button  class="btn2 btn-outline-success my-2 my-sm-0" type="submit">Projecten</button>
                </form>
            </div>
            <div class="col-sm-4">
                <img src="img/Summa%20Fashion%20(1).jpg" alt="" width="90%" height="60%">
                <span style="margin-top: 0%!important;" class="text-opties">Blogs</span><br>
                <span class="text-normal">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla tortor nunc,
                    sed commodo nisl dignissim a. Duis aliquam vitae velit et laoreet. Praesent et lorem ut turpis condimentum maximus ac non eros.
                    Integer ac sem lacus. Etiam eu est ac lacus interdum viverra.
                </span>
                <br><br>
                <form class="form-inline my-2 my-lg-0" onclick="window.location.href = 'Projecten.php'">
                    <button  class="btn2 btn-outline-success my-2 my-sm-0" type="submit">Blogs</button>
                </form>
            </div>
            <div class="col-sm-4">
                <img src="img/Summa%20Fashion%20(40).jpg" alt="" width="90%" height="60%">
                <span style="margin-top: 0%!important;" class="text-opties">Contact</span><br>
                <span class="text-normal">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fringilla tortor nunc,
                    sed commodo nisl dignissim a. Duis aliquam vitae velit et laoreet. Praesent et lorem ut turpis condimentum maximus ac non eros.
                    Integer ac sem lacus. Etiam eu est ac lacus interdum viverra.
                </span>
                <br><br>
                <form class="form-inline my-2 my-lg-0" onclick="window.location.href = 'Projecten.php'">
                    <button  class="btn2 btn-outline-success my-2 my-sm-0" type="submit">Blogs</button>
                </form>

            </div>
        </div>
    </div>
</main>
</body>
</html>

@endsection
