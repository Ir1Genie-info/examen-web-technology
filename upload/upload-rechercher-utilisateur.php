<?php
     if(!empty($_POST['designation'])){
        $designation = $_POST['designation'];
        header('Location:../views/utilisateur.php?designation='.$designation);
        
    }
    else {
        header('Location:../views/utilisateur.php');
    }   
?>