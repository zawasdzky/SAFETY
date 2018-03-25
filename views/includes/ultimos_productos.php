
	<!--ULTIMOS PRODUCTOS -->
	<div class="widget widget-top3">
        <h2>Últimos Productos </h2>
        <ul>
            <?php foreach ($productos_solutions_limit -> result() as $producto) { ?>
            <li>
                <figure> 
                    <a href="<?php echo base_url();?>fotos_productos/<?php echo $producto-> foto0; ?>">
                        <img alt="<?php echo $producto ->  nombre_producto; ?>" src="<?php echo base_url();?>fotos_productos/<?php echo $producto-> foto0; ?>" width="100">
                    </a> 
                </figure>
                <div class="text">
                    <a href="<?php echo base_url();?>safety_solutions/detalle_producto/<?php echo $producto-> url_amigable; ?>"><?php echo $producto -> nombre_producto; ?></a>
                    <p><span><?php echo $producto -> titulo_producto; ?></span></p>
                </div>
            </li>     
            <?php } ?>                           
        </ul>
    </div>
    <!--ULTIMOS PRODUCTOS  END-->