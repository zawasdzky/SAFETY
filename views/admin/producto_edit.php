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
        <!-- TRAE LA CONSULTA DE 1 SOLO ROW -->
        <?php $detalle = $detalle_producto->row();  $id_producto =  $detalle->id_producto; ?>
        <form action="<?php echo base_url();?>admin/Productos/update_producto/<?php echo $detalle->id_producto;?>" enctype="multipart/form-data"  method="post" accept-charset="utf-8">   <!-- FORMULARIO INSERTAR -->
        <div class="panel panel-warning">
          <div class="panel-heading">
             <span class="panel-icon"></span>
             <span class="panel-title"> Informacion General</span>
          </div>    

          <div class="panel-body border">
            <div class="col-md-3 mb10">
              <label for="nombre_producto" class="field prepend-icon">Nombre del producto </label>
              <input type="text" name="nombre_producto" id="nombre_producto" class="form-control" value="<?php echo $detalle->nombre_producto; ?>" required>
            </div>

            <div class="col-md-6 mb10">
              <label for="titulo_producto" class="field prepend-icon">Titulo / Descripción corta</label>
              <input type="text" name="titulo_producto" id="titulo_producto" class="form-control" value="<?php echo $detalle->titulo_producto; ?>" required>
            </div>



            <div class="col-md-3 mb10">
              <label for="id_marca" class="field select"> Marca </label>
              <select id="id_marca" name="id_marca" class="form-control">
              <option value="<?php echo $detalle->id_marca; ?>" selected="selected"> <?php echo $detalle->nombre_marca; ?></option>
              <?php foreach ($marcas ->result() as $marca) { ?>
                <option value="<?php echo $marca -> id_marca ?>"><?php echo $marca -> nombre_marca ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="col-md-3 mb10">
              <label for="enlace_producto" class="field prepend-icon"> Enlace Externo</label>
              <input type="text" name="enlace_producto" id="enlace_producto" class="form-control" value="<?php echo $detalle->enlace_producto; ?>">
            </div>

            <div class="col-md-6 mb10">
              <label for="keywords_producto" class="field prepend-icon"> Palabras Clave </label>
              <input type="text" name="keywords_producto" id="keywords_producto" class="form-control" value="<?php echo $detalle->keywords_producto; ?>">
            </div>

            <div class="col-md-3 mb10">
              <label for="video_producto" class="field prepend-icon"> Video </label>
              <input type="text" name="video_producto" id="video_producto" class="form-control" value="<?php echo $detalle->video_producto; ?>">
            </div>

            <div class="col-md-3 mb10">
              <label for="url_amigable" class="field prepend-icon"> URL Amigable </label>
              <input type="text" name="url_amigable" id="video_producto" class="form-control" value="<?php echo $detalle->url_amigable; ?>">
            </div>

            <div class="col-md-2 mb10">
              <label for="fecha_publicacion_producto"> Fecha publicación </label>
              <input type="date" name="fecha_publicacion_producto" class="form-control"  id="fecha_publicacion_producto" value="<?php echo $detalle->fecha_publicacion_producto; ?>">
            </div>

            <div class="col-md-2 mb10">          
              <label for="estado_producto"> Estado </label>
              <select id="estado_producto" name="estado_producto" class="form-control">
                <option value="<?php echo $detalle->estado_producto; ?>" selected="selected"> <?php echo $detalle->estado_producto; ?></option>
                <option value="activo">Activo</option>
                <option value="inactivo">inactivo</option>
              </select>
            </div>

            <div class="col-md-12 mb10""> <hr> </div> 

            <div class="col-md-6 mb10">
              <div class="col-md-6 mb10">

                  <select id="id_categoria" name="id_categoria" class="form-control">
                    <option> --Agregar categoria nueva--</option>
                  <?php foreach ($categorias ->result() as $categoria) { ?>
                    <option value="<?php echo $categoria -> id_categoria ?>"><?php echo $categoria -> nombre_categoria ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-md-6 mb10">
                  <button type="button"  id="agregar_categoria" class="btn btn-warning btn-small">Agregar Categoria</button>
                </div>
            </div>

            <div class="col-md-6 mb10">
              <label for="id_categoria"> Categorías asociadas al producto </label><br>
                <?php foreach ($categorias_producto ->result() as $categoria) { ?>
                  <span class="tm-tag tm-tag-info" id="FFQiq_1"><span><?php echo $categoria -> nombre_categoria ?></span>
                  <a href="<?php echo base_url();?>admin/Productos/borrar_categoria_producto/<?php echo $categoria->id_categoria_producto;?>/<?php echo $categoria->id_producto;?>"  class="tm-tag-remove confirmation" ><span class="fa fa-trash-o"></span></a></span>
                  <?php } ?>
            </div>

            <div class="col-md-12 mb10""> <hr> </div> 



            <div class="col-md-12 mb10">
                <div class="col-md-6 mb10">
                <?php if ($detalle->ficha_producto) {  ?>
                  <label> Ficha Técnica del producto</label><br>
                  <input type="hidden" name="ficha_producto" value="<?php echo $detalle->ficha_producto; ?>">
                  <a href="<?php echo base_url();?>fotos_productos/<?php echo $detalle->ficha_producto; ?>" type="button" class="btn btn-primary btn-small"> <span class="fa fa-file-text"></span> <?php echo $detalle->ficha_producto; ?></a>   
                  <a href="<?php echo base_url();?>admin/Productos/borrar_ficha/<?php echo $detalle->id_producto;?>" type="button" class="btn btn-danger btn-small"> <span class="fa fa-trash-o"></span> Borrar Ficha</a>
                  <?php }else{ ?>
                    <label> Ficha Técnica del producto</label>
                    <input type="file" name="ficha_producto"> 
                    <?php } ?>
                </div> 
                <div class="col-md-2 mb10">
                   <div class="switch switch-danger round switch-inline">
                      Destacado en Home Solutions
                      <?php if ( $detalle->destacado_producto == "si") {$check = "checked"; }else{ $check = "";}  ?>
                      <input name="destacado_producto" id="exampleCheckboxSwitch6" type="checkbox" value="si" <?php echo $check; ?> >
                      <label for="exampleCheckboxSwitch6"></label>
                    </div>
                </div>  
                <div class="col-md-2">
                <?php if ($detalle->foto0) { ?>
                  <input type="hidden" name="foto0" value="<?php echo $detalle->foto0; ?>">
                  <label>Foto Listados</label>
                  <img src="<?php echo base_url();?>fotos_productos/<?php echo $detalle->foto0;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/Productos/borrar_foto/<?php echo $detalle->id_producto;?>/foto0/<?php echo $detalle->foto0;?>" type="button" data-style="zoom-out" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
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
                <?php if ($detalle->icono_producto) { ?>
                  <input type="hidden" name="icono_producto" value="<?php echo $detalle->icono_producto; ?>">
                  <label>Icono Producto</label>
                  <img src="<?php echo base_url();?>fotos_productos/<?php echo $detalle->icono_producto;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/Productos/borrar_foto/<?php echo $detalle->id_producto;?>/icono_producto/<?php echo $detalle->icono_producto;?>" type="button" data-style="zoom-out" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Icono</a>
                <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Icono Producto">
                          </div>
                          <div class="row">
                              <span class="button btn-system btn-file btn-block">
                                <span class="fileupload-new">Seleccionar</span>
                                <span class="fileupload-exists">cambiar</span>
                                <input type="file" name="icono_producto">
                              </span>
                          </div>
                        </div>
                <?php } ?>
                </div> 
            </div>

            <div class="mb10 row"> <br> </div>

            <div class="panel panel-alert">
              <div class="panel-heading">
                 <span class="panel-icon"></span>
                 <span class="panel-title"> Fotos del producto</span>
              </div>    
              <div class="panel-body border">

                <div class="col-md-2">
                <?php if ($detalle->foto1) { ?>
                  <input type="hidden" name="foto1" value="<?php echo $detalle->foto1; ?>">
                  <label>Foto 1</label>
                  <img src="<?php echo base_url();?>fotos_productos/<?php echo $detalle->foto1;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/Productos/borrar_foto/<?php echo $detalle->id_producto;?>/foto1/<?php echo $detalle->foto1;?>" type="button" data-style="zoom-out" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Foto1">
                          </div>
                          <div class="row">
                              <span class="button btn-system btn-file btn-block">
                                <span class="fileupload-new">Seleccionar</span>
                                <span class="fileupload-exists">cambiar</span>
                                <input type="file" name="foto1">
                              </span>
                          </div>
                        </div>
                <?php } ?>
                </div> 
                <div class="col-md-2">
                <?php if ($detalle->foto2) { ?>
                <input type="hidden" name="foto2" value="<?php echo $detalle->foto2; ?>">
                  <label>Foto 2</label>
                  <img src="<?php echo base_url();?>fotos_productos/<?php echo $detalle->foto2;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/Productos/borrar_foto/<?php echo $detalle->id_producto;?>/foto2/<?php echo $detalle->foto2;?>" type="button" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                  <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Foto2">
                          </div>
                          <div class="row">
                              <span class="button btn-system btn-file btn-block">
                                <span class="fileupload-new">Seleccionar</span>
                                <span class="fileupload-exists">cambiar</span>
                                <input type="file" name="foto2">
                              </span>
                          </div>
                        </div>
                  <?php } ?>
                </div> 
                <div class="col-md-2">
                <?php if ($detalle->foto3) { ?>
                <input type="hidden" name="foto3" value="<?php echo $detalle->foto3; ?>">
                <label>Foto 3</label>
                  <img src="<?php echo base_url();?>fotos_productos/<?php echo $detalle->foto3;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/Productos/borrar_foto/<?php echo $detalle->id_producto;?>/foto3/<?php echo $detalle->foto3;?>" type="button" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                  <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Foto3">
                          </div>
                          <div class="row">
                              <span class="button btn-system btn-file btn-block">
                                <span class="fileupload-new">Seleccionar</span>
                                <span class="fileupload-exists">cambiar</span>
                                <input type="file" name="foto3">
                              </span>
                          </div>
                        </div>
                  <?php } ?>
                </div>
                <div class="col-md-2">
                <?php if ($detalle->foto4) { ?>
                <input type="hidden" name="foto4" value="<?php echo $detalle->foto4; ?>">
                <label>Foto 4</label>
                  <img src="<?php echo base_url();?>fotos_productos/<?php echo $detalle->foto4;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/Productos/borrar_foto/<?php echo $detalle->id_producto;?>/foto4/<?php echo $detalle->foto4;?>" type="button" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                  <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Foto4">
                          </div>
                          <div class="row">
                              <span class="button btn-system btn-file btn-block">
                                <span class="fileupload-new">Seleccionar</span>
                                <span class="fileupload-exists">cambiar</span>
                                <input type="file" name="foto4">
                              </span>
                          </div>
                        </div>
                  <?php } ?>
                </div> 
                <div class="col-md-2">
                <?php if ($detalle->foto5) { ?>
                <input type="hidden" name="foto5" value="<?php echo $detalle->foto5; ?>">
                <label>Foto 5</label>
                  <img src="<?php echo base_url();?>fotos_productos/<?php echo $detalle->foto5;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/Productos/borrar_foto/<?php echo $detalle->id_producto;?>/foto5/<?php echo $detalle->foto5;?>" type="button" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                  <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Foto5">
                          </div>
                          <div class="row">
                              <span class="button btn-system btn-file btn-block">
                                <span class="fileupload-new">Seleccionar</span>
                                <span class="fileupload-exists">cambiar</span>
                                <input type="file" name="foto5">
                              </span>
                          </div>
                        </div>
                  <?php } ?>
                </div> 
                <div class="col-md-2">
                <?php if ($detalle->foto6) { ?>
                <input type="hidden" name="foto6" value="<?php echo $detalle->foto6; ?>">
                <label>Foto 6</label>
                  <img src="<?php echo base_url();?>fotos_productos/<?php echo $detalle->foto6;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/Productos/borrar_foto/<?php echo $detalle->id_producto;?>/foto6/<?php echo $detalle->foto6;?>" type="button" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                  <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Foto6">
                          </div>
                          <div class="row">
                              <span class="button btn-system btn-file btn-block">
                                <span class="fileupload-new">Seleccionar</span>
                                <span class="fileupload-exists">cambiar</span>
                                <input type="file" name="foto6">
                              </span>
                          </div>
                        </div>
                </div> 
              </div>
            </div>
            <div class="panel panel-dark">
                <div class="panel-heading">
                   <span class="panel-icon"></span>
                   <span class="panel-title"> Contenido</span>
                </div>    
                <div class="panel-body border">
                  <textarea name="contenido_producto" id="contenido_producto"  rows="20">
                     <?php echo $detalle->contenido_producto; ?>
                  </textarea>
                  <div class="col-md-12 pl15 text-right">
                    <hr class="short alt">
                   <input type="submit" name="actualizar_producto" class="btn btn-danger" value="Actualizar Producto">
                  </div>
                </div>
            </div>
          </div>
           <?php } ?>
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
    <!-- Ckeditor JS -->
  <script src="<?php echo base_url();?>assets_admin/vendor/plugins/ckeditor/ckeditor.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {

      $( "#agregar_categoria" ).click(function(){
        var id_categoria = $( "select#id_categoria option:checked" ).val();
        var id_producto = <?php echo $id_producto;?>;
        $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>admin/Productos/agregar_categoria_producto/",
        data: {"id_producto" : id_producto, "id_categoria":id_categoria},
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

    // Init Ckeditor
    CKEDITOR.replace('contenido_producto', {
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
