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
              <a href="#">Gestión de varios</a>
            </li>
            <li class="crumb-trail">varios</li>
          </ol>
        </div>
      </header>
      <!-- End: Topbar -->
        <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">
            <!-- INICIO TAB PANEL -->
            <div class="panel mb25 mt5">

              <div class="panel-heading ">
                <span class="panel-title hidden-xs"> <i class="fa fa-cubes text-danger"></i> CREAR CONTENIDO<span>
                <ul class="nav panel-tabs-border panel-tabs">
                  <li class="active"><a href="#tab1_1" data-toggle="tab">Frases</a></li>
                  <li><a href="#tab1_2" data-toggle="tab">Videos</a></li>
                </ul>
              </div>

              <div class="panel-body p20 pb10">
                <div class="tab-content pn br-n admin-form">
                  <div id="tab1_1" class="tab-pane active">
                    <div class="alert alert-danger">
                      <strong>CREAR FRASE</strong>
                    </div>
                    <form action="<?php echo base_url();?>admin/varios/insertar_varios" enctype="multipart/form-data"  method="post" accept-charset="utf-8">    <!-- FORMULARIO INSERTAR -->
                      <div class="section row mbn">
                        <div class="col-md-12 pl15">
                          <input type="hidden" name="tipo_varios" value="frase" />
                          <div class="col-md-2 mb10">
                            <label>Orden</label>
                            <input type="number" name="orden_varios" id="orden_varios" class="event-name gui-input br-light light" required/>
                          </div>

                          <div class="col-md-10 mb10"> 
                            <label>Frase Completa</label>
                                <textarea name="texto_varios" class="form-control">Frase..</textarea>
                          </div>                  
                        </div> 
                      </div>
                      <div class="row text-center">
                       <input type="submit" name="crear_Frase" class="btn btn-danger" value="Subir Frase">
                      </div>
                    </form>
                    <hr>
                    <!-- LISTADO FRASES -->
                    <div class="row clearfix">
                      <div class="alert alert-warning">
                        <strong>LISTADO DE FRASES</strong>
                      </div>
                      <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>Orden</th>
                            <th>Frase</th>
                            <th>Editar</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($frases -> result() as $frase) { ?>
                            <tr>
                              <td><?php echo $frase -> orden_varios ?></td> 
                              <td><?php echo $frase -> texto_varios ?></td> 
                              <td>  
                                <a href="<?php echo base_url();?>admin/varios/varios_edit/<?php echo $frase -> id_varios ?>" type="button" class="btn btn-warning" > 
                                <span class="fa fa-pencil"></span> </a>
                                <a href="<?php echo base_url();?>admin/varios/borrar_varios/<?php echo $frase-> id_varios ?>" type="button" class="btn btn-danger confirmation" > 
                                <span class="fa fa-trash-o"></span> </a>
                              </td>
                            </tr>
                            <?php  } ?>
                        </tbody>
                      </table>
                    </div>
                  <!-- FIN LISTADO FRASES -->
                </div>
                <!--FIN TAB FRASES-->

                <!-- INICIO TAB 2 -->
                <div id="tab1_2" class="tab-pane">
                  <div class="col-md-12">  
                    <div class="alert alert-danger">
                      <strong>CREAR VIDEO</strong>
                    </div>   
                    <form action="<?php echo base_url();?>admin/varios/insertar_varios" enctype="multipart/form-data"  method="post" accept-charset="utf-8">    <!-- FORMULARIO INSERTAR -->
                      <div class="col-md-2 mb10">
                        <label>Orden</label>
                        <input type="number" name="orden_varios" id="orden_varios" class="event-name gui-input br-light light" required>
                      </div>

                      <input type="hidden" name="tipo_varios" value="video"/>

                      <div class="col-md-6 mb10">
                        <label>Titulo Video</label>
                        <input type="titulo_varios" name="titulo_varios" id="titulo_varios" class="form-control" required>
                      </div>

                      <div class="col-md-12 mb10">
                        <label>Enlace Video</label>
                        <input type="enlace_varios" name="enlace_varios" id="enlace_varios" class="form-control" required placeholder="Enlace completo">
                      </div> 

                      <div class="col-md-12 mb10">
                        <label>Descripción Corta</label>
                        <input type="descripcion_corta" name="descripcion_corta" id="descripcion_corta" class="form-control" required placeholder="Enlace completo">
                      </div> 

                      <div class="col-md-6 text-right">
                       <input type="submit" name="crear_video" class="btn btn-danger" value="Subir Video">
                      </div>
                    </form>
                  </div>  
                  
                <!-- LISTADO VIDEOS -->
                  <div class="col-md-12">
                    <div class="alert alert-warning">
                      <strong>LISTADO DE VIDEOS</strong>
                    </div>
                      <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>Orden</th>
                            <th>Video</th>
                            <th>Titulo</th>
                            <th>Editar</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($videos -> result() as $frase) { ?>
                            <tr>
                              <td><?php echo $frase -> orden_varios ;?></td> 
                              <td><?php echo $frase -> enlace_varios ;?></td> 
                              <td><?php echo $frase -> titulo_varios ;?></td>
                              <td>  
                                <a href="<?php echo base_url();?>admin/varios/varios_edit/<?php echo $frase -> id_varios ?>" type="button" class="btn btn-warning" > 
                                <span class="fa fa-pencil"></span> </a>
                                <a href="<?php echo base_url();?>admin/varios/borrar_varios/<?php echo $frase-> id_varios ?>" type="button" class="btn btn-danger confirmation" > 
                                <span class="fa fa-trash-o"></span> </a>
                              </td>
                            </tr>
                            <?php  } ?>
                        </tbody>
                      </table>
                    </div>
                  <!-- FIN LISTADO VIDEOS -->
                </div>
                <!-- FIN TAB 2 -->
                </div>
              </div> 
            <!-- FIN  TAB PANEL -->
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
      return confirm('¿Está seguro de borrar?');
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
    CKEDITOR.replace('contenido_varios', {
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
