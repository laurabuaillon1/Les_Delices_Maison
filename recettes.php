<?php

include './data/recettes.php';

echo "<pre>";
print_r($recettes);
echo "</pre>";

foreach ($recettes as $recette){
    echo "$recette<br>";
}

?>
