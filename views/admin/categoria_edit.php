    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
      <!-- Start: Topbar -->
      <header id="topbar" class="hidden">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="dashboard.html">Dashboard</a>
            </li>
            <li class="crumb-icon">
              <a href="dashboard.html">
                <span class="glyphicon glyphicon-home"></span>
              </a>
            </li>
            <li class="crumb-link">
              <a href="dashboard.html">Home</a>
            </li>
            <li class="crumb-trail">Dashboard</li>
          </ol>
        </div>
      </header>
      <!-- End: Topbar -->
      <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">
      <div class="panel panel-warning">
        <div class="panel-heading">
           <span class="panel-icon"></span>
           <span class="panel-title"> Informacion General</span>
        </div>    
        <div class="panel-body border">
                      <!-- TRAE LA CONSULTA DE 1 SOLO ROW -->
              <?php $detalle = $detalle_categoria->row(); ?>
            <form action="<?php echo base_url();?>admin/categorias/update_categoria/<?php echo $detalle->id_categoria;?>" method="post" accept-charset="utf-8">   <!-- FORMULARIO INSERTAR -->
                <div class="col-md-3">
                  <label for="nombre_categoria"> Nombre de la Categoría</label>
                  <input type="text" name="nombre_categoria" id="nombre_categoria" class="form-control" value="<?php echo $detalle->nombre_categoria;?>">
                </div>
                <div class="col-md-4 mb10">
                  <label for="tipo_categoria">Tipo de categoria</label>
                    <select id="tipo_categoria" name="tipo_categoria" class="form-control">
                        <option value="<?php echo $detalle->tipo_categoria;?>" selected="selected"> <?php echo $detalle->tipo_categoria;?></option>
                        <option value="profesionales">Profesionales</option>
                        <option value="productos">Productos</option>
                    </select>
                </div>
                <div class="col-md-4 mb10">
                  <label for="id_padre">Categoria Padre</label>
                    <select id="id_padre" name="id_padre" class="form-control">
                        <option value="0"> - Definir como Categoría Superior - </option>
                        <?php foreach ($categorias ->result() as $cat) { ?>
                          <option value="<?php echo $cat -> id_categoria ?>"><?php echo $cat-> nombre_categoria ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-12 pl15 text-right">
                    <hr class="short alt">
                      <button class="btn btn-danger" type="submit">Actualizar Categoría</button>
                </div>
            </form>
          </div>
        </div>
      </section>
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
    // Init Demo JS  
   // Demo.init();

  });
  </script>
  <!-- END: PAGE SCRIPTS -->
</body>