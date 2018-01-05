    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
      <!-- Start: Topbar -->
      <header id="topbar" class="">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="">MARCAS</a>
            </li>
            <li class="crumb-icon">
              <a href="<?php echo base_url();?>admin/">
                <span class="glyphicon glyphicon-home"></span>
              </a>
            </li>
            <li class="crumb-trail">Marcas</li>
          </ol>
        </div>
      </header>
      <!-- End: Topbar -->
      <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">
        <!-- INICIO TAB PANEL -->
          <div class="panel mb25 mt5">
            <div class="panel-heading">
              <span class="panel-title hidden-xs"> <i class="fa fa-cubes text-danger"></i> Agregar una Nueva Marca</span>
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
                    <form action="<?php echo base_url();?>admin/Marcas/insertar_marca" enctype="multipart/form-data"  method="post" accept-charset="utf-8">   <!-- FORMULARIO INSERTAR -->
                      <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                        <div class="fileupload-preview thumbnail mb20">
                          <img data-src="holder.js/100%x140" alt="holder">
                        </div>
                        <div class="row">
                          <div class="col-xs-7 pr5">
                            <label>Foto Marca</label>
                          </div>
                          <div class="col-xs-5">
                            <span class="button btn-system btn-file btn-block">
                              <span class="fileupload-new">Seleccionar</span>
                              <span class="fileupload-exists">Cambiar</span>
                              <input type="file" name="foto_marca" />
                            </span>
                          </div>
                        </div>
                      </div>
                       <br>
                       <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                        <div class="fileupload-preview thumbnail mb20">
                          <img data-src="holder.js/100%x140" alt="holder">
                        </div>
                        <div class="row">
                          <div class="col-xs-7 pr5">
                           <label>Logo Marca</label>
                          </div>
                          <div class="col-xs-5">
                            <span class="button btn-system btn-file btn-block">
                              <span class="fileupload-new">Seleccionar</span>
                              <span class="fileupload-exists">Cambiar</span>
                              <input type="file" name="logo_marca" />
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8 pl15">
                      <div class="col-md-6 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="nombre_marca" id="nombre" class="event-name gui-input br-light light" placeholder="Nombre de la marca" required>
                          <label for="name2" class="field-icon">
                            <i class="fa fa-ticket"></i>
                          </label>
                        </label>
                      </div>

                      <div class="col-md-6 mb10">
                        <label for="product-category" class="field select">
                          <select id="product-category" name="id_categoria">
                          <option value="0" selected="selected"> - Categoría - </option>
                          <?php foreach ($categorias ->result() as $categoria) { ?>
                            <option value="<?php echo $categoria -> id_categoria ?>"><?php echo $categoria -> nombre_categoria ?></option>
                            <?php } ?>
                          </select>
                          <i class="arrow double"></i>
                        </label>
                      </div>

                      <div class="col-md-6 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="titulo_marca" id="titulo_marca" class="event-name gui-input br-light light" placeholder="Titulo / Descripción corta" required>
                          <label for="titulo" class="field-icon">
                            <i class="fa fa-comments"></i>
                          </label>
                        </label>
                      </div>

                      <div class="col-md-6 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="contacto_marca" id="contacto_marca" class="event-name gui-input br-light light" placeholder="Nombre contacto comercial" required>
                          <label for="titulo" class="field-icon">
                            <i class="fa fa-user"></i>
                          </label>
                        </label>
                      </div>   

                      <div class="col-md-6 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="email" name="email_marca" id="email_marca" class="event-name gui-input br-light light" placeholder="Email contacto comercial" required>
                          <label for="titulo" class="field-icon">
                            <i class="fa fa-envelope"></i>
                          </label>
                        </label>
                      </div>   

                      <div class="col-md-6 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="enlace_marca" id="enlace_marca" class="event-name gui-input br-light light" placeholder="Enlace sitio web">
                          <label for="enlace_marca" class="field-icon">
                            <i class="fa fa-link"></i>
                          </label>
                        </label>
                      </div>

                      <div class="col-md-6 mb10">
                        <label for="keywords_marca" class="field prepend-icon">
                          <input type="text" name="keywords_marca" id="keywords_marca" class="event-name gui-input br-light light" placeholder="Palabras clave">
                          <label for="enlace_marca" class="field-icon">
                            <i class="fa fa-comments"></i>
                          </label>
                        </label>
                      </div>

                      <div class="col-md-6 mb10">
                        <label for="cargo_contacto_marca" class="field prepend-icon">
                          <input type="text" name="cargo_contacto_marca" id="cargo_contacto_marca" class="event-name gui-input br-light light" placeholder="Cargo del contacto">
                          <label for="enlace_marca" class="field-icon">
                            <i class="fa fa-user"></i>
                          </label>
                        </label>
                      </div>
