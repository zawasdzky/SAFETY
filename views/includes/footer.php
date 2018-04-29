<div class="main-contant">
    <!--FOOTER START-->
    <footer>
        <!--FOOTER TOP AREA STAT-->
            <div class="container">
                <div class="row">
                        <figure>
                            <!-- <img alt="" src="images/mega_banner_publicidad2.jpg"> -->
                        </figure>
                        <br>
                </div>
            </div>
        <!--FOOTER TOP AREA END-->
        <div class="bottom-widgets">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <div class="widget text-widget">
                            <h2 class="h-style">Políticas de Privacidad</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec .gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec .</p>
                            <p class="phon">Phone: 182 2569 5896</p>
                            <p class="email">Email: info@modu.versus</p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="widget widget-slider">
                            <h2 class="h-style">Publicidad</h2>
                            <div class="flexslider">
                              <ul class="slides">
                                <?php foreach ($publicidad -> result() as $item) { ?>
                                    <?php if ($item -> tipo_publicitario == "Footer central") { ?>
                                        <li>
                                            <a href="<?php echo $item-> enlace_publicitario ?>">
                                                <img src="<?php echo base_url()."fotos_productos/".$item -> foto_publicitario; ?>" alt="<?php echo $item -> nombre_publicitario; ?>" target="_blank">
                                            </a>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                              </ul>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="widget widget-signin">
                            <h2 class="h-style">Zona Admin</h2>
                            <ul>
                                <li>
                                    <div class="input-icon user"></div>
                                    <input type="text" class="input-block-level">
                                </li>
                                <li>
                                    <div class="input-icon password"></div>
                                    <input type="password" class="input-block-level">
                                </li>
                                <li><button class="btn-style">Ingresar</button></li>
                            </ul>
                        </div>
                    </div>
                </div>           
            </div>
        </div>
        <div class="copy-rights">
            <p>COPYRIGHT © 2018 <a href="#">safetyworkla.com</a></p>
        </div>
    </footer>
    <!--FOOTER END-->
</div>
<!--WRAPPER END-->
</body>
</html>
