    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
      <!-- Start: Topbar -->
      <header id="topbar" class="">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="../">Gestor Safety Solutions</a>
            </li>
            <li class="crumb-icon">
              <a href="../">
                <span class="glyphicon glyphicon-home"></span>
              </a>
            </li>
            <li class="crumb-link">
              <a href="../">Gestión de encuestas</a>
            </li>
            <li class="crumb-trail">encuestas</li>
          </ol>
        </div>
      </header>
      <!-- End: Topbar -->
        <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">

              <div class="panel panel-success">
                <div class="panel-heading">
                   <span class="panel-icon"></span>
                   <span class="panel-title">Crear Nueva encuesta</span>
                </div>    

                <div class="panel-body border">
                <form action="<?php echo base_url();?>admin/encuestas/insertar_encuesta" enctype="multipart/form-data"  method="post" accept-charset="utf-8">  
                  <div class="col-md-10 mb10">
                    <label for="titulo_encuesta" class="field prepend-icon">Titulo / Pregunta de la Encuesta</label>
                    <input type="text" name="titulo_encuesta" id="titulo_encuesta" class="form-control" placeholder="Esta de acuerdo con...." required>
                  </div>

                  <div class="col-md-2 mb10">          
                    <label for="estado_encuesta"> Estado </label>
                    <select id="estado_encuesta" name="estado_encuesta" class="form-control">
                      <option value="Activa">Activa</option>
                      <option value="Inactiva">Inactiva</option>
                    </select>
                  </div>

                  <div class="col-md-12 pl15 text-center">
                    <br />
                   <input type="submit" class="btn btn-success" value="Crear Nueva encuesta">
                  </div>
                  </form>
                </div>
              </div>

              <div class="panel panel-visible" id="spy2">
                <div class="panel-heading">
                  <div class="panel-title hidden-xs">
                    <span class="glyphicon glyphicon-tasks"></span>Listado de encuestas</div>
                </div>
                <div class="panel-body pn">
                  <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Estado</th>
                        <th>Titulo / Pregunta</th>
                        <th>Editar / Borrar</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($encuestas ->result() as $encuesta) { ?>
                        <tr>
                          <td align="center"><?php echo $encuesta -> estado_encuesta ?></td>
                          <td><?php echo $encuesta -> titulo_encuesta ?></td>
                          <td>  
                            <a href="<?php echo base_url();?>admin/encuestas/encuesta_edit/<?php echo $encuesta -> id_encuesta ?>" type="button" class="btn btn-warning" > 
                            <span class="fa fa-pencil"></span> </a>
                            <a href="<?php echo base_url();?>admin/encuestas/borrar_encuesta/<?php echo $encuesta -> id_encuesta ?>" type="button" class="btn btn-danger confirmation" > 
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
      return confirm('¿Está seguro de borrar este encuesta?');
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
    CKEDITOR.replace('contenido_encuesta', {
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
