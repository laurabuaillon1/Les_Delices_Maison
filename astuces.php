<?php include './includes/header.php'?>
<?php include './data/astuces.php' ?>



<h1> Bienvenue dans nos astuces</h1>
<p>Découvrez des astuces simples, efficaces et accessibles à tous pour cuisiner avec plaisir et confiance.
Sur Les Délices Maison, chaque conseil a été pensé pour vous faire gagner du temps, éviter les erreurs courantes et améliorer le résultat final de vos recettes, sans compliquer votre quotidien.

Que vous soyez débutant ou déjà à l’aise en cuisine, ces astuces vous guideront pas à pas : mieux organiser votre préparation, comprendre les bons gestes, sublimer les saveurs et réussir vos plats à coup sûr.
L’objectif est clair : vous aider à cuisiner maison plus sereinement, avec des résultats concrets et gourmands, dès la première tentative.

Prenez le temps de les découvrir, appliquez-les progressivement, et transformez chaque recette en un vrai moment de plaisir.</p>

<div>
    <ul>
        <?php foreach($listeastuces as $astuces => $valeur){
            echo "$astuces : $valeur<br>";
            }?>
    </ul>
</div>


<?php include './includes/footer.php' ?>