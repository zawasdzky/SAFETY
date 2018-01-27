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
              <a href="<?php echo base_url();?>admin/infografias/">Gestión de infografias</a>
            </li>
            <li class="crumb-trail">infografias</li>
          </ol>
        </div>
      </header>
      <!-- End: Topbar -->
      <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">
        <!-- TRAE LA CONSULTA DE 1 SOLO ROW -->
        <?php $detalle = $detalle_infografia->row();  $id_infografia =  $detalle-> id_infografia; ?>
        <form action="<?php echo base_url();?>admin/infografias/update_infografia/<?php echo $detalle->id_infografia;?>" enctype="multipart/form-data"  method="POST" > 
        <div class="panel panel-warning">
          <div class="panel-heading">
             <span class="panel-icon"></span>
             <span class="panel-title"> Informacion General</span>
          </div>    

          <div class="panel-body border">

            <div class="col-md-3 mb10">
              <label for="titulo_infografia" class="field prepend-icon">Titulo del Infografia</label>
              <input type="text" name="titulo_infografia" id="titulo_infografia" class="form-control" value="<?php echo $detalle-> titulo_infografia; ?>" required>
            </div>


            <div class="col-md-3 mb10">
              <label for="keywords_infografia" class="field prepend-icon"> Palabras Clave </label>
              <input type="text" name="keywords_infografia" id="keywords_infografia" class="form-control" value="<?php echo $detalle-> keywords_infografia; ?>">
            </div>


            <div class="col-md-3 mb10">
              <label for="url_amigable" class="field prepend-icon"> URL Amigable (sin espacios...) </label>
              <input type="text" name="url_amigable_infografia" id="url_amigable_infografia" class="form-control" value="<?php echo $detalle-> url_amigable_infografia; ?>">
            </div>

            <div class="col-md-2 mb10">
              <label for="fecha_publicacion_infografia"> Fecha publicación </label>
              <input type="date" name="fecha_publicacion_infografia" class="form-control"  id="fecha_publicacion_infografia" value="<?php echo $detalle-> fecha_publicacion_infografia; ?>">
            </div>

            <div class="col-md-2 mb10">          
              <label for="estado_infografia"> Estado </label>
              <select id="estado_infografia" name="estado_infografia" class="form-control">
                <option value="<?php echo $detalle->estado_infografia; ?>" selected="selected"> <?php echo $detalle-> estado_infografia; ?></option>
                <option value="activo">Activo</option>
                <option value="inactivo">inactivo</option>
              </select>
            </div>

             <div class="col-md-2 mb10">
              <label for="orden_infografia" class="field prepend-icon">Orden</label>
              <input type="number" class="form-control" name="orden_infografia" id="orden_infografia" value="<?php echo $detalle-> orden_infografia; ?>" required>
            </div>

            <div class="col-md-12 mb10"> 
              <label>Descripción </label>
                  <textarea name="descripcion_infografia" class="form-control"><?php echo $detalle-> descripcion_infografia; ?></textarea>
            </div> 
            <div class="col-md-12 mb10""> <hr> </div> 

            <div class="col-md-12 mb10">
                <div class="col-md-2">

                <?php if ($detalle-> foto0) { ?>
                  <input type="hidden" name="foto0" value="<?php echo $detalle->foto0; ?>">
                  <label>Foto Listados</label>
                  <img src="<?php echo base_url();?>fotos_infografias/<?php echo $detalle->foto0;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/infografias/borrar_foto/<?php echo $detalle->id_infografia;?>/foto0/<?php echo $detalle->foto0;?>" type="button" data-style="zoom-out" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Foto_Listados">
                          </div>
                          <div class="row">
                              <span class="button btn-system btn-file btn-block">
                                <span class="fileupload-new">Seleccionar</span>
                                <span class="fileupload-exists">cambiar</span>
                                <input type="file" name="foto0">
                              </span>
                          </div>
                        </div>
                <?php } ?>
                </div> 

                <div class="col-md-2">
                <?php if ($detalle-> foto1) { ?>
                  <input type="hidden" name="foto1" value="<?php echo $detalle->foto1; ?>">
                  <label>Foto Principal</label>
                  <img src="<?php echo base_url();?>fotos_infografias/<?php echo $detalle->foto1;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/infografias/borrar_foto/<?php echo $detalle->id_infografia;?>/foto1/<?php echo $detalle->foto1;?>" type="button" data-style="zoom-out" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Foto Principal">
                          </div>
                          <div class="row">
                              <span class="button btn-system btn-file btn-block">
                                <span class="fileupload-new">Seleccionar</span>
                                <span class="fileupload-exists">cambiar</span>
                                <input type="file" name="foto1">
                              </span>
                          </div>
                        </div>
                <?php } ?>
                </div> 
            </div>

            <div class="mb10 row"> <br> </div>

            <div class="col-md-12 pl15 text-right">
              <hr class="short alt">
              <input type="submit" name="actualizar_infografia" class="btn btn-danger" value="Actualizar infografia">
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

  <!-- FileUpload JS -->
  <script src="<?php echo base_url();?>assets_admin/vendor/plugins/fileupload/fileupload.js"></script>
  <script src="<?php echo base_url();?>assets_admin/vendor/plugins/holder/holder.min.js"></script>
  <!-- Tagmanager JS -->
  <script src="<?php echo base_url();?>assets_admin/vendor/plugins/tagsinput/tagsinput.min.js"></script>
  <!-- Theme Javascript -->
  <script src="<?php echo base_url();?>assets_admin/assets/js/utility/utility.js"></script>
  <script src="<?php echo base_url();?>assets_admin/assets/js/demo/demo.js"></script>
  <script src="<?php echo base_url();?>assets_admin/assets/js/main.js"></script>
    <!-- Ckeditor JS -->


  <!-- END: PAGE SCRIPTS -->
</body>
</html>