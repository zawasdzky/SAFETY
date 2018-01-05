    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
      <!-- Start: Topbar -->
      <header id="topbar" class="">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="dashboard.html">profesionales</a>
            </li>
            <li class="crumb-icon">
              <a href="dashboard.html">
                 <a href="<?php echo base_url();?>admin/"><span class="glyphicon glyphicon-home"></span></a>
              </a>
            </li>
            <li class="crumb-trail">
            <a href="<?php echo base_url();?>admin/profesionales">profesionales</a></li>
          </ol>
        </div>
      </header>
      <!-- End: Topbar -->
      <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">
        <!-- INICIO TAB PANEL -->
        <div class="panel panel-warning">
          <div class="panel-heading">
             <span class="panel-icon"></span>
             <span class="panel-title"> Informacion General</span>
          </div>    
          <div class="panel-body border">
            <?php $detalle = $detalle_profesional->row(); ?>
              <form action="<?php echo base_url();?>admin/profesionales/update_profesional" enctype="multipart/form-data"  method="post" accept-charset="utf-8">   <!-- FORMULARIO INSERTAR -->
                  <div class="col-md-2">
                    <?php if ($detalle->foto_profesional){ ?>
                    <input type="hidden" name="foto_profesional" value="<?php echo $detalle->foto_profesional;?>">     
                    <img src="<?php echo base_url();?>fotos_productos/<?php echo $detalle->foto_profesional;?>" class="img-responsive"> <br>
                    <a href="<?php echo base_url();?>admin/profesionales/borrar_foto/<?php echo $detalle->id_profesional;?>/<?php echo $detalle->foto_profesional;?>" type="button" class="btn btn-danger btn-small btn-block"> <span class="fa fa-trash-o"></span> Borrar Foto</a>
                    <?php } else{?>
                    <label>Subir Foto</label>
                      <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                        <div class="fileupload-preview thumbnail mb20">
                          <img data-src="holder.js/100%x140" alt="holder">
                        </div>
                        <span class="button btn-system btn-file btn-block">
                          <span class="fileupload-new">Seleccionar</span>
                          <span class="fileupload-exists">Cambiar</span>
                          <input type="file" name="foto_profesional" />
                        </span>
                      </div>
                    <?php } ?>
                  </div> 
                  <input type="hidden" name="id_profesional" id="id_profesional" class="form-control" value="<?php echo $detalle->id_profesional;?>" >
                  <div class="col-md-3 mb10">
                  <label>Nombre profesional</label>
                      <input type="text" name="nombre_profesional" id="nombre_profesional" class="form-control" value="<?php echo $detalle->nombre_profesional;?>" >
                  </div>
                  <div class="col-md-3 mb10">
                  <label>Titulo / desripción corta profesional</label>
                      <input type="text" name="titulo_profesional" id="titulo_profesional" class="form-control" value="<?php echo $detalle->titulo_profesional;?>">
                  </div>
                  <div class="col-md-3 mb10">
                  <label>Video</label>
                      <input type="text" name="video_profesional" id="video" class="form-control" value="<?php echo $detalle->video_profesional;?>">
                  </div>
                  <div class="col-md-3 mb10">
                  <label>Keywords</label>
                      <input type="text" name="keywords_profesional" id="video" class="form-control" value="<?php echo $detalle->keywords_profesional;?>">
                  </div>
                  <div class="col-md-3 mb10">
                  <label>Enlace</label>
                      <input type="text" name="enlace_profesional" id="enlace" class="form-control" value="<?php echo $detalle->enlace_profesional;?>">
                  </div>
                  <div class="col-md-6 mb10">
                  <label>Descripción </label>
                      <input type="text" name="descripcion_profesional" id="descripcion_profesional" class="form-control" value="<?php echo $detalle->descripcion_profesional;?>">
                  </div>
                  <div class="col-md-3 mb10">
                  <label>Categoría Actual: </label>
                      <select id="product-category" name="id_categoria" class="form-control">
                      <option value="<?php echo $detalle->id_categoria;?>" selected="selected"><?php echo $detalle->nombre_categoria;?> </option>
                      <option value="<?php echo $detalle->id_categoria;?>">- Cambiar por: - </option>
                      <?php foreach ($categorias ->result() as $categoria) { ?>
                        <option value="<?php echo $categoria -> id_categoria ?>"><?php echo $categoria -> nombre_categoria ?></option>
                      <?php } ?>
                      </select>
                  </div>
                  <div class="col-md-12 pl15 text-right">
                      <hr class="short alt">
                    <input type="submit" name="crear_profesional" class="btn btn-danger" value="Actualizar profesional">
                  </div>
              </form> <!-- FIN FORMULARIO -->
            </div>
          </div>
        <!-- FIN PANEL -->
      </section>
      <!-- End: Content -->
    </section>
    <!-- End: Content-Wrapper -->
  </div>
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
  <script type="text/javascript">
  jQuery(document).ready(function() {
        $(".confirmation").click(function(){
      return confirm('¿Está seguro de borrar esta profesional?');
    });
    "use strict";
    // Init Theme Core    
    Core.init();

  });
  </script>
  <!-- END: PAGE SCRIPTS -->
</body>
</html>
