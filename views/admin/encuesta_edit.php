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
        <!-- TRAE LA CONSULTA DE 1 SOLO ROW -->
        <?php $detalle = $detalle_encuesta->row();  $id_encuesta =  $detalle-> id_encuesta; ?>
        <div class="panel panel-warning">
          <div class="panel-heading">
             <span class="panel-icon"></span>
             <span class="panel-title">Pregunta de la Encuesta</span>
          </div>    

          <div class="panel-body border">
          <form action="<?php echo base_url();?>admin/encuestas/update_encuesta/<?php echo $detalle->id_encuesta;?>" enctype="multipart/form-data"  method="post" accept-charset="utf-8">  
            <div class="col-md-10 mb10">
              <label for="titulo_encuesta" class="field prepend-icon">Titulo / Pregunta de la Encuesta</label>
              <input type="text" name="titulo_encuesta" id="titulo_encuesta" class="form-control" value="<?php echo $detalle-> titulo_encuesta; ?>" required>
            </div>

            <div class="col-md-2 mb10">          
              <label for="estado_encuesta"> Estado </label>
              <select id="estado_encuesta" name="estado_encuesta" class="form-control">
                <option value="<?php echo $detalle->estado_encuesta; ?>" selected="selected"> <?php echo $detalle-> estado_encuesta; ?></option>
                <option value="Inactiva">----Cambiar a:----</option>
                <option value="Activa">Activa</option>
                <option value="Inactiva">Inactiva</option>
              </select>
            </div>
            <div class="col-md-12 pl15 text-center">
              <br />
             <input type="submit" class="btn btn-danger" value="Modificar Pregunta">
            </div>
            </form>
          </div>
        </div>

        <?php $detalle = $detalle_encuesta->row();  $id_encuesta =  $detalle-> id_encuesta; ?>
        <div class="panel panel-success">
          <div class="panel-heading">
             <span class="panel-icon"></span>
             <span class="panel-title"> Agregar Opcion de respuesta</span>
          </div>    

          <div class="panel-body border">
            <form action="<?php echo base_url();?>admin/encuestas/agregar_respuesta/<?php echo $detalle->id_encuesta;?>" enctype="multipart/form-data"  method="post" accept-charset="utf-8">   <!-- FORMULARIO INSERTAR -->
            <div class="col-md-10 mb10">
              <label for="respuesta" class="field prepend-icon">Opción de respuesta</label>
              <input type="text" name="respuesta" id="respuesta" class="form-control" placeholder="Si, No, etc... " required>
            </div>
            <div class="col-md-2 mb10">
              <label for="orden_respuesta" class="field prepend-icon">Orden respuesta</label>
              <input type="text" name="orden_respuesta" id="orden_respuesta" class="form-control" placeholder="a, 1, A.." required>
            </div>
            <div class="col-md-12 pl15 text-center">
              <br /> 
             <input type="submit" class="btn btn-success" value="Agregar Opción de Respuesta">
            </div>
           </form>
          </div>
        </div>

        <div class="panel panel-dark">
          <div class="panel-heading">
             <span class="panel-icon"></span>
             <span class="panel-title"> Preguntas Encuesta</span>
          </div>    
          <div class="panel-body border">
              <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>Orden pregunta</th>
                      <th>Pregunta</th>
                      <th>Puntaje</th>
                      <th>Borrar</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($respuestas_encuesta ->result() as $respuesta) { ?>
                  <tr>
                    <td align="center"><?php echo $respuesta -> orden_respuesta; ?></td>
                    <td><?php echo $respuesta -> respuesta; ?></td>
                    <td><?php echo $respuesta -> puntaje; ?></td>
                    <td>  
                      <a href="<?php echo base_url();?>admin/encuestas/respuesta_edit/<?php echo $respuesta -> id_respuesta ?>" type="button" class="btn btn-warning" > 
                      <span class="fa fa-pencil"></span> </a>
                      <a href="<?php echo base_url();?>admin/encuestas/borrar_respuesta_encuesta/<?php echo $respuesta -> id_respuesta ?>" type="button" class="btn btn-danger confirmation" > 
                      <span class="fa fa-trash-o"></span> </a>
                    </td>
                  </tr>
                  <?php  } ?>
              </tbody>
            </table>                        
          </div>
        </div>
      </section>

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

      $( "#agregar_categoria" ).click(function(){
        var id_categoria = $( "select#id_categoria option:checked" ).val();
        var id_encuesta = <?php echo $id_encuesta;?>;
        $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>admin/encuestas/agregar_categoria_encuesta/",
        data: {"id_encuesta" : id_encuesta, "id_categoria":id_categoria},
         success: function()
            {
                location.reload();
            }
      });
    });

    $(".confirmation").click(function(){
      return confirm('¿Está seguro de borrar?');
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
    CKEDITOR.replace('contenido_encuesta', {
      height: 210,
      on: {
        instanceReady: function(evt) {
          $('.cke').addClass('admin-skin cke-hide-bottom');
        }
      },
    });

  });


</script>  
  <!-- END: PAGE SCRIPTS -->
</body>
</html>
