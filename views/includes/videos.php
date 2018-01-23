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
                <!-- <p class="date"><?php echo $video-> fecha_creacion_varios; ?></p>  -->
            </div>  
          </a>
        <?php $i++; } ?>
    </div>
</div>


