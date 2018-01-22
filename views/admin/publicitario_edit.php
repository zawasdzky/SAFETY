    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
      <!-- Start: Topbar -->
      <header id="topbar" class="">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="dashboard.html">publicitarios</a>
            </li>
            <li class="crumb-icon">
              <a href="dashboard.html">
                 <a href="<?php echo base_url();?>admin/"><span class="glyphicon glyphicon-home"></span></a>
              </a>
            </li>
            <li class="crumb-trail">
            <a href="<?php echo base_url();?>admin/publicitarios">publicitarios</a></li>
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
            <?php $detalle = $detalle_publicitario->row(); ?>
              <form action="<?php echo base_url();?>admin/publicitarios/update_publicitario" enctype="multipart/form-data"  method="post" accept-charset="utf-8">   <!-- FORMULARIO INSERTAR -->
                  <div class="col-md-2">
                    <?php if ($detalle->foto_publicitario){ ?>
                    <input type="hidden" name="foto_publicitario" value="<?php echo $detalle->foto_publicitario;?>">     
                    <img src="<?php echo base_url();?>fotos_productos/<?php echo $detalle->foto_publicitario;?>" class="img-responsive"> <br>
                    <a href="<?php echo base_url();?>admin/publicitarios/borrar_foto/<?php echo $detalle->id_publicitario;?>/<?php echo $detalle->foto_publicitario;?>" type="button" class="btn btn-danger btn-sm btn-block"> <span class="fa fa-trash-o"></span> Borrar Foto</a>
                    <?php } else{?>
                    <label>Subir Foto</label>
                      <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                        <div class="fileupload-preview thumbnail mb20">
                          <img data-src="holder.js/100%x140" alt="holder">
                        </div>
                        <span class="button btn-system btn-file btn-block">
                          <span class="fileupload-new">Seleccionar</span>
                          <span class="fileupload-exists">Cambiar</span>
                          <input type="file" name="foto_publicitario" />
                        </span>
                      </div>
                    <?php } ?>
                  </div> 
                  <input type="hidden" name="id_publicitario" id="id_publicitario" class="form-control" value="<?php echo $detalle->id_publicitario;?>" >
                  <div class="col-md-3 mb10">
                      <label>Nombre publicitario</label>
                      <input type="text" name="nombre_publicitario" id="nombre_publicitario" class="form-control" value="<?php echo $detalle->nombre_publicitario;?>" >
                  </div>
                  <div class="col-md-3 mb10">
                      <label>Titulo / desripción corta publicitario</label>
                      <input type="text" name="titulo_publicitario" id="titulo_publicitario" class="form-control" value="<?php echo $detalle->titulo_publicitario;?>">
                  </div>
                  <div class="col-md-3 mb10">
                      <label>Enlace</label>
                      <input type="text" name="enlace_publicitario" id="enlace_publicitario" class="form-control" value="<?php echo $detalle->enlace_publicitario;?>">
                  </div>
                  <div class="col-md-3 mb10">
                    <label>Tipo / Ubicación</label>
                      <select name="tipo_publicitario" class="form-control">
                        <option value="<?php echo $detalle->tipo_publicitario;?> "><?php echo $detalle->tipo_publicitario;?>  </option>
                        <option value="<?php echo $detalle->tipo_publicitario;?> "> -- Cambiar a:--</option>
                          <option value="">Tipo / Ubicación  </option>
                          <option value="Slider Home">Slider Home (1200 x 400) </option>
                          <option value="Slider Novedades">Slider Novedades</option>
                          <option value="Slider Salud y Bienestar">Salud y Bienestar</option>
                          <option value="Slider Vida y Estilo">Slider Vida y Estilo</option>
                          <option value="Slider Sociales">Slider Sociales</option>
                          <option value="Slider Noticias">Slider Noticias</option>
                          <option value="Slider Noticias">Slider Seguros</option>
                          <option value="Slider Noticias">Slider SST</option>
                          <option value="Header">Header (456 x 47)</option>
                          <option value="Home1">Home 1 Superior Izquierdo (340 x 768)</option>
                          <option value="Home2">Home 2 Superior Derecho (170 x 200)</option>
                          <option value="Home3">Home 3 Central Vertical (153 x 695)</option>
                          <option value="Home4">Home 4 Central Inferior (750 x 200)</option>
                          <option value="Home Columna Derecha">Home Columna Derecha(300 x 250)</option>
                          <option value="footer central">Footer Central (352 x 193)</option>
                          <option value="Pauta Novedades">Pauta Novedades</option>
                          <option value="Slider Talento Humano">Slider Talento Humano</option>
                          <option value="Pauta Noticias">Pauta Noticias</option>
                          <option value="Columna Derecha">Columna Derecha</option>
                          <option value="Columna Izquierda">Columna Izquierda</option>
                          <option value="Columna Central">Columna Central</option>
                      </select>
                  </div>
                  <div class="col-md-4 mb10">
                    <label>Sitio</label>
                    <select name="sitio_publicitario" class="form-control">
                      <option value="<?php echo $detalle->sitio_publicitario;?> "><?php echo $detalle-> sitio_publicitario;?>  </option>
                      <option value="<?php echo $detalle->sitio_publicitario;?> "> -- Cambiar a:--</option>
                      <option value="Safety_solutions">Safety Solutions</option>
                      <option value="Safetywork">Safetywork</option>
                    </select>
                  </div>
                  <div class="col-md-2 mb10">
                      <label>Orden / Posición </label>
                      <input type="number" name="orden_publicitario"  id="orden_publicitario" class="form-control" value="<?php echo $detalle->orden_publicitario;?>">
                  </div>
                  <div class="col-md-12 pl15 text-right">
                      <hr class="short alt">
                    <input type="submit" name="crear_publicitario" class="btn btn-danger" value="Actualizar publicitario">
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
    <script src="<?php echo base_url();?>assets_admin/vendor/plugins/ckeditor/ckeditor.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {
        $(".confirmation").click(function(){
      return confirm('¿Está seguro de borrar esta publicitario?');
    });
    "use strict";
    // Init Theme Core    
    Core.init();
    // Init Ckeditor
    CKEDITOR.replace('descripcion_publicitario', {
      height: 210,
      on: {
        instanceReady: function(evt) {
          $('.cke').addClass('admin-skin cke-hide-bottom');
        }
      },
    });
//END CKEDITOR

  });
  </script>
  <!-- END: PAGE SCRIPTS -->
</body>
</html>
