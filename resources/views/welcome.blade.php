<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

    <title>Bees Work Cafe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/pricing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        @foreach($sliders as $key=>$slider)
        
            .owl-carousel .owl-wrapper, .owl-carousel .owl-item:nth-child({{ $key + 1 }}) .item
            {
                background: url({{ asset('uploads/slider/'.$slider->image) }});
                background-size: cover;
            }
        @endforeach
    </style>

    <script src="{{ asset('frontend/js/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.flexslider.min.js') }}"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlsContainer: ".flexslider-container"
            });
        });
    </script>



</head>


<body data-spy="scroll" data-target="#template-navbar">

<!--== 4. Navigation ==-->
<nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            

            <!--==  LOGO ==-->

            <a class="navbar-brand" href="#">
                <img id="logo" src="{{ asset('frontend/images/Logo_main.png') }}" class="logo img-responsive">
              <!--==  <img id="logo2" src="{{ asset('frontend/images/Logo_stick.png') }}" class="logo img-responsive"> ==-->

            </a>

        </div>


        <!--== Meunu ==-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="Food-fair-toggle">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">À propos</a></li>
                <li><a href="#menu-list"> la carte </a></li>
                <li><a href="#commande">Commande</a></li>
                <li><a href="#contactes">contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.row -->
</nav>







<!--== 5. Header ==-->

<section id="header-slider" class="owl-carousel">
    @foreach($sliders as $key=>$slider)
        <div class="item">
            <div class="container">
                <div class="header-content">
                    <h1 class="header-title">{{ $slider->title }}</h1>
                    <p class="header-sub-title">{{ $slider->sub_title }}</p>
                </div> <!-- /.header-content -->
            </div>
        </div>
    @endforeach
</section>



<!--== 6. À propos ==-->

<section id="about" class="about">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row dis-table">
                <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell">

                </div>
                <div class="col-xs-12 col-sm-6 dis-table-cell">
                    <div class="section-content">
                        <h2 class="section-content-title">À propos</h2>
                        <p class="section-content-para">
                         L'activité Bees Work « café »,
                            propose une restauration de type
                            « Food Tech » (gestion des commandes automatisées).
                            C'est un service complémentaire qui est en partie
                            sous-traité avec des acteurs locaux dont c’est le
                            savoir-faire avec le choix de mettre en avant,
                            une nourriture guyanaise à tendance équilibré
                            car, dans le feu de l’action, on a souvent
                            tendance à oublier de se nourrir sainement.

                        </p>
                      

                        <p>
                            Le concept Bees Work Café est d'ailleur né de BEES WORK, une structure
                            innovante en Guyane qui réunit un espace de
                        « Coworking » (espaces de travail partagés, tiers lieux), l'espace
                « restauration » Bees Work Café de type « Maison & équilibrée » et une « plateforme
                collaborative de réservation d’espaces de travail en ligne » sur place
                        et nomades. Son site internet est disponible en cliquant sur le bouton ci-dessous.
                        </p>

                        <a href="https://bees-work.com" target="_blank" > <button type="submit" id="submit" name="submit"  class="btn btn-send"> Y accéder </button></a>

                    </div> <!-- /.section-content -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </div> <!-- /.wrapper -->
</section> <!-- /#about -->








<!--==  7. la carte  ==-->
<br>

<section id="menu-list" class="menu-list">
<br>
<br>
<br>
    <div id="w">
        <div class="pricing-filter">
            <div class="pricing-filter-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="section-header">
                                <h2 class="pricing-title">Notre carte</h2>
                                <!--==   <h5 class="def">
                        Café – encas – gouter – bar – Tapas <br>
                            Rien de mieux pour se rencontrer, finaliser un contrat,<br>
                             fêter un succès que de partager autour de la table.. <br>                       
                            </h5> ==-->
                                <ul id="filter-list" class="clearfix">
                                    <li class="filter" data-filter="all">All</li>
                                    @foreach($categories as $category)
                                        <li class="filter" data-filter="#{{ $category->slug }}">{{ $category->name }} <span class="badge">{{ $category->items->count() }}</span></li>
                                    @endforeach
                                </ul><!-- @end #filter-list -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <ul id="menu-pricing" class="menu-price">

                        @foreach($items as $item)
                            <li class="item" id="{{ $item->category->slug }}">
                                <a href="#">
                                    <img src="{{ asset('uploads/item/'.$item->image) }}" class="img-responsive" alt="Item" style="height: 300px; width: 369px;" >
                                    <div class="menu-desc text-center">
                                            <span>
                                                <h3>{{ $item->name }}</h3>
                                                {{ $item->description }}
                                            </span>
                                    </div>
                                </a>
                                <h2 class="white">${{ $item->price }}</h2>
                            </li>
                        @endforeach
                    </ul>

                    <!-- <div class="text-center">
                            <a id="loadPricingContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                    </div> -->

                </div>
            </div>
        </div>

    </div>
</section>











<!--==  Passe ta commande ==-->



    <div id="commande">
    <br>
<br>
<br>
        <div class="pricing-filter">
            <div class="pricing-filter-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="section-header">
                            
                            <h2 class="parte"> Commandez votre plât!</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<!--== Formulaire de commande ==-->

