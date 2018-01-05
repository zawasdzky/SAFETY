   
    <!--INICIO CONTENIDO-->
    <div class="main-contant">
        <div class="container">
            <div class="row">
                <div class="span9">
                    <section>
                        <div class="health-news sports-news" style="margin: 0px">
                            <h2 class="h-style">Catálogo de Productos</h2>
                            <ul  id="paginar">
                                <!--LIST ITEM START-->
                                <?php foreach ($productos -> result() as $item) { ?>
                                <li>
                                    <figure>
                                        <a  href="detalle_producto/<?php echo  $item->url_amigable; ?>">
                                            <img src="<?php echo base_url()."fotos_productos/".$item->foto0;?>" alt="" width="190" ></a>
                                    </figure>
                                    <div class="text">
                                        <a href="detalle_producto/<?php echo  $item->url_amigable; ?>">
                                        <h2><?php echo $item->nombre_producto; ?></h2></a>
                                        <p><?php echo $item->titulo_producto; ?></p>
                                        <div class="headline-review text-right">
                                            <a href="detalle_producto/<?php echo  $item->url_amigable; ?>"> <i class="fa fa-eye"></i> Ver más</a>
                                        </div>
                                    </div>
                                </li>
                                <!--LIST ITEM END-->
                               <?php  } ?>
                            </ul>
                        </div>
                    </section>
                    <section>
                    <?php  $this->load->view('includes/eventos'); ?> 
                    </section>
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


                    


