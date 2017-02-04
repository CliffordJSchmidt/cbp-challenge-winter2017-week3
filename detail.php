<?php

require '.\lib\data-functions.php';
//  $_GET['id'];   this code is the variable representing info from url 

// $index = get_index();

// var_dump($index);


$data = get_data($_GET['id']);
//var_dump($data);

?>

<hr>

    <ul >
                    <?php  
                        foreach ($data as $key => $value){
                            echo "<li>$key: $value</li>";
                        }
                    ?>

    </ul>



