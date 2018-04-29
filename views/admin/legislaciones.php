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
              <a href="#">Gestión de legislaciones</a>
            </li>
            <li class="crumb-trail">legislaciones</li>
          </ol>
        </div>
      </header>
      <!-- End: Topbar -->
        <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">
            <!-- INICIO TAB PANEL -->
            <div class="panel mb25 mt5">
              <div class="panel-heading">
                <span class="panel-title hidden-xs"> <i class="fa fa-cubes text-danger"></i> Agregar una legislación</span>
                <ul class="nav panel-tabs-border panel-tabs">
                  <li class="active"><a href="#tab1_1" data-toggle="tab">General</a></li>
                  <!-- <li><a href="#tab1_2" data-toggle="tab">Fotos</a></li> -->
                </ul>
              </div>
              <form action="<?php echo base_url();?>admin/legislaciones/insertar_legislacion" enctype="multipart/form-data"  method="post" accept-charset="utf-8">    <!-- FORMULARIO INSERTAR -->
              <div class="panel-body p20 pb10">
                <div class="tab-content pn br-n admin-form">
                  <div id="tab1_1" class="tab-pane active">
                    <div class="section row mbn">
                      <div class="col-md-12 pl15">

                       <div class="col-md-3 mb10">
                          <label for="titulo_legislacion" class="field prepend-icon">
                          <input type="text" name="titulo_legislacion" id="titulo_legislacion" class="event-name gui-input br-light light" placeholder="Titulo Legislación" required>
                          <label for="titulo_legislacion" class="field-icon">
                            <i class="fa fa-ticket"></i>
                          </label>
                          </label>
                        </div>

                        <div class="col-md-3 mb10">
                          <label for="id_tipo" class="field select">
                            <select id="id_tipo" name="tipo_legislacion" required>
                              <option value="">- Tipo Legislación -</option>
                              <option value="Ambiental">Ambiental</option>
                              <option value="Laboral">Laboral</option>
                              <option value="Minera">Minera</option>
                              <option value="Petrolera">Petrolera</option>
                              <option value="Salud">Salud</option>
                              <option value="Transporte">Transporte</option>
                              <option value="Otros">Otros</option>
                            </select>
                            <i class="arrow double"></i>
                          </label>
                        </div>

                        <div class="col-md-3 mb10">
                          <label for="id_categoria" class="field select">
                            <select id="id_categoria" name="categoria_legislacion" required>
                              <option value="">- Categoría Legislación -</option>
                              <option value="Circulares">Circular</option>
                              <option value="Conceptos">Concepto</option>
                              <option value="Decretos">Decreto</option>
                              <option value="Leyes">Ley</option>
                              <option value="Resoluciones">Resolución</option>
                              <option value="Oficios">Oficio</option>
                            </select>
                            <i class="arrow double"></i>
                          </label>
                        </div>

                        <div class="col-md-3 mb10">
                          <label for="keywords_legislacion" class="field prepend-icon">
                          <input type="text" name="keywords_legislacion" id="keywords_legislacion" class="event-name gui-input br-light light" placeholder="Palabras clave para búsquedas" required>
                          <label for="keywords_legislacion" class="field-icon">
                            <i class="fa fa-search"></i>
                          </label>
                          </label>
                        </div>
                        <div class="col-md-3 mb10">
                          <label for="estado_legislacion" class="field select">
                          <select id="estado_legislacion" name="estado_legislacion" required="">
                            <option value="activo" selected="selected"> - Estado - </option>
                            <option value="activo">Activo</option>
                            <option value="inactivo">inactivo</option>
                          </select>
                          <i class="arrow double"></i>
                          </label>
                        </div>
                        <div class="col-md-3 mb10">
                          <label for="fecha_legislacion" class="field prepend-icon">
                          <input type="date" name="fecha_legislacion" id="fecha_legislacion" class="event-name gui-input br-light light" required>
                          <label for="fecha_legislacion" class="field-icon">
                            <i class="fa fa-calendar"></i>
                          </label>
                          </label>
                        </div>

                        <div class="col-md-6 mb10">
                          <label for="url_descarga_legislacion" class="field prepend-icon">
                          <input type="text" name="url_descarga_legislacion" id="url_descarga_legislacion" class="event-name gui-input br-light light" placeholder="url Descarga Externa" required>
                          <label for="url_descarga_legislacion" class="field-icon">
                            <i class="fa fa-link"></i>
                          </label>
                          </label>
                        </div>

