<?php require_once './fonctions/utils.php'; ?>
<?php include './includes/header.php' ?>

<?php require_once './data/recettes.php'; ?>


<h1>Decouvrez toutes nos recettes</h1>

<div class="container_cards_recette">
   <?php afficherRecettes($recettes) ?>
</div>
<?php include './includes/footer.php' ?>

