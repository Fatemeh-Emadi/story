<?php 
include "database.php";
$problems = $db->query("SELECT * FROM problems");


//$id=$_POST["id"];
$id = (isset($_POST['id'])) ? $_POST['id'] : array(); 

if (count($id) > 0) { 
    foreach ($id as $id1) {  
        if($id1==1) {
            header("Location: story.php");
        }
        else if($id1==2){
            header("Location: story2.php"); 
        }
        else if($id1==3){
            header("Location: story3.php"); 
        }
    }  
} else { 
    echo "No id has been selected"; 
} 


?>