<?php



$cantidad_por_pagina=18;
$usuariosc =ControladorFormularios::ctrSeleccionRegistro();
$usuarios =ControladorFormularios::ctrSeleccionRegistrop();
$user=ControladorFormularios::ctrSeleccionUsuario(1);

if (!$_GET['pagina'] || !$_GET['npag'])  {
    header("Location: index.php?pagina=inicio&npag=1");
}
$cuenta=count($usuariosc);
$cantidad=$cuenta / $cantidad_por_pagina;
$paginacion =ceil($cantidad);

$avance=ControladorFormularios::ctrSeleccionAvance(1);
$conta=0;
$conta2=0;
$conta3=0;
$conta4=0;

            foreach ($avance as $avances) {
                //cofre 1
                        //desafio
                if ($avances['id_desafio'] == "19" ){
                    $conta= $conta+1;
                }
                if ($avances['id_desafio'] == "20" ){
                    $conta= $conta+1;
                }
                if ($avances['id_desafio'] == "21" ){
                    $conta= $conta+1;
                }
                //videos
                if ($avances['id_desafio'] == "1" ){
                    $conta2= $conta2+1;
                }
                if ($avances['id_desafio'] == "2" ){
                    $conta2= $conta2+1;
                }
                if ($avances['id_desafio'] == "3" ){
                    $conta2= $conta2+1;
                }
                //juegos
                if ($avances['id_desafio'] == "10" ){
                    $conta3= $conta3+1;
                }
                if ($avances['id_desafio'] == "11" ){
                    $conta3= $conta3+1;
                }
                if ($avances['id_desafio'] == "12" ){
                    $conta3= $conta3+1;
                }
                //blog
                if ($avances['id_desafio'] == "28" ){
                    $conta4= $conta4+1;
                }
                if ($avances['id_desafio'] == "29" ){
                    $conta4= $conta4+1;
                }
                if ($avances['id_desafio'] == "30" ){
                    $conta4= $conta4+1;
                }

                                    //cofre 2
                $conta21=0;
                $conta22=0;
                $conta23=0;
                $conta24=0;



                        //desafio
                        if ($avances['id_desafio'] == "22" ){
                            $conta21= $conta21+1;
                        }
                        if ($avances['id_desafio'] == "23" ){
                            $conta21= $conta21+1;
                        }
                        if ($avances['id_desafio'] == "24" ){
                            $conta21= $conta21+1;
                        }
                        //videos
                        if ($avances['id_desafio'] == "4" ){
                            $conta22= $conta22+1;
                        }
                        if ($avances['id_desafio'] == "5" ){
                            $conta22= $conta22+1;
                        }
                        if ($avances['id_desafio'] == "6" ){
                            $conta22= $conta22+1;
                        }
                        //juegos
                        if ($avances['id_desafio'] == "13" ){
                            $conta23= $conta23+1;
                        }
                        if ($avances['id_desafio'] == "14" ){
                            $conta23= $conta23+1;
                        }
                        if ($avances['id_desafio'] == "15" ){
                            $conta23= $conta23+1;
                        }
                        //blog
                        if ($avances['id_desafio'] == "31" ){
                            $conta24= $conta24+1;
                        }
                        if ($avances['id_desafio'] == "32" ){
                            $conta24= $conta24+1;
                        }
                        if ($avances['id_desafio'] == "33" ){
                            $conta24= $conta24+1;
                        }
                         //cofre 3
                $conta31=0;
                $conta32=0;
                $conta33=0;
                $conta34=0;



                        //desafio
                        if ($avances['id_desafio'] == "25" ){
                            $conta31= $conta31+1;
                        }
                        if ($avances['id_desafio'] == "26" ){
                            $conta31= $conta31+1;
                        }
                        if ($avances['id_desafio'] == "27" ){
                            $conta31= $conta31+1;
                        }
                        //videos
                        if ($avances['id_desafio'] == "7" ){
                            $conta32= $conta32+1;
                        }
                        if ($avances['id_desafio'] == "8" ){
                            $conta32= $conta32+1;
                        }
                        if ($avances['id_desafio'] == "9" ){
                            $conta32= $conta32+1;
                        }
                        //juegos
                        if ($avances['id_desafio'] == "13" ){
                            $conta33= $conta33+1;
                        }
                        if ($avances['id_desafio'] == "14" ){
                            $conta33= $conta33+1;
                        }
                        if ($avances['id_desafio'] == "15" ){
                            $conta33= $conta33+1;
                        }
                        //blog
                        if ($avances['id_desafio'] == "34" ){
                            $conta34= $conta34+1;
                        }
                        if ($avances['id_desafio'] == "35" ){
                            $conta34= $conta34+1;
                        }
                        if ($avances['id_desafio'] == "36" ){
                            $conta34= $conta34+1;
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




<body class="bg2 tam">


    <div class="container contenedor">


        <div class="border border-0 d-flex justify-content-between sup">

            <div class="d-flex flex-row bd-highlight  " style="width: 8rem; border-radius: 2em;position: relative; left: 0; top: 0;">
                <a href="?pagina=avatar&id_user=1"><img src=<?php echo $user['img_avatar'] ?> class=" rounded-circle d-block ml-2" style="height: 221px; width: 221px;"></a>
                <a href="?pagina=avatar&id_user=1"> <img class="encima rounded-circle" src="../../../vistas/img/icon/blog.png"> </a>


                <div class=" align-items-center sep-name ">


                    <div class="justify-content-between" style="display: flex">

                        <div class="name mb-1"> <?php echo $user['name'] ?> </div>

                        <a href="#" class="name"><img src="../../../vistas/img/icon/cam.png" alt="" width="42px" height="42px" ></a>
                    </div>

                    <div class="progress sep">

                        <div class="progress-bar bg-danger " role="progressbar " style=<?php echo "width:".$user['avance']."%" ?> aria-valuenow="100 " aria-valuemin="0 " aria-valuemax="50"></div>
                    </div>
                    <p class="text-center text-dark porcent"><?php echo $user['avance']."%" ?> </p>

                </div>
            </div>

            <div class="container-fluid med-prin d-flex flex-column  justify-content-center">
                
                        <div class="d-flex justify-content-center">
                        <img class="" src="<?php echo ($mcof1) ? "../../vistas/img/icon/cofre1":"../../../vistas/img/icon/medallas_vacia.png" ?>"  width="44px" height="55px">
                            <img class="" src="<?php echo ($mcof2) ? "../../vistas/img/icon/cofre2":"../../../vistas/img/icon/medallas_vacia.png" ?>"  width="44px" height="55px">
                            <img class="" src="<?php echo ($mcof3) ?"../../vistas/img/icon/cofre1":"../../../vistas/img/icon/medallas_vacia.png" ?>"  width="44px" height="55px">
                        </div>

                        <div class="d-flex justify-content-center ">
                            <img class="" src="<?php echo ($mvideo) ? "../../../vistas/img/icon/medallas.png":"../../../vistas/img/icon/medallas_vacia.png" ?>"  width="44px" height="55px">
                            <img class="" src="<?php echo ($mjuego) ? "../../../vistas/img/icon/medallas.png":"../../../vistas/img/icon/medallas_vacia.png" ?>" width="44px" height="55px">
                            <img class="" src="<?php echo ($mdesafio) ? "../../../vistas/img/icon/medallas.png":"../../../vistas/img/icon/medallas_vacia.png" ?>"  width="44px" height="55px">
                            <img class="" src="<?php echo ($mblog) ? "../../../vistas/img/icon/medallas.png":"../../../vistas/img/icon/medallas_vacia.png" ?>"  width="44px" height="55px">
                        </div>
            </div>


        </div>

        <br><br><br>
        <div class="border border-0 d-flex justify-content-around align-items-center ml-3 " style="border-radius: 2em ">
            <h5 class="ml-4 pl-3 cofrename-inicio Cofre_1"> Cofre 1 </h5>
            <h5 class="pl-2 ml-3 cofrename-inicio Cofre_1"> Cofre 2 </h5>
            <h5 class="pl-3 mr-3 cofrename-inicio Cofre_1"> Cofre 3 </h5>
        </div>
        <div class=" border border-0 d-flex justify-content-around align-items-center sup sep-cont" style="border-radius: 2em ">


            <div class="card d-flex flex-row bd-highlight contenedor-icons">

             <a href="?pagina=videos">  <img class="icons-pos rounded-circle " src="<?php echo ($conta2==3) ? "../../../vistas/img/icon/cam2.png" : "../../../vistas/img/icon/cam.png" ?>" alt="" width="43px" height="43px"></a> 
             <a href="?pagina=desafio">   <img class="icons-pos rounded-circle" src="<?php echo ($conta==3) ? "../../../vistas/img/icon/rompe2.png" : "../../../vistas/img/icon/rompe.png" ?>" alt="" width="43px" height="43px"> </a> 
                <img class="icons-pos  rounded-circle" src="<?php echo ($conta3==3) ? "../../../vistas/img/icon/cup2.png" : "../../../vistas/img/icon/cup.png" ?>" alt="" width="43px" height="43px">
             <a href="?pagina=blog&id_user=1">   <img class="icons-pos  rounded-circle" src="<?php echo ($conta4==3) ? "../../../vistas/img/icon/blog2.png" : "../../../vistas/img/icon/blog.png" ?>" alt="" width="43px" height="43px"></a>

            </div>

            <div class="card d-flex flex-row bd-highlight contenedor-icons">

            <a href="?pagina=videos">  <img class="icons-pos" src="../../../vistas/img/icon/cam.png" alt="" width="43px" height="43px"></a>
            <a href="?pagina=desafio">    <img class="icons-pos " src="../../../vistas/img/icon/rompe.png" alt="" width="43px" height="43px"></a>
                <img class="icons-pos" src="../../../vistas/img/icon/cup.png" alt="" width="43px" height="43px">
            <a href="?pagina=blog&id_user=1">     <img class="icons-pos" src="../../../vistas/img/icon/blog.png" alt="" width="43px" height="43px"></a>

            </div>

            <div class="card d-flex flex-row bd-highlight contenedor-icons">

            <a href="?pagina=videos">    <img class="icons-pos" src="../../../vistas/img/icon/cam.png" alt="" width="43px" height="43px"></a>
            <a href="?pagina=desafio">   <img class="icons-pos" src="../../../vistas/img/icon/rompe.png" alt="" width="43px" height="43px"></a>
                <img class="icons-pos" src="../../../vistas/img/icon/cup.png" alt="" width="43px" height="43px">
            <a href="?pagina=blog&id_user=1">     <img class="icons-pos" src="../../../vistas/img/icon/blog.png" alt="" width="43px" height="43px"></a>

            </div>

        </div>



        <!--menu busqueda
            -->
        <div class="container py-3 px-3 pb-3 border shadow content-central ">




            <div class="container-fluid d-flex justify-content-between content-card">
                <div>
                    <h5 class="mt-2 usuario-titulo ">
                        <b>USUARIOS</b></h5>
                </div>

                <div>
                    <div class="form-group d-flex justify-content-between ">
                        <input type="text" id="formulario" class="form-control border-0 " placeholder="buscar " style="border-radius: 1em 0em 0em 1em; ">
                        <select class="form-control border-0 " style="border-radius: 0em 0em 0em 0em; " name=" " id=" ">
                            <option class="Logro">Desafio 1</option>
                            <option class="Logro">Desafio 2</option>
                            <option class="Logro">Desafio 3</option>
                          </select>
                        <button type="submit " id="boton" class="btn btn-light border-0 " style="border-radius: 0em 1em 1em 0em; "><img src="../../vistas/img/icon/lupa.png " alt=" " height="23px "></button>
                    </div>
                </div>

                <div>
                    <nav aria-label=" ... ">
                        <ul class="pagination ">
                            <li class="page-item <?php echo $_GET['npag']==1 ? 'disabled':'' ?>">
                                <a class="page-link card-us border-0 text-dark rounded-circle" href="index.php?pagina=inicio&npag=<?php echo $_GET['npag']-1; ?> " tabindex="-1 ">
                                    <</a>
                            </li>

                            <li class="page-item ">
                                <a class="page-link card-us border-0 text-dark rounded-circle"><?php echo $_GET['npag'] ?></a>
                            </li>

                            <li class="page-item <?php echo $_GET['npag']>=$paginacion? 'disabled':'' ?>">
                                <a class="page-link card-us border-0 text-dark rounded-circle" href="index.php?pagina=inicio&npag=<?php echo $_GET['npag']+1; ?> ">></a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>


            <div class="<?php echo $_GET['npag']==1 ? "mejores" : "";?> d-flex shadow"></div>

                    <div class="row row-cols-6 content-card upe" >


                        <?php foreach($usuarios as $datos):?>
                        
                            <?php
                                
                                $avance=ControladorFormularios::ctrSeleccionAvance($datos['id_user']);
$conta=0;
$conta2=0;
$conta3=0;
$conta4=0;

            foreach ($avance as $avances) {
                //cofre 1
                        //desafio
                if ($avances['id_desafio'] == "19" ){
                    $conta= $conta+1;
                }
                if ($avances['id_desafio'] == "20" ){
                    $conta= $conta+1;
                }
                if ($avances['id_desafio'] == "21" ){
                    $conta= $conta+1;
                }
                //videos
                if ($avances['id_desafio'] == "1" ){
                    $conta2= $conta2+1;
                }
                if ($avances['id_desafio'] == "2" ){
                    $conta2= $conta2+1;
                }
                if ($avances['id_desafio'] == "3" ){
                    $conta2= $conta2+1;
                }
                //juegos
                if ($avances['id_desafio'] == "10" ){
                    $conta3= $conta3+1;
                }
                if ($avances['id_desafio'] == "11" ){
                    $conta3= $conta3+1;
                }
                if ($avances['id_desafio'] == "12" ){
                    $conta3= $conta3+1;
                }
                //blog
                if ($avances['id_desafio'] == "28" ){
                    $conta4= $conta4+1;
                }
                if ($avances['id_desafio'] == "29" ){
                    $conta4= $conta4+1;
                }
                if ($avances['id_desafio'] == "30" ){
                    $conta4= $conta4+1;
                }

                                    //cofre 2
                $conta21=0;
                $conta22=0;
                $conta23=0;
                $conta24=0;



                        //desafio
                        if ($avances['id_desafio'] == "22" ){
                            $conta21= $conta21+1;
                        }
                        if ($avances['id_desafio'] == "23" ){
                            $conta21= $conta21+1;
                        }
                        if ($avances['id_desafio'] == "24" ){
                            $conta21= $conta21+1;
                        }
                        //videos
                        if ($avances['id_desafio'] == "4" ){
                            $conta22= $conta22+1;
                        }
                        if ($avances['id_desafio'] == "5" ){
                            $conta22= $conta22+1;
                        }
                        if ($avances['id_desafio'] == "6" ){
                            $conta22= $conta22+1;
                        }
                        //juegos
                        if ($avances['id_desafio'] == "13" ){
                            $conta23= $conta23+1;
                        }
                        if ($avances['id_desafio'] == "14" ){
                            $conta23= $conta23+1;
                        }
                        if ($avances['id_desafio'] == "15" ){
                            $conta23= $conta23+1;
                        }
                        //blog
                        if ($avances['id_desafio'] == "31" ){
                            $conta24= $conta24+1;
                        }
                        if ($avances['id_desafio'] == "32" ){
                            $conta24= $conta24+1;
                        }
                        if ($avances['id_desafio'] == "33" ){
                            $conta24= $conta24+1;
                        }
                         //cofre 3
                $conta31=0;
                $conta32=0;
                $conta33=0;
                $conta34=0;



                        //desafio
                        if ($avances['id_desafio'] == "25" ){
                            $conta31= $conta31+1;
                        }
                        if ($avances['id_desafio'] == "26" ){
                            $conta31= $conta31+1;
                        }
                        if ($avances['id_desafio'] == "27" ){
                            $conta31= $conta31+1;
                        }
                        //videos
                        if ($avances['id_desafio'] == "7" ){
                            $conta32= $conta32+1;
                        }
                        if ($avances['id_desafio'] == "8" ){
                            $conta32= $conta32+1;
                        }
                        if ($avances['id_desafio'] == "9" ){
                            $conta32= $conta32+1;
                        }
                        //juegos
                        if ($avances['id_desafio'] == "13" ){
                            $conta33= $conta33+1;
                        }
                        if ($avances['id_desafio'] == "14" ){
                            $conta33= $conta33+1;
                        }
                        if ($avances['id_desafio'] == "15" ){
                            $conta33= $conta33+1;
                        }
                        //blog
                        if ($avances['id_desafio'] == "34" ){
                            $conta34= $conta34+1;
                        }
                        if ($avances['id_desafio'] == "35" ){
                            $conta34= $conta34+1;
                        }
                        if ($avances['id_desafio'] == "36" ){
                            $conta34= $conta34+1;
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
                                    <div class="col card-s  card-columns ">

                                        <!--card base-->


                                        <div class="card justify-content-center border-0 card-us " style="width: 6rem; border-radius: 2em ">
                                            <h6 class="text-center Nick_Name"><?php echo $datos['name'] ?></h6>
                                            <a href= <?php echo "?pagina=avatar&id_user=".$datos['id_user'] ?>> <img src=<?php echo $datos['img_avatar'] ?> class="card-img-top rounded-circle mx-auto d-block Nick_Name_img"></a>
                                                       <div class="d-flex justify-content-center">
                                                           
                                                       <img class="" src="../../../vistas/img/icon/medallas_vacia.png" alt="" width="44px" height="55px">
                                                       <img class="" src="../../../vistas/img/icon/medallas_vacia.png" alt="" width="44px" height="55px">
                                                       <img class="" src="../../../vistas/img/icon/medallas_vacia.png" alt="" width="44px" height="55px">
                                                       </div>
                                            
                                                        <div name="progessssbar">

                                                            <div class="progress ml-2 mr-2  Nick_Name_progress  ">
                                                                <div class="progress-bar bg-danger " role="progressbar " style=<?php echo "width:".$datos['avance']."%" ?> aria-valuenow="100 " aria-valuemin="0 " aria-valuemax="100 "></div>
                                                            </div>
                                                            <p class="card-text text-center Nick_Name_porcent"><?php echo $datos['avance']."%" ?></p>
                                                        </div>
                                        </div>

                                    </diV>
                                
                    <?php endforeach ?>

                            <!--   fin 1-->
                        </div>

            


        </diV>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


    </div>
    <script>
        const formulario = document.querySelector('#formulario');
        const boton = document.querySelector('#boton');
        const filtrar = () => {
            console.log(formulario.value);
            const texto = formulario.value.toLowerCase();
        }
        boton.addEventListener('click', filtrar)


    
    </script>
</body>