<?php include './includes/header.php'?>

<?php include './data/recettes.php';?>


<?php foreach ($recettes as $recette){?>
<div>
    <img src="./images/sergey-kotenev-sV8Cl0_3UcY-unsplash.jpg" alt="photo de poulet" width="350" height="250" />
    <h2> <?= $recette["titre"] ?></h2>
    <h3> <?= $recette["temps"] ?></h3>
    <h4> <?= $recette["difficulte"] ?></h4>
    <h5> Ingrédients :</h5>

    <ul>
        <?php 
        foreach ($recette["ingredients"] as $ingredient){
             echo  $ingredient . "<br>";
        }
        ?>
    </ul>
</div>
<?php 
} 
?>

<?php include './includes/footer.php' ?>