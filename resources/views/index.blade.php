@extends('layouts.app')

@section('pageTitle', 'Home')

@section('content')

<!--https://getbootstrap.com/docs/4.3/components/jumbotron/-->
<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/home-pict.jpg')}}'); height: 50%;">
<div class="container">
    <h1 class="display-4">Find your Job </h1>
        <p class="lead">and Become a Top Model</p>
</div>
</div><br>

<!--https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_panels_contextual&stacked=h-->
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel-group">
                <div class="panel panel-info">
                    <div class="panel-heading">About Vind</div>
                        <div class="panel-body" style="text-align:justify">Vind is job searching website for fashion models, and help photographers, fashion designers, and makeup artists in finding models that fit the desired categories suach as height, gender, and even location.
                        You can search for categories in the searching feature that will appear after logging in.
                        Besides, Vind will help display the results of photos on the user's profile page which will be taken into consideration when choosing the right candidate.
                        Vind also can help to facilitate someone who has the following professions :
                            <ul>
                                <li>Model</li>
                                <li>Photographer</li>
                                <li>Fashion Designer</li>
                                <li>Makeup Artist</li>
                            </ul>	
                            <a href="/category" class="btn btn-info" role="button" style="width:100%">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>			

            <div class="col-md-4">
                <div class="card border-info mb-3" style="max-width: 25rem;">
                    <div class="card-header">Contact</div>
                    <div class="card-body text-info">
                        <h5 class="card-title" style="color:black">Email</h5>
                        <p class="card-text" style="color:green">vinanurfitriani@gmail.com</p>
                        <h5 class="card-title" style="color:black">Phone number</h5>
                        <p class="card-text" style="color:green">081320910304</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br><hr class="hr-style"><br>

<!--Photo by Johny Goerend on Unsplash-->
<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/jumbotron1.jpg')}}');">
<div class="container">
    <h2 align="center">Events</h2>
</div>
</div><br>

<!-- https://getbootstrap.com/docs/4.3/components/card/
    https://getbootstrap.com/docs/4.3/layout/grid/ -->
<div class="container">
    <div class="row">
        <div class="col order-first">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <a href="/apply-event"><img src="{{ asset('images/event/event4.jpg')}}" class="card-img" alt="event"></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="/apply-event"><h5 class="card-title">Canon - CFVD Fashion on Stage</h5></a>
                            <p class="card-text" style="text-align:justify">Kompetisi foto untuk menemukan 3 pemenang terbaik yang terpilih untuk mendapatkan hadiah dengan total senilai Rp 20.000.000,00.
                                    Berlokasi di Graha Manggala Siliwangi, Bandung.</p>
                            <p class="card-text"><small class="text-muted">Jun 11th, 2011</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col order-last">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <a href="/apply-event"><img src="{{ asset('images/event/event2.jpg')}}" class="card-img" alt="event"></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="/apply-event"><h5 class="card-title">Trend Fashion 2016</h5></a>
                            <p class="card-text" style="text-align:justify">Audisi untuk model fashion show dengan tema kebaya modern dan muslimah modern. Audisi diselenggarakan di Singapura dan bersifat gratis bagi beserta yang mendaftar dan memenuhi persyaratan.</p>
                            <p class="card-text"><small class="text-muted">Jul 17th, 2016</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <div class="row">
        <div class="col order-first">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <a href="/apply-event"><img src="{{ asset('images/event/event1.jpg')}}" class="card-img" alt="event"></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="/apply-event"><h5 class="card-title">Mr & Miss Youth Asia 2017</h5></a>
                            <p class="card-text" style="text-align:justify">Audisi pemilihan Mr & Mrs Youth Asia yang diselenggarakan pada 7 hingga 8 januari 2017.</p>
                            <p class="card-text"><small class="text-muted">Jan 07th, 2017</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col order-last">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <a href="/apply-event"><img src="{{ asset('images/event/event3.jpg')}}" class="card-img" alt="event"></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="/apply-event"><h5 class="card-title">JFP Model Contest 2018</h5></a>
                            <p class="card-text" style="text-align:justify">Lomba fashion show dengan tema pakaian casual.</p>
                            <p class="card-text"><small class="text-muted">Feb 17th, 2018</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br><hr class="hr-style"><br>

<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/jumbotron.jpg')}}');">
<div class="container">
    <h2 style="text-align:center; color:white">Models</h2>
</div>
</div><br>

