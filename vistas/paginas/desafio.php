<?php 
$post2 =ControladorFormularios::ctrInsta();
$post =ControladorFormularios::ctrSeleccionarInsta(1);

?>

<script src="../../vistas/js/validar_insta.js">
</script>

<body class="bg4 tam3">
<a href="index.php?pagina=inicio&npag=1"><div class="retornoblog"></div></a>

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
                    <h6 class="text-center Nick_Name" style="color: rgb(111, 131, 234);">Desafios</h6>
                </a>
                <div class="progress ml-2 mr-2  menu_progress  ">
                    <div class="progress-bar" role="progressbar " style="width:25%;background-color: rgb(111, 131, 234);" aria-valuenow="100 " aria-valuemin="0 " aria-valuemax="100 "></div>
                </div>
                <p class="text-centert porcentaje-tv">25% </p>
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
                    <h6 class="text-center Nick_Name" style="color: rgb(206, 206, 206);">Blog</h6>
                </a>
                <div class="progress ml-2 mr-2  menu_progress  ">
                    <div class="progress-bar  " role="progressbar " style="width:25%;background-color: rgb(206, 206, 206);" aria-valuenow="100 " aria-valuemin="0 " aria-valuemax="100 "></div>
                </div>
                <p class="text-centert porcentaje-tv" style="color: rgb(206, 206, 206);">25% </p>
            </div>

        </div>

    </div>

    <div class="container text-center border cont-desafi  ">


        <p class="mt-4 ml-4 Cofre_1" style="margin-righ:-40px;text-align: initial !important;"></p>

        <div class="d-flex flex-column justify-content-start video-inter">

            <div class="d-flex  bd-highlight mt-5  Actividad-titulo">
                <p>Actividad</p>
            </div>

            <div class="d-flex flex-column  Actividad-titulo-text">
                <p>Con el objetivo de ofrecer una experiencia lo más fiel posible a la realidad, ‘Dirt Rally 2.0’ aboga por los daños reales en los vehículos, así como unas físicas tremendamente exigentes. Una curva mal dada y veremos consecuencias en la
                    chapa, las ruedas o el motor. Un mal volantazo y veremos cómo nuestro automóvil queda totalmente inservible. Y sí, es posible recibir daños letales si lo habilitamos en opciones.</p>
            </div>

        </div>

    </div>




                <div class="container justify-content-start d-flex flex-row border cont-desa1 ">

                    <div class="mt-4  desaconte ml-5 pl-5 ">
                        <p class="tt-video"> Link a Instagram</p><br>
                        <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt voluptatem voluptate hic ducimus, recusandae aspernatur illum facilis reprehenderit praesentium assumenda harum ipsa quaerat. Quos sequi tenetur quae accusamus, quidem ipsa.</p>
                        
                       <div name="desafio19"><img src="../../vistas/img/per1.png" alt=""></div>  

                       

                            <input name="id_usuario_1" type="hidden" value="1">
                            <input name="id_desafio_1" type="hidden" value="19">
                            <input type="text" name="link_insta_1" id="link">

                    </div>
                    <div class="d-flex justify-content-end align-items-end mb-5 mr-5 pr-4 Publicar " style="padding-top:330">

                        <button class="circulo-des-boton text-light" onclick="validarinsta()">Publicar</button>
                    </div>
                    
                </div>



    </div>


                                <div class="container justify-content-start d-flex flex-row border cont-desa1 ">

                            <div class="mt-4  desaconte ml-5 pl-5 ">
                                <p class="tt-video"> Link a Instagram</p><br>
                                <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt voluptatem voluptate hic ducimus, recusandae aspernatur illum facilis reprehenderit praesentium assumenda harum ipsa quaerat. Quos sequi tenetur quae accusamus, quidem ipsa.</p>
                              
                                <div name="desafio20"><img src="../../vistas/img/per1.png" alt=""></div>

                                

                                    <input name="id_usuario_2" type="hidden" value="1">
                                    <input name="id_desafio_2" type="hidden" value="20">
                                    <input type="text" name="link_insta_2" id="link2">

                            </div>
                            <div class="d-flex justify-content-end align-items-end mb-5 mr-5 pr-4 Publicar " style="padding-top:330">

                                <button name="btn-public-2" class="circulo-des-boton text-light" onclick="validarinsta2()">Publicar</button>
                            </div>
                        
                            </div>


                            <div class="container justify-content-start d-flex flex-row border cont-desa1 ">



                            <div class="mt-4  desaconte ml-5 pl-5 ">
                                <p class="tt-video"> Link a Instagram</p><br>
                                <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt voluptatem voluptate hic ducimus, recusandae aspernatur illum facilis reprehenderit praesentium assumenda harum ipsa quaerat. Quos sequi tenetur quae accusamus, quidem ipsa.</p>
                              
                                <div name="desafio21"><img src="../../vistas/img/per1.png" alt=""></div>
                              
                                

                                    <input name="id_usuario_3" type="hidden" value="1">
                                    <input name="id_desafio_3" type="hidden" value="21">
                                    <input type="text" name="link_insta_3" id="link3">

                            </div>
                            <div class="d-flex justify-content-end align-items-end mb-5 mr-5 pr-4 Publicar " style="padding-top:330">

                                <button class="circulo-des-boton text-light" onclick="validarinsta3()">Publicar</button>
                            </div>
                            
                            </div>

</body>