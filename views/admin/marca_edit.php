    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
      <!-- Start: Topbar -->
      <header id="topbar" class="">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="dashboard.html">MARCAS</a>
            </li>
            <li class="crumb-icon">
              <a href="dashboard.html">
                 <a href="<?php echo base_url();?>admin/"><span class="glyphicon glyphicon-home"></span></a>
              </a>
            </li>
            <li class="crumb-trail">
            <a href="<?php echo base_url();?>admin/Marcas">Marcas</a></li>
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
            <?php $detalle = $detalle_marca->row(); ?>
              <form action="<?php echo base_url();?>admin/Marcas/update_marca" enctype="multipart/form-data"  method="post" accept-charset="utf-8">   <!-- FORMULARIO INSERTAR -->
                <div class="col-md-4">
  <!-- ACTUALIZAR FOTO  -->
                    <div class="col-md-6">
                      <?php if ($detalle->foto_marca){ ?>
                      <input type="hidden" name="foto_marca" value="<?php echo $detalle->foto_marca;?>">     
                      <img src="<?php echo base_url();?>fotos_productos/<?php echo $detalle->foto_marca;?>" class="img-responsive"> <br>
                      <a href="<?php echo base_url();?>admin/Marcas/borrar_foto/<?php echo $detalle->id_marca;?>/<?php echo $detalle->foto_marca;?>" type="button" class="btn btn-danger btn-small btn-block"> <span class="fa fa-trash-o"></span> Borrar Foto</a>
                      <?php } else{?>
                      <label>Subir Foto</label>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src="holder.js/100%x140" alt="holder">
                          </div>
                          <span class="button btn-system btn-file btn-block">
                            <span class="fileupload-new">Seleccionar</span>
                            <span class="fileupload-exists">Cambiar</span>
                            <input type="file" name="foto_marca" />
                          </span>
                        </div>
                      <?php } ?>
                    </div> 
  <!-- ACTUALIZAR LOGO  -->
                    <div class="col-md-6">
                      <?php if ($detalle->logo_marca){ ?>
                      <input type="hidden" name="logo_marca" value="<?php echo $detalle->logo_marca;?>">     
                      <img src="<?php echo base_url();?>fotos_productos/<?php echo $detalle->logo_marca;?>" class="img-responsive"> <br>
                      <a href="<?php echo base_url();?>admin/Marcas/borrar_logo/<?php echo $detalle->id_marca;?>/<?php echo $detalle->logo_marca;?>" type="button" class="btn btn-danger btn-small btn-block"> <span class="fa fa-trash-o"></span> Borrar Logo</a>
                      <?php } else{?>
                      <label>Subir Foto</label>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src="holder.js/100%x140" alt="holder">
                          </div>
                          <span class="button btn-system btn-file btn-block">
                            <span class="fileupload-new">Seleccionar</span>
                            <span class="fileupload-exists">Cambiar</span>
                            <input type="file" name="logo_marca" />
                          </span>
                        </div>
                      <?php } ?>
                    </div> 
                  </div> 