<!-- SEDES -->
                      <div class="col-md-12 mb10"> <label>Sede1</label> </div>
                      <div class="col-md-12 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="direccion_marca" id="direccion_marca" class="event-name gui-input br-light light" placeholder="Dirección" required>
                          <label for="titulo" class="field-icon">
                            <i class="fa fa-comments"></i>
                          </label>
                        </label>
                      </div>

                      <div class="col-md-12 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="telefonos_marca" id="telefonos_marca" class="event-name gui-input br-light light" placeholder="Números Telefónicos" required>
                          <label for="titulo" class="field-icon">
                            <i class="fa fa-phone"></i>
                          </label>
                        </label>
                      </div>

                      <div class="col-md-12 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="ciudad_marca" id="ciudad_marca" class="event-name gui-input br-light light" placeholder="Ciudad" required>
                          <label for="titulo" class="field-icon">
                            <i class="fa fa-comments"></i>
                          </label>
                        </label>
                      </div>

                      <div class="col-md-12 mb10"> <label>Sede 2</label> </div>

                      <div class="col-md-12 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="direccion_marca" id="direccion2_marca" class="event-name gui-input br-light light" placeholder="Dirección" required>
                          <label for="titulo" class="field-icon">
                            <i class="fa fa-comments"></i>
                          </label>
                        </label>
                      </div>

                      <div class="col-md-12 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="telefonos2_marca" id="telefonos2_marca" class="event-name gui-input br-light light" placeholder="Números Telefónicos" required>
                          <label for="titulo" class="field-icon">
                            <i class="fa fa-phone"></i>
                          </label>
                        </label>
                      </div>

                      <div class="col-md-12 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="ciudad2_marca" id="ciudad2_marca" class="event-name gui-input br-light light" placeholder="Ciudad" required>
                          <label for="titulo" class="field-icon">
                            <i class="fa fa-comments"></i>
                          </label>
                        </label>
                      </div>
                      <div class="col-md-12 mb10"> <label>Sede 3</label> </div>

                      <div class="col-md-12 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="direccion_marca" id="direccion3_marca" class="event-name gui-input br-light light" placeholder="Dirección" required>
                          <label for="titulo" class="field-icon">
                            <i class="fa fa-comments"></i>
                          </label>
                        </label>
                      </div>

                      <div class="col-md-12 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="telefonos3_marca" id="telefonos3_marca" class="event-name gui-input br-light light" placeholder="Números Telefónicos" required>
                          <label for="titulo" class="field-icon">
                            <i class="fa fa-phone"></i>
                          </label>
                        </label>
                      </div>

                      <div class="col-md-12 mb10">
                        <label for="name2" class="field prepend-icon">
                          <input type="text" name="ciudad3_marca" id="ciudad3_marca" class="event-name gui-input br-light light" placeholder="Ciudad" required>
                          <label for="titulo" class="field-icon">
                            <i class="fa fa-comments"></i>
                          </label>
                        </label>
                      </div>

                    </div>

                      <div class="col-md-12 mb10">
                        <label class="field prepend-icon">
                          <textarea  class="gui-textarea br-light bg-light" id="descripcion_marca" name="descripcion_marca" placeholder="Descripción"></textarea>
                          <label for="descripcion_marca" class="field-icon">
                            <i class="fa fa-comments"></i>
                          </label>
                      </div>

                    <div class="col-md-12 pl15 text-center">
                    <input type="submit" name="crear_marca" class="btn btn-danger" value="Crear Marca">
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
                <span class="glyphicon glyphicon-tasks"></span>Listado de Marcas</div>
            </div>
            <div class="panel-body pn">
              <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Titulo</th>
                    <th>Editar / Borrar</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($marcas ->result() as $marca) { ?>
                    <tr>
                      <td><?php echo $marca -> id_marca ?></td>
                      <td><img src="<?php echo base_url()."fotos_productos/".$marca -> foto_marca?>" width=50 ></td>
                      <td><?php echo $marca -> nombre_marca ?></td>
                      <td><?php echo $marca -> titulo_marca ?></td>
                      <td>  
                            <a href="<?php echo base_url();?>admin/marcas/marca_edit/<?php echo $marca -> id_marca ?>" type="button" class="btn btn-warning" > 
                            <span class="fa fa-pencil"></span> </a>
                            <a href="<?php echo base_url();?>admin/marcas/borrar_marca/<?php echo $marca -> id_marca ?>" type="button" class="btn btn-danger confirmation" ><span class="fa fa-trash-o"></span></a>
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
  <script type="text/javascript">
  jQuery(document).ready(function() {
        $(".confirmation").click(function(){
      return confirm('¿Está seguro de borrar esta marca?');
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
          "sPrevious": "Anterior",
          "sNext": "Siguiente"
        }
      },
      "iDisplayLength": 50,
      "aLengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "Todas"]
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
</html>
