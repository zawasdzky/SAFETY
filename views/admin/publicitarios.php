    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
      <!-- Start: Topbar -->
      <header id="topbar" class="">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="">publicitarios</a>
            </li>
            <li class="crumb-icon">
              <a href="<?php echo base_url();?>admin/">
                <span class="glyphicon glyphicon-home"></span>
              </a>
            </li>
            <li class="crumb-trail">publicitarios</li>
          </ol>
        </div>
      </header>
      <!-- End: Topbar -->
      <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">
        <!-- INICIO TAB PANEL -->
          <div class="panel mb25 mt5">
            <div class="panel-heading">
              <span class="panel-title hidden-xs"> <i class="fa fa-cubes text-danger"></i> Agregar publicitario</span>
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
                    <form action="<?php echo base_url();?>admin/publicitarios/insertar_publicitario" enctype="multipart/form-data"  method="post" accept-charset="utf-8">   <!-- FORMULARIO INSERTAR -->
                      <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                        <div class="fileupload-preview thumbnail mb20">
                          <img data-src="" alt="Foto">
                        </div>
                        <div class="row">
                          <div class="col-xs-6">
                            <span class="button btn-system btn-file btn-block">
                              <span class="fileupload-new">Seleccionar</span>
                              <span class="fileupload-exists">Cambiar</span>
                              <input type="file" name="foto_publicitario" />
                            </span>
                          </div>
                          <div class="col-md-6">
                            <div class="col-md-6">
                                <label>Orden / Posición </label>
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="orden_publicitario" class="form-control" value="1">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 pl15">
                      <div class="col-md-6 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="nombre_publicitario" id="nombre" class="event-name gui-input br-light light" placeholder="Nombre / titulo" required>
                          <label for="name2" class="field-icon">
                            <i class="fa fa-user"></i>
                          </label>
                        </label>
                      </div>
                      <div class="col-md-6 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="titulo_publicitario" id="titulo_publicitario" class="event-name gui-input br-light light" placeholder="Subtitulo" required>
                          <label for="name2" class="field-icon">
                            <i class="fa fa-map-comments"></i>
                          </label>
                        </label>
                      </div>
                      <div class="col-md-8 mb10">
                        <select name="tipo_publicitario" class="form-control">
                          <option value="">Tipo / Ubicación  </option>
                          <option value="Header Superior Derecho">Header Superior Derecho (456 x 47)</option>
                          <option value="Slider Home">Slider Home (1200 x 400) </option>
                          <option value="Home Superior Izquierdo">Home Superior Izquierdo (340 x 768)</option>
                          <option value="Home Superior Derecho">Home Superior Derecho (170 x 200)</option>
                          <option value="Home Central Vertical">Home Central Vertical (153 x 695)</option>
                          <option value="Home Central Inferior">Home Central Inferior (750 x 200)</option>
                          <option value="Home Vertical Inferior">Home Vertical Inferior (170 x 600)</option>
                          <option value="Home Columna Derecha">Home Columna Derecha(300 x 250)</option>
                          <option value="Home Footer central">Footer Central (352 x 193)</option>
                          <option value="Pauta Columna Derecha Talento Humano">Pauta Columna Derecha Talento Humano (350 x 250)</option>
                          <option value="Pauta Central Horizontal Talento Humano">Pauta Central Horizontal Talento Humano(750 x 200)</option>
                          <option value="Pauta Columna Derecha Salud y Bienestar">Pauta Columna Derecha Salud y Bienestar (350 x 250)</option>
                          <option value="Pauta Vertical Central Salud y Bienestar">Pauta Vertical Central Salud y Bienestar (153 x 695)</option>
                          <option value="Pauta Central Horizontal Salud y Bienestar">Pauta Central Horizontal Salud y Bienestar(750 x 200)</option>
                          <option value="Pauta Superior Derecha Vida y Estilo">Pauta Superior Derecha Vida y Estilo (152 x 152)</option>
                          <option value="Pauta Vertical Central Vida y Estilo">Pauta Vertical Central Vida y Estilo (153 x 695)</option>
                          <option value="Pauta Central Horizontal Vida y Estilo">Pauta Central Horizontal Vida y Estilo(750 x 200)</option>
                          <option value="Pauta Columna Derecha Vida y Estilo">Pauta Columna Derecha Vida y Estilo (350 x 250)</option>
                          <option value="Pauta Columna Derecha Seguros">Pauta Columna Derecha Seguros (350 x 250)</option>
                          <option value="Pauta Central Horizontal Seguros">Pauta Central Horizontal Seguros(750 x 200)</option>
                          <option value="Pauta Columna Derecha SST">Pauta Columna Derecha SST (350 x 250)</option>                       
                          <option value="Pauta Columna Izquierda SST">Pauta Columna Izquierda SST (350 x 250)</option>
                          <option value="Pauta Central Horizontal SST">Pauta Central Horizontal SST(750 x 200)</option>  
                          <option value="Pauta Columna Izquierda Legislacion">Pauta Columna Izquierda Legislación (350 x 250)</option>
                          <option value="Pauta Central Horizontal Legislacion">Pauta Central Horizontal Legislacion(750 x 200)</option>                            
                          <option value="Pauta Superior Derecha Noticias">Pauta Superior Derecha Noticias (270 x 180)</option>
                          <option value="Pauta Columna Izquierda Noticias">Pauta Columna Izquierda Noticias (350 x 250)</option>
                          <option value="Pauta Columna Derecha Noticias">Pauta Columna Derecha Noticias (350 x 250)</option>
                          <option value="Pauta Central Horizontal Noticias">Pauta Central Horizontal Noticias(750 x 200)</option>                            
                          <option value="Pauta Superior Derecha Sociales">Pauta Superior Derecha Sociales (270 x 180)</option>
                          <option value="Pauta Central Horizontal Sociales">Pauta Central Horizontal Sociales(750 x 200)</option>                            
                          <option value="Pauta Novedades">Pauta Superior derecha Novedades Solutions (270 x 180)</option>                          
                          <option value="Slider Novedades">Slider Novedades Solutions (770 x 373)</option>
                          <option value="Pauta Novedades">Pauta Superior derecha Novedades Solutions (270 x 180)</option>
                          <option value="Columna Derecha">Columna Derecha Solutions</option>
                          <option value="Columna Izquierda">Columna Izquierda Solutions</option>
                          <option value="Columna Central">Columna Central Solutions</option>
                        </select>
                      </div>
                      <div class="col-md-4 mb10">
                        <select name="sitio_publicitario" class="form-control">
                          <option value="">Sitio </option>
                          <option value="Safety_solutions">Safety Solutions</option>
                          <option value="Safetywork">Safetywork</option>
                        </select>
                      </div>
                      <div class="col-md-6 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="enlace_publicitario" id="enlace_publicitario" class="event-name gui-input br-light light" placeholder="Enlace o Link" required>
                          <label for="name2" class="field-icon">
                            <i class="fa fa-map-link"></i>
                          </label>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-12 pl15 text-center">
                    <hr>
                      <input type="submit" name="crear_publicitario" class="btn btn-danger" value="Crear publicitario">
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
                <span class="glyphicon glyphicon-tasks"></span>Listado de publicitarios</div>
            </div>
            <div class="panel-body pn">
              <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Titulo</th>
                    <th>Ubicaión</th>
                    <th>Sitio</th>
                    <th>Orden</th>
                    <th>Enlace</th>
                    <th>Editar / Borrar</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($publicitarios ->result() as $publicitario) { ?>
                    <tr>
                      <td><?php echo $publicitario -> id_publicitario ?></td>
                      <td><img src="<?php echo base_url()."fotos_productos/".$publicitario -> foto_publicitario?>" width=50 ></td>
                      <td><?php echo $publicitario -> nombre_publicitario ?></td>
                      <td><?php echo $publicitario -> titulo_publicitario ?></td>
                      <td><?php echo $publicitario -> tipo_publicitario ?></td>
                      <td><?php echo $publicitario -> sitio_publicitario ?></td>
                      <td><?php echo $publicitario -> orden_publicitario ?></td>
                      <td><?php echo $publicitario -> enlace_publicitario ?></td>
                      <td>  
                            <a href="<?php echo base_url();?>admin/publicitarios/publicitario_edit/<?php echo $publicitario -> id_publicitario ?>" type="button" class="btn btn-warning" > 
                            <span class="fa fa-pencil"></span> </a>
                            <a href="<?php echo base_url();?>admin/publicitarios/borrar_publicitario/<?php echo $publicitario -> id_publicitario ?>" type="button" class="btn btn-danger confirmation" ><span class="fa fa-trash-o"></span></a>
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
      return confirm('¿Está seguro de borrar este social?');
    });

    "use strict";
    // Init Theme Core    
    Core.init();

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

  });
  </script>
  <!-- END: PAGE SCRIPTS -->
  <!-- END: PAGE SCRIPTS -->
</body>
</html>
