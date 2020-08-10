<?php

$dat=$_GET["id_user"];
$user=ControladorFormularios::ctrSeleccionUsuario($dat);
$post =ControladorFormularios::ctrSeleccionarInsta(1);
$posteo =ControladorFormularios::ctrSeleccionPost();
if (!$_GET['pagina'] || !$_GET['id_user']) {
    header("Location: index.php?pagina=avatar&id_user=1");
}



$avance=ControladorFormularios::ctrSeleccionAvance($dat);
$conta=0;
$conta2=0;
$conta3=0;
$conta4=0;
$conta21=0;
$conta22=0;
$conta23=0;
$conta24=0;
$conta31=0;
$conta32=0;
$conta33=0;
$conta34=0;
$mvideo=false;
$mjuego=false;
$mdesafio=false;
$mblog=false;
$mcof1=false;
$mcof2=false;
$mcof3=false;

            foreach ($avance as $avances) {
                //cofre 1
                        //desafio
                if ($avances['id_desafio'] == "19" ){
                    $conta= $conta+1;
                    $cond=true;
                }
                if ($avances['id_desafio'] == "20" ){
                    $conta= $conta+1;
                    $cond2=true;
                }
                if ($avances['id_desafio'] == "21" ){
                    $conta= $conta+1;
                    $cond3=true;
                }
                //videos
                if ($avances['id_desafio'] == "1" ){
                    $conta2= $conta2+1;
                    $conv=true;
                }
                if ($avances['id_desafio'] == "2" ){
                    $conta2= $conta2+1;
                    $conv2=true;
                }
                if ($avances['id_desafio'] == "3" ){
                    $conta2= $conta2+1;
                    $conv3=true;
                }
                //juegos
                if ($avances['id_desafio'] == "10" ){
                    $conta3= $conta3+1;
                    $conj=true;
                }
                if ($avances['id_desafio'] == "11" ){
                    $conta3= $conta3+1;
                    $conj2=true;
                }
                if ($avances['id_desafio'] == "12" ){
                    $conta3= $conta3+1;
                    $conj3=true;
                }
                //blog
                if ($avances['id_desafio'] == "28" ){
                    $conta4= $conta4+1;
                    $conb=true;
                }
                if ($avances['id_desafio'] == "29" ){
                    $conta4= $conta4+1;
                    $conb2=true;
                }
                if ($avances['id_desafio'] == "30" ){
                    $conta4= $conta4+1;
                    $conb3=true;
                }

                                    //cofre 2



                        //desafio
                        if ($avances['id_desafio'] == "22" ){
                            $conta21= $conta21+1;
                            $cond21=true;
                        }
                        if ($avances['id_desafio'] == "23" ){
                            $conta21= $conta21+1;
                            $cond22=true;
                        }
                        if ($avances['id_desafio'] == "24" ){
                            $conta21= $conta21+1;
                            $cond23=true;
                        }
                        //videos
                        if ($avances['id_desafio'] == "4" ){
                            $conta22= $conta22+1;
                            $conv24=true;
                        }
                        if ($avances['id_desafio'] == "5" ){
                            $conta22= $conta22+1;
                            $conv25=true;
                        }
                        if ($avances['id_desafio'] == "6" ){
                            $conta22= $conta22+1;
                            $conv26=true;
                        }
                        //juegos
                        if ($avances['id_desafio'] == "13" ){
                            $conta23= $conta23+1;
                            $conj27=true;
                        }
                        if ($avances['id_desafio'] == "14" ){
                            $conta23= $conta23+1;
                            $conj28=true;
                        }
                        if ($avances['id_desafio'] == "15" ){
                            $conta23= $conta23+1;
                            $conj29=true;
                        }
                        //blog
                        if ($avances['id_desafio'] == "31" ){
                            $conta24= $conta24+1;
                            $conb30=true;
                        }
                        if ($avances['id_desafio'] == "32" ){
                            $conta24= $conta24+1;
                            $conb31=true;
                        }
                        if ($avances['id_desafio'] == "33" ){
                            $conta24= $conta24+1;
                            $conb32=true;
                        }
                         //cofre 3




                        //desafio
                        if ($avances['id_desafio'] == "25" ){
                            $conta31= $conta31+1;
                            $cond31=true;
                        }
                        if ($avances['id_desafio'] == "26" ){
                            $conta31= $conta31+1;
                            $cond32=true;
                        }
                        if ($avances['id_desafio'] == "27" ){
                            $conta31= $conta31+1;
                            $cond33=true;
                        }
                        //videos
                        if ($avances['id_desafio'] == "7" ){
                            $conta32= $conta32+1;
                            $conv34=true;
                        }
                        if ($avances['id_desafio'] == "8" ){
                            $conta32= $conta32+1;
                            $conv35=true;
                        }
                        if ($avances['id_desafio'] == "9" ){
                            $conta32= $conta32+1;
                            $conv36=true;
                        }
                        //juegos
                        if ($avances['id_desafio'] == "13" ){
                            $conta33= $conta33+1;
                            $conj37=true;
                        }
                        if ($avances['id_desafio'] == "14" ){
                            $conta33= $conta33+1;
                            $conj38=true;
                        }
                        if ($avances['id_desafio'] == "15" ){
                            $conta33= $conta33+1;
                            $conj39=true;
                        }
                        //blog
                        if ($avances['id_desafio'] == "34" ){
                            $conta34= $conta34+1;
                            $conb40=true;
                        }
                        if ($avances['id_desafio'] == "35" ){
                            $conta34= $conta34+1;
                            $conb41=true;
                        }
                        if ($avances['id_desafio'] == "36" ){
                            $conta34= $conta34+1;
                            $conb42=true;
                        }
                         //medallas

                         //medalla video
                         if ($conta2==3 && $conta22==3 && $conta32==3) {$mvideo=true;}else {$mvideo=false;}
                         //medalla juego
                         if ($conta3==3 && $conta23==3 && $conta33==3) {$mjuego=true;}else {$mjuego=false;}
                         //medalla desafio
                         if ($conta==3 && $conta21==3 && $conta31==3) {$mdesafio=true;}else {$mdesafio=false;}
                         //medalla blog
                         if ($conta4==3 && $conta24==3 && $conta34==3) {$mblog=true;}else {$mblog=false;}
                         //medalla cofre 1
                         if ($conta==3 && $conta2==3 && $conta3==3 && $conta4==3) {$mcof1=true;}else {$mcof1=false;}
                         //medalla cofre 2
                         if ($conta==3 && $conta2==3 && $conta3==3 && $conta4==3) {$mcof2=true;}else {$mcof2=false;}
                         //medalla cofre 3
                         if ($conta==3 && $conta2==3 && $conta3==3 && $conta4==3) {$mcof3=true;}else {$mcof3=false;}
                        
            }
