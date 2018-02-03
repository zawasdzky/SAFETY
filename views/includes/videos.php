<div class="video-slider">
    <h2 class="h-style">Videos</h2>
    <ul class="bxslider">
        <?php foreach ($videos -> result() as $video) {  ?>
          <li>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video-> enlace_varios; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </li>

        <?php } ?>
    </ul>
    <div id="bx-pager">
        <?php $i=0; foreach ($videos -> result() as $video) {  ?>
          <a data-slide-index="<?php echo $i; ?>" href="" class="stop">
            <img src="http://img.youtube.com/vi/<?php echo $video-> enlace_varios; ?>/default.jpg" width="87px"  style="float: left; margin-right: 10px;">
            <div class="text">
                <p><?php echo $video-> titulo_varios; ?></p>
                <p class="date">
                  <?php  
                    $fecha = $video-> fecha_creacion_varios;
                    setlocale(LC_ALL,"es_ES");
                    date_default_timezone_set('America/Bogota');
                    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                    $mes = date('m', strtotime($fecha));
                    $dia = date('d', strtotime($fecha));
                    $anio = date('Y', strtotime($fecha));
                    echo  $meses[$mes-1]." ". $dia." de ".$anio;  
                  ?>                                        
                </p> 
            </div>  
          </a>
        <?php $i++; } ?>
    </div>
</div>

<script type="text/javascript">
  $( ".stop" ).click(function() {
    $("iframe").each(function() { 
        var src= $(this).attr('src');
        $(this).attr('src',src);  
    });
  });
</script>

