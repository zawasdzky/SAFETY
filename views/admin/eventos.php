    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
      <!-- Start: Topbar -->
      <header id="topbar" class="">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="">eventos</a>
            </li>
            <li class="crumb-icon">
              <a href="<?php echo base_url();?>admin/">
                <span class="glyphicon glyphicon-home"></span>
              </a>
            </li>
            <li class="crumb-trail">eventos</li>
          </ol>
        </div>
      </header>
      <!-- End: Topbar -->
      <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">

            <!-- INICIO TAB PANEL -->
            <div class="panel mb25 mt5">
              <div class="panel-heading">
                <span class="panel-title hidden-xs"> <i class="fa fa-cubes text-danger"></i> Agregar un nuevo Elemento</span>
                <ul class="nav panel-tabs-border panel-tabs">
                  <li class="active"><a href="#tab1_1" data-toggle="tab">General</a></li>
                  <li><a href="#tab1_2" data-toggle="tab">Fotos</a></li>
                  <li><a href="#tab1_3" data-toggle="tab">Contenido</a></li>
                </ul>
              </div>
              <form action="<?php echo base_url();?>admin/Eventos/insertar_evento" enctype="multipart/form-data"  method="post" accept-charset="utf-8">   <!-- FORMULARIO INSERTAR -->
              <div class="panel-body p20 pb10">
                <div class="tab-content pn br-n admin-form">
                  <div id="tab1_1" class="tab-pane active">
                    <div class="section row mbn">
                      <div class="col-md-12 pl15">

                         <div class="col-md-6 mb10">
                          <label>Nombre evento</label>
                          <input type="text" name="nombre_evento" id="nombre_evento" class="form-control" placeholder="Nombre o titulo">
                          </div>

                          <div class="col-md-6 mb10">
                              <label>Tipo de evento</label>
                              <input type="text" name="tipo_evento" id="tipo_evento" class="form-control" placeholder="Congreso/Capacitación/feria...">
                          </div>

                          <div class="col-md-6 mb10">
                              <label>Enlace</label>
                              <input type="text" name="enlace_evento" id="enlace_evento" class="form-control" placeholder="www...">
                          </div>

                          <div class="col-md-3 mb10">
                              <label>Ciudad del Evento</label>
                              <input type="text" name="ciudad_evento" id="ciudad_evento" class="form-control" placeholder="Ciudad">
                          </div>

                          <div class="col-md-3 mb10">
                              <label>Orden (para widget)</label>
                              <input type="number" name="orden_evento" id="orden_evento" class="form-control">
                          </div>

                          <div class="col-md-12 mb10">
                              <label>Dirección del Evento</label>
                              <input type="text" name="direccion_evento" id="direccion_evento" class="form-control" placeholder="Dirección">
                          </div>

                          <div class="col-md-3 mb10">
                              <label>Hora Inicio </label>
                              <input type="text" name="hora_inicio_evento" id="hora_inicio_evento" class="form-control" placeholder="12:00 am">
                          </div>
                          <div class="col-md-3 mb10">
                              <label>Hora fin </label>
                              <input type="text" name="hora_fin_evento" id="hora_fin_evento" class="form-control" placeholder="12:00 pm">
                          </div>
                          <div class="col-md-3 mb10">
                              <label>Fecha de inicio</label>
                              <input type="date" name="fecha_inicio_evento" id="fecha_inicio_evento" class="form-control" >
                          </div>
                          <div class="col-md-3 mb10">
                              <label>Fecha de finalización</label>
                              <input type="date" name="fecha_fin_evento" id="fecha_fin_evento" class="form-control">
                          </div>
                      </div> 
                    </div>
                  </div>
                  <!-- end tab-->
                  <!-- INICIO TAB 2 -->
                <div id="tab1_2" class="tab-pane">

                  <div class="col-md-4">
                    <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                      <div class="fileupload-preview thumbnail mb20">
                        <img data-src=" " alt="Foto Widget 200 x 200">
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

                  
                  <div class="col-md-12">
                    <hr class="short alt">
                    <br>
                  </div>
                  <div class="col-md-4">
                    <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                      <div class="fileupload-preview thumbnail mb20">
                        <img data-src=" " alt="Foto sliders 770 x 373">
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
                        <img data-src=" " alt="Foto 2">
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
                        <img data-src=" " alt="Foto 4">
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
                        <img data-src=" " alt="Foto 5">
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

                </div><!-- FIN TAB 2 -->
                  <!-- INICIO TAB 2 -->
                <div id="tab1_3" class="tab-pane">
                  <div class="section row">
                    <div class="col-md-12">
                        <textarea name="descripcion_corta_evento" id="descripcion_corta_evento" >
                             Descripción Corta o de listados / Widget
                        </textarea>
                    </div>
                    <div class="col-md-12">
                        <textarea name="descripcion_evento" id="descripcion_evento"  >
                            Descripción Completa / detallada
                        </textarea>
                    </div>
                </div><!-- FIN TAB 2 -->
              </div> <!--end  tab-content  -->
            </div> <!-- end panel-heading -->
            <div class="col-md-12 pl15">
                <hr class="short alt">

                  <div class="col-md-6 text-right">
                     <input type="submit" name="crear_evento" class="btn btn-danger" value="Crear evento">
                  </div>
            </div>
          </form>
        </div> <!-- End panel mb25 mt5 -->
            <!-- FIN  TAB PANEL -->

        <!-- INICIO DATA TABLE -->
        <div class="row">
          <div class="panel panel-visible" id="spy2">
            <div class="panel-heading">
              <div class="panel-title hidden-xs">
                <span class="glyphicon glyphicon-tasks"></span>Listado de eventos</div>
            </div>
            <div class="panel-body pn">
              <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Orden</th>
                    <th>Ciudad</th>
                    <th>Editar / Borrar</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach ($eventos_solutions ->result() as $item) { ?>
                    <tr>
                      <td><?php echo $item -> id_evento ?></td>
                      <td><img src="<?php echo base_url()."fotos_eventos/".$item -> foto0?>" width=50 ></td>
                      <td><?php echo $item -> nombre_evento ?></td>
                      <td><?php echo $item -> tipo_evento ?></td>
                      <td><?php echo $item -> orden_evento ?></td>
                      <td><?php echo $item -> ciudad_evento ?></td>
                      <td>  
                            <a href="<?php echo base_url();?>admin/eventos/evento_edit/<?php echo $item -> id_evento ?>" type="button" class="btn btn-warning" > 
                            <span class="fa fa-pencil"></span> </a>
                            <a href="<?php echo base_url();?>admin/eventos/borrar_evento/<?php echo $item -> id_evento ?>" type="button" class="btn btn-danger confirmation" ><span class="fa fa-trash-o"></span></a>
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
      return confirm('¿Está seguro de borrar este Producto?');
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
      "iDisplayLength": 50,
      "aLengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ],
      "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
      "oTableTools": {
        "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
      }
    });
         // Init Ckeditor
    CKEDITOR.replace('descripcion_evento', {
      height: 210,
      on: {
        instanceReady: function(evt) {
          $('.cke').addClass('admin-skin cke-hide-bottom');
        }
      },
    });

    CKEDITOR.replace('descripcion_corta_evento', {
      height: 100,
      on: {
        instanceReady: function(evt) {
          $('.cke').addClass('admin-skin cke-hide-bottom');
        }
      },
    });
//END CKEDITOR
    // Add Placeholder text to datatables filter bar
    $('.dataTables_filter input').attr("placeholder", "Buscar");

  });
  </script>
  <!-- END: PAGE SCRIPTS -->
  <!-- END: PAGE SCRIPTS -->
</body>
</html>