?>



<body class="bg3 tam2">
<a href="index.php?pagina=inicio&npag=1"><div class="retorno"></div></a>
    
    <div class="container-fluid contenedor">


    <div class="border border-0 d-flex justify-content-between sup margen-title-avatar">

                <div class="d-flex flex-row bd-highlight  " style="width: 8rem; border-radius: 2em;position: relative; left: 0; top: 0;">
                <a href="?pagina=avatar"><img src=<?php echo $user['img_avatar'] ?> class=" rounded-circle d-block ml-2" style="height: 221px; width: 221px;"></a>
                <a href="?pagina=avatar"> <img class="encima rounded-circle" src="../../../vistas/img/icon/edit.png"> </a>


                    <div class=" align-items-center sep-name ">

                    <div class="justify-content-between" style="display: flex">

                        <div class="name mb-1 JuanK_"><?php echo $user['name'] ?></div>

                        <a href="#" class="name"><img src="../../../vistas/img/icon/cam.png" alt="" width="42px" height="42px" style="margi"></a>
                    </div>

                    <div class="progress sep">

                        <div class="progress-bar bg-danger " role="progressbar " style=<?php echo "width:".$user['avance']."%" ?> aria-valuenow="100 " aria-valuemin="0 " aria-valuemax="50"></div>
                    </div>
                    <p class="text-center text-dark porcent"><?php echo $user['avance']."%" ?></p>

                </div>
            </div>

            <div class="container-fluid med-prin d-flex flex-column  justify-content-center">
              
            <div class="d-flex justify-content-center">
                            <img class="" src="<?php echo ($mcof1) ? "../../vistas/img/icon/cofre1":"../../../vistas/img/icon/medallas_vacia.png" ?>"  width="44px" height="55px">
                            <img class="" src="<?php echo ($mcof2) ? "../../vistas/img/icon/cofre2":"../../../vistas/img/icon/medallas_vacia.png" ?>"  width="44px" height="55px">
                            <img class="" src="<?php echo ($mcof3) ? "../../vistas/img/icon/cofre1":"../../../vistas/img/icon/medallas_vacia.png" ?>"  width="44px" height="55px">
                        </div>

                        <div class="d-flex justify-content-center ">
                            <img class="" src="<?php echo ($mvideo) ? "../../../vistas/img/icon/medallas.png":"../../../vistas/img/icon/medallas_vacia.png" ?>"  width="44px" height="55px">
                            <img class="" src="<?php echo ($mjuego) ? "../../../vistas/img/icon/medallas.png":"../../../vistas/img/icon/medallas_vacia.png" ?>" width="44px" height="55px">
                            <img class="" src="<?php echo ($mdesafio) ? "../../../vistas/img/icon/medallas.png":"../../../vistas/img/icon/medallas_vacia.png" ?>"  width="44px" height="55px">
                            <img class="" src="<?php echo ($mblog) ? "../../../vistas/img/icon/medallas.png":"../../../vistas/img/icon/medallas_vacia.png" ?>"  width="44px" height="55px">
                        </div>
            </div>


        </div>

   



        <!--codres
            -->
        <div class="container text-center border shadow content-central-avatar-cofres " style="margin-left: 182px">
            <p class ="Cofres"style="margin-top: 28px;">Cofres</p>

        </diV>

             <div class="container text-center border shadow cont-cofre1  ">
                 
                    

                 <div class="d-flex flex-row bd-highlight  " style="width: 8rem; border-radius: 2em;position: relative; left: 0; top: 0;">
                     <img class="encima-cofre1 rounded-circle" src="../../../vistas/img/icon/estrella_check.png">
                 </diV>

                 <p class="mt-4 ml-4 Cofre_1" style="margin-righ:-40px;text-align: initial !important;">Cofre 1</p>

                 <div class="d-flex justify-content-start cofre1-iconos" >
                        <div class="d-flex flex-column bd-highlight mb-3 ">
                            <a href="?pagina=videos">    <div class="p-2 bd-highlight  sep-icons-cofre1 "> <img class="rounded-circle " src="<?php echo ($conta2==3) ? "../../../vistas/img/icon/cam2.png" : "../../../vistas/img/icon/cam.png"?> " alt="" width="74px" height="74px"></div></a>
                            <a href="?pagina=videos">  <div class="p-2 bd-highlight  sep-icons-cofre1 name-muro">Videos</div></a>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($conv) ? "text-white circulo-video":"punteados" ?>">1</div> 
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($conv2) ? "text-white circulo-video":"punteados" ?>">2</div>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($conv3) ? "text-white circulo-video":"punteados" ?>">3</div>

                        </div>
                        <div class="d-flex flex-column bd-highlight mb-3 ">
                        <a href="?pagina=desafio">  <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle " src="<?php echo ($conta==3) ? "../../../vistas/img/icon/rompe2.png" : "../../../vistas/img/icon/rompe.png" ?>" alt="" width="74px" height="74px"></div></a>
                            <a href="?pagina=desafio"> <div class="p-2 bd-highlight  sep-icons-cofre1 name-muro">Desafios</div></a>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($cond) ? "text-white circulo-desafio":"punteados" ?>">1</div> 
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($cond2) ? "text-white circulo-desafio":"punteados" ?>">2</div>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($cond3) ? "text-white circulo-desafio":"punteados" ?>">3</div>

                        </div>
                        <div class="d-flex flex-column bd-highlight mb-3 ">
                            <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle " src="<?php echo ($conta3==3) ? "../../../vistas/img/icon/cup2.png" : "../../../vistas/img/icon/cup.png" ?>" alt="" width="74px" height="74px"></div>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 name-muro">Juegos</div>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($conj) ? "text-white circulo-juego":"punteados" ?>">1</div> 
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($conj2) ? "text-white circulo-juego":"punteados" ?>">2</div>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($conj3) ? "text-white circulo-juego":"punteados" ?>">3</div>

                        </div>
                        <div class="d-flex flex-column bd-highlight mb-3 ">
                        <a href="?pagina=blog&id_user=<?php echo $dat ?>">  <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle " src="<?php echo ($conta4==3) ? "../../../vistas/img/icon/blog2.png" : "../../../vistas/img/icon/blog.png" ?>" alt="" width="74px" height="74px"></div></a>
                            <a href="?pagina=blog&id_user=<?php echo $dat ?>"><div class="p-2 bd-highlight sep-icons-cofre1 name-muro">Blogs</div></a>
                            <div class="p-2 bd-highlight sep-icons-cofre1 <?php echo ($conb) ? "text-white circulo-blogs":"punteados" ?>">1</div> 
                            <div class="p-2 bd-highlight sep-icons-cofre1 <?php echo ($conb2) ? "text-white circulo-blogs":"punteados" ?>">2</div>
                            <div class="p-2 bd-highlight sep-icons-cofre1 <?php echo ($conb3) ? "text-white circulo-blogs":"punteados" ?>">3</div>

                        </div>
                      
                 </div>


            </diV>

            <div class="container text-center border shadow cont-cofre2  ">
            
            <div class="d-flex flex-row bd-highlight  " style="width: 8rem; border-radius: 2em;position: relative; left: 0; top: 0;">
              <!--  <img class="encima-cofre1 rounded-circle" src="../../../vistas/img/icon/estrella_check.png">-->
            </diV>


            <p class="mt-4 ml-4 Cofre_1" style="margin-righ:-40px;text-align: initial !important;">Cofre 2</p>

            <div class="d-flex justify-content-start cofre1-iconos" >
                        <div class="d-flex flex-column bd-highlight mb-3 ">
                            <a href="?pagina=videos">    <div class="p-2 bd-highlight  sep-icons-cofre1 "> <img class="rounded-circle " src="<?php echo ($conta22==3) ? "../../../vistas/img/icon/cam2.png" : "../../../vistas/img/icon/cam.png"?> " alt="" width="74px" height="74px"></div></a>
                            <a href="?pagina=videos">  <div class="p-2 bd-highlight  sep-icons-cofre1 name-muro">Videos</div></a>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($conv24) ? "text-white circulo-video":"punteados" ?>">1</div> 
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($conv25) ? "text-white circulo-video":"punteados" ?>">2</div>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($conv26) ? "text-white circulo-video":"punteados" ?>">3</div>

                        </div>
                        <div class="d-flex flex-column bd-highlight mb-3 ">
                            <a href="?pagina=desafio">  <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle " src="<?php echo ($conta21==3) ? "../../../vistas/img/icon/rompe2.png" : "../../../vistas/img/icon/rompe.png" ?>" alt="" width="74px" height="74px"></div></a>
                            <a href="?pagina=desafio"> <div class="p-2 bd-highlight  sep-icons-cofre1 name-muro">Desafios</div></a>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($cond21) ? "text-white circulo-desafio":"punteados" ?>">1</div> 
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($cond22) ? "text-white circulo-desafio":"punteados" ?>">2</div>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($cond23) ? "text-white circulo-desafio":"punteados" ?>">3</div>

                        </div>
                        <div class="d-flex flex-column bd-highlight mb-3 ">
                        <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle " src="<?php echo ($conta23==3) ? "../../../vistas/img/icon/cup2.png" : "../../../vistas/img/icon/cup.png" ?>" alt="" width="74px" height="74px"></div>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 name-muro">Juegos</div>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($conj27) ? "text-white circulo-juego":"punteados" ?>">1</div> 
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($conj28) ? "text-white circulo-juego":"punteados" ?>">2</div>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($conj29) ? "text-white circulo-juego":"punteados" ?>">3</div>

                        </div>
                        <div class="d-flex flex-column bd-highlight mb-3 ">
                        <a href="?pagina=blog&id_user=<?php echo $dat ?>">  <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle " src="<?php echo ($conta24==3) ? "../../../vistas/img/icon/blog2.png" : "../../../vistas/img/icon/blog.png" ?>" alt="" width="74px" height="74px"></div></a>
                            <a href="?pagina=blog&id_user=<?php echo $dat ?>"><div class="p-2 bd-highlight sep-icons-cofre1 name-muro">Blogs</div></a>
                            <div class="p-2 bd-highlight sep-icons-cofre1 <?php echo ($conb30) ? "text-white circulo-blogs":"punteados" ?>">1</div> 
                            <div class="p-2 bd-highlight sep-icons-cofre1 <?php echo ($conb31) ? "text-white circulo-blogs":"punteados" ?>">2</div>
                            <div class="p-2 bd-highlight sep-icons-cofre1 <?php echo ($conb32) ? "text-white circulo-blogs":"punteados" ?>">3</div>

                        </div>


       </diV>
       <div class="container text-center border shadow cont-cofre3  ">
            
            <div class="d-flex flex-row bd-highlight  " style="width: 8rem; border-radius: 2em;position: relative; left: 0; top: 0;">
                <img class="encima-cofre1 rounded-circle" src="../../../vistas/img/icon/estrella_check.png">
            </diV>

                 <p class="mt-4 ml-4 Cofre_1" style="margin-righ:-40px;text-align: initial !important;">Cofre 3</p>

                <div class="d-flex justify-content-start cofre1-iconos" >
                <div class="d-flex flex-column bd-highlight mb-3 ">
                            <a href="?pagina=videos">    <div class="p-2 bd-highlight  sep-icons-cofre1 "> <img class="rounded-circle " src="<?php echo ($conta32==3) ? "../../../vistas/img/icon/cam2.png" : "../../../vistas/img/icon/cam.png"?> " alt="" width="74px" height="74px"></div></a>
                            <a href="?pagina=videos">  <div class="p-2 bd-highlight  sep-icons-cofre1 name-muro">Videos</div></a>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($conv34) ? "text-white circulo-video":"punteados" ?>">1</div> 
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($conv35) ? "text-white circulo-video":"punteados" ?>">2</div>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($conv36) ? "text-white circulo-video":"punteados" ?>">3</div>

                        </div>
                        <div class="d-flex flex-column bd-highlight mb-3 ">
                            <a href="?pagina=desafio">  <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle " src="<?php echo ($conta31==3) ? "../../../vistas/img/icon/rompe2.png" : "../../../vistas/img/icon/rompe.png" ?>" alt="" width="74px" height="74px"></div></a>
                            <a href="?pagina=desafio"> <div class="p-2 bd-highlight  sep-icons-cofre1 name-muro">Desafios</div></a>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($cond31) ? "text-white circulo-desafio":"punteados" ?>">1</div> 
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($cond32) ? "text-white circulo-desafio":"punteados" ?>">2</div>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($cond33) ? "text-white circulo-desafio":"punteados" ?>">3</div>

                        </div>
                        <div class="d-flex flex-column bd-highlight mb-3 ">
                        <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle " src="<?php echo ($conta33==3) ? "../../../vistas/img/icon/cup2.png" : "../../../vistas/img/icon/cup.png" ?>" alt="" width="74px" height="74px"></div>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 name-muro">Juegos</div>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($conj37) ? "text-white circulo-juego":"punteados" ?>">1</div> 
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($conj38) ? "text-white circulo-juego":"punteados" ?>">2</div>
                            <div class="p-2 bd-highlight  sep-icons-cofre1 <?php echo ($conj39) ? "text-white circulo-juego":"punteados" ?>">3</div>

                        </div>
                        <div class="d-flex flex-column bd-highlight mb-3 ">
                        <a href="?pagina=blog&id_user=<?php echo $dat ?>">  <div class="p-2 bd-highlight  sep-icons-cofre1"><img class="rounded-circle " src="<?php echo ($conta34==3) ? "../../../vistas/img/icon/blog2.png" : "../../../vistas/img/icon/blog.png" ?>" alt="" width="74px" height="74px"></div></a>
                            <a href="?pagina=blog&id_user=<?php echo $dat ?>"><div class="p-2 bd-highlight sep-icons-cofre1 name-muro">Blogs</div></a>
                            <div class="p-2 bd-highlight sep-icons-cofre1 <?php echo ($conb40) ? "text-white circulo-blogs":"punteados" ?>">1</div> 
                            <div class="p-2 bd-highlight sep-icons-cofre1 <?php echo ($conb41) ? "text-white circulo-blogs":"punteados" ?>">2</div>
                            <div class="p-2 bd-highlight sep-icons-cofre1 <?php echo ($conb42) ? "text-white circulo-blogs":"punteados" ?>">3</div>

                        </div>




       </diV>

       <div class="container border shadow content-central-avatar-cofres d-flex justify-content-between " style="">
       <p class="text-left"style="margin-top: 28px ;margin-rigth :50px;"><?php echo  date("d") . "/" . date("m") . "/" . date("Y");?></p> 
       <p class=" text-left" style="margin-top: 28px ;margin-rigth:28px">Historial    </p>
       <p></p>
     
        </diV>



        <div class=" container d-flex justify-content-between content-historial">

                     <div class="container  text-center  shadow historial1 ">
            
                     <div class="d-flex justify-content-end " style="padding-top:30px">
                                    <nav aria-label=" ... "class="constado d-flex">
                                        <ul class="pagination ">
                                            <li class="page-item">
                                            <li class="page-item ">
                                                <a class="page-link card-us border-0 text-white">1 de 1</a>
                                            </li>
                                                <a class="page-link card-us border-0 text-white rounded-circle" href="# " tabindex="-1 ">
                                                    <</a>
                                            </li>
                                           
                                            <li class="page-item ">
                                                <a class="page-link card-us border-0 text-white rounded-circle" href="# ">></a>
                                            </li>
                                        </ul>
                                    </nav>
                            </div>

                        <?php foreach ($post as $dato):?>


                                        <div class="d-flex justify-content-start " style="padding-top:30px">
                                                <p class="circulo-blog"></p>
                                                <p class="text-white"> <b>Nickname</b> a públicado en <b>Desafios</b></p>
                                        </div>

                                        <div class="d-flex justify-content-start " style="padding-top:30px">
                                            
                                                <img src="../../../vistas/img/img.png" class=" rounded-circle d-block" style="height: 159px; width: 159px;margin-left:35px">
                                                
                                                <div>
                                                <p class="historial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                                <a class="historial-link" href="<?php echo $dato['urls']?>">Publicacion</a>
                                                </div>
                                                
                                        </div>

                                        <div class="d-flex justify-content-end">

                                        <p class="fecha-public"><?php echo  date("d") . "/" . date("m") . "/" . date("Y");?></p>
                                        </div>
                                        <div class="divisor"></div>

                                        <?php endforeach ?>
                       </diV>





                       <div class="container text-center border shadow historial2 ">

                       <div class="d-flex justify-content-end " style="padding-top:30px">
                                     <nav aria-label=" ... "class="constado d-flex">
                                        <ul class="pagination ">
                                            <li class="page-item">
                                            <li class="page-item ">
                                                <a class="page-link card-us border-0 rounded-circle text-white">1 de 1</a>
                                            </li>
                                                <a class="page-link card-us border-0 rounded-circle text-white" href="# " tabindex="-1 ">
                                                    <</a>
                                            </li>
                                           
                                            <li class="page-item ">
                                                <a class="page-link card-us border-0 text-white rounded-circle" href="# ">></a>
                                            </li>
                                        </ul>
                                    </nav>
                            </div>

                            <?php foreach ($posteo as $dato2):?>


                                        <div class="d-flex justify-content-start " style="padding-top:30px">
                                                <p class="circulo-blog"></p>
                                                <p class="text-white"> <b>Nickname</b> a públicado en <b>Blogs</b></p>
                                        </div>

                                        <div class="d-flex justify-content-start " style="padding-top:30px">
                                            
                                                <img src="../../../vistas/img/img.png" class=" rounded-circle d-block" style="height: 159px; width: 159px;margin-left:35px">
                                                
                                                <div>
                                                <p class="historial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                                <a class="historial-link" href="index.php?pagina=blog&id_user=1#<?php echo $dato2['id']  ?>">Publicacion</a>
                                                </div>
                                                
                                        </div>

                                        <div class="d-flex justify-content-end">

                                        <p class="fecha-public"><?php echo  date("d") . "/" . date("m") . "/" . date("Y");?></p>
                                        </div>
                                        <div class="divisor2"></div>

                                        <?php endforeach ?>



        </div>


</body>