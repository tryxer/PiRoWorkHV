<?php
/* Template Name:Actualités */
    include "header.php";
?>



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