<section class="reservation" >


    <div class="wrapper">
        <div class="container-fluid">

            <div class=" section-content">

                <div class="row">

                    <div class="col-md-5 col-sm-6">

                    
                        <form class="reservation-form" method="post" action="{{ route('reservation.reserve') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control reserve-form empty iconified" name="name" id="name"
                                               placeholder="  &#xf007;  Nom et prénom">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control reserve-form empty iconified" id="email"  placeholder="  &#xf1d8;  e-mail">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone"  placeholder="  &#xf095;  téléphone">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control reserve-form empty iconified" name="dateandtime" id="datetimepicker1" placeholder="&#xf017;  Heure">
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3"  placeholder="  &#xf086;  On vous écoutes :)"></textarea>
                                </div>

                                <div class="col-md-12 col-sm-12">

                                    <button type="submit" id="submit" name="submit" class="btn btn-reservation">
                                        <span><i class="fa fa-check-circle-o"></i></span>
                                        Commander 
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>



    <!--== Horaires ==-->

    <div class="col-md-2 hidden-sm hidden-xs"></div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="opening-time">
            <h3 class="opening-time-title">Horaires</h3>
            <br>
            <p>LUN / MAR : 8:00  - 15:00 </p>
            <br>
            <p>MERCREDI: FERMÉ </p>
            <br>
            <p>JEU / VEN: 8:00  - 15:00 <br>
                        18:00 - 23:00 <br>
            </p>
            <br>

            <p>SAMEDI: 18:00  - 23:00 </p>
            <br>
            </div>
        </div>
    </div>
                </div>

            </div>
        </div>
    </div>
</section>





<!--== Nos partenaires ==-->


    <div id="partenaires">
        <div class="pricing-filter">
            <div class="pricing-filter-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="section-header">

                            <h2 class="partes"> Nos partenaires</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










    <!--== infos pratiques ==-->

    <div class="contactes" id="contactes">
<br>
<br>
<br>
<div class="row text-center">
<div class="col-sm-12" >

<h5 class="titre3">Informations pratiques</h5>

     
</div>
</div>

<div class="row text-center">
  

    <div class="col-sm-6">
    <img src="{{ asset('frontend/images/lieu.png') }}"  class="img1-fluid" alt="Sample photo" width="350" height="400">
    <p class="lieu">
    12 allée Université Yale Immeuble Wassaï - <br>
    (BÂt A) ZAC Hibiscus, 97300 <br>
    Cayenne Guyane Française           
    </p><br>
    <a href="https://www.google.fr/maps/place/Bees+Work/@4.9355192,-52.3020525,18.25z/data=!4m5!3m4!1s0x8d123b772151917f:0xad9db558dcc608b9!8m2!3d4.9356532!4d-52.3012007?shorturl=1">Voir le plan</a>
    </div>

    <div class="col-sm-6">
    <img src="{{ asset('frontend/images/@.png') }}" id="oui" class="img1-fluid" alt="Sample photo" width="350" height="400">

    <div class="aro">
      <a href="https://www.facebook.com/beesworkcoworking/">Facebook </a> <br>
      <a href="https://twitter.com/beesworker">Twitter</a> <br>
      <a href="https://www.linkedin.com/in/rachelle-baissi-b23623110/?trk=pub-pbmap">LinkedIn</a> <br> 
      <a href="https://www.instagram.com/beeswork/">Instagram</a><br>
      <br>
       
    </div>

    </div>
    </div>




</div>




<!--== Contactez nous  ==-->



<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <div class="row">
                    <form class="contact-form" method="post" action="{{ route('contact.send') }}">
                        @csrf
                        <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                                <input  name="entreprise" type="text" class="form-control" id="entreprise" required="required" placeholder="  Entreprise">
                            </div>
                            <div class="form-group">
                                <input  name="nom" type="text" class="form-control" id="nom" required="required" placeholder="  Nom">
                            </div>
                            <div class="form-group">
                                <input  name="prenom" type="text" class="form-control" id="prenom" required="required" placeholder="  Prenom">
                            </div>
                            <div class="form-group">
                                <input  name="adresse" type="text" class="form-control" id="adresse" required="required" placeholder="  Adresse">
                            </div>
                            <div class="form-group">
                                <input  name="code postal" type="text" class="form-control" id="code postal" required="required" placeholder="  Code Postal">
                            </div>
                            <div class="form-group">
                                <input  name="ville" type="text" class="form-control" id="ville" required="required" placeholder="  Ville">
                            </div>
                            <div class="form-group">
                                <input  name="telephone" type="text" class="form-control" id="telephone" required="required" placeholder="  Téléphone">
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" id="email" required="required" placeholder="  E-mail">
                            </div>
                            <div class="form-group">
                                <input name="subject" type="text" class="form-control" id="subject" required="required" placeholder="  Sujet">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <textarea name="message" type="text" class="form-control" id="message" rows="24" required="required" placeholder="  Message"></textarea>
                        </div>

                        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                            <div class="text-center">
                                <button type="submit" id="submit" name="submit" class="btn btn-send">Envoyer </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>







<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="copyright text-center">
                    <p>
                            &copy; Copyright, {{ date('Y') }} <br> Bees Work Cafe </a> <strong> Developed  <i class="far fa-heart"></i> by  Girl  A.C.L.V </strong>
                                         </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.mixitup.min.js') }}" ></script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.validate.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.hoverdir.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jQuery.scrollSpeed.js') }}"></script>
<script src="{{ asset('frontend/js/script.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@if ($errors->any())
    @foreach ($errors->all() as $error)
       <script>
           toastr.error('{{ $error }}');
       </script>
    @endforeach
@endif

<script>
    $(function () {
        $('#datetimepicker1').datetimepicker({
            format: "dd MM yyyy - HH:11 P",
            showMeridian: true,
            autoclose: true,
            todayBtn: true
        });
    })
</script>
{!! Toastr::message() !!}
</body>
</html>