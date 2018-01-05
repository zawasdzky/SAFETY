                    <!-- INICIO WIDGET EVENTOS -->
                        <h2 class="h-style">Eventos</h2>
                        <div class="article-tabs">
                            <div class="tabs-widget">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <?php  $i=1; foreach ($eventos_solutions ->result() as $item) { 
                                    if($i == 1){$clase="active";}else{$clase="";}
                                    ?>                                
                                        <li class="<?php echo $clase; ?>">
                                            <a href="#<?php echo "tab".$i; ?>" data-toggle="tab">
                                            <?php echo $item->tipo_evento ?></a>
                                        </li>
                                    <?php  $i++;} ?>  
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <?php $i=1;  foreach ($eventos_solutions ->result() as $item) { 
                                    if($i == 1){$clase="tab-pane fade active in";}else{$clase="tab-pane fade";}
                                    ?>
                                        <div class="<?php echo $clase; ?>" id="<?php echo "tab".$i; ?>">
                                            <div class="special-offer">
                                                <div class="thumb">
                                                    <img src="<?php echo base_url()."fotos_productos/". $item->foto_evento ?>" alt="foto_evento" width="200" >
                                                </div>
                                                <div class="text">
                                                    <p><b><?php echo $item->ciudad_evento ?> 
                                                    - <?php echo $item->fecha_inicio_evento ?></b></p>
                                                    <h2 class="color"><?php echo $item->nombre_evento; ?></h2>
                                                    <br>
                                                    <hr>
                                                </div>
                                                <div class="span4">
                                                <p class="text-justify"><?php echo $item->descripcion_evento; ?></p>
                                                </div>
                                                <div class="span1 pull-right">
                                                    <div class="text-center">
                                                     <img src="<?php echo base_url();?>images/couple-icon.png"><br>
                                                    <a href="<?php echo $item->enlace_evento; ?>" class=" color"  target="_blank"><h4>Ver más</h4></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                  
                                    <?php  $i++;} ?>    
                                </div>
                            </div>
                        </div>