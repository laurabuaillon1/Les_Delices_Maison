<?php include './includes/header.php' ?>

<img class="image_apropos" src="./images/equipe_du_restaurant.jpg" alt="image de l'equipe les délices maison " width="500">
<div class="container_apropos">
    <h1> A propos de nous </h1>
    <p>Les Délices Maison est né d’une envie simple : remettre le fait-maison au cœur du quotidien. Dans un monde où tout va trop vite, nous avons choisi de valoriser une cuisine sincère, accessible et généreuse, qui rassemble et fait plaisir.

        Notre démarche est claire : proposer des recettes fiables, des astuces utiles et des conseils concrets, pensés pour être réellement applicables à la maison. Ici, pas de complexité inutile ni de promesses irréalistes. Chaque contenu est conçu pour vous accompagner, vous donner confiance et vous permettre de réussir, quel que soit votre niveau.

        Nous croyons qu’une bonne cuisine repose avant tout sur de bons produits, des gestes simples et le plaisir de partager. Les Délices Maison, c’est un espace chaleureux, dédié à celles et ceux qui veulent cuisiner avec authenticité, efficacité et passion.</p>
</div>

<?php include './data/recettes.php' ?>

<div class="container_cards">
    <?php foreach ($recettes as $recette) { ?>

        <div class="container_card">
            <img class="container_cards_img" src="<?php echo $recette['image'] ?>" alt="photo des differentes recettes preparer chez les Délices Maison" />
            <h2 class="h2_cliquable"> <?= $recette["titre"] ?></h2>
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