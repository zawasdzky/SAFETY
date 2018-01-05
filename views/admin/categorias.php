    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

        <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">
            <!-- INICIO TAB PANEL -->
            <div class="panel mb25 mt5">
              <div class="panel-heading">
                <span class="panel-title hidden-xs"> <i class="fa fa-tags text-danger"></i> Agregar una nueva categoria</span>
                <ul class="nav panel-tabs-border panel-tabs">
                  <li class="active"><a href="#tab1_1" data-toggle="tab"> Formulario</a></li>
                </ul>
              </div>
              <form action="<?php echo base_url();?>admin/categorias/insertar_categoria" method="POST" enctype="multipart/form-data"  accept-charset="utf-8">   <!-- FORMULARIO INSERTAR -->
              <div class="panel-body p20 pb10">
                <div class="tab-content pn br-n admin-form">
                  <div id="tab1_1" class="tab-pane active">
                    <div class="section row mbn">
<!--                         <div class="col-md-4">
                          <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                            <div class="fileupload-preview thumbnail mb20">
                              <img data-src="holder.js/100%x140" alt="holder">
                            </div>
                            <div class="row">
                              <div class="col-xs-5">
                                <span class="button btn-system btn-file btn-block">
                                  <span class="fileupload-new">Seleccionar</span>
                                  <span class="fileupload-exists">cambiar</span>
                                  <input type="file" name="foto_categoria">
                                </span>
                              </div>
                            </div>
                          </div>
                        </div> -->
                        <div class="col-md-4 mb10">
                          <label for="nombre_categoria" class="field prepend-icon">
                          <input type="text" name="nombre_categoria" id="nombre_categoria" class="event-name gui-input br-light light" placeholder="Nombre del categoria" required>
                          <label for="nombre_categoria" class="field-icon">
                            <i class="fa fa-tags"></i>
                          </label>
                          </label>
                        </div>
                        <div class="col-md-4 mb10">
                          <label for="titulo_categoria" class="field prepend-icon">
                          <input type="text" name="titulo_categoria" id="titulo_categoria" class="event-name gui-input br-light light" placeholder="Titulo / Descripción corta" required>
                          <label for="titulo_categoria" class="field-icon">
                            <i class="fa fa-ticket"></i>
                          </label>
                          </label>
                        </div>
                        <div class="col-md-4 mb10">
                          <label for="id_padre" class="field select">
                            <select id="id_padre" name="id_padre">
                            <option value="0" selected="selected"> - Categoría Padre- </option>
                            <?php foreach ($categorias ->result() as $cat) { ?>
                              <option value="<?php echo $cat -> id_categoria ?>"><?php echo $cat-> nombre_categoria ?></option>
                              <?php } ?>
                            </select>
                            <i class="arrow double"></i>
                          </label>
                        </div>
                        <div class="col-md-4 mb10">
                          <label for="tipo_categoria" class="field select">
                            <select id="id_padre" name="tipo_categoria">
                            <option value="ninguna" selected="selected"> - Tipo de Categoria- </option>
                              <option value="profesionales">Profesionales</option>
                              <option value="productos">Productos</option>
                            </select>
                            <i class="arrow double"></i>
                          </label>
                        </div>
                        <div class="col-md-12 pl15 text-right">
                            <hr class="short alt">
                              <button class="btn btn-danger" type="submit">Crear categoria</button>
                        </div>
                    </div>
                  </div><!-- end tab-->
                </div> <!--end  tabs-content  -->
              </div> <!-- end panel-heading -->
            </form>
          </div> <!-- End panel mb25 mt5 -->
            <!-- FIN  TAB PANEL -->

            <!-- DATA TABLE -->
              <div class="panel panel-visible" id="spy2">
                <div class="panel-heading">
                  <div class="panel-title hidden-xs">
                    <span class="glyphicon glyphicon-tasks"></span>Listado de categorias</div>
                </div>
                <div class="panel-body pn">
                  <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                    <thead>
                      <tr>
 						<th>Id Categoria</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Categoria Superior</th>
                        <th>Editar</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categorias ->result() as $categoria) { ?>
                        <tr>
                          <td><?php echo $categoria -> id_categoria ?></td>
                          <td><?php echo $categoria -> nombre_categoria ?></td>
                          <td><?php echo $categoria -> tipo_categoria ?></td>
                          <td><?php echo $categoria -> id_padre ?></td>
                          <td>  
                            <a href="<?php echo base_url();?>admin/Categorias/detalle_categoria/<?php echo $categoria -> id_categoria ?>" type="button" class="btn btn-warning"> <span class="fa fa-pencil"></span> </button> 
                            <a href="<?php echo base_url();?>admin/Categorias/borrar_categoria/<?php echo $categoria -> id_categoria ?>" type="button" class="btn btn-danger confirmation" ><span class="fa fa-trash-o"></span></a>
                          </td>
                        </tr>
                        <?php  } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            <!-- FIN DATA TABLE -->
        </section>
        <!-- End: Content -->
    </section>

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
    // Init Demo JS  
    Demo.init();
    // Init DataTables
        $('#datatable2').dataTable({
      "aoColumnDefs": [{
        'bSortable': false,
        'aTargets': [-1]
      }],
      "oLanguage": {
        "oPaginate": {
          "sPrevious": "",
          "sNext": ""
        }
      },
      "iDisplayLength": 300,
      "aLengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ],
      "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
      "oTableTools": {
        "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
      }
    });
    // Add Placeholder text to datatables filter bar
    $('.dataTables_filter input').attr("placeholder", "Buscar");
  });
  </script>
  <!-- END: PAGE SCRIPTS -->
</body>