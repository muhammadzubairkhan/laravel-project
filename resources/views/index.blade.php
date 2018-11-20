@extends('layouts.master')

@section('title')

Salman Sajun - Home

@endsection

@section('content')

<div class="page-wrapper">

    <div class="jumbotron jumbotron-fluid">

        <video autoplay muted loop poster="https://dummyimage.com/900x400/000/fff">
            <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" data-src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" type="video/mp4">
            <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.webm" data-src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.webm" type="video/webm">
            <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.ogv" data-src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.ogv" type="video/ogg">
        </video>

        <!-- <div class="container text-white text-center">

            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>

        </div> -->
        <!-- /.container -->
    </div>
    <!-- /.jumbotron -->

    <!-- <div class="jumbotron text-center">
        <h1>Main Image or Video</h1>
        <p>Responsive Section</p>
    </div> -->

    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h4>We have had the pleasure of creating dozens of commercials, short films and digital content for clients all around the world. Each and every project is approached with a whimsical curiosity that results in something completely new, each and every time.</h4>
            </div>

        </div>

        <div class="divider"></div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

                <h1>Our Projects</h1>

                <div class="row">

                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <img src="https://dummyimage.com/260x400/000/fff">
                    </div>

                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <img src="https://dummyimage.com/260x400/000/fff">
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <img src="https://dummyimage.com/500x300/000/fff">
                    </div>

                </div>

            </div>

        </div>

        <div class="divider"></div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

                <h1>Our Clients</h1>

                <div class="row">

                    <section class="regular slider">
                        <div>
                                <img src="http://placehold.it/100x100?text=1">
                        </div>
                        <div>
                                <img src="http://placehold.it/100x100?text=2">
                        </div>
                        <div>
                                <img src="http://placehold.it/100x100?text=3">
                        </div>
                        <div>
                                <img src="http://placehold.it/100x100?text=4">
                        </div>
                        <div>
                                <img src="http://placehold.it/100x100?text=5">
                        </div>
                        <div>
                                <img src="http://placehold.it/100x100?text=6">
                        </div>
                        <div>
                                <img src="http://placehold.it/100x100?text=7">
                        </div>
                        <div>
                                <img src="http://placehold.it/100x100?text=8">
                        </div>
                        <div>
                                <img src="http://placehold.it/100x100?text=9">
                        </div>
                        <div>
                                <img src="http://placehold.it/100x100?text=10">
                        </div>
                      </section>

                </div>

            </div>

        </div>

        <div class="divider"></div>

    </div>

</div>

@endsection
