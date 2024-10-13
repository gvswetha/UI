<?php
function load_template($name){
    // print("include ".__DIR__."/../template/$name.php");
    include $_SERVER['DOCUMENT_ROOT']."/Alabay Assets/templates/$name.php";
}

?>



