<?php

require '.\lib\data-functions.php';



$index = get_index();

var_dump($index);
?>

    <ul >
                    <?php  
                        foreach ($index as $id => $name){
                            echo "<li value=$id><a href=\"detail.php?id=$id\">$name</a></li>";
                        }
                    ?>

    </ul>


 