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
              <a href="../">Gestión de noticias</a>
            </li>
            <li class="crumb-trail">noticias</li>
          </ol>
        </div>
      </header>
      <!-- End: Topbar -->
      <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">
        <!-- TRAE LA CONSULTA DE 1 SOLO ROW -->
        <?php $detalle = $detalle_noticia->row();  $id_noticia =  $detalle-> id_noticia; ?>
        <form action="<?php echo base_url();?>admin/noticias/update_noticia/<?php echo $detalle->id_noticia;?>" enctype="multipart/form-data"  method="post" accept-charset="utf-8">   <!-- FORMULARIO INSERTAR -->
        <div class="panel panel-warning">
          <div class="panel-heading">
             <span class="panel-icon"></span>
             <span class="panel-title"> Informacion General</span>
          </div>    
          <div class="panel-body border">
            <div class="col-md-3 mb10">
              <label for="titulo_noticia" class="field prepend-icon">Titulo del noticia</label>
              <input type="text" name="titulo_noticia" id="titulo_noticia" class="form-control" value="<?php echo $detalle-> titulo_noticia; ?>" required>
            </div>
            <div class="col-md-3 mb10">
              <label for="nombre_noticia" class="field prepend-icon">Subtitulo / Autor / Fuente</label>
              <input type="text" name="nombre_noticia" id="nombre_noticia" class="form-control" value="<?php echo $detalle-> nombre_noticia; ?>" >
            </div>
            <div class="col-md-3 mb10">
              <label for="keywords_noticia" class="field prepend-icon"> Palabras Clave </label>
              <input type="text" name="keywords_noticia" id="keywords_noticia" class="form-control" value="<?php echo $detalle-> keywords_noticia; ?>">
            </div>
            <div class="col-md-3 mb10">
              <label for="video_noticia" class="field prepend-icon"> Video </label>
              <input type="text" name="video_noticia" id="video_noticia" class="form-control" value="<?php echo $detalle-> video_noticia; ?>">
            </div>
            <div class="col-md-3 mb10">
              <label for="url_amigable" class="field prepend-icon"> URL Amigable (sin espacios...) </label>
              <input type="text" name="url_amigable_noticia" id="url_amigable_noticia" class="form-control" value="<?php echo $detalle-> url_amigable_noticia; ?>">
            </div>
            <div class="col-md-2 mb10">
              <label for="fecha_publicacion_noticia"> Fecha publicación </label>
              <input type="date" name="fecha_publicacion_noticia" class="form-control"  id="fecha_publicacion_noticia" value="<?php echo $detalle-> fecha_publicacion_noticia; ?>">
            </div>
            <div class="col-md-2 mb10">          
              <label for="estado_noticia"> Estado </label>
              <select id="estado_noticia" name="estado_noticia" class="form-control">
                <option value="<?php echo $detalle->estado_noticia; ?>" selected="selected"> <?php echo $detalle-> estado_noticia; ?></option>
                <option value="activo">Activo</option>
                <option value="inactivo">inactivo</option>
              </select>
            </div>
            <div class="col-md-3 mb10">
              <label for="estado_noticia"> Tipo </label>
                <select id="tipo" name="tipo_noticia" class="form-control">
                  <option value="<?php echo $detalle-> tipo_noticia; ?>"><?php echo $detalle-> tipo_noticia; ?></option>
                  <option value="<?php echo $detalle-> tipo_noticia; ?>"> ---- Cambiar a:----</option>
                  <option value="life style">Life Style</option>
                  <option value="de interes"> De Interés</option>
                  <option value="noticias">noticias</option>
                  <option value="legislacion">Legislacion</option>
                  <option value="revista digital">Revista Digital</option>
                  <option value="noticias">Noticias</option>
                  <option value="kids">Kids</option>
                  <option value="men">Men</option>
                  <option value="woman">Woman</option>
                </select>
            </div>
            <div class="col-md-2 mb10">
              <label for="orden_noticia" class="field prepend-icon">Orden</label>
              <input type="number" class="form-control" name="orden_noticia" id="orden_noticia"  value="<?php echo $detalle-> orden_noticia;?>" required>
            </div>
            <div class="col-md-12 mb10"> 
              <label>Descripción para listados</label>
                  <textarea name="descripcion_noticia" class="form-control"><?php echo $detalle-> descripcion_noticia; ?></textarea>
            </div> 
            <div class="col-md-12 mb10""> <hr> </div> 
            <div class="col-md-12 mb10">
                <div class="col-md-6 mb10">
                <?php if ($detalle-> ficha_noticia) {  ?>
                  <label> PDF descargable</label><br>
                  <input type="hidden" name="ficha_noticia" value="<?php echo $detalle-> ficha_noticia; ?>">
                  <a href="<?php echo base_url();?>fotos_noticias/<?php echo $detalle-> ficha_noticia; ?>" type="button" class="btn btn-primary btn-small"> <span class="fa fa-file-text"></span> <?php echo $detalle-> ficha_noticia; ?></a>   
                  <a href="<?php echo base_url();?>admin/noticias/borrar_ficha/<?php echo $detalle->id_noticia;?>" type="button" class="btn btn-danger btn-small"> <span class="fa fa-trash-o"></span> Borrar</a>
                  <?php }else{ ?>
                    <label> Ficha / PDF del noticia</label>
                    <input type="file" name="ficha_noticia"> 
                  <?php } ?>
                </div> 
                <div class="col-md-2 mb10">
                   <div class="switch switch-danger round switch-inline">
                      Infografía Destacada
                      <?php if ( $detalle-> destacado_noticia == "si") {$check = "checked"; }else{ $check = "";}  ?>
                      <input name="destacado_noticia" id="exampleCheckboxSwitch6" type="checkbox" value="si" <?php echo $check; ?> >
                      <label for="exampleCheckboxSwitch6"></label>
                    </div>
                </div>  
                <div class="col-md-2">
                <?php if ($detalle-> foto0) { ?>
                  <input type="hidden" name="foto0" value="<?php echo $detalle->foto0; ?>">
                  <label>Foto Listados</label>
                  <img src="<?php echo base_url();?>fotos_noticias/<?php echo $detalle->foto0;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/noticias/borrar_foto/<?php echo $detalle->id_noticia;?>/foto0/<?php echo $detalle->foto0;?>" type="button" data-style="zoom-out" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
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
                <?php if ($detalle-> icono_noticia) { ?>
                  <input type="hidden" name="icono_noticia" value="<?php echo $detalle->icono_noticia; ?>">
                  <label>Icono noticia</label>
                  <img src="<?php echo base_url();?>fotos_noticias/<?php echo $detalle->icono_noticia;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/noticias/borrar_foto/<?php echo $detalle->id_noticia;?>/icono_noticia/<?php echo $detalle->icono_noticia;?>" type="button" data-style="zoom-out" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Icono</a>
                <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Icono noticia">
                          </div>
                          <div class="row">
                              <span class="button btn-system btn-file btn-block">
                                <span class="fileupload-new">Seleccionar</span>
                                <span class="fileupload-exists">cambiar</span>
                                <input type="file" name="icono_noticia">
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
                 <span class="panel-title"> Fotos del noticia</span>
              </div>    
              <div class="panel-body border">
                <div class="col-md-2">
                <?php if ($detalle-> foto1) { ?>
                  <input type="hidden" name="foto1" value="<?php echo $detalle->foto1; ?>">
                  <label>Foto Principal 1</label>
                  <img src="<?php echo base_url();?>fotos_noticias/<?php echo $detalle->foto1;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/noticias/borrar_foto/<?php echo $detalle->id_noticia;?>/foto1/<?php echo $detalle->foto1;?>" type="button" data-style="zoom-out" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Foto  Principal 1">
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
                <?php if ($detalle-> foto2) { ?>
                <input type="hidden" name="foto2" value="<?php echo $detalle->foto2; ?>">
                  <label>Foto Principal 2</label>
                  <img src="<?php echo base_url();?>fotos_noticias/<?php echo $detalle->foto2;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/noticias/borrar_foto/<?php echo $detalle->id_noticia;?>/foto2/<?php echo $detalle->foto2;?>" type="button" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                  <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Foto Principal 2">
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
                <?php if ($detalle-> foto3) { ?>
                <input type="hidden" name="foto3" value="<?php echo $detalle->foto3; ?>">
                <label>Foto Principal 3</label>
                  <img src="<?php echo base_url();?>fotos_noticias/<?php echo $detalle->foto3;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/noticias/borrar_foto/<?php echo $detalle->id_noticia;?>/foto3/<?php echo $detalle->foto3;?>" type="button" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                  <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Foto Principal 3">
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
                <?php if ($detalle-> foto4) { ?>
                <input type="hidden" name="foto4" value="<?php echo $detalle->foto4; ?>">
                <label>Foto Principal 4</label>
                  <img src="<?php echo base_url();?>fotos_noticias/<?php echo $detalle->foto4;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/noticias/borrar_foto/<?php echo $detalle->id_noticia;?>/foto4/<?php echo $detalle->foto4;?>" type="button" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                  <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Foto Principal 4">
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
                <?php if ($detalle-> foto5) { ?>
                <input type="hidden" name="foto5" value="<?php echo $detalle->foto5; ?>">
                <label>Foto Principal 5</label>
                  <img src="<?php echo base_url();?>fotos_noticias/<?php echo $detalle->foto5;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/noticias/borrar_foto/<?php echo $detalle->id_noticia;?>/foto5/<?php echo $detalle->foto5;?>" type="button" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                  <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Foto Principal 5">
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
                <?php if ($detalle-> foto6) { ?>
                <input type="hidden" name="foto6" value="<?php echo $detalle->foto6; ?>">
                <label>Foto Principal 6</label>
                  <img src="<?php echo base_url();?>fotos_noticias/<?php echo $detalle->foto6;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/noticias/borrar_foto/<?php echo $detalle->id_noticia;?>/foto6/<?php echo $detalle->foto6;?>" type="button" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                  <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Foto Principal 6">
                          </div>
                          <div class="row">
                              <span class="button btn-system btn-file btn-block">
                                <span class="fileupload-new">Seleccionar</span>
                                <span class="fileupload-exists">cambiar</span>
                                <input type="file" name="foto6">
                              </span>
                          </div>
                        </div>
                  <?php } ?>
                </div> 
              </div>
            </div>
            <div class="panel panel-dark">
                <div class="panel-heading">
                   <span class="panel-icon"></span>
                   <span class="panel-title"> Contenido</span>
                </div>    
                <div class="panel-body border">
                  <textarea name="contenido_noticia" id="contenido_noticia"  rows="20">
                     <?php echo $detalle-> contenido_noticia; ?>
                  </textarea>
                </div>
            </div>
            <div class="col-md-12 pl15 text-right">
              <hr class="short alt">
              <input type="submit" name="actualizar_noticia" class="btn btn-danger" value="Actualizar noticia">
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
    <!-- Ckeditor JS -->
  <script src="https://cdn.ckeditor.com/4.6.1/full-all/ckeditor.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {
      $( "#agregar_categoria" ).click(function(){
        var id_categoria = $( "select#id_categoria option:checked" ).val();
        var id_noticia = <?php echo $id_noticia;?>;
        $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>admin/noticias/agregar_categoria_noticia/",
        data: {"id_noticia" : id_noticia, "id_categoria":id_categoria},
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
    CKEDITOR.replace('contenido_noticia', {
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
