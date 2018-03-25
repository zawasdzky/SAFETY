<!-- REVISTA EN LINEA  -->
<br />
<div class="widget widget-newsletter">
        <h2>Revista Digital</h2>
    <figure>
        <img alt="" src="images/revista.png">
    </figure>
    <div class="text">
        <h4>Email </h4>
        <form action="<?php echo base_url();?>Newsletter/insert_newsletter" method="POST" id="form">
            <input type="email" name="email" class="input-block-level" required>
            <button type="submit" class="btn-style">Suscribirse</button>
        </form>
    </div>
</div>
<!-- END REVISTA EN LINEA  -->
<script type="text/javascript">
    $( "#form" ).submit(function( event ) {
  alert( "Ha quedado insscrito en nuestra base de datos" );
});
</script>