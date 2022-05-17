@extends('template')

@section('title','About us | '.config('app.name'))

@section('content')

<section id="accueil" class="home">
                <div class="container">
                    <div class="row">
                        <div class="main_home">
                            <div class="col-md-6">
                                <div class="home_text">
                                    <h1 class="text-white">Le réchauffement climatique</h1>
                                </div>

                                
                            </div>

                            <div class="col-md-6">
                                <div class="phone_one phone_attr1 text-center sm-m-top-50">
                                    <div class="attr_deg">9&deg;</div>
                                    <div class="attr_rio text-uppercase">Rio</div>
                                    <div class="attr_sun text-uppercase text-white">Sunny</div>
                                    <div class="attr_lon text-uppercase text-white">London</div>
                                    <img src="{{ asset('assets/images/phone01.png') }}" alt="" />
                                </div>
                            </div>

                        </div>
                        <div class="scrooldown">
                            <a href="#consequences"><i class="fa fa-chevron-down"></i></a>
                        </div>

                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->
            
       <!--screen short section-->
            <section id="consequences" class="screen_area">
                <div class="container">
                    <div class="row">
                        <div class="main_screen">
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="head_title text-center">
                                <h2>Les conséquences du réchauffement climatique</h2>
                                </div>
                            </div>                    

                    @foreach($contenus as $contenu)
                    <!-- Screen02-->
                    <div class="screen02 roomy-50 m-top-100">
                            <div class="col-md-6 col-md-push-6">
                                <div class="screen02_img text-center">
                                    <div class="attr_sun2 text-white">{{ $contenu->titre }}</div>
                                    <div class="attr_deg3 text-white">{{ $contenu->degre }} &deg;</div>
                                    <img src="{{ asset('assets/images/'.$contenu->image) }}" alt="" />
                                    <h1 class="sunny">Sunny</h1>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-pull-6">
                                <div class="screen02_content m-top-100">

                                    <h2 class="m-top-40">{{ $contenu->nom }}</h2>
                                    <p class="m-top-20">{{ $contenu->description }}</p>

                                    <ul class="list-inline m-top-50">
                                        <li class="text-center">{{ $contenu->degre + 10 }}</li>
                                 <li class="text-center">{{ $contenu->degre }} &deg; </li>
                                 <li class="text-center">{{ $contenu->titre }}</li>
                             </ul>
                         </div>
                        </div>
                    </div>
                    <!--End off Screen02-->
                    @endforeach

                    

                    
                 </div>
             </div><!--End off row-->
         </div><!--End off container-->
     </section>
     <!--End off Screen01 Area Section -->

     <!--Home Sections-->
            

            

            <!--Featured Section-->
            <section id="solutions" class="features">
                <div class="container">
                    <div class="row">
                        <div class="main_features p-top-100">
                            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                                <div class="head_title text-center">
                                    <h2>Les solutions pour lutter contre le rechauffement climatique</h2>
                                    
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="icon icon-diamond6"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Économiser l’énergie à la maison</h3>
                                        <p>Notre électricité et notre chauffage proviennent en grande partie du charbon, du pétrole et du gaz. Il est possible de réduire sa consommation d’énergie en diminuant le chauffage et la climatisation, en optant pour des ampoules LED et des appareils électriques à faible consommation, en lavant son linge à l’eau froide ou en le suspendant pour le faire sécher au lieu d’utiliser un sèche-linge</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="icon icon-layers2"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Se déplacer à pied, à vélo ou en transports en commun</h3>
                                        <p>Partout dans le monde, les routes sont surchargées de véhicules, dont la plupart roulent au diesel ou à l’essence. Privilégier la marche ou le vélo à la voiture permet de réduire les émissions de gaz à effet de serre et contribue à une meilleure santé et à une meilleure forme physique. Pour les longues distances, pensez à prendre le train ou le car. Enfin, pratiquez le covoiturage chaque fois que cela est possible.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="icon icon-business-32"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>Consommer plus d’aliments d’origine végétale</h3>
                                        <p>En consommant plus de légumes, de fruits, de céréales complètes, de légumineuses, de noix et de graines, et moins de viande et de produits laitiers, on peut réduire considérablement son impact sur l’environnement. La production d’aliments d’origine végétale entraîne généralement moins d’émissions de gaz à effet de serre et nécessite moins d’énergie, de terres et d’eau.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section>
            <!-- End off Featured Section-->



            <section>
                <div class="container">
                    <div class="row">
                        <div class="main_drag roomy-50">
                            <div class="col-md-12">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" style="background-image:url({{ asset('assets/images/drag1.png') }})"></div>
                                        <div class="swiper-slide" style="background-image:url({{ asset('assets/images/drag3.png') }})"></div>
                                        <div class="swiper-slide" style="background-image:url({{ asset('assets/images/drag2.png') }})"></div>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!--People Section-->
            <section id="citations" class="reviews m-top-100">
                <div class="container">
                    <div class="row">
                        <div class="main_reviews">
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="head_title text-center">
                                    <h2>Les Citations</h2>
                                </div>
                            </div>

                            <div class="reviews_content">
                                <div class="col-md-6">
                                    <div class="reviews_item m-top-40">
                                        <div class="reviews_item_icon pull-left">“</div>
                                        <h3>What art offers is space - a certain breathing room for the spirit. </h3>
                                        <h5>John Updike</h5>
                                        <div class="reviews_item_icon1 pull-right text-right">“</div>
                                    </div>
                                </div><!-- End off col-md-6 -->

                                <div class="col-md-6">
                                    <div class="reviews_item m-top-40">
                                        <div class="reviews_item_icon pull-left">“</div>
                                        <h3>We do not see nature with our eyes,
                                            but with our understandings and our hearts.</h3>
                                        <h5>William Hazlitt</h5>
                                        <div class="reviews_item_icon1 pull-right text-right">“</div>
                                    </div>
                                </div><!-- End off col-md-6 -->
                                <div class="col-md-6">
                                    <div class="reviews_item m-top-40">
                                        <div class="reviews_item_icon pull-left">“</div>
                                        <h3>The only courage that matters is the kind 
                                            that gets you from one moment to the next.</h3>
                                        <h5>Mignon McLaughlin</h5>
                                        <div class="reviews_item_icon1 pull-right text-right">“</div>
                                    </div>
                                </div><!-- End off col-md-6 -->
                                <div class="col-md-6">
                                    <div class="reviews_item m-top-40">
                                        <div class="reviews_item_icon pull-left">“</div>
                                        <h3>No man has a good enough memory to be a successful liar. </h3>
                                        <h5>Abraham Lincoln</h5>
                                        <div class="reviews_item_icon1 pull-right text-right">“</div>
                                    </div>
                                </div><!-- End off col-md-6 -->

                            </div>
                        </div><!-- End off Main People -->
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off People Section-->


            <!-- scroll up-->
            <div class="scrollup">
                <a href="#"><i class="fa fa-chevron-up"></i></a>
            </div><!-- End off scroll up -->
@endsection