<!--                         <div class="col-md-3 mb10">
                          <label> PDF Descargable </label>
                          <input type="file" name="ficha_legislacion">                          
                        </div>  -->
                        <div class="col-md-12 mb10"> 
                              <textarea name="descripcion_legislacion" class="form-control">Descripción</textarea>
                        </div>                  
                    </div> 
                  </div>
                </div><!-- end tab-->
                  <!-- INICIO TAB 2 -->
<!--                 <div id="tab1_2" class="tab-pane">

                  <div class="col-md-4">
                    <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                      <div class="fileupload-preview thumbnail mb20">
                        <img data-src=" " alt="Foto Listados">
                      </div>
                      <div class="row">
                        <div class="col-xs-5">
                          <span class="button btn-system btn-file btn-block">
                            <span class="fileupload-new">Seleccionar</span>
                            <span class="fileupload-exists">cambiar</span>
                            <input type="file" name="foto0">
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                      <div class="fileupload-preview thumbnail mb20">
                        <img data-src=" " alt="Icono legislacion">
                      </div>
                      <div class="row">
                        <div class="col-xs-5">
                          <span class="button btn-system btn-file btn-block">
                            <span class="fileupload-new">Seleccionar</span>
                            <span class="fileupload-exists">cambiar</span>
                            <input type="file" name="icono_legislacion">
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  

                </div> -->

            </div> <!-- end panel-heading -->
            <div class="col-md-12 pl15">
                <hr class="short alt">

                  <div class="col-md-6 text-right">
                     <input type="submit" name="crear_legislacion" class="btn btn-danger" value="Crear legislacion">
                  </div>
            </div>
          </form>
        </div> <!-- End panel mb25 mt5 -->
            <!-- FIN  TAB PANEL -->

            <!-- DATA TABLE -->
              <div class="panel panel-visible" id="spy2">
                <div class="panel-heading">
                  <div class="panel-title hidden-xs">
                    <span class="glyphicon glyphicon-tasks"></span>Listado de legislaciones</div>
                </div>
                <div class="panel-body pn">
                  <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>ID</th>                        
                        <th>Fecha Legislación</th>
                        <th>Titulo</th>
                        <th>Tipo</th>
                        <th>Estado</th>
                        <th>categoria</th>
                        <th>PDF</th>
                        <th>Editar</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($legislaciones ->result() as $legislacion) { ?>
                        <tr>
                          <td><?php echo $legislacion -> id_legislacion; ?></td>                          
                          <td><?php echo $legislacion -> fecha_legislacion; ?></td>
                          <td><?php echo $legislacion -> titulo_legislacion; ?></td>
                          <td><?php echo $legislacion -> tipo_legislacion; ?></td>
                          <td><?php echo $legislacion -> estado_legislacion; ?></td>
                          <td><?php echo $legislacion -> categoria_legislacion; ?></td>
                          <td> <?php if ($legislacion-> url_descarga_legislacion) {   ?><a href="<?php echo $legislacion-> url_descarga_legislacion; ?>" target="_blank">Ver PDF</a>  <?php } ?></td>
                          <td>  

                            <a href="<?php echo base_url();?>admin/legislaciones/legislacion_edit/<?php echo $legislacion -> id_legislacion ?>" type="button" class="btn btn-warning" > 
                            <span class="fa fa-pencil"></span> </a>
                            <a href="<?php echo base_url();?>admin/legislaciones/borrar_legislacion/<?php echo $legislacion -> id_legislacion ?>" type="button" class="btn btn-danger confirmation" > 
                            <span class="fa fa-trash-o"></span> </a>
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
    <!-- Ckeditor JS -->
  <script src="https://cdn.ckeditor.com/4.6.1/full-all/ckeditor.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {

    $(".confirmation").click(function(){
      return confirm('¿Está seguro de borrar este legislacion?');
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
      "order": [[ 0, "desc" ]],      
      "iDisplayLength": 100,
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
    CKEDITOR.replace('contenido_legislacion', {
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
