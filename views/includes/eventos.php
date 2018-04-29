<!-- INICIO WIDGET EVENTOS -->
    <h2 class="h-style">Eventos</h2>
    <div class="article-tabs">
        <div class="tabs-widget">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <?php  
                    $i=1; $clase="active"; $estilo="";
                    foreach ($eventos_widget -> result() as $item) { 
                    if($i != 1){$clase="";}
                    if($i == 2){$estilo="background-color: #52c206;";}
                    if($i == 3){$estilo="background-color: #c40001;";}
                    if($i == 4){$estilo="background-color: #00ccf1;";}
                    if($i == 5){$estilo="background-color: #4c30b8;";}
                ?>                                
                    <li class="<?php echo $clase; ?>" style="<?php echo $estilo; ?>">
                        <a href="#<?php echo "tab".$i; ?>" data-toggle="tab">
                        <?php echo $item-> tipo_evento ?></a>
                    </li>
                <?php  $i++;} ?>  
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <?php $i=1;  foreach ($eventos_widget ->result() as $item) { 
                if($i == 1){$clase="tab-pane fade active in"; $estilo="background-color: #d92d47;"; }else{$clase="tab-pane fade";}
                if($i == 2){$estilo="background-color: #52c206;";}
                if($i == 3){$estilo="background-color: #c40001;";}
                if($i == 4){$estilo="background-color: #00ccf1;";}
                if($i == 5){$estilo="background-color: #4c30b8;";}
                ?>
                    <div class="<?php echo $clase; ?>" id="<?php echo "tab".$i; ?>">
                        <div class="special-offer">
                            <div class="thumb">
                                <img src="<?php echo base_url().'fotos_eventos/'. $item-> foto0 ;?>" alt="<?php echo $item-> nombre_evento; ?>"  width="200" >
                            </div>
                            <div class="text">
                                <p><b><?php echo $item-> ciudad_evento; ?> 
                                - <?php echo $item-> fecha_inicio_evento ;?> / <?php echo $item -> hora_inicio_evento; ?></b></p>
                                <h2 class="color"><?php echo $item-> nombre_evento; ?></h2>
                                <br>
                                <div class="span4" style="margin-left: 5px;">
                                    <p class="text-justify"><?php echo $item->descripcion_corta_evento; ?></p>
                                    <b></b>
                                    <hr>
                                </div>
                            </div>
                            <div class="span1 pull-right">
                                <div class="text-center">
                                 <img src="<?php echo base_url();?>images/couple-icon.png"><br>
                                <a href="<?php echo $item->enlace_evento; ?>" class=" color"  target="_blank"><h4>Ver más</h4></a>
                                </div>
                            </div>
                        </div>
                        <div class="event-listing">
                            <div class="caption" style="<?php echo $estilo; ?>">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <h2><?php echo $item-> ciudad_evento; ?> </h2>
                                    </div>
                                    <?php $fecha = $item->fecha_inicio_evento;
                                        setlocale(LC_ALL,"es_ES");
                                        date_default_timezone_set('America/Bogota');
                                        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                        $mes = date('m', strtotime($fecha));
                                        $anio = date('Y', strtotime($fecha));
                                        $anio_evento = intval($anio);
                                        $mes_evento = intval($mes);
                                        $dia_evento = date('d', strtotime($fecha)); 
                                        $hora_evento = date('H', strtotime($item -> hora_inicio_evento)); //hora militar
                                        $minutos_inicio = date('i', strtotime($item -> hora_inicio_evento)); 
                                        $hora_hoy = date("h"); 
                                        $dia_hoy = date("d"); 
                                        $mes_hoy = date("m");
                                        $meses_restantes =  $mes_evento - $mes_hoy; 
                                        $dias_restantes =  $dia_evento; 
                                        $Horas_restantes =  (12 + $hora_evento);
                                        $fecha_evento = $mes_evento."/".$dia_evento."/".$anio_evento." ".$hora_evento.":".$minutos_inicio.":00";
                                        $fecha_evento = (string)$fecha_evento;
                                    ?>
                                    <div class="span4">
                                            <div class="defaultCountdown hasCountdown">
                                                <span class="countdown_row countdown_show4 countdown<?php echo$i;?>">
                                                    <span class="countdown_section"><span class="countdown_amount days">0</span><br>Días </span>
                                                    <span class="countdown_section"><span class="countdown_amount hours">0</span><br>Horas</span>
                                                    <span class="countdown_section"><span class="countdown_amount minutes">0</span><br>Minutos</span>
                                                    <span class="countdown_section"><span class="countdown_amount seconds last">0</span><br>Segundos</span>
                                                </span>
                                            </div>
                                    </div>
                                    <script type="text/javascript">
                                      $(".countdown<?php echo $i;?>").downCount({
                                        date: '<?php echo $fecha_evento; ?>',
                                      offset: +1
                                      });
                                    </script> 
                                    <div class="span2">
                                        <p class="event-date"><?php echo $dia_evento;?><br><?php echo  $meses[$mes_evento-1];?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                <?php  $i++;} ?>    
            </div>
        </div>
    </div>
