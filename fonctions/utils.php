<!-- Fonction for each recette-->



<?php
function afficherRecettes($recettes, $index = 0)
{
    foreach ($recettes as $recette) { ?>
        <div class="card_recette">
            <img class="card_img" src="<?php echo $recette['image'] ?>" alt="<?= $recette["titre"] ?>  ?>" width="350" height="250" />
            <h2 class="h2_cliquable"> <?= $recette["titre"] ?></h2>
            <a href="recette.php?id=<?= $index ?>">Voir la recette complète</a>
            <h3> <?= $recette["temps"] ?></h3>
            <h4> <?= $recette["difficulte"] ?></h4>
            <h5> Ingrédients :</h5>

            <ul class="liste_ingredients">
                <?php
                foreach ($recette["ingredients"] as $ingredient) {
                    echo  "<li>$ingredient</li>";
                }
                ?>
            </ul>
        </div>
<?php
    }
}
?>
