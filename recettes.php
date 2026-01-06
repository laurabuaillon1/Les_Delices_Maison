<?php include './includes/header.php' ?>
<?php include './data/recettes.php'; ?>

<h1>Decouvrez toutes nos recettes</h1>

<div class="container_cards_recette">
    <?php foreach ($recettes as $recette) { ?>
        <div class="card_recette">
            <img class="card_img" src="<?php echo $recette['image'] ?>" alt="photo de poulet" width="350" height="250" />
            <h2> <?= $recette["titre"] ?></h2>
            <h3> <?= $recette["temps"] ?></h3>
            <h4> <?= $recette["difficulte"] ?></h4>
            <h5> Ingrédients :</h5>

            <ul class="liste_ingredients">
                <?php
                foreach ($recette["ingredients"] as $ingredient) {
                    echo  $ingredient . "<br>";
                }
                ?>
            </ul>
        </div>

<?php
    }
?>
</div>
<?php include './includes/footer.php' ?>