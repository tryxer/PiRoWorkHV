<?php
/* Template Name:Actualités */
    include "header.php";
?>
<header>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper row">
                    <a id="logo" href="index.html" class="brand-logo col l1 offset-l1">
                        <div class="col col s6 m6 l9">
                            <div id="imageLogo">
                                <img src="img/8.jpg" alt="Accueil" class="responsive-img">
                                <div id="cache"></div>
                                <!-- Cache du hover souris-->
                            </div>
                        </div>
                    </a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="apropos.html">A propos</a></li>
                        <li class="active"><a href="actualites.html">Actualités</a></li>
                        <li><a href="ecriture.html">Ecriture</a></li>
                        <li><a href="discographie.html">Discographie</a></li>
                        <li><a href="galeries.html">Galeries</a></li>
                        <li><a href="livredor.html">Livre d'Or</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a target="_blank" href="https://www.facebook.com/herve.vilard.officielle/"><i class="fa fa-2x fa-facebook-official" aria-hidden="true"></i></a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        <li class="user-details green darken-2">Coucouc!!!!!!
                            <div class="row">
                                <div class="col col s4 m4 l4">
                                    <div id="imageMobile">
                                        <img src="img/8.jpg" alt="Accueil" class="circle responsive-img valign profile-image">
                                    </div>
                                </div>
                                <div class="col col s8 m8 l8">
                                    <p class="user-roal">Faîtes votre choix !</p>
                                </div>
                            </div>
                        </li>
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="apropos.html">A propos</a></li>
                        <li class="active"><a href="actualites.html">Actualités</a></li>
                        <li><a href="ecriture.html">Ecriture</a></li>
                        <li><a href="discographie.html">Discographie</a></li>
                        <li><a href="galeries.html">Galeries</a></li>
                        <li><a href="livredor.html">Livre d'Or</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <div class="divider grey"></div>
                        <a target="_blank" href="https://www.facebook.com/herve.vilard.officielle/"><i class="fa fa-3x fa-facebook-official" aria-hidden="true"></i></a>
                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <h2>Actualités</h2>
    <!-- Affiche du concert à l'Olympia en 2018 -->
    <div class="container">
        <div class="row">
            <div class="col s12 m3 l3">
                <img class="responsive-img materialboxed" src="img/affiche.jpg">
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Modal Trigger -->
        <!--a class="waves-effect waves-light btn modal-trigger" href="#boiteAmessageActualites">Obtenir plus d'infos...</a-->
        <a class="waves-effect waves-light btn modal-trigger" href="#tabs-swipe-demo">Obtenir plus d'infos...</a>
        <!-- Modal Structure -->
        <!--div id="boiteAmessageActualites"-->


        <ul id="tabs-swipe-demo">
            <!--class="tabs"-->
            <li><a href="#boiteAmessages">Obtenir plus d'infos...</a></li>
        </ul>
        <li class="tab col s3"><a class="active" href="#test-swipe-1">Test 1</a></li>
        <li class="tab col s3"><a href="#test-swipe-2">Test 2</a></li>

        <div id="test-swipe-1" class="col s12 blue">Page principale</div>
        <div id="boitetest-swipe-2" class="col s12 green">Formulaire</div>





        <div class="row">

            <section class="col s12 m12 l12">

                <form class="z-depth-5">


                    <div class="progress spinner-layer spinner-blue">
                        <div class="indeterminate"></div>
                    </div>

                    <h4>Boîte à messages Actualités</h4>
                    <p>Pour que votre message soit pris en compte, pensez à renseigner tous les champs.</p>

                    <!-- Champ Nom -->
                    <div class="row">
                        <div class="input-field col s12 m6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Nom</label>
                        </div>
                        <!-- Champ Prénom -->
                        <div class="input-field col s12 m6">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">Prénom</label>
                        </div>
                    </div>
                    <!-- Champ adresse mail -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Adresse mail</label>
                        </div>
                    </div>
                    <!-- Champ message -->
                    <div class="row">
                        <div class="input-field col s12">
                            <!-- Faut'il laisser la class 'data-length' ? -->
                            <textarea id="textarea1" class="materialize-textarea" data-length="400"></textarea>
                            <label for="textarea1">Votre message</label>
                        </div>
                        <p class="text-flow">
                            Attention : votre message ne peut excéder 400 caractères.
                        </p>
                    </div>
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Annuler</a>
                    <!-- bouton send à finir 'mailto'-->
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Envoyer</a>
                </form>

            </section>
            <!-- col s12 m12 l12 -->
        </div>
        <!-- row -->

    </div>
    <!--/boiteMessages   SWIP   -->
    </div>
    <!--/container-->






<?php
    include "footer.php";
?>