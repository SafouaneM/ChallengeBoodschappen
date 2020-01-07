<?php
$boodschap = ["aardappelen", "aardbeien", "3 pakken melk", "yoghurt"];
$plaatje = ["aardappelen", "aardbei", "melk", "yoghurt"];

?>
<style>
img {
    height: 100px;
    vertical-align: middle;
}
 ul {
        display: inline-block;
    }

</style>

<ul>
    <?php
     foreach ($boodschap as $lijstje) {
        echo "<li>" . $lijstje . "</li>"; 
    }
    ?>
    <?php
    foreach ($plaatje as $aardappelen) {
        echo "<li> <img  alt src='image/". $aardappelen .".jpg'> </li>";
    }
    ?>
</ul>



