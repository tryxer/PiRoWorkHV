<?php
/* Template Name:Contact */
include "header.php";
?>

<section class="row">
<section class="col s12 m6 offset-m3 l6 offset-l3">
<form>
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
<textarea id="textarea1" class="materialize-textarea" data-length="140"></textarea>
<label for="textarea1">Votre message</label>
</div>
</div>
<!-- bouton send à finir 'mailto' -->
<div class="row">
<div id="boutonSend">
<!-- Mailto à finir -->
<button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
<i class="material-icons right">send</i>
</button>
</div>
</div>
</form>
</section>
</section>

<?php
    include "footer.php";
?>