    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
      <!-- Start: Topbar -->
      <header id="topbar" class="">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="">profesionales</a>
            </li>
            <li class="crumb-icon">
              <a href="<?php echo base_url();?>admin/">
                <span class="glyphicon glyphicon-home"></span>
              </a>
            </li>
            <li class="crumb-trail">profesionales</li>
          </ol>
        </div>
      </header>
      <!-- End: Topbar -->
      <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">
        <!-- INICIO TAB PANEL -->
          <div class="panel mb25 mt5">
            <div class="panel-heading">
              <span class="panel-title hidden-xs"> <i class="fa fa-cubes text-danger"></i> Agregar Profesional</span>
              <ul class="nav panel-tabs-border panel-tabs">
                <li class="active">
                  <a href="#tab1_1" data-toggle="tab">General</a>
                </li>
              </ul>
            </div>
            <div class="panel-body p20 pb10">
              <div class="tab-content pn br-n admin-form">
              <!-- Inicio tab1 -->
                <div id="tab1_1" class="tab-pane active">
                  <div class="section row mbn">
                    <div class="col-md-4">
                    <form action="<?php echo base_url();?>admin/profesionales/insertar_profesional" enctype="multipart/form-data"  method="post" accept-charset="utf-8">   <!-- FORMULARIO INSERTAR -->
                      <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                        <div class="fileupload-preview thumbnail mb20">
                          <img data-src="" alt="Foto">
                        </div>
                        <div class="row">
                          <div class="col-xs-7 pr5">
                            <input type="text" name="keywords_profesional" id="Keywords_profesional" class="text-center event-name gui-input br-light bg-light" placeholder="Palabras clave">
                            <label for="name2" class="field-icon"></label>
                          </div>
                          <div class="col-xs-5">
                            <span class="button btn-system btn-file btn-block">
                              <span class="fileupload-new">Seleccionar</span>
                              <span class="fileupload-exists">Cambiar</span>
                              <input type="file" name="foto_profesional" />
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 pl15">
                      <div class="col-md-6 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="nombre_profesional" id="nombre" class="event-name gui-input br-light light" placeholder="Nombre del profesional" required>
                          <label for="name2" class="field-icon">
                            <i class="fa fa-user"></i>
                          </label>
                        </label>
                      </div>
                      <div class="col-md-6 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="ciudad_profesional" id="ciudad_profesional" class="event-name gui-input br-light light" placeholder="Ciudad" required>
                          <label for="name2" class="field-icon">
                            <i class="fa fa-map-marker"></i>
                          </label>
                        </label>
                      </div>
                      <div class="col-md-6 mb10">
                        <label for="product-category" class="field select">
                          <select id="product-category" name="categoria_profesional">
                           <option value="" selected="selected"> - Categoría - </option>
                          <?php foreach ($categorias_profesionales ->result() as $item) { ?>
                                <option value="<?php echo $item->id_categoria; ?>"> <?php echo $item->nombre_categoria; ?></option>
                          <?php } ?>
                          </select>
                          <i class="arrow double"></i>
                        </label>
                      </div>
                      <div class="col-md-6 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="titulo_profesional" id="titulo_profesional" class="event-name gui-input br-light light" placeholder="Titulo / Descripción corta" required>
                          <label for="titulo" class="field-icon">
                            <i class="fa fa-comments"></i>
                          </label>
                        </label>
                      </div>
                      <div class="col-md-6 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="correo_profesional" id="correo_profesional" class="event-name gui-input br-light light" placeholder="correo" required>
                          <label for="correo_profesional" class="field-icon">
                            <i class="fa fa-envelope"></i>
                          </label>
                        </label>
                      </div>
                      <div class="col-md-6 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="telefono_profesional" id="telefono_profesional" class="event-name gui-input br-light light" placeholder="Teléfonos Profesional" required>
                          <label for="enlace_profesional" class="field-icon">
                            <i class="fa fa-phone"></i>
                          </label>
                        </label>
                      </div>
                      <div class="col-md-6 mb10">
                          <p> Hoja de vida Profesional</p>
                        <input type="file" name="cv_profesional" required="">                          
                      </div> 
                    </div>
                    <div class="col-md-12 mb10">
                        <textarea name="descripcion_profesional" id="descripcion_profesional"  rows="20">
                            Descripción
                        </textarea>
                    </div>
                    <div class="col-md-12 pl15 text-center">
                      <input type="submit" name="crear_profesional" class="btn btn-danger" value="Crear profesional">
                    </div>
                    </form> <!-- FIN FORMULARIO -->
                  </div>
                </div>
                <!-- fin tab1 -->
              </div>
            </div>
          </div>

        <!-- FIN  TAB PANEL -->
        <!-- INICIO DATA TABLE -->
        <div class="row">
          <div class="panel panel-visible" id="spy2">
            <div class="panel-heading">
              <div class="panel-title hidden-xs">
                <span class="glyphicon glyphicon-tasks"></span>Listado de profesionales</div>
            </div>
            <div class="panel-body pn">
              <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Titulo</th>
                    <th>Categoria</th>
                    <th>Teléfono</th>
                    <th>Ciudad</th>
                    <th>Editar / Borrar</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($profesionales ->result() as $profesional) { ?>
                    <tr>
                      <td><?php echo $profesional -> id_profesional ?></td>
                      <td><img src="<?php echo base_url()."cv_profesionales/".$profesional -> foto_profesional?>" width=50 ></td>
                      <td><?php echo $profesional -> nombre_profesional ?></td>
                      <td><a href="mailto:<?php echo $profesional -> correo_profesional ?>"><?php echo $profesional -> correo_profesional ?></a> </td>
                      <td><?php echo $profesional -> nombre_categoria ?></td>
                      <td><?php echo $profesional -> telefono_profesional ?></td>
                      <td><?php echo $profesional -> ciudad_profesional ?></td>
                      <td>  
                            <a href="<?php echo base_url();?>admin/profesionales/profesional_edit/<?php echo $profesional -> id_profesional ?>" type="button" class="btn btn-warning" > 
                            <span class="fa fa-pencil"></span> </a>
                            <a href="<?php echo base_url();?>admin/profesionales/borrar_profesional/<?php echo $profesional -> id_profesional ?>" type="button" class="btn btn-danger confirmation" ><span class="fa fa-trash-o"></span></a>
                      </td>
                    </tr>
                    <?php  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- FIN DATA TABLE -->
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
      return confirm('¿Está seguro de borrar?');
    });

    "use strict";
    // Init Theme Core    
    Core.init();
    // Init Demo JS  
    //Demo.init();
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
      "iDisplayLength": 5,
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

// Init Ckeditor
    CKEDITOR.replace('descripcion_profesional', {
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
  <!-- END: PAGE SCRIPTS -->
</body>
</html>
