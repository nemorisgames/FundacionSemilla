<?php

require "../../modelos/conexion.php";
$mysqli=Conexion::conectar();
if($_GET["action"]=="edit"){
    $data = json_decode(file_get_contents("php://input"), TRUE);
    $postid=$data['id'];
    $postContent=$data['content']."(EDITADO)";//todo: agregar campo en db tinyint editado valores 0 ó 1 
    $query="UPDATE posts set messa ='$postContent' where id=$postid";
    $mysqli->query($query);
    
    echo $postContent;
}
if($_GET["action"]=="pin-post"){
    $data = json_decode(file_get_contents("php://input"), TRUE);
    $id=$data['id'];
    $user=$data['usr'];
    $countPins = $mysqli->query("SELECT * FROM pin_post where id_user = '$user' and id_post ='$id' ");
    if($countPins->rowCount()==0){
        $query="INSERT INTO pin_post (id_user, id_post) VALUES( $user,$id)";
        $mysqli->query($query);
        echo '<img class="mr-4" src="../../vistas/img/icon/pin_lleno.png" alt="" style="width: 30px;height: 70%;">';
    }else{
        $deletePin="DELETE from pin_post where id_post=$id and id_user=$user";
        $mysqli->query($deletePin);
       
        echo '<img class="mr-4" src="../../vistas/img/icon/pin_vacio.png" alt="" style="width: 30px;height: 70%;">';
    }
    
    
    
}

?>