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
            </a>

        </div>


        <!--== Meunu ==-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="Food-fair-toggle">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">À propos</a></li>
                <li><a href="#menu-list"> la carte </a></li>
                <li><a href="#reserve">Commande</a></li>
                <li><a href="#contact">contact</a></li>
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
                        Dans l'activité Bees Work « café »,
                            nous proposons une restauration de type
                            « Food Tech » (gestion des commandes automatisées).
                            Ce sera un service complémentaire qui sera en partie
                            sous-traité avec des acteurs locaux dont c’est le
                            savoir-faire avec le choix de mettre en avant,
                            une nourriture guyanaise à tendance équilibré
                            car, dans le feu de l’action, on a souvent
                            tendance à oublier de se nourrir sainement.

                        </p>
                        <p class="section-content-para">
                        Café – encas – gouter – bar – Tapas
                            Rien de mieux pour se rencontrer,
                            finaliser un contrat, fêter un succès que
                            de partager autour de la table..                        
                        </p>
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











<!--== 15. Passe ta commande ==-->
<section id="reserve" class="reserve">
<br>
<br>
<br>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row dis-table ">
                <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                    <h3 class="section-title">Commande ton plât! </h3>

                

                </div>


                <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">

                </div>
            </div> <!-- /.dis-table -->
        </div> <!-- /.row -->
    </div> <!-- /.wrapper -->
</section> <!-- /#reserve -->



<section class="reservation">


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
                                        Envoyer 
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>




                    <div class="col-md-2 hidden-sm hidden-xs"></div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="opening-time">
                              <h3 class="opening-time-title">Heures</h3>
                            <p>LUN / MAR : 8:00  - 15:00 </p>
                            <p>MERCREDI: FERMÉ </p>
                            <p>JEU / VEN: 8:00  - 15:00 <br>
                                          18:00 - 23:00 <br>
                            </p>

                            <p>SAMEDI: 18:00  - 23:00 </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>




<section id="contact" class="contact">
<br>
<br>
<br>
    <div class="container-fluid color-bg">
        <div class="row dis-table">
            <div class="hidden-xs col-sm-6 dis-table-cell">
                <h2 class="section-title">Contactez nous </h2>
            </div>
            <div class="col-xs-6 col-sm-6 dis-table-cell">
                <div class="section-content">

                <p>
                12 allée Université Yale Immeuble Wassaï -
                        (BÂt A) ZAC Hibiscus, 97300
                        Cayenne Guyane Française
                </p>

                    <p>06 94 28 28 25</p>
                    <p>example@mail.com </p>

                </div>
            </div>
        </div>
        <div class="social-media">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <ul class="center-block">
                        <li><a href="#" class="fb"></a></li>
                        <li><a href="#" class="twit"></a></li>
                        <li><a href="#" class="g-plus"></a></li>
                        <li><a href="#" class="link"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


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
                                <button type="submit" id="submit" name="submit" class="btn btn-send">Send </button>
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