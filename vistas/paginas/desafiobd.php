<?php

require "../../modelos/conexion.php";
$mysqli=Conexion::conectar();

 $postContent;


    $data = json_decode(file_get_contents("php://input"), TRUE);
    $id=$data['id'];
    $user=$data['usr'];
    $urls=$data['url'];
    $queryUrl="SELECT * FROM insta_desafio where id_user = $user and id_desafio =$id ";
    $result = $mysqli->query($queryUrl,PDO::FETCH_ASSOC);
    $countPins=$result->rowCount();
    
    if($countPins==0){
        $query="INSERT INTO insta_desafio (id_user, id_desafio,urls) VALUES($user,$id,'$urls')";
        $mysqli->query($query);
        $queryUrl="SELECT * FROM insta_desafio where id_user=? and id_desafio=?";
    $smt = $mysqli->prepare($queryUrl);
    $smt->bindParam(1,$user, PDO::PARAM_INT);
    $smt->bindParam(2,$id, PDO::PARAM_INT);
    $smt->execute();
    $result2=$smt->fetch();

        echo '<a href="'.$result2["urls"].'" ><img src="../../vistas/img/per1.png" alt="" ></a>';
    }else{
        
        $deletePin="UPDATE insta_desafio SET urls=$urls where id_user=$user and id_desafio=$id";
        $mysqli->query($deletePin);

        $queryUrl="SELECT * FROM insta_desafio where id_user=? and id_desafio=?";
    $smt = $mysqli->prepare($queryUrl);
    $smt->bindParam(1,$user, PDO::PARAM_INT);
    $smt->bindParam(2,$id, PDO::PARAM_INT);
    $smt->execute();
    $result2=$smt->fetch();

        echo '<a href="'.$result2["urls"].'" ><img src="../../vistas/img/per1.png" alt="" ></a>';
    
    }
    
    
   


?>