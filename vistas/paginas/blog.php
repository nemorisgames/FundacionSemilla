<?php
$dat=$_GET["id_user"];
$countLikes=ControladorFormularios::ctrseleccionarLikes($dat);  // recoge los likes
$post =ControladorFormularios::ctrSeleccionPost();
$destacados =ControladorFormularios::ctrSeleccionarDesc($dat);

if (!$_GET['pagina'] || !$_GET['id_user']) {
    header("Location: index.php?pagina=blog&&id_user=1");
}

?>



    <body class="bg4 tam3">

        <a href="index.php?pagina=inicio&npag=1">
            <div class="retornoblog"></div>
        </a>


        <div class="container-fluid contenedor-vid" style="margin-top :400px">


            <div class="d-flex justify-content-center menu-st">

                <div class="card justify-content-center border-0 card-us " style="width: 6rem; border-radius: 2em ">
                    <a href="?pagina=videos">
                        <h6 class="text-center Nick_Name videos-title-menu " style="color: rgb(206, 206, 206);">Videos</h6>
                    </a>
                    <div class="progress ml-2 mr-2  menu_progress  ">
                        <div class="progress-bar " role="progressbar " style="width:25%; background-color: rgb(206, 206, 206);" aria-valuenow="100 " aria-valuemin="0 " aria-valuemax="100 "></div>
                    </div>
                    <p class="text-centert porcentaje-tv" style="color: rgb(206, 206, 206);">25% </p>
                </div>

                <div class="card justify-content-center border-0 card-us " style="width: 6rem; border-radius: 2em ; margin-left:130px;">
                    <a href="?pagina=desafio">
                        <h6 class="text-center Nick_Name" style="color: rgb(206, 206, 206);">Desafios</h6>
                    </a>
                    <div class="progress ml-2 mr-2  menu_progress  ">
                        <div class="progress-bar" role="progressbar " style="width:25%;background-color: rgb(206, 206, 206);" aria-valuenow="100 " aria-valuemin="0 " aria-valuemax="100 "></div>
                    </div>
                    <p class="text-centert porcentaje-tv" style="color: rgb(206, 206, 206);">25% </p>
                </div>

                <div class="card justify-content-center border-0 card-us " style="width: 6rem; border-radius: 2em ; margin-left:130px;">
                    <h6 class="text-center Nick_Name" style="color: rgb(206, 206, 206);">Juegos</h6>
                    <div class="progress ml-2 mr-2  menu_progress  ">
                        <div class="progress-bar  " role="progressbar " style="width:25%;background-color: rgb(206, 206, 206);" aria-valuenow="100 " aria-valuemin="0 " aria-valuemax="100 "></div>
                    </div>
                    <p class="text-centert porcentaje-tv" style="color: rgb(206, 206, 206);">25% </p>
                </div>

                <div class="card justify-content-center border-0 card-us " style="width: 6rem; border-radius: 2em ; margin-left:130px;">
                    <a href="?pagina=blog">
                        <h6 class="text-center Nick_Name" style="color: rgb(19, 117, 187);">Blog</h6>
                    </a>
                    <div class="progress ml-2 mr-2  menu_progress  ">
                        <div class="progress-bar  " role="progressbar " style="width:25%;background-color: rgb(19, 117, 187);" aria-valuenow="100 " aria-valuemin="0 " aria-valuemax="100 "></div>
                    </div>
                    <p class="text-centert porcentaje-tv">25% </p>
                </div>

            </div>

        </div>



        <div class="container text-center border cont-blog11  ">


            <p class="mt-4 ml-4 Cofre_1" style="text-align: initial !important;"></p>

            <div class="d-flex flex-column justify-content-start video-inter">

                <div class="d-flex  bd-highlight mt-5  Actividad-titulo">
                    <p>Actividad</p>
                </div>

                <div class="d-flex flex-column  Actividad-titulo-text">
                    <p>Con el objetivo de ofrecer una experiencia lo más fiel posible a la realidad, ‘Dirt Rally 2.0’ aboga por los daños reales en los vehículos, así como unas físicas tremendamente exigentes. Una curva mal dada y veremos consecuencias en
                        la chapa, las ruedas o el motor. Un mal volantazo y veremos cómo nuestro automóvil queda totalmente inservible. Y sí, es posible recibir daños letales si lo habilitamos en opciones.</p>
                </div>

            </div>

        </div>




        <form method="post">

            <div class="form-group container justify-content-start d-flex flex-row border cont-blog-pub shadow">
                <input class="ml-2 mt-1 mb-1 border-0" style="width:1155px" type="text" name="posteo">
            </div>

            <?php 

                $id=$dat;

		$registro = ControladorFormularios::ctrPosteo($id);

		if($registro == "ok"){
			echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );
				}
			</script>';

		
		}

        ?>
            <input id="usr" name="usr" type="hidden" value="<?php echo $dat; ?>">
            <div class=" form-group d-flex justify-content-end align-items-end pt-3 mb-5 mr-5 pr-4 " style="padding-top:330;padding-left:1550px">
                <button class="btn circulo-des-boton-blog Publicarblog" type="submit" value="">Publicar</button>
            </div>
        </form>



        <?php foreach ($post as $dato){   ?>

        <div class="container justify-content-start flex-column d-flex flex-row border cont-blog1-dest ">

            <div class="d-flex flex-row bd-highlight  " style="width: 8rem; border-radius: 2em;position: relative; left: 0; top: 0;">
                <img class="encima-video1 rounded-circle" src="../../../vistas/img/icon/estrella_check.png">
            </div>



            <div class="mt-4 d-flex justify-content-between">

                <div class="megusta-blog ml-5 pl-4">
                    <?php echo $dato["likes"]." Me gusta";?>
                </div>
                <input id="<?php echo $dato['id']?>" name="rastreador" type="hidden">
                <div class="d-flex justify-content-end mr-5 pr-5">
                    <?php
                        
                        if(count($destacados)>0){
                            foreach($destacados as $destacado){
                                if($destacado["id_post"]==$dato["id"]){
                                    ?><div name="pin-post" id="<?php echo $dato["id"]; ?>" class="pin" ><img class="mr-4" src="../../vistas/img/icon/pin_lleno.png" alt="" style="width: 30px;height: 70%;"><?php
    
                                }else{
                                    ?><div name="pin-post" id="<?php echo $dato["id"]; ?>" class="pin"><img class="mr-4" src="../../vistas/img/icon/pin_vacio.png" alt="" style="width: 30px;height: 70%;"><?php
                                }
                            }
                            
                        }else{
                            ?><div name="pin-post" id="<?php echo $dato["id"]; ?>" class="pin"><img class="mr-4" src="../../vistas/img/icon/pin_vacio.png" alt="" style="width: 30px;height: 70%;"><?php
                
                        }
                        
                        
                    ?>
                    </div>
                    <img class="mr-4" src="../../vistas/img/icon/globo_vacio.png" alt="" style="width: 30px;height: 70%;">
                   


                    <?php

                        if(count($countLikes) > 0){
                            foreach ($countLikes as $dato2){ 
                                if( $dato2['post_id']==$dato['id']) { ?>
                        <div id="<?php echo $dato['id']; ?>" class="like"><img src="../../vistas/img/icon/corazon_lleno.png"></div>
                        <?  }else{ ?>
                            <div id="<?php echo $dato['id']; ?>" class="like"><img src="../../vistas/img/icon/corazon_vacio.png"></div>
                            <?php }
                            }
                        }else{
                        ?>
                            <div id="<?php echo $dato['id']; ?>" class="like"><img src="../../vistas/img/icon/corazon_vacio.png"></div>
                            <?php }?>

                            <img class="mr-4" src="../../vistas/img/icon/editar.png" alt="" style="width: 40px" name="btn-edit-post" id="<?php echo $dato['id']; ?>">

                </div>
            </div>
                                 

            <div class="mb-3 desaconte-blog  ">
                <p class="tt-video">Microsoft Edge</p><br>
                <p class="ttt-video-desa">
                <div id="<?php echo $dato['id'] ?>" name="post-content-edit">
                    <?php echo $dato['messa'];?>
                        </div>
                </p>

            </div>
            <input id="<?php echo $id?>" name="usr" type="hidden">

            <form method="post">
                <input id="<?php echo $dato['id']?>" name="idpost" type="hidden" value="<?php echo $dato['id']?>">
                <!--<div class="megusta-blog ml-5 pl-4 mt-5">0 comentarios</div>-->
                <!--comentarios -->

                <?php 

                                        $id=$dat;

                                        $registros = ControladorFormularios::ctrPosteocom($id);

                                        if($registros == "ok"){
                                          
                                        echo '<script>

                                                   if ( window.history.replaceState ) {

                                                          window.history.replaceState( null, null, window.location.href );
                                               }
                                        </script>';        }

                                        ?>

                <div class="container   d-flex flex-column comentario_blog  ">
                    <?php    $comentarios =ControladorFormularios::ctrSeleccionComPost($id,$dato['id']);?>

                    <?php foreach($comentarios as $datoscom ):?>
                    <div class="d-flex flex-column bd-highlight separatorint">
                        <div class="p-2 bd-highlight comentarioint1 mb-5">
                            <?php echo $datoscom['comentario']?>
                        </div>
                        <?php endforeach?>
                        <div class="p-2 bd-highlight comentarioint1 mt-5">

                            <div class="input-group mb-3 mt-3">
                                <input type="text" class="form-control" name="comentario" placeholder="comentario" required>

                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit">Button</button>
                                </div>
                            </div>

            </form>
            </div>


            </div>

            </div>


        </div>

        <?php }?>









        <!--   con comentario    -->
        <!--
        <div class="container justify-content-start flex-column d-flex flex-row border cont-blog1 ">

            <div class="d-flex flex-row bd-highlight  " style="width: 8rem; border-radius: 2em;position: relative; left: 0; top: 0;">
                <img class="encima-video1 rounded-circle" src="../../../vistas/img/icon/estrella_check.png">
            </div>
            <div class="mt-4 d-flex justify-content-between">

                <div class="megusta-blog ml-5 pl-4">0 Me gusta</div>
                <div class="d-flex justify-content-end mr-5 pr-5">

                    <img class="mr-4" src="../../vistas/img/icon/pin_vacio.png" alt="">
                    <img class="mr-4" src="../../vistas/img/icon/globo_vacio.png" alt="">
                    <img src="../../vistas/img/icon/corazon_vacio.png" alt="">


                </div>
            </div>

            <div class="mt-4  desaconte-blog  ">
                <p class="tt-video">Microsoft Edge</p><br>

                <p class="ttt-video-desa">Con el objetivo de ofrecer una experiencia lo más fiel posible a la realidad, ‘Dirt Rally 2.0’ aboga por los daños reales en los vehículos, así como unas físicas tremendamente exigentes. Una curva mal dada y veremos consecuencias en la
                    chapa, las ruedas o el motor. Un mal volantazo y veremos cómo nuestro automóvil queda totalmente inservible. Y sí, es posible recibir daños letales si lo habilitamos en opciones. Con el objetivo de ofrecer una experiencia lo más fiel
                    posible a la realidad, ‘Dirt Rally 2.0’ aboga por los daños reales en los vehículos, así como unas físicas tremendamente exigentes.</p>
                    <div class="megusta-blog ml-5 pl-4 mt-5">0 comentarios</div>

             </div>

                        
            

                            
                    <div class="container   d-flex flex-column comentario_blog ">


                        <div class="d-flex flex-column bd-highlight separatorint">

                            <div class="p-2 bd-highlight comentarioint1 mb-5" >Flex item 1</div>

                                     <div class="p-2 bd-highlight comentarioint1 mt-5" >

                                                 <div class="input-group mb-3 mt-3">
                                                      <input type="text" class="form-control" placeholder="comentario" required >
                                                     <div class="input-group-append">
                                                     <button class="btn btn-outline-secondary" type="button">Button</button>
                                                </div>
                                      </div>
                            </div>


                        </div>

                    </div>-->





        </div>




        </div>

    </body>