<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card" style="width: 15rem;">
                <div class="card-img">
                    <a href="/profile-model"><img src="{{ asset('images/portfolio/model1.jpg')}}" class="card-img-top" alt="model"></a>
                    <div class="card-body">
                        <a href="/profile-model"><h5 class="card-title" style="text-align:center">Giselle Olivia</h5></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="card" style="width: 15rem;">
                <div class="card-img">
                    <a href="/profile-model"><img src="{{ asset('images/portfolio/model2.jpg')}}" class="card-img-top" alt="model"></a>
                    <div class="card-body">
                        <a href="/profile-model"><h5 class="card-title" style="text-align:center">Anastasia Sinclair</h5></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="card" style="width: 15rem;">
            <div class="card-img">
                <a href="/profile-model"><img src="{{ asset('images/portfolio/model3.jpg')}}" class="card-img-top" alt="model"></a>
                <div class="card-body">
                    <a href="/profile-model"><h5 class="card-title" style="text-align:center">Natalie Kardashian</h5></a>
                </div>
            </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="card" style="width: 15rem;">
                <div class="card-img">
                    <a href="/profile-model"><img src="{{ asset('images/portfolio/model4.jpg')}}" class="card-img-top" alt="model"></a>
                    <div class="card-body">
                        <a href="/profile-model"><h5 class="card-title" style="text-align:center">Rachel Schewarzeneger</h5></a>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <div class="row">
        <div class="col-sm">
            <div class="card" style="width: 15rem;">
                <div class="card-img">
                    <a href="/profile-model"><img src="{{ asset('images/portfolio/male1.jpg')}}" class="card-img-top" alt="model"></a>
                    <div class="card-body">
                        <a href="/profile-model"><h5 class="card-title" style="text-align:center">Ryan</h5></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="card" style="width: 15rem;">
                <div class="card-img">
                    <a href="/profile-model"><img src="{{ asset('images/portfolio/male2.jpg')}}" class="card-img-top" alt="model"></a>
                    <div class="card-body">
                        <a href="/profile-model"><h5 class="card-title" style="text-align:center">Mario</h5></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="card" style="width: 15rem;">
            <div class="card-img">
                <a href="/profile-model"><img src="{{ asset('images/portfolio/male3.jpg')}}" class="card-img-top" alt="model"></a>
                <div class="card-body">
                    <a href="/profile-model"><h5 class="card-title" style="text-align:center">Patrick</h5></a>
                </div>
            </div>
            </div>
        </div>

        <div class="col-sm">
            <div class="card" style="width: 15rem;">
                <div class="card-img">
                    <a href="/profile-model"><img src="{{ asset('images/portfolio/male4.jpg')}}" class="card-img-top" alt="model"></a>
                    <div class="card-body">
                        <a href="/profile-model"><h5 class="card-title" style="text-align:center">Leonard</h5></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br><hr class="hr-style"><br>

<div class="jumbotron jumbotron-fluid" style="background-image:url('{{ asset('images/jumbotron2.jpg')}}');">
    <div class="container">
        <h2 align="center">Frequently Ask Question</h2>
    </div>
</div><br>

<!--https://getbootstrap.com/docs/4.3/components/collapse/-->
<div class="accordion" id="FAQ">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2>
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#question1" aria-expanded="true" aria-controls="collapseOne">
                    <p style="color: blue">How can i find the right model?<p>
                </button>
            </h2>
        </div>

        <div id="question1" class="collapse" aria-labelledby="headingOne" data-parent="#FAQ">
            <div class="card-body">
                You need to log in first to be able to search the model according to gender, height, and location. 
                This searching feature will appear on the homepage when you log in as photographer, makeup artists, or fashion designers. 
                You can use this feature to find the model correctly and quickly.
                Besides, you can also see the profile page in each model that appears from the search results so that it can be searched further about info and portfolio.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#question2" aria-expanded="false" aria-controls="collapseTwo">
                <p style="color: blue">How can i apply in available events that i want to participate?</p>
                </button>
            </h2>
        </div>
        <div id="question2" class="collapse" aria-labelledby="headingTwo" data-parent="#FAQ">
            <div class="card-body">
                You need to log in first to be able to search for events organized by photographer, makeup artists, and fashion designers.
                This searching feature will appear on the homepage when you log in as model. 
                You can use this feature to find the events that you want.
                When choosing an event that appears from the search results, a new page appears that displays detailed information about the event, you can also join the event by pressing the apply button on the same page.
                After that, you are just waiting for info from the event organizer whether it is accepted or not.
            </div>
        </div>
    </div>
</div><br><br>
@endsection

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>