<?php
// Combinando trim() e strlen()
if(strlen(trim($_POST['name']))== 0){
    $errors[] = "Your name is required.";
}