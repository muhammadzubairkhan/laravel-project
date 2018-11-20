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

    </div>
    <!-- /.jumbotron -->

    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <p>Salman Sajun Studio is a one stop shop for all your creative visual needs. We specialize in bringing the inanimate to life through a magical blend of stop motiono and live action. We have a hand picked team of creative ninjas.</p>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                <img src="https://dummyimage.com/400x400/000/fff">
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                <h3>Our Aim</h3>
                <p>Our goal is to make the world a colourful, more aesthetically pleasing place where imagination runs wild and creativity drives all content.</p>
            </div>

        </div>

        <div class="divider"></div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h3>Our Team</h3>

                <div class="row">

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <span class="profile-pic">
                                    <img src="https://dummyimage.com/50x50/000/fff">
                                </span>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <span class="profile-name">
                                        Salman Sajun
                                </span>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <span class="profile-designation">
                                    Creative Director
                                </span>
                            </div>

                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <span class="profile-pic">
                                    <img src="https://dummyimage.com/50x50/000/fff">
                                </span>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <span class="profile-name">
                                    Sarah Oueller
                                </span>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <span class="profile-designation">
                                    Art Director
                                </span>
                            </div>

                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <span class="profile-pic">
                                    <img src="https://dummyimage.com/50x50/000/fff">
                                </span>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <span class="profile-name">
                                    You
                                </span>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <span class="profile-designation">
                                    External Energy
                                </span>
                            </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
