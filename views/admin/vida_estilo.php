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
              <a href="#">Gestión de articulos vida y estilo</a>
            </li>
            <li class="crumb-trail">Articulos vida y estilo</li>
          </ol>
        </div>
      </header>
      <!-- End: Topbar -->
        <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">
            <!-- INICIO TAB PANEL -->
            <div class="panel mb25 mt5">
              <div class="panel-heading">
                <span class="panel-title hidden-xs"> <i class="fa fa-cubes text-danger"></i> Agregar un nuevo articulo de Vida y estilo</span>
                <ul class="nav panel-tabs-border panel-tabs">
                  <li class="active"><a href="#tab1_1" data-toggle="tab">General</a></li>
                  <li><a href="#tab1_2" data-toggle="tab">Fotos</a></li>
                  <li><a href="#tab1_3" data-toggle="tab">Contenido</a></li>
                </ul>
              </div>
              <form action="<?php echo base_url();?>admin/Vida_estilo/insertar_vida_estilo" enctype="multipart/form-data"  method="post" accept-charset="utf-8">    <!-- FORMULARIO INSERTAR -->
              <div class="panel-body p20 pb10">
                <div class="tab-content pn br-n admin-form">
                  <div id="tab1_1" class="tab-pane active">
                    <div class="section row mbn">
                      <div class="col-md-12 pl15">

                        <div class="col-md-3 mb10">
                          <label for="titulo_vida_estilo" class="field prepend-icon">
                          <input type="text" name="titulo_vida_estilo" id="titulo_vida_estilo" class="event-name gui-input br-light light" placeholder="Título" required>
                          <label for="titulo_vida_estilo" class="field-icon">
                            <i class="fa fa-ticket"></i>
                          </label>
                          </label>
                        </div>

                        <div class="col-md-3 mb10">
                          <label for="subtitulo_vida_estilo" class="field prepend-icon">
                          <input type="text" name="subtitulo_vida_estilo" id="subtitulo_vida_estilo" class="event-name gui-input br-light light" placeholder="Subtítulo">
                          <label for="subtitulo_vida_estilo" class="field-icon">
                            <i class="fa fa-cubes"></i>
                          </label>
                          </label>
                        </div>

                        <div class="col-md-3 mb10">
                          <label for="id_tipo" class="field select">
                            <select id="id_tipo" name="tipo_vida_estilo" required>
                              <option value="">- Sección -</option>
                              <option value="Kids">Kids</option>
                              <option value="Men">Men</option>
                              <option value="Women">Women</option>
                              <option value="Reflexionemos">Reflexionemos</option>
                            </select>
                            <i class="arrow double"></i>
                          </label>
                        </div>

                        <div class="col-md-3 mb10">
                          <label for="keywords_vida_estilo" class="field prepend-icon">
                          <input type="text" name="keywords_vida_estilo" id="keywords_vida_estilo" class="event-name gui-input br-light light" placeholder="Palabras clave" required>
                          <label for="keywords_vida_estilo" class="field-icon">
                            <i class="fa fa-tags"></i>
                          </label>
                          </label>
                        </div>
                        <div class="col-md-3 mb10">
                          <label for="video_vida_estilo" class="field prepend-icon">
                          <input type="text" name="video_vida_estilo" id="video_vida_estilo" class="event-name gui-input br-light light" placeholder="video vida_estilo">
                          <label for="video_vida_estilo" class="field-icon">
                            <i class="fa fa-youtube-play"></i>
                          </label>
                          </label>
                        </div>
                        <div class="col-md-3 mb10">
                          <label for="estado_vida_estilo" class="field select">
                          <select id="estado_vida_estilo" name="estado_vida_estilo" required="">
                            <option value="activo" selected="selected"> - Estado - </option>
                            <option value="activo">Activo</option>
                            <option value="inactivo">inactivo</option>
                          </select>
                          <i class="arrow double"></i>
                          </label>
                        </div>
                        <div class="col-md-3 mb10">
                          <label for="url_amigable" class="field prepend-icon">
                          <input type="text" name="url_amigable_vida_estilo" id="url_amigable_vida_estilo" class="event-name gui-input br-light light" placeholder="url amigable" required>
                          <label for="url_amigable" class="field-icon">
                            <i class="fa fa-link"></i>
                          </label>
                          </label>
                        </div>
                        <div class="col-md-3 mb10">
                          <label for="fecha_publica_vida_estilo" class="field prepend-icon">
                          <input type="date" name="fecha_publica_vida_estilo" id="fecha_publica_vida_estilo" class="event-name gui-input br-light light" required>
                          <label for="fecha_publica_vida_estilo" class="field-icon">
                            <i class="fa fa-calendar"></i>
                          </label>
                          </label>
                        </div>
                        <div class="col-md-2 mb10">
                          <label for="orden_vida_estilo" class="field prepend-icon">
                          <input type="number" name="orden_vida_estilo" id="orden_vida_estilo" class="event-name gui-input br-light light"  placeholder ="orden" required>
                          <label for="orden_vida_estilo" class="field-icon">
                            <i class="fa fa-arrows-v"></i>
                          </label>
                          </label>
                        </div>
                        <div class="col-md-3 mb10">
                          <label> PDF Descargable</label>
                          <input type="file" name="ficha_vida_estilo">                          
                      </div> 
                        <div class="col-md-12 mb10"> 
                              <textarea name="descripcion_vida_estilo" class="form-control">Descripción para listados</textarea>
                        </div>                  
                    </div> 
                  </div>
                </div><!-- end tab-->
                  <!-- INICIO TAB 2 -->
                <div id="tab1_2" class="tab-pane">

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
                        <img data-src=" " alt="Icono vida_estilo">
                      </div>
                      <div class="row">
                        <div class="col-xs-5">
                          <span class="button btn-system btn-file btn-block">
                            <span class="fileupload-new">Seleccionar</span>
                            <span class="fileupload-exists">cambiar</span>
                            <input type="file" name="icono_vida_estilo">
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    <hr class="short alt">
                    <br>
                  </div>
                  <div class="col-md-4">
                    <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                      <div class="fileupload-preview thumbnail mb20">
                        <img data-src=" " alt="Foto Principal 1">
                      </div>
                      <div class="row">
                        <div class="col-xs-5">
                          <span class="button btn-system btn-file btn-block">
                            <span class="fileupload-new">Seleccionar</span>
                            <span class="fileupload-exists">cambiar</span>
                            <input type="file" name="foto1">
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>

                   <div class="col-md-4">
                    <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                      <div class="fileupload-preview thumbnail mb20">
                        <img data-src=" " alt="Foto Principal 2">
                      </div>
                      <div class="row">
                        <div class="col-xs-5">
                          <span class="button btn-system btn-file btn-block">
                            <span class="fileupload-new">Seleccionar</span>
                            <span class="fileupload-exists">cambiar</span>
                            <input type="file" name="foto2">
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                      <div class="fileupload-preview thumbnail mb20">
                        <img data-src=" " alt="Foto Principal 3">
                      </div>
                      <div class="row">
                        <div class="col-xs-5">
                          <span class="button btn-system btn-file btn-block">
                            <span class="fileupload-new">Seleccionar</span>
                            <span class="fileupload-exists">cambiar</span>
                            <input type="file" name="foto3">
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <hr class="short alt">
                    <br>
                  </div>
                  <div class="col-md-4">
                    <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                      <div class="fileupload-preview thumbnail mb20">
                        <img data-src=" " alt="Pauta 1 660 x 130">
                      </div>
                      <div class="row">
                        <div class="col-xs-5">
                          <span class="button btn-system btn-file btn-block">
                            <span class="fileupload-new">Seleccionar</span>
                            <span class="fileupload-exists">cambiar</span>
                            <input type="file" name="foto4">
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-4">
                    <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                      <div class="fileupload-preview thumbnail mb20">
                        <img data-src=" " alt="Pauta 2 660 x 130">
                      </div>
                      <div class="row">
                        <div class="col-xs-5">
                          <span class="button btn-system btn-file btn-block">
                            <span class="fileupload-new">Seleccionar</span>
                            <span class="fileupload-exists">cambiar</span>
                            <input type="file" name="foto5">
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                      <div class="fileupload-preview thumbnail mb20">
                        <img data-src=" " alt="Pauta 3 660 x 130">
                      </div>
                      <div class="row">
                        <div class="col-xs-5">
                          <span class="button btn-system btn-file btn-block">
                            <span class="fileupload-new">Seleccionar</span>
                            <span class="fileupload-exists">cambiar</span>
                            <input type="file" name="foto6">
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>

                </div><!-- FIN TAB 2 -->
                  <!-- INICIO TAB 2 -->
                <div id="tab1_3" class="tab-pane">
                  <div class="section row">
                    <div class="col-md-12">
                        <textarea name="contenido_vida_estilo" id="contenido_vida_estilo"  rows="20">
                            Contenido...
                        </textarea>
                    </div>
                </div><!-- FIN TAB 2 -->
              </div> <!--end  tab-content  -->
            </div> <!-- end panel-heading -->
            <div class="col-md-12 pl15">
                <hr class="short alt">

                <div class="col-md-6 text-left">
                  <div class="switch switch-danger round switch-inline">
                  Destacado en Listado
                    <input name="destacado_vida_estilo" id="exampleCheckboxSwitch6" type="checkbox" value="si" >
                    <label for="exampleCheckboxSwitch6"></label>
                  </div>
                </div>
                  <div class="col-md-6 text-right">
                     <input type="submit" name="crear_vida_estilo" class="btn btn-danger" value="Crear vida_estilo">
                  </div>
            </div>
          </form>
        </div> <!-- End panel mb25 mt5 -->
            <!-- FIN  TAB PANEL -->

            <!-- DATA TABLE -->
              <div class="panel panel-visible" id="spy2">
                <div class="panel-heading">
                  <div class="panel-title hidden-xs">
                    <span class="glyphicon glyphicon-tasks"></span>Listado de vida_estilo</div>
                </div>
                <div class="panel-body pn">
                  <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Orden</th>
                        <th>Foto</th>
                        <th>Titulo</th>
                        <th>Estado</th>
                        <th>Sección</th>
                        <th>Editar</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articulos_vida_estilo ->result() as $vida_estilo) { ?>
                        <tr>
                          <td align="center"><?php echo $vida_estilo -> orden_vida_estilo ?></td>
                          <td><img src="<?php echo base_url()."fotos_vida_estilo/".$vida_estilo -> foto0 ?>" width=50 ></td>
                          <td><?php echo $vida_estilo -> titulo_vida_estilo ?></td>
                          <td><?php echo $vida_estilo -> estado_vida_estilo ?></td>
                          <td><?php echo $vida_estilo -> tipo_vida_estilo ?></td>
                          <td>  
                            <a href="<?php echo base_url();?>admin/Vida_estilo/vida_estilo_edit/<?php echo $vida_estilo -> id_vida_estilo ?>" type="button" class="btn btn-warning" > 
                            <span class="fa fa-pencil"></span> </a>
                            <a href="<?php echo base_url();?>admin/Vida_estilo/borrar_vida_estilo/<?php echo $vida_estilo -> id_vida_estilo ?>" type="button" class="btn btn-danger confirmation" > 
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
      return confirm('¿Está seguro de borrar este vida_estilo?');
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
    CKEDITOR.replace('contenido_vida_estilo', {
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
