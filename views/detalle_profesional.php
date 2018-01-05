        <!--INICIO CONTENIDO-->
        <div class="main-contant">
            <div class="container">
                <div class="row">
                    <!-- INICIO COLUMNA IZQUIERDA-->
                    <div class="span3 sidebar hidden-phone">
                        <!-- PAUTA -->
                        <?php foreach ($publicidad_col_izq ->result() as $item) { ?>
                            <div class="widget">
                                <a href="<?php echo $item -> enlace_publicitario ?>" target="_blank">
                                    <img src="<?php echo base_url()."fotos_productos/".$item->foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario ?>" class="img-responsive" >
                                </a>
                                <br><br><br>
                            </div>
                        <?php  } ?>
                        <!-- FIN PAUTA -->
                    </div>
                    <!-- FIN COLUMNA IZQUIERDA-->
                    <div class="span8">
                        <section class="blog-listing ">
                            <!--POST ARTICLE START-->
                            <article>
                                <!--POST ARTICLE START-->
                                <?php foreach ($detalle_profesional ->result() as $item) { ?>
                                    <h2 class="h-style"><?php echo $item->titulo_profesional; ?></h2>
                                    <div class="span3">
                                        <div class="text-center">
                                        <br>
                                            <img src="<?php echo base_url();?>cv_profesionales/<?php echo $item->foto_profesional; ?>" width="170px">
                                        </div>
                                        <br><br>
                                        <div style="margin-left: 20px; ">
                                            <?php echo $item->ciudad_profesional; ?><br>
                                            <?php echo $item->telefono_profesional; ?><br>
                                            <?php echo $item->correo_profesional; ?><br>
                                        </div>
                                       <!-- REDES SOCIALES -->
                                        <div>
                                            <ul class="social-icons2">
                                               <?php $enlace = base_url()."safety_solutions/detalle_profesional/".$item->id_profesional;  ?>
                                                <li style="width: 230px;"> </li>
                                                <li><a class="facebook" data-original-title="facebook" href="http://www.facebook.com/sharer.php?u=<?php echo $enlace;?>" data-toggle="tooltip" target="_blank"><i class="fa fa-facebook"></i></a></li>

                                                <li><a class="twitter" data-original-title="twitter" href="https://twitter.com/share?url=<?php echo $enlace;?>" data-toggle="tooltip"  target="_blank"><i class="fa fa-twitter"></i></a></li>

                                                <li><a class="linkedin" data-original-title="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $enlace;?>" data-toggle="tooltip" target="_blank"><i class="fa fa-linkedin"></i></a></li>

                                                <li><a class="google" data-original-title="youtube" href="https://plus.google.com/share?url=<?php echo $enlace;?>" data-toggle="tooltip" target="_blank"><i class="fa fa-youtube"></i></a></li>

                                                <li><a class="github" data-original-title="whatsapp" href="whatsapp://send?text=<?php echo $enlace;?>" data-toggle="tooltip" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                            </ul>
                                        </div>
                                            <!-- FIN REDES SOCIALES -->
                                    </div>
                                    <div class="span4">

                                        <h4><?php echo $item->nombre_profesional; ?></h4>
                                        <a class="color"> </a>
                                        <?php echo $item->descripcion_profesional; ?><br><br>

                                        <p class="pull-right" style="margin-right: 20px;"><img src="https://cdn.worldvectorlogo.com/logos/adobe-pdf-icon.svg" width="25"> 
                                        <a href="<?php echo base_url();?>cv_profesionales/<?php echo $item->cv_profesional; ?>">DESCARGA EL CV</a></p> <br>
                                    </div>

                                    <?php } ?>
                            </div>
                        </article>
                    </section>
                </div>
            </div>
            <!--FOOTER START-->
            <footer>
                <div class="copy-rights">
                    <p>COPYRIGHT © 2017 safetyworkla.com </p>
                </div>
            </footer>
            <!--FOOTER END-->
        </div>
    <!--FOOTER END-->
    <!--WRAPPER END-->
    </body>
    </html>
