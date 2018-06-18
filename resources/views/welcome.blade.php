@extends('layouts.welcome') 
@section('content')

<section id="about">
    <div class="container section">
        <div class="row">
            <div class="col text-center text-col">
                <h1>ABOUT US</h1>
                <p class="lead">Eu cillum qui deserunt cupidatat ea elit ut ea ipsum culpa officia duis. Lorem Lorem do ipsum eu irure ea.<span class="d-none d-lg-block">
                    Minim minim mollit est sunt nisi ullamco incididunt aliquip occaecat cupidatat. Amet ea esse ut minim
                    aliqua aliquip cupidatat eu deserunt.</span></p>
                <a class="btn btn-md btn-primary sr-button" href="../../components/navbar/" role="button">BUTTON TEXT</a>
            </div>
        </div>
    </div>
</section>

<section id="services">

    <div class="container section" style="position: relative;">
        <div class="row">
            <div class="col text-center">
                <h1>SERVICES</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg text-center icon-col">
                <h2>Lorem Ipsum</h2>
                <figure><img class="icon sr-icons" src="{{ asset('img/worldwide-orange.svg') }}" alt="Globe Icon"></figure>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
            </div>
            <div class="col-lg text-center icon-col">
                <h2>Dolor Sit Amet</h2>
                <figure><img class="icon sr-icons" src="{{ asset('img/checked-orange.svg') }}" alt="Checked Icon"></figure>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique
                    adipiscing.
                </p>
            </div>
            <div class="col-lg text-center icon-col">
                <h2>Adipiscing Elit</h2>
                <figure><img class="icon sr-icons" src="{{ asset('img/truck-orange.svg') }}" alt="Truck Icon"></figure>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
            </div>
        </div>

        <!-- Anchor for Scrollspy (Gallery) -->
        <div class="row" style="position: absolute; bottom: 0; left: 0; height: 7vh;" id="work">
            <div class="col">

            </div>
        </div>

    </div>
</section>

<section>
    @include('partials._gallery')
</section>

<section id="contact">
    <div class="container section">
        <div class="row">
            <div class="col text-center">
                <h1>TRISTIQUE ADIPISCING</h1>
                <a class="btn btn-md btn-primary sr-button" href="../../components/navbar/" role="button">BUTTON TEXT</a>
            </div>
        </div>
    </div>
</section>

@endsection