<!-- FIN LOGOS -->
                  <div class="col-md-8">
                    <input type="hidden" name="id_marca" id="id_marca" class="form-control" value="<?php echo $detalle->id_marca;?>" >
                    <div class="col-md-4 mb10">
                        <label>Nombre Marca</label>
                        <input type="text" name="nombre_marca" id="nombre_marca" class="form-control" value="<?php echo $detalle->nombre_marca;?>" >
                    </div>
                    <div class="col-md-4 mb10">
                        <label>Titulo / desripción corta Marca</label>
                        <input type="text" name="titulo_marca" id="titulo_marca" class="form-control" value="<?php echo $detalle->titulo_marca;?>">
                    </div>
                    <div class="col-md-4 mb10">
                        <label>Enlace / Página WEB</label>
                        <input type="text" name="enlace_marca" class="form-control" value="<?php echo $detalle->enlace_marca;?>">
                    </div>
                    <div class="col-md-4 mb10">
                        <label>Contacto Comercial</label>
                        <input type="text" name="contacto_marca" class="form-control" value="<?php echo $detalle->contacto_marca;?>">
                    </div>
                    <div class="col-md-4 mb10 pull-right">
                        <label>Email</label>
                        <input type="email" name="email_marca" class="form-control" value="<?php echo $detalle->email_marca;?>">
                    </div>
                    <div class="col-md-4 mb10 pull-right">
                        <label>Categoría Actual: </label>
                        <select id="product-category" name="id_categoria" class="form-control">
                        <option value="<?php echo $detalle->id_categoria;?>" selected="selected"><?php echo $detalle->nombre_categoria;?> </option>
                        <option value="<?php echo $detalle->id_categoria;?>">- Cambiar por: - </option>
                        <?php foreach ($categorias ->result() as $categoria) { ?>
                          <option value="<?php echo $categoria -> id_categoria ?>"><?php echo $categoria -> nombre_categoria ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-8 mb10">
                        <label>Descripción </label>
                        <input type="text" name="descripcion_marca" id="descripcion_marca" class="form-control" value="<?php echo $detalle->descripcion_marca;?>">
                    </div>
                    <div class="col-md-4 mb10 pull-right">
                        <label>Cargo del contacto</label>
                        <input type="text" name="cargo_contacto_marca" class="form-control" value="<?php echo $detalle->cargo_contacto_marca;?>">
                    </div>
                    <div class="col-md-12 pl15 "> Sede 1: </div>
                    <div class="col-md-4 mb10">
                        <label>Telefonos</label>
                        <input type="text" name="telefonos_marca" class="form-control" value="<?php echo $detalle->telefonos_marca;?>">
                    </div>
                    <div class="col-md-4 mb10">
                        <label>Dirección</label>
                        <input type="text" name="direccion_marca" class="form-control" value="<?php echo $detalle->direccion_marca;?>">
                    </div>
                    <div class="col-md-4 mb10">
                        <label>Ciudad</label>
                        <input type="text" name="ciudad_marca" class="form-control" value="<?php echo $detalle->ciudad_marca;?>">
                    </div>

                    <div class="col-md-12 pl15 "> Sede 2: </div>
                    <div class="col-md-4 mb10">
                        <label>Telefonos</label>
                        <input type="text" name="telefonos2_marca" class="form-control" value="<?php echo $detalle->telefonos2_marca;?>">
                    </div>
                    <div class="col-md-4 mb10">
                        <label>Dirección</label>
                        <input type="text" name="direccion2_marca" class="form-control" value="<?php echo $detalle->direccion2_marca;?>">
                    </div>
                    <div class="col-md-4 mb10">
                        <label>Ciudad</label>
                        <input type="text" name="ciudad2_marca" class="form-control" value="<?php echo $detalle->ciudad2_marca;?>">
                    </div>

                    <div class="col-md-12 pl15 "> Sede 3: </div>
                    <div class="col-md-4 mb10">
                        <label>Telefonos</label>
                        <input type="text" name="telefonos3_marca" class="form-control" value="<?php echo $detalle->telefonos3_marca;?>">
                    </div>
                    <div class="col-md-4 mb10">
                        <label>Dirección</label>
                        <input type="text" name="direccion3_marca" class="form-control" value="<?php echo $detalle->direccion3_marca;?>">
                    </div>
                    <div class="col-md-4 mb10">
                        <label>Ciudad</label>
                        <input type="text" name="ciudad3_marca" class="form-control" value="<?php echo $detalle->ciudad3_marca;?>">
                    </div>

                    <div class="col-md-12 pl15 text-right">
                        <hr class="short alt">
                      <input type="submit" name="crear_marca" class="btn btn-danger" value="Actualizar Marca">
                    </div>
                  </div>
              </form> <!-- FIN FORMULARIO -->
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
      return confirm('¿Está seguro de borrar esta marca?');
    });
    "use strict";
    // Init Theme Core    
    Core.init();

  });
  </script>
  <!-- END: PAGE SCRIPTS -->
</body>
</html>
