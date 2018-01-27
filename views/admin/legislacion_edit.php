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
        <!-- TRAE LA CONSULTA DE 1 SOLO ROW -->
        <?php $detalle = $detalle_legislacion->row();  $id_legislacion =  $detalle-> id_legislacion; ?>
        <form action="<?php echo base_url();?>admin/legislaciones/update_legislacion/<?php echo $detalle->id_legislacion;?>" enctype="multipart/form-data"  method="post" accept-charset="utf-8">   <!-- FORMULARIO INSERTAR -->
        <div class="panel panel-warning">
          <div class="panel-heading">
             <span class="panel-icon"></span>
             <span class="panel-title"> Informacion General</span>
          </div>    
          <div class="panel-body border">
            <div class="col-md-3 mb10">
              <label for="titulo_legislacion" class="field prepend-icon">Título del legislacion</label>
              <input type="text" name="titulo_legislacion" id="titulo_legislacion" class="form-control" value="<?php echo $detalle-> titulo_legislacion; ?>" required>
            </div>
            <div class="col-md-3 mb10">
              <label for="keywords_legislacion" class="field prepend-icon">Palabras Clave </label>
              <input type="text" name="keywords_legislacion" id="keywords_legislacion" class="form-control" value="<?php echo $detalle-> keywords_legislacion; ?>">
            </div>
            <div class="col-md-3 mb10">
              <label for="url_amigable" class="field prepend-icon"> URL Amigable (sin espacios...) </label>
              <input type="text" name="url_amigable_legislacion" id="url_amigable_legislacion" class="form-control" value="<?php echo $detalle-> url_amigable_legislacion; ?>">
            </div>
            <div class="col-md-2 mb10">          
              <label for="estado_legislacion"> Estado </label>
              <select id="estado_legislacion" name="estado_legislacion" class="form-control">
                <option value="<?php echo $detalle->estado_legislacion; ?>" selected="selected"> <?php echo $detalle-> estado_legislacion; ?></option>
                <option value="activo">Activo</option>
                <option value="inactivo">inactivo</option>
              </select>
            </div>
            <div class="col-md-3 mb10">
              <label for="estado_legislacion"> Tipo Legislación </label>
                <select id="tipo" name="tipo_legislacion" class="form-control">
                  <option value="<?php echo $detalle-> tipo_legislacion; ?>"><?php echo $detalle-> tipo_legislacion; ?></option>
                  <option value="<?php echo $detalle-> tipo_legislacion; ?>"> ---- Cambiar a:----</option>
                  <option value="">- Tipo Legislación -</option>
                  <option value="Ambiental">Ambiental</option>
                  <option value="Laboral">Laboral</option>
                  <option value="Minera">Minera</option>
                  <option value="Petrolera">Petrolera</option>
                  <option value="Salud">Salud</option>
                  <option value="Transporte">Transporte</option>
                  <option value="Otros">Otros</option>
                </select>
            </div>
            <div class="col-md-3 mb10">
              <label for="estado_legislacion"> Categoría Legislación </label>
                <select id="tipo" name="tipo_legislacion" class="form-control">
                  <option value="<?php echo $detalle-> categoria_legislacion; ?>"><?php echo $detalle-> categoria_legislacion; ?></option>
                  <option value="<?php echo $detalle-> categoria_legislacion; ?>"> ---- Cambiar a:----</option>
                  <option value="Circular">Circular</option>
                  <option value="Concepto">Concepto</option>
                  <option value="Decreto">Decreto</option>
                  <option value="Ley">Ley</option>
                  <option value="Salud">Salud</option>
                  <option value="Resolucion">Resolución</option>
                  <option value="Oficio">Oficio</option>
                </select>
            </div>
            <div class="col-md-12 mb10"> 
              <label>Descripción</label>
                  <textarea name="descripcion_legislacion" class="form-control"><?php echo $detalle-> descripcion_legislacion; ?></textarea>
            </div> 
            <div class="col-md-12 mb10""> <hr> </div> 
            <div class="col-md-12 mb10">
                <div class="col-md-2 mb10">
                  <label for="fecha_legislacion"> Fecha Expedición </label>
                  <input type="date" name="fecha_legislacion" class="form-control"  id="fecha_legislacion" value="<?php echo $detalle-> fecha_legislacion; ?>">
                </div>
                <div class="col-md-6 mb10">
                <?php if ($detalle-> ficha_legislacion) {  ?>
                  <label> PDF descargable</label><br>
                  <input type="hidden" name="ficha_legislacion" value="<?php echo $detalle-> ficha_legislacion; ?>">
                  <a href="<?php echo base_url();?>legislaciones/<?php echo $detalle-> ficha_legislacion; ?>" type="button" class="btn btn-primary btn-small"> <span class="fa fa-file-text"></span> <?php echo $detalle-> ficha_legislacion; ?></a>   
                  <a href="<?php echo base_url();?>admin/legislaciones/borrar_ficha/<?php echo $detalle->id_legislacion;?>" type="button" class="btn btn-danger btn-small"> <span class="fa fa-trash-o"></span> Borrar</a>
                  <?php }else{ ?>
                    <label> Ficha / PDF del legislacion</label>
                    <input type="file" name="ficha_legislacion"> 
                  <?php } ?>
                </div> 
                <div class="col-md-2">
                <?php if ($detalle-> foto0) { ?>
                  <input type="hidden" name="foto0" value="<?php echo $detalle->foto0; ?>">
                  <label>Foto Listados</label>
                  <img src="<?php echo base_url();?>legislaciones/<?php echo $detalle->foto0;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/legislaciones/borrar_foto/<?php echo $detalle->id_legislacion;?>/foto0/<?php echo $detalle->foto0;?>" type="button" data-style="zoom-out" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Foto_Listados">
                          </div>
                          <div class="row">
                              <span class="button btn-system btn-file btn-block">
                                <span class="fileupload-new">Seleccionar</span>
                                <span class="fileupload-exists">cambiar</span>
                                <input type="file" name="foto0">
                              </span>
                          </div>
                        </div>
                <?php } ?>
                </div> 
                <div class="col-md-2">
                <?php if ($detalle-> icono_legislacion) { ?>
                  <input type="hidden" name="icono_legislacion" value="<?php echo $detalle->icono_legislacion; ?>">
                  <label>Icono legislacion</label>
                  <img src="<?php echo base_url();?>legislaciones/<?php echo $detalle->icono_legislacion;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/legislaciones/borrar_foto/<?php echo $detalle->id_legislacion;?>/icono_legislacion/<?php echo $detalle->icono_legislacion;?>" type="button" data-style="zoom-out" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Icono</a>
                <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Icono legislacion">
                          </div>
                          <div class="row">
                              <span class="button btn-system btn-file btn-block">
                                <span class="fileupload-new">Seleccionar</span>
                                <span class="fileupload-exists">cambiar</span>
                                <input type="file" name="icono_legislacion">
                              </span>
                          </div>
                        </div>
                <?php } ?>
                </div> 
            </div>
            <div class="mb10 row"> <br> </div>
            <div class="col-md-12 pl15 text-right">
              <hr class="short alt">
             <input type="submit" name="actualizar_legislacion" class="btn btn-danger" value="Actualizar legislacion">
            </div>
        </div>
        </div>
        </form> <!-- FIN FORMULARIO -->
      </section>
        <!-- End: Content -->
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
      $( "#agregar_categoria" ).click(function(){
        var id_categoria = $( "select#id_categoria option:checked" ).val();
        var id_legislacion = <?php echo $id_legislacion;?>;
        $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>admin/legislaciones/agregar_categoria_legislacion/",
        data: {"id_legislacion" : id_legislacion, "id_categoria":id_categoria},
         success: function()
            {
                location.reload();
            }
      });
    });
    $(".confirmation").click(function(){
      return confirm('¿Está seguro de borrar esto?');
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
  });
</script>  
  <!-- END: PAGE SCRIPTS -->
</body>
</html>
