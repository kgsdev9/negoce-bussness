
        @extends('layout.app')

        @section('content')
        
        <!-- Start IT Main Banner Area -->
        <section class="it-main-banner-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="it-banner-content">
                            <h1 class="wow animate__animated animate__fadeInLeft" data-wow-delay="00ms" data-wow-duration="1000ms">Une agence de négociation à service complet</h1>
                            <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">Obtenez une experise complete dans la vente , le marketing , la communication avec Negoce.</p>
                            <div class="btn-box wow animate__animated animate__fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                                <div class="d-flex align-items-center">
                                    <a href="#" class="default-btn">Nous Contacter</a>
                                    <a href="https://www.youtube.com/watch?v=Q5q1SQYfoMg" class="video-btn popup-youtube"><i class="flaticon-play-button"></i>Qui Somme Nous ?</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="it-banner-image wow animate__animated animate__fadeInRight" data-wow-delay="300ms" data-wow-duration="1000ms">
                            <img src="{{ asset('assets/affaire.jpeg') }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="it-banner-shape1">
                <img src="assets/img/startup-it-agency/banner/shape1.png" alt="image">
            </div>
            <div class="it-banner-shape2">
                <img src="assets/img/startup-it-agency/banner/shape2.png" alt="image">
            </div>
            <div class="it-banner-shape3">
                <img src="assets/img/startup-it-agency/banner/shape3.png" alt="image">
            </div>
        </section>
        <!-- End IT Main Banner Area -->

        <div class="it-services-area-bg-transparent pt-100 pb-75">
            <div class="container">
                <div class="startup-it-agency-title">
                    <span>Negoce</span>
                    <h2>Nous fournissons les meilleurs services</h2>
                    <p>Nous fournissons différentes solutions et services pour une meilleure gestion de bien .
                        Nettoyage industriel et fin de chantier, Entretien et nettoyage de bureaux et surfaces commerciales, Démoustication Dératisation et Désinsectisation, Livraison de consommable hygiénique et de matériel..</p>
                </div>

                <div class="row justify-content-center">

                    @foreach ($prestations  as $value )
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="it-services-card">
                            <div class="services-image">
                                <a href="#"><img src="{{asset('prestations/'.$value->image) }}" alt="image"></a>
                            </div>
                            <div class="services-content">
                                
                                <h3>
                                    <a href="#">{{ Str::limit($value->title, 16)}}</a>
                                </h3>
                                <p>{{ Str::limit($value->mini_description, 84) }}</p>
                                <a href="{{ route('prestation.detail', $value->slug) }}" class="services-btn">Lire la suite </a>
                            </div>
                        </div>
                    </div>

                    @endforeach

                    <i class="bx bx-whatsapp"></i>
                </div>
            </div>
        </div>

     
        <!-- Start IT About Area -->
        <div class="it-about-area pb-100">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="it-about-image">
                            <img src="{{ asset('IMAGE/Entreprise-africaine-julief514-iStock.jpg') }}" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="it-about-content">
                            <span>Negoce</span>
                            <h3>Toute solution de travail liée à l'informatique peut être facilement trouvée chez nous</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit illo ducimus vero, vero corporis voluptates beatae pariatur quisquam ess voluptatibus quia velit numquam esse porro ipsum dolor, sit amet consectetur.</p>
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="inner-card">
                                        <div class="icon">
                                            <img src="assets/img/startup-it-agency/about/icon1.svg" alt="image">
                                        </div>
                                        <h4>Developpement de solution infomatique</h4>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="inner-card">
                                        <div class="icon">
                                            <img src="assets/img/startup-it-agency/about/icon2.svg" alt="image">
                                        </div>
                                        <h4>Integration de solution informatique</h4>
                                    </div>
                                </div>
                            </div>
                            <ul class="list">
                                <li><i class='bx bx-check-circle'></i> Nous ecoutons vos propositions </li>
                                <li><i class='bx bx-check-circle'></i> Nous effectuons un devis de qualité imbatable</li>
                                <li><i class='bx bx-check-circle'></i> Nous Construsons quelque chose d'unique</li>
                            </ul>
                            <div class="about-btn">
                                <a href="#" class="default-btn">Nous Contactez</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End IT About Area -->
        
     



        <!-- Start Case Study Area -->
        <div class="case-study-area pb-500">
            <div class="startup-it-agency-title">
                <span>Negoce</span>
                <h2>Meilleure transaction </h2>
                <p>Nous travaillons avec les personnes du monde entier qui nous font confiance en effectuant des transactions avec nous.</p>
            </div>
            <div class="container-fluid">
                <div class="case-study-slides owl-carousel owl-theme">
                   
                   @foreach ($transactions as $value)
                   <div class="case-study-card">
                    <div class="case-study-image">
                        <a href="#"><img src="{{ asset('transactions/'.$value->image) }}" alt="image" style="height:250px;"></a>
                    </div>
                    <div class="case-study-content">
                        <span>Marketing / Design</span>
                        <h3>
                            <a href="#">Web development</a>
                        </h3>
                    </div>
                </div>
                   @endforeach
                
    
                </div>
            </div>
        </div>
        <!-- End Case Study Area -->

        <section class="what-we-do-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-content">
                            <span class="sub-title">CE QUE NOUS FAISONS</span>
                            <h2>WNous aidons à la croissance du site Web avec un visiteur de niveau supérieur</h2>
                            <p>Attirer. Convertir. Transformer. Fidéliser. Tels sont les objectifs que vous devez atteindre dans votre stratégie digitale. 

                                Nous aidons nos clients à développer leur chiffre d’affaires grâce à la transformation digitale du marketing et des ventes. Délivrer le bon message au bon moment et à la bonne personne. Une combinaison mêlant stratégie efficiente et utilisation de la data..</p>
                            <div class="skills-item">
                                <div class="skills-header">
                                    <h4 class="skills-title">Marketing numérique &amp; référencement </h4>
                                    <div class="skills-percentage">
                                        <div class="count-box">95%</div>
                                    </div>
                                </div>
                                <div class="skills-bar">
                                    <div class="bar-inner"><div class="bar progress-line" data-width="95"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-content-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class="flaticon-plus"></i>
                                        Optimisation des médias sociaux
                                    </a>
    
                                    <div class="accordion-content show">
                                        <p>Notre equipe de marketing est à votre disposition pour vous fournir une assistance technique 100% Fiable, avec nous satisfait ou remboursé.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-plus"></i>
                                        Génération de contenu
                                    </a>
    
                                    <div class="accordion-content">
                                        <p>Vous aveza besoin de texte et message captivant l'attention du public sur votre site web nous mettons à votre disposition nos redacteurs pour cette tache.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-plus"></i>
                                        Services de paiement par clic
                                    </a>
    
                                    <div class="accordion-content">
                                        <p>Avez vous besoin d'un systeme de messagerie et de paiement nos developpeurs sont à vos disposition pour fournir à vos clients un espace de paiement .</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      

        <!-- Start Team Area -->
        <div class="it-team-area pt-100 pb-75">
            <div class="container">
               
                <div class="row justify-content-center">
                    <div class="startup-it-agency-title">
                        <span>Client reviews</span>
                        <h1>Notre Equipe</h1>
                        <p>
                            Une équipe
                            Nous travaillons comme une seule équipe mondiale, à la fois les uns avec les autres et avec nos clients, pour diriger notre énergie collective vers la réalisation de l'extraordinaire.</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="it-team-card">
                            <div class="image">
                                <img src="assets/img/startup-it-agency/team/team1.jpg" alt="team-image">

                             
                            </div>
                            <div class="content">
                                <h3>JC BOSS</h3>
                                <span>Fondateur de NEGOCE</span>
                          
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="it-team-card">
                            <div class="image">
                                <img src="assets/img/startup-it-agency/team/team2.jpg" alt="team-image">


                            </div>
                            <div class="content">
                                <h3>DAVID KOUDIO</h3>
                                <span>CHEF MONTEUR DE PROJET</span>
                              
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="it-team-card">
                            <div class="image">
                                <img src="assets/img/startup-it-agency/team/team3.jpg" alt="team-image">

                              
                            </div>
                            <div class="content">
                                <h3>ELISE KS</h3>
                                <span>DEVELOPEUSE WEB</span>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="it-team-card">
                            <div class="image">
                                <img src="assets/img/startup-it-agency/team/team4.jpg" alt="team-image">

                              
                            </div>
                            <div class="content">
                                <h3>Robert FRANCK</h3>
                                <span>JURISTE</span>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Team Area -->  

        <div class="dibiz-features-area">
            <div class="container">
                <div class="dibiz-features-inner-box">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-sm-6">
                            <div class="dibiz-features-box wow animate__ animate__fadeInUp animated" data-wow-delay="100ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 100ms; animation-name: fadeInUp;">
                                <div class="features-image">
                                    <a href="#">
                                        <img data-cfsrc="{{asset('assets/img/more-home/features/features-4.png')}}" alt="image" src="{{asset('assets/img/more-home/features/features-4.png')}}"></a>
                                </div>
                                <h3>
                                    <a href="#">Analyse marketing
                                    </a>
                                </h3>
                                <p>Une étude marketing est conditionnée par l’utilisation d’outils d’analyse marketing. Ces outils d’analyse vous permettent d’acquérir des données macro-économiques et micro-économiques. On distingue les outils d’audit destinés aux marchés et les outils d’audits destinés aux produits.</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">
                            <div class="dibiz-features-box wow animate__ animate__fadeInDown animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInDown;">
                                <div class="features-image">
                                    <a href="#"><img data-cfsrc="{{asset('assets/img/more-home/features/features-5.png')}}" alt="image" src="{{asset('assets/img/more-home/features/features-5.png')}}"></a>
                                </div>
                                <h3>
                                    <a href="#">Optimisation du site Web
                                    </a>
                                </h3>
                                <p>L'optimisation pour les moteurs de recherche, aussi connue sous le sigle SEO, inclut l'ensemble des techniques qui visent à améliorer le positionnement d'une page</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6"> 
                            <div class="dibiz-features-box wow animate__ animate__fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;">
                                <div class="features-image">
                                    <a href="#"><img data-cfsrc="{{asset('assets/img/more-home/features/features-6.png')}}" alt="image" src="{{asset('assets/img/more-home/features/features-4.png')}}"></a>
                                </div>
                                <h3>
                                    <a href="#">Publicité par e-mail</a>
                                </h3>
                                <p>Le marketing par courriel, l'email ou le mailing est un excellent outil pour communiquer avec nos clients. Le marketing par e-mail est très puissant et s'il est utilisé correctement, il peut donner des résultats de conversion réussis. Nous offrons à l'utilisateur un contenu de qualité et une valeur personnalisée.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

          <!-- Start Feedback Area -->
          <div class="it-feedback-area ptb-100">
            <div class="container">
                <div class="startup-it-agency-title">
                    <span>Nos Clients Temoignent</span>
                    <h2>
                        Commentaires de nos clients</h2>
                    <p>   Honnêteté et ouverture Nous avons une profonde honnêteté intellectuelle et la franchise de le dire comme si c'était dans un langage simple que le client comprend
                        </p>
                </div>

                <div class="it-feedback-slides owl-carousel owl-theme">
                    <div class="it-feedback-card">
                        <div class="info">
                            <img src="{{ asset('avatar/Africanchief_person_man_avatar_african_2856.png') }}" alt="image">
                            <div class="title">
                                <h3>MADAME BROU</h3>
                                <span>Commercante</span>
                            </div>
                        </div>
                        <p>“Lorem ipsum do amet consectetur adipisicing perspiciatis soluta aspernatur dolorum sequi quisquam ullam pariatur nihil dolorem cumque excepturi totam.”</p>
                        <ul class="rating">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                        </ul>
                    </div>

                    <div class="it-feedback-card">
                        <div class="info">
                            <img src="{{ asset('avatar/3219868.png') }}" alt="image">
                            <div class="title">
                                <h3>Mr Francis Bienvenue</h3>
                                <span>Entrepreneur</span>
                            </div>
                        </div>
                        <p>“Lorem ipsum do amet consectetur adipisicing perspiciatis soluta aspernatur dolorum sequi quisquam ullam pariatur nihil dolorem cumque excepturi totam.”</p>
                        <ul class="rating">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                        </ul>
                    </div>

                    <div class="it-feedback-card">
                        <div class="info">
                            <img src="{{ asset('avatar/gettyimages-1331335299-612x612.jpg') }}" alt="image">
                            <div class="title">
                                <h3>Kouadio Franck</h3>
                                <span>Entrepreneur</span>
                            </div>
                        </div>
                        <p>“Lorem ipsum do amet consectetur adipisicing perspiciatis soluta aspernatur dolorum sequi quisquam ullam pariatur nihil dolorem cumque excepturi totam.”</p>
                        <ul class="rating">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                        </ul>
                    </div>

                    <div class="it-feedback-card">
                        <div class="info">
                            <img src="{{ asset('avatar/portrait-d-un-africain-avec-cravate-avatar-homme-affaires-triste-jeune-politique-illustration-vectorielle-plate-223411153.webp') }}" alt="image">
                            <div class="title">
                                <h3>Josie Elvis</h3>
                                <span>Developpeur Mobile</span>
                            </div>
                        </div>
                        <p>“Lorem ipsum do amet consectetur adipisicing perspiciatis soluta aspernatur dolorum sequi quisquam ullam pariatur nihil dolorem cumque excepturi totam.”</p>
                        <ul class="rating">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                        </ul>
                    </div>

                    <div class="it-feedback-card">
                        <div class="info">
                            <img src="{{ asset('avatar/gettyimages-1331335299-612x612.jpg') }}" alt="image">
                            <div class="title">
                                <h3>Kahouo Guy Stephane</h3>
                                <span>Informaticien Developpeur</span>
                            </div>
                        </div>
                        <p>“Lorem ipsum do amet consectetur adipisicing perspiciatis soluta aspernatur dolorum sequi quisquam ullam pariatur nihil dolorem cumque excepturi totam.”</p>
                        <ul class="rating">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                        </ul>
                    </div>

                   

                 

                   

                    
                </div>
            </div>

            <div class="it-feedback-shape">
                <img src="assets/img/startup-it-agency/feedback-shape.png" alt="image">
            </div>
        </div>
        <!-- End Feedback Area -->

        <section class="project-start-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="project-start-image">
                            <img data-cfsrc="{{ asset('avatar/project-start1.png')}}" alt="image" src="{{ asset('avatar/project-start1.png')}}">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="project-start-content">
                            <span class="sub-title">COMMENCER</span>
                            <h2>Nous aimons démarrer votre projet avec nous</h2>
                            <p>NBCS travaille aux côtés des institutions et agences gouvernementales pour fournir à ses partenaires une fiabilité totale des transactions et des expéditions de marchandises.</p>
                            <a href="{{ URL('/contact') }}" class="default-btn" target="_blank">COMMENCER</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="shape2"><img data-cfsrc="{{asset('assets/img/shape/shape2.png')}}" alt="image" src="{{asset('assets/img/shape/shape2.png')}}"></div>
            <div class="shape3"><img data-cfsrc="{{asset('assets/img/shape/shape3.png')}}" alt="image" src="{{asset('assets/img/shape/shape3.png')}}"></div>
            <div class="shape5"><img data-cfsrc="{{asset('assets/img/shape/shape5.png')}}" alt="image" src="{{asset('assets/img/shape/shape5.png')}}"></div>
            <div class="shape6"><img data-cfsrc="{{asset('assets/img/shape/shape6.png')}}" alt="image" src="{{asset('assets/img/shape/shape6.png')}}"></div>
            <div class="shape7"><img data-cfsrc="{{asset('assets/img/shape/shape7.png')}}" alt="image" src="{{asset('assets/img/shape/shape7.png')}}"></div>
            <div class="shape13"><img data-cfsrc="{{asset('assets/img/shape/shape13.png')}}" alt="image" src="{{asset('assets/img/shape/shape13.png')}}"></div>
        </section>

        <!-- Start Blog Area -->
        <div class="it-blog-area pt-100 pb-75">
            <div class="container">
                <div class="startup-it-agency-title">
                    <span>negoce</span>
                    <h2>Suivez L'actualité de Negoce</h2>
                    <p>Suivez l'ensemble de nos actualités politique, economique, digiatale et globale, et soyez informez sur l'evolution de nos activités</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="it-blog-card">
                            <div class="blog-image">
                                <a href="#"><img src="assets/img/startup-it-agency/blog/blog1.jpg" alt="image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="date">
                                    <b>14</b>
                                    <span>teste negoce</span>
                                </div>
                                <ul class="meta">
                                    <li><i class='bx bx-user'></i> By <a href="#">admin</a></li>
                                    <li>/</li>
                                    <li><i class='bx bx-message-rounded-dots'></i> pas de commentaires</li>
                                </ul>
                                <h3>
                                    <a href="#">Comment la technologie fonctionne-t-elle avec les nouveautés ?</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt labore et dolore magna aliqua minim.</p>
                                <a href="#" class="blog-btn">Lire la suite</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="it-blog-card">
                            <div class="blog-image">
                                <a href="#"><img src="assets/img/startup-it-agency/blog/blog2.jpg" alt="image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="date">
                                    <b>14</b>
                                    <span>teste negoce</span>
                                </div>
                                <ul class="meta">
                                    <li><i class='bx bx-user'></i> By <a href="#">Negoce</a></li>
                                    <li>/</li>
                                    <li><i class='bx bx-message-rounded-dots'></i>Pas de commentaires</li>
                                </ul>
                                <h3>
                                    <a href="#">Comment la technologie fonctionne-t-elle avec les nouveautés ?</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt labore et dolore magna aliqua minim.</p>
                                <a href="#" class="blog-btn">Lire la suite</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="it-blog-card">
                            <div class="blog-image">
                                <a href="#"><img src="assets/img/startup-it-agency/blog/blog3.jpg" alt="image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="date">
                                    <b>14</b>
                                    <span>teste negoce</span>
                                </div>
                                <ul class="meta">
                                    <li><i class='bx bx-user'></i> By <a href="#">admin</a></li>
                                    <li>/</li>
                                    <li><i class='bx bx-message-rounded-dots'></i> No comment</li>
                                </ul>
                                <h3>
                                    <a href="#">Comment la technologie fonctionne-t-elle avec les nouveautés ?</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt labore et dolore magna aliqua minim.</p>
                                <a href="#" class="blog-btn">Lire la suite</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Area -->


        <section class="subscribe-area bg-f9f9f9 ptb-100">
            <div class="container">
                <div class="subscribe-content">
                    <span class="sub-title">MISES À JOUR DIBIZ</span>
                    <h2>Abonnez-vous à notre newsletter</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <form class="newsletter-form" data-bs-toggle="validator" novalidate="true">
                        <input type="text" class="input-newsletter" placeholder="Entrer votre adresse E-mail" name="EMAIL" required="" autocomplete="off">
                        <button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;">Abonnez-vous maintenant</button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>

            <div class="shape9"><img data-cfsrc="assets/img/shape/shape9.png" alt="image" src="file:///C:/My%20Web%20Sites/NEGOCE/templates.envytheme.com/dibiz/default/assets/img/shape/shape9.png"></div>
            <div class="shape10"><img data-cfsrc="assets/img/shape/shape10.png" alt="image" src="file:///C:/My%20Web%20Sites/NEGOCE/templates.envytheme.com/dibiz/default/assets/img/shape/shape10.png"></div>
            <div class="shape11"><img data-cfsrc="assets/img/shape/shape11.png" alt="image" src="file:///C:/My%20Web%20Sites/NEGOCE/templates.envytheme.com/dibiz/default/assets/img/shape/shape11.png"></div>
            <div class="shape12"><img data-cfsrc="assets/img/shape/shape12.png" alt="image" src="file:///C:/My%20Web%20Sites/NEGOCE/templates.envytheme.com/dibiz/default/assets/img/shape/shape12.png"></div>
        </section>

      @endsection