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
              <a href="#">Gestión de productos</a>
            </li>
            <li class="crumb-trail">Productos</li>
          </ol>
        </div>
      </header>
      <!-- End: Topbar -->
        <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">
            <!-- INICIO TAB PANEL -->
            <div class="panel mb25 mt5">
              <div class="panel-heading">
                <span class="panel-title hidden-xs"> <i class="fa fa-cubes text-danger"></i> Agregar un nuevo Producto</span>
                <ul class="nav panel-tabs-border panel-tabs">
                  <li class="active"><a href="#tab1_1" data-toggle="tab">General</a></li>
                  <li><a href="#tab1_2" data-toggle="tab">Fotos</a></li>
                  <li><a href="#tab1_3" data-toggle="tab">Contenido</a></li>
                </ul>
              </div>
              <form action="<?php echo base_url();?>admin/Productos/insertar_producto" enctype="multipart/form-data"  method="post" accept-charset="utf-8">    <!-- FORMULARIO INSERTAR -->
              <div class="panel-body p20 pb10">
                <div class="tab-content pn br-n admin-form">
                  <div id="tab1_1" class="tab-pane active">
                    <div class="section row mbn">
                      <div class="col-md-12 pl15">
                        <div class="col-md-3 mb10">
                          <label for="nombre_producto" class="field prepend-icon">
                          <input type="text" name="nombre_producto" id="nombre_producto" class="event-name gui-input br-light light" placeholder="Nombre del producto" required>
                          <label for="nombre_producto" class="field-icon">
                            <i class="fa fa-cubes"></i>
                          </label>
                          </label>
                        </div>
                        <div class="col-md-3 mb10">
                          <label for="titulo_producto" class="field prepend-icon">
                          <input type="text" name="titulo_producto" id="titulo_producto" class="event-name gui-input br-light light" placeholder="Titulo / Descripción corta" required>
                          <label for="titulo_producto" class="field-icon">
                            <i class="fa fa-ticket"></i>
                          </label>
                          </label>
                        </div>
                        <div class="col-md-3 mb10">
                          <label for="id_categoria" class="field select">
                            <select id="id_categoria" name="id_categoria">
                            <option value="0" selected="selected"> - Categoría - </option>
                            <?php foreach ($categorias ->result() as $categoria) { ?>
                              <option value="<?php echo $categoria -> id_categoria ?>"><?php echo $categoria -> nombre_categoria ?></option>
                              <?php } ?>
                            </select>
                            <i class="arrow double"></i>
                          </label>
                        </div>
                        <div class="col-md-3 mb10">
                          <label for="id_marca" class="field select">
                          <select id="id_marca" name="id_marca">
                          <option value="0" selected="selected"> - Marca - </option>
                          <?php foreach ($marcas ->result() as $marca) { ?>
                            <option value="<?php echo $marca -> id_marca ?>"><?php echo $marca -> nombre_marca ?></option>
                            <?php } ?>
                          </select>
                          <i class="arrow double"></i>
                          </label>
                        </div>
                        <div class="col-md-3 mb10">
                          <label for="enlace_producto" class="field prepend-icon">
                          <input type="text" name="enlace_producto" id="enlace_producto" class="event-name gui-input br-light light" placeholder="Enlace Externo">
                          <label for="enlace_producto" class="field-icon">
                            <i class="fa fa-link"></i>
                          </label>
                          </label>
                        </div>
                        <div class="col-md-3 mb10">
                          <label for="keywords_producto" class="field prepend-icon">
                          <input type="text" name="keywords_producto" id="keywords_producto" class="event-name gui-input br-light light" placeholder="Palabras clave" required>
                          <label for="keywords_producto" class="field-icon">
                            <i class="fa fa-tags"></i>
                          </label>
                          </label>
                        </div>
                        <div class="col-md-3 mb10">
                          <label for="video_producto" class="field prepend-icon">
                          <input type="text" name="video_producto" id="video_producto" class="event-name gui-input br-light light" placeholder="video Producto">
                          <label for="video_producto" class="field-icon">
                            <i class="fa fa-youtube-play"></i>
                          </label>
                          </label>
                        </div>
                        <div class="col-md-3 mb10">
                          <label for="estado_producto" class="field select">
                          <select id="estado_producto" name="estado_producto" required="">
                            <option value="activo" selected="selected"> - Estado - </option>
                            <option value="activo">Activo</option>
                            <option value="inactivo">inactivo</option>
                          </select>
                          <i class="arrow double"></i>
                          </label>
                        </div>
                        <div class="col-md-3 mb10">
                        <label>Url Amigable</label>
                          <label for="url_amigable" class="field prepend-icon">
                          <input type="text" name="url_amigable" id="url_amigable" class="event-name gui-input br-light light" placeholder="nombre_producto_referencia" required>
                          <label for="url_amigable" class="field-icon">
                            <i class="fa fa-link"></i>
                          </label>
                          </label>
                        </div>
                        <div class="col-md-3 mb10">
                        <label>Fecha Publicación Producto</label>
                          <label for="fecha_publicacion_producto" class="field prepend-icon">
                          <input type="date" name="fecha_publicacion_producto" id="fecha_publicacion_producto" class="event-name gui-input br-light light" required>
                          <label for="fecha_publicacion_producto" class="field-icon">
                            <i class="fa fa-calendar"></i>
                          </label>
                          </label>
                        </div>
                        <div class="col-md-3 mb10">
                          <label> Ficha Técnica del producto</label>
                          <input type="file" name="ficha_producto">                          
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
                        <img data-src=" " alt="Icono Producto">
                      </div>
                      <div class="row">
                        <div class="col-xs-5">
                          <span class="button btn-system btn-file btn-block">
                            <span class="fileupload-new">Seleccionar</span>
                            <span class="fileupload-exists">cambiar</span>
                            <input type="file" name="icono_producto">
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
                        <img data-src=" " alt="Foto1">
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
                        <img data-src=" " alt="foto2">
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
                        <img data-src=" " alt="foto3">
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
                        <img data-src=" " alt="Foto4">
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
                        <img data-src=" " alt="foto5">
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
                        <img data-src=" " alt="Foto6">
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
                        <textarea name="contenido_producto" id="contenido_producto"  rows="20">
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
                  Destacado en Home Solutions
                    <input name="destacado_producto" id="exampleCheckboxSwitch6" type="checkbox" value="si" >
                    <label for="exampleCheckboxSwitch6"></label>
                  </div>
                </div>
                  <div class="col-md-6 text-right">
                     <input type="submit" name="crear_producto" class="btn btn-danger" value="Crear Producto">
                  </div>
            </div>
          </form>
        </div> <!-- End panel mb25 mt5 -->
            <!-- FIN  TAB PANEL -->

            <!-- DATA TABLE -->
              <div class="panel panel-visible" id="spy2">
                <div class="panel-heading">
                  <div class="panel-title hidden-xs">
                    <span class="glyphicon glyphicon-tasks"></span>Listado de Productos</div>
                </div>
                <div class="panel-body pn">
                  <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Estado</th>
                        <th>Destacado</th>
                        <th>Editar</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($productos ->result() as $producto) { ?>
                        <tr>
                          <td><?php echo $producto -> id_producto ?></td>
                          <td><img src="<?php echo base_url()."fotos_productos/".$producto -> foto0 ?>" width=50 ></td>
                          <td><?php echo $producto -> nombre_producto ?></td>
                          <td><?php echo $producto -> nombre_marca ?></td>
                          <td><?php echo $producto -> estado_producto ?></td>
                          <td><?php echo $producto -> destacado_producto ?></td>
                          <td>  
                            <a href="<?php echo base_url();?>admin/Productos/producto_edit/<?php echo $producto -> id_producto ?>" type="button" class="btn btn-warning" > 
                            <span class="fa fa-pencil"></span> </a>
                            <a href="<?php echo base_url();?>admin/Productos/borrar_producto/<?php echo $producto -> id_producto ?>" type="button" class="btn btn-danger confirmation" > 
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
  <script src="<?php echo base_url();?>assets_admin/vendor/plugins/ckeditor/ckeditor.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {

    $(".confirmation").click(function(){
      return confirm('¿Está seguro de borrar este Producto?');
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
    CKEDITOR.replace('contenido_producto', {
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
