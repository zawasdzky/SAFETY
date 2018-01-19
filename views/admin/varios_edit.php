  <!-- Start: Content-Wrapper -->
  <section id="content_wrapper">
    <!-- Start: Topbar -->
    <header id="topbar" class="">
      <div class="topbar-left">
        <ol class="breadcrumb">
          <li class="crumb-active">
            <a href="dashboard.html">Gestor Safety Solutions</a>
          </li>
          <li class="crumb-icon">
            <a href="dashboard.html">
              <span class="glyphicon glyphicon-home"></span>
            </a>
          </li>
          <li class="crumb-link">
            <a href="#">Gestión de varios</a>
          </li>
          <li class="crumb-trail">varios</li>
        </ol>
      </div>
    </header>
    <!-- End: Topbar -->
    <!-- Begin: Content -->
    <section id="content" class="animated fadeIn">
      <!-- TRAE LA CONSULTA DE 1 SOLO ROW -->
      <?php $detalle = $detalle_varios->row();  $id_varios =  $detalle-> id_varios; ?>
      <?php $frase_visible = "hidden"; $video_visible = "hidden"; 
       if($detalle-> tipo_varios=="frase") {$frase_visible ="visible"; }
       if($detalle-> tipo_varios=="video") {$video_visible ="visible"; }
      ?>
      <form action="<?php echo base_url();?>admin/varios/update_varios/<?php echo $detalle->id_varios;?>" enctype="multipart/form-data"  method="post" accept-charset="utf-8">   
        <!-- FORMULARIO INSERTAR -->
        <div class="panel panel-warning">
          <div class="panel-heading">
             <span class="panel-icon"></span>
             <span class="panel-title"> Informacion General</span>
          </div>    
          <div class="panel-body border">
            <div class="col-md-1 mb10">
              <label for="orden_varios" class="field prepend-icon">Orden</label>
              <input type="text" name="orden_varios" id="orden_varios" class="form-control" value="<?php echo $detalle-> orden_varios; ?>" required>
            </div>
            <div class="col-md-9 mb10" style="visibility: <?php echo $frase_visible;?>">
              <label for="texto_varios" class="field prepend-icon">Frase</label>
              <input type="text" name="texto_varios" id="texto_varios" class="form-control" value="<?php echo $detalle-> texto_varios; ?>" >
            </div>
            <div class="col-md-2 mb10"  style="visibility: <?php echo $frase_visible;?>">
              <label for="estado_varios"> Sección </label>
                <select id="tipo" name="seccion_varios" class="form-control">
                  <option value="<?php echo $detalle-> seccion_varios; ?>"><?php echo $detalle-> seccion_varios; ?></option>
                  <option value="<?php echo $detalle-> seccion_varios; ?>"> ---- Cambiar a:----</option>
                  <option value="Home">Home</option>
                  <option value="Talento_humano">Talento Humano</option>
                  <option value="Salud_bienestar">Salud y Bienestar</option>
                  <option value="Vida_estilo">Vida y Estilo</option>
                  <option value="Seguros">Seguros</option>
                  <option value="SST">SST</option>
                  <option value="Legislacion">Legislación</option>
                  <option value="Infografias">Infografías</option>
                  <option value="Noticias">Noticias</option>
                </select>
            </div>
            <div class="col-md-3 mb10"  style="visibility: <?php echo $video_visible;?>">
              <label for="titulo_varios" class="field prepend-icon">Titulo Video</label>
              <input type="text" name="titulo_varios" id="titulo_varios" class="form-control" value="<?php echo $detalle-> titulo_varios; ?>" >
            </div>
            <div class="col-md-3 mb10"  style="visibility: <?php echo $video_visible;?>">
              <label for="enlace_varios" class="field prepend-icon"> Código Video </label>
              <input type="text" name="enlace_varios" id="enlace_varios" class="form-control" value="<?php echo $detalle-> enlace_varios; ?>">
            </div>
            <div class="col-md-12 mb10"  style="visibility: <?php echo $video_visible;?>"> 
              <label>Descripción</label>
                  <textarea name="descripcion_varios" class="form-control"><?php echo $detalle-> descripcion_varios; ?></textarea>
            </div> 
          <div class="col-md-12 pl15 text-right">
            <input type="submit" name="actualizar_varios" class="btn btn-danger" value="Actualizar">
          </div>
          </div>
        </div>
      </form> <!-- FIN FORMULARIO -->
    </section>
      <!-- End: Content -->
  <!-- End: Main -->
  <!-- BEGIN: PAGE SCRIPTS -->
  <!-- jQuery -->
  <script src="<?php echo base_url();?>assets_admin/vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="<?php echo base_url();?>assets_admin/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
  <!-- Datatables -->
  <script src="<?php echo base_url();?>assets_admin/vendor/plugins/datatables/media/js/jquery.dataTables.js"></script>
  <!-- Datatables Tabletools addon -->
  <script src="<?php echo base_url();?>assets_admin/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
  <!-- Datatables ColReorder addon -->
  <script src="<?php echo base_url();?>assets_admin/vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
  <!-- Datatables Bootstrap Modifications  -->
  <script src="<?php echo base_url();?>assets_admin/vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
  <!-- FileUpload JS -->
  <script src="<?php echo base_url();?>assets_admin/vendor/plugins/fileupload/fileupload.js"></script>
  <script src="<?php echo base_url();?>assets_admin/vendor/plugins/holder/holder.min.js"></script>
  <!-- Tagmanager JS -->
  <script src="<?php echo base_url();?>assets_admin/vendor/plugins/tagsinput/tagsinput.min.js"></script>
  <!-- Theme Javascript -->
  <script src="<?php echo base_url();?>assets_admin/assets/js/utility/utility.js"></script>
  <script src="<?php echo base_url();?>assets_admin/assets/js/demo/demo.js"></script>
  <script src="<?php echo base_url();?>assets_admin/assets/js/main.js"></script>

</body>
</html>
