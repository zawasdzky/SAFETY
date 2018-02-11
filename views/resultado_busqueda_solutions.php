   
    <!--INICIO CONTENIDO-->
    <div class="main-contant">
        <div class="container">
            <div class="row">
                <div class="span9">
                    <section>
                        <div class="health-news sports-news" style="margin: 0px">
                            <h2 class="h-style">Resultado Búsqueda</h2>
                            <ul>
                                <!--LIST ITEM START-->
                                <?php foreach ($resultado_productos -> result() as $item) { ?>
                                <li>
                                    <figure>
                                        <a  href="<?php echo base_url()."safety_solutions/detalle_producto/".$item->url_amigable; ?>">
                                            <img src="<?php echo base_url()."fotos_productos/".$item->foto1;?>" alt="" width="183" ></a>
                                    </figure>
                                    <div class="text">
                                        <a href="<?php echo base_url()."safety_solutions/detalle_producto/".$item->url_amigable; ?>">
                                        <h2><?php echo $item->nombre_producto; ?></h2></a>
                                        <p><?php echo $item->titulo_producto; ?></p>
                                        <div class="headline-review text-right">
                                            <a href="<?php echo base_url()."safety_solutions/detalle_producto/".$item->url_amigable; ?>"> <i class="fa fa-eye"></i> Ver más</a>
                                        </div>
                                    </div>
                                </li>
                                <!--LIST ITEM END-->
                               <?php  } ?>
                                <?php foreach ($resultado_profesionales -> result() as $item) { ?>
                                <li>
                                    <figure>
                                        <a  href="<?php echo base_url()."safety_solutions/detalle_profesional".$item->id_profesional; ?>">
                                            <img src="<?php echo base_url()."fotos_productos/".$item->foto_profesional;?>" alt="" width="183" ></a>
                                    </figure>
                                    <div class="text">
                                        <a href="<?php echo base_url()."safety_solutions/detalle_profesional/".$item->id_profesional; ?>">
                                        <h2><?php echo $item->nombre_profesional; ?></h2></a>
                                        <p><?php echo $item->descripcion_profesional; ?></p>
                                        <div class="headline-review text-right">
                                            <a href="<?php echo base_url()."safety_solutions/detalle_profesional/".$item->id_profesional; ?>"> <i class="fa fa-eye"></i> Ver más</a>
                                        </div>
                                    </div>
                                </li>
                                <!--LIST ITEM END-->
                               <?php  } ?>
                            </ul>
                        </div>
                    </section>
                    <!-- INICIO WIDGET EVENTOS -->
                    <section>
                        <?php $this->load->view('includes/eventos');  ?>
                    </section>
                    <!-- FIN WIDGET EVENTOS -->
                </div>
                <div class="span3">
                    <div class="sidebar">
                        <!-- PAUTA -->
                        <?php foreach ($publicidad_col_der ->result() as $item) { ?>
                            <a href="<?php echo $item -> enlace_publicitario ?>">
                                <img src="<?php echo base_url()."fotos_productos/".$item->foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario ?>" class="img-responsive" >
                            </a>
                             <br><br><br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <?php $this->load->view('includes/footer');  ?>
    </section>

