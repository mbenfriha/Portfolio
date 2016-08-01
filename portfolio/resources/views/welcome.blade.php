{{ Html::style('css/home.css') }}

@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="nav col s12">

            <nav>
                <div id="nav" class="nav-wrapper col s12 m7 offset-m3">
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <a href="#" class="brand-logo">BENFRIHA <span>Mohamed</span></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="ancre" href="#home">Accueil</a></li>
                        <li><a class="ancre" href="#about-me">Moi</a></li>
                        <li><a class="ancre" href="#projects">Mes projets</a></li>
                        <li><a class="ancre" href="#contact">Me contacter</a></li>

                    </ul>

                    <ul class="side-nav" id="mobile-demo">
                        <li><a href="#home">Accueil</a></li>
                        <li><a href="#about-me">Moi</a></li>
                        <li><a href="#projects">Mes projets</a></li>
                        <li><a href="#contact">Me contacter</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="top col s12">
            <div class="home" id="home"></div>

            <div class="excerpt col  s12 l4 offset-l4 m12" data-background="#337ab7" data-text="#fff">
                <h1>Benfriha Mohamed</h1>

                <hr class="separate">

                <h3>Développeur web full stack</h3>


                <a href="#" id="button_discover">Me découvrir</a>
            </div>
        </div>

        <div class="about-me col s12" id="about-me" data-background="#337ab7" data-text="#fff">
            <div class="text-about-me col s12 m8 offset-m2">
                <h2>Qui je suis ?</h2>

                <hr class="separate">

                <p>

                    Mohamed, 22ans, Actuellement étudiant à la Web@cademie de Lyon, je suis un véritable passionné du développement et
                    du web dans son ensemble. Je suis toujours à la recherche de défis à relever pour étayer mes
                    connaissances et nourrir ma curiosité. <br>
                    Je recherche un contrat en alternance pour compléter ma deuxième année.


                </p>
                <br>
                <p>
                    À la Web@cademie j'ai pu toucher à tout, et travailler donc sur des technologies comme Angular,
                    Laravel, Symfony 2, Wordpress en passant par Bootstrap et Materialize sans oublier photoshop pour
                    peaufiner certains projets.
                </p>
                <br>
                <p>                    N'hésitez pas à me contacter sur le formulaire plus bas
                </p>
            </div>
        </div>

        <div class="skills col s12 slidescroll" data-background="#fff" data-text="black">

            <h2>Je sais faire quoi ?</h2>

            <hr class="separate">

            <div class="col s8 offset-m2">
                <div class="php col s12 l6 m12">

                    <p>
                        <img src="http://i67.tinypic.com/120qnhj.jpg" alt="">
                        <img src="http://i67.tinypic.com/27x1piv.png" alt="">
                    </p>
                    <p>
                        <img src="http://i65.tinypic.com/29gbqqv.png" alt="">
                    </p>
                    <p>
                        <img src="http://i66.tinypic.com/314rm3c.png" alt="">
                        <img src="http://i66.tinypic.com/2up3fdh.png" alt="">
                    </p>

                </div>
                <div class="js col s12 l6 m12">

                    <p>
                        <img class="border-rad" src="http://i68.tinypic.com/wu42mp.png" alt="">
                        <img class="border-rad"  src="http://i63.tinypic.com/20jollg.png" alt="">
                    </p>
                    <p>
                        <img src="http://i65.tinypic.com/2ex0npg.png" alt="">
                    </p>
                    <p>
                        <img class="border-rad" src="http://i67.tinypic.com/5oyqvk.png" alt="">
                        <img class="border-rad"  src="http://i65.tinypic.com/10cqgpx.png" alt="">
                    </p>
                </div>
            </div>

        </div>

        <div class="projects col s12 slidescroll" id="projects" data-background="#337ab7" data-text="#fff">
            <h2>J'ai fait quoi ?</h2>

            <hr class="separate">
            <div class="grid-image col s12 l12 m12">

                <div class="col s12 l6 m12">
                    <a href="http://linsolite.tv"> <img class="materialboxed" data-caption="" width="100%" height="46%" src="http://i68.tinypic.com/2h5sns6.png" alt="wordpress"></a>
                </div>
                <div class="col s12 l6 m12">
                    <a href="#">  <img class="materialboxed" data-caption="" width="100%" height="46%" src="http://i67.tinypic.com/30wass5.png" alt="musique angular api"></a>
                </div>
            </div>
            <div class="grid-image col s12 l12 m12">

                <div class="col s12 l6 m12">
                    <a href="#"> <img class="materialboxed" data-caption="" width="100%" height="46%" src="http://i67.tinypic.com/vqkvhi.png" alt="cloud laravel jquery"></a>
                </div>
                <div class="col s12 l6 m12">
                    <a href="#"> <img class="materialboxed" data-caption="" width="100%" height="46%" src="http://i67.tinypic.com/aeo11k.png" alt="angular ionic tinder sails"></a>
                </div>
            </div>


        </div>

        <div class="contact col s12 slidescroll" id="contact" data-background="#fff" data-text="black">

            <h2>Me contacter</h2>

            <hr class="separate">
            <div class="row">
                    {!! Form::open(['route' => 'message.store', 'class' => 'col s12 m8 offset-m2']) !!}
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="name" id="name" type="text" class="validate">
                            <label for="name">Nom</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="email" id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <input name="title" id="title" type="text" class="validate">
                            <label for="title">Titre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea name="text" id="text" class="materialize-textarea"></textarea>
                            <label for="text">Message</label>
                        </div>
                    </div>

                    <button class="btn waves-effect" type="submit" name="action">Envoyer
                        <i class="material-icons right">send</i>
                    </button>

                {!! Form::close() !!}
            </div>
        </div>

        <div class="end col s12 slidescroll" data-background="#337ab7" data-text="#fff">
            <div class="socials col s12 l2 offset-l5 m12">
                <p><span>B</span>enfriha <span>M</span>ohamed</p>
                <p class="dev">Développeur web full stack</p>
                <div class="all-socials">
                    <a href="#">
                        <i class="fa fa-facebook fa-fw fa-3x white-text"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-github fa-fw fa-3x white-text"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-linkedin fa-fw fa-3x white-text"></i>
                    </a>
                    <hr class="separate">

                </div>
                <p class="copy">Copyright © mohamedbenfriha.me 2016</p>

            </div>
        </div>
    </div>
    </div>
@endsection
