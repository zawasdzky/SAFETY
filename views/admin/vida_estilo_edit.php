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
              <a href="../">Gestión de vida_estilo</a>
            </li>
            <li class="crumb-trail">Vida y Estilo</li>
          </ol>
        </div>
      </header>
      <!-- End: Topbar -->
      <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">
        <!-- TRAE LA CONSULTA DE 1 SOLO ROW -->
        <?php $detalle = $detalle_vida_estilo->row();  $id_vida_estilo =  $detalle-> id_vida_estilo; ?>
        <form action="<?php echo base_url();?>admin/vida_estilo/update_vida_estilo/<?php echo $detalle->id_vida_estilo;?>" enctype="multipart/form-data"  method="post" accept-charset="utf-8">   <!-- FORMULARIO INSERTAR -->
        <div class="panel panel-warning">
          <div class="panel-heading">
             <span class="panel-icon"></span>
             <span class="panel-title"> Informacion General</span>
          </div>    
          <div class="panel-body border">
            <div class="col-md-4 mb10">
              <label for="titulo_vida_estilo" class="field prepend-icon">Titulo del Artículo</label>
              <input type="text" name="titulo_vida_estilo" id="titulo_vida_estilo" class="form-control" value="<?php echo $detalle-> titulo_vida_estilo; ?>" required>
            </div>
            <div class="col-md-4 mb10">
              <label for="subtitulo_vida_estilo" class="field prepend-icon">Subtitulo </label>
              <input type="text" name="subtitulo_vida_estilo" id="subtitulo_vida_estilo" class="form-control" value="<?php echo $detalle-> subtitulo_vida_estilo; ?>" >
            </div>
            <div class="col-md-4 mb10">
              <label for="keywords_vida_estilo" class="field prepend-icon"> Palabras Clave </label>
              <input type="text" name="keywords_vida_estilo" id="keywords_vida_estilo" class="form-control" value="<?php echo $detalle-> keywords_vida_estilo; ?>">
            </div>
            <div class="col-md-4 mb10">
              <label for="video_vida_estilo" class="field prepend-icon"> Video </label>
              <input type="text" name="video_vida_estilo" id="video_vida_estilo" class="form-control" value="<?php echo $detalle-> video_vida_estilo; ?>">
            </div>
            <div class="col-md-4 mb10">
              <label for="url_amigable" class="field prepend-icon"> URL Amigable (sin espacios...) </label>
              <input type="text" name="url_amigable_vida_estilo" id="url_amigable_vida_estilo" class="form-control" value="<?php echo $detalle-> url_amigable_vida_estilo; ?>">
            </div>
            <div class="col-md-4 mb10">
              <label for="fecha_publica_vida_estilo"> Fecha publicación </label>
              <input type="date" name="fecha_publica_vida_estilo" class="form-control"  id="fecha_publica_vida_estilo" value="<?php echo $detalle-> fecha_publica_vida_estilo; ?>">
            </div>
            <div class="col-md-4 mb10">          
              <label for="estado_vida_estilo"> Estado </label>
              <select id="estado_vida_estilo" name="estado_vida_estilo" class="form-control">
                <option value="<?php echo $detalle->estado_vida_estilo; ?>" selected="selected"> <?php echo $detalle-> estado_vida_estilo; ?></option>
                <option value="activo">Activo</option>
                <option value="inactivo">inactivo</option>
              </select>
            </div>
            <div class="col-md-4 mb10">
              <label for="estado_vida_estilo"> Tipo </label>
                <select id="tipo" name="tipo_vida_estilo" class="form-control">
                  <option value="<?php echo $detalle-> tipo_vida_estilo; ?>"><?php echo $detalle-> tipo_vida_estilo; ?></option>
                  <option value="<?php echo $detalle-> tipo_vida_estilo; ?>"> ---- Cambiar a:----</option>
                  <option value="">- Sección -</option>
                  <option value="Kids">Kids</option>
                  <option value="Men">Men</option>
                  <option value="Women">Women</option>
                  <option value="Reflexionemos">Reflexionemos</option>
                </select>
            </div>
            <div class="col-md-2 mb10">
              <label for="orden_vida_estilo" class="field prepend-icon">Orden</label>
              <input type="number" class="form-control" name="orden_vida_estilo" id="orden_vida_estilo" value="<?php echo $detalle-> orden_vida_estilo; ?>" required>
            </div>
            <div class="col-md-12 mb10"> 
              <label>Descripción para listados</label>
                  <textarea name="descripcion_vida_estilo" class="form-control"><?php echo $detalle-> descripcion_vida_estilo; ?></textarea>
            </div> 
            <div class="col-md-12 mb10""> <hr> </div> 
            <div class="col-md-12 mb10">
                <div class="col-md-6 mb10">
                <?php if ($detalle-> ficha_vida_estilo) {  ?>
                  <label> PDF descargable</label><br>
                  <input type="hidden" name="ficha_vida_estilo" value="<?php echo $detalle-> ficha_vida_estilo; ?>">
                  <a href="<?php echo base_url();?>fotos_vida_estilo/<?php echo $detalle-> ficha_vida_estilo; ?>" type="button" class="btn btn-primary btn-small"> <span class="fa fa-file-text"></span> <?php echo $detalle-> ficha_vida_estilo; ?></a>   
                  <a href="<?php echo base_url();?>admin/vida_estilo/borrar_ficha/<?php echo $detalle->id_vida_estilo;?>" type="button" class="btn btn-danger btn-small"> <span class="fa fa-trash-o"></span> Borrar</a>
                  <?php }else{ ?>
                    <label> Ficha / PDF del vida_estilo</label>
                    <input type="file" name="ficha_vida_estilo"> 
                  <?php } ?>
                </div> 
                <div class="col-md-2 mb10">
                   <div class="switch switch-danger round switch-inline">
                      Artículo Destacado
                      <?php if ( $detalle-> destacado_vida_estilo == "si") {$check = "checked"; }else{ $check = "";}  ?>
                      <input name="destacado_vida_estilo" id="exampleCheckboxSwitch6" type="checkbox" value="si" <?php echo $check; ?> >
                      <label for="exampleCheckboxSwitch6"></label>
                    </div>
                </div>  
                <div class="col-md-2">
                <?php if ($detalle-> foto0) { ?>
                  <input type="hidden" name="foto0" value="<?php echo $detalle->foto0; ?>">
                  <label>Foto Listados</label>
                  <img src="<?php echo base_url();?>fotos_vida_estilo/<?php echo $detalle->foto0;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/vida_estilo/borrar_foto/<?php echo $detalle->id_vida_estilo;?>/foto0/<?php echo $detalle->foto0;?>" type="button" data-style="zoom-out" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
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
                <?php if ($detalle-> icono_vida_estilo) { ?>
                  <input type="hidden" name="icono_vida_estilo" value="<?php echo $detalle->icono_vida_estilo; ?>">
                  <label>Icono vida_estilo</label>
                  <img src="<?php echo base_url();?>fotos_vida_estilo/<?php echo $detalle->icono_vida_estilo;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/vida_estilo/borrar_foto/<?php echo $detalle->id_vida_estilo;?>/icono_vida_estilo/<?php echo $detalle->icono_vida_estilo;?>" type="button" data-style="zoom-out" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Icono</a>
                <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Icono vida_estilo">
                          </div>
                          <div class="row">
                              <span class="button btn-system btn-file btn-block">
                                <span class="fileupload-new">Seleccionar</span>
                                <span class="fileupload-exists">cambiar</span>
                                <input type="file" name="icono_vida_estilo">
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
                 <span class="panel-title"> Fotos del vida_estilo</span>
              </div>    
              <div class="panel-body border">
                <div class="col-md-2">
                <?php if ($detalle-> foto1) { ?>
                  <input type="hidden" name="foto1" value="<?php echo $detalle->foto1; ?>">
                  <label>Foto Principal 1</label>
                  <img src="<?php echo base_url();?>fotos_vida_estilo/<?php echo $detalle->foto1;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/vida_estilo/borrar_foto/<?php echo $detalle->id_vida_estilo;?>/foto1/<?php echo $detalle->foto1;?>" type="button" data-style="zoom-out" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
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
                  <img src="<?php echo base_url();?>fotos_vida_estilo/<?php echo $detalle->foto2;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/vida_estilo/borrar_foto/<?php echo $detalle->id_vida_estilo;?>/foto2/<?php echo $detalle->foto2;?>" type="button" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
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
                  <img src="<?php echo base_url();?>fotos_vida_estilo/<?php echo $detalle->foto3;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/vida_estilo/borrar_foto/<?php echo $detalle->id_vida_estilo;?>/foto3/<?php echo $detalle->foto3;?>" type="button" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
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
                <label>Pauta 1 660 x 130</label>
                  <img src="<?php echo base_url();?>fotos_vida_estilo/<?php echo $detalle->foto4;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/vida_estilo/borrar_foto/<?php echo $detalle->id_vida_estilo;?>/foto4/<?php echo $detalle->foto4;?>" type="button" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                  <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Pauta 1 660 x 130">
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
                <label>Pauta 2 660 x 130</label>
                  <img src="<?php echo base_url();?>fotos_vida_estilo/<?php echo $detalle->foto5;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/vida_estilo/borrar_foto/<?php echo $detalle->id_vida_estilo;?>/foto5/<?php echo $detalle->foto5;?>" type="button" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                  <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Pauta 2 660 x 130">
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
                <label>Pauta 3 660 x 130</label>
                  <img src="<?php echo base_url();?>fotos_vida_estilo/<?php echo $detalle->foto6;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/vida_estilo/borrar_foto/<?php echo $detalle->id_vida_estilo;?>/foto6/<?php echo $detalle->foto6;?>" type="button" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                  <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Pauta 3 660 x 130">
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
                  <textarea name="contenido_vida_estilo" id="contenido_vida_estilo"  rows="20">
                     <?php echo $detalle-> contenido_vida_estilo; ?>
                  </textarea>
                  <div class="col-md-12 pl15 text-right">
                    <hr class="short alt">
                   <input type="submit" name="actualizar_vida_estilo" class="btn btn-danger" value="Actualizar">
                  </div>
                </div>
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
    // Init Ckeditor
    CKEDITOR.replace('contenido_vida_estilo', {
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
