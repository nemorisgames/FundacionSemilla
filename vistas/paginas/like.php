<?php

require "../../modelos/conexion.php";
$mysqli=Conexion::conectar();
$data = json_decode(file_get_contents("php://input"), TRUE);
$postid=$data['id'];
$user=$data['usr'];


$countLikes = $mysqli->query("SELECT * FROM likes where user_id = '$user' and post_id ='$postid' ");
//var_dump($countLikes);
$clikes=$countLikes->rowCount();
//echo "llege hasta aqui";


if($clikes == 0){
    
    $insertlike=  $mysqli->query("INSERT INTO likes (post_id, user_id) VALUES ('$postid','$user') ");
    $updatepub=  $mysqli->query("UPDATE posts SET likes =likes+1 WHERE id='$postid' ");
    $megusta="<img src='../../vistas/img/icon/corazon_lleno.png'>";
    

}
else{

    $insertlike=  $mysqli->query("DELETE FROM likes WHERE user_id='$user' AND post_id = '$postid'");
    $updatepub=  $mysqli->query("UPDATE posts SET likes =likes-1 WHERE id='$postid' ");
    $megusta="<img src='../../vistas/img/icon/corazon_vacio.png'>";
}


echo $megusta;