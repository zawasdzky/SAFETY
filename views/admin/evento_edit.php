    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
      <!-- Start: Topbar -->
      <header id="topbar" class="">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="dashboard.html">eventos</a>
            </li>
            <li class="crumb-icon">
              <a href="dashboard.html">
                 <a href="<?php echo base_url();?>admin/"><span class="glyphicon glyphicon-home"></span></a>
              </a>
            </li>
            <li class="crumb-trail">
            <a href="<?php echo base_url();?>admin/eventos">eventos</a></li>
          </ol>
        </div>
      </header>
      <!-- End: Topbar -->
      <!-- Begin: Content -->
      <section id="content" class="animated fadeIn">
        <!-- TRAE LA CONSULTA DE 1 SOLO ROW -->
        <?php $detalle = $detalle_evento->row();  $id_evento =  $detalle-> id_evento; ?>
      <form action="<?php echo base_url();?>admin/eventos/update_evento" enctype="multipart/form-data"  method="post" accept-charset="utf-8">   <!-- FORMULARIO INSERTAR -->
        <div class="panel panel-warning">
          <div class="panel-heading">
             <span class="panel-icon"></span>
             <span class="panel-title"> Informacion General</span>
          </div>    
          <div class="panel-body border">
            <input type="hidden" name="id_evento" id="id_evento" class="form-control" value="<?php echo $detalle->id_evento;?>" >
            <div class="col-md-6 mb10">
                <label>Nombre evento</label>
                <input type="text" name="nombre_evento" id="nombre_evento" class="form-control" value="<?php echo $detalle->nombre_evento;?>" >
            </div>
            <div class="col-md-4 mb10">
                <label>Tipo de evento</label>
                <input type="text" name="tipo_evento" id="tipo_evento" class="form-control" value="<?php echo $detalle->tipo_evento;?>">
            </div>
            <div class="col-md-2 mb10">
                <label>Orden / Posición </label>
                <input type="number" name="orden_evento"  id="orden_evento" class="form-control" value="<?php echo $detalle->orden_evento;?>">
            </div>
            <div class="col-md-6 mb10">
                <label>Enlace</label>
                <input type="text" name="enlace_evento" id="enlace_evento" class="form-control" value="<?php echo $detalle->enlace_evento;?>">
            </div>
            <div class="col-md-4 mb10">
                <label>Ciudad del Evento</label>
                <input type="text" name="ciudad_evento" id="ciudad_evento" class="form-control" value="<?php echo $detalle->ciudad_evento;?>">
            </div>
            <div class="col-md-12 mb10">
                <label>Dirección del Evento</label>
                <input type="text" name="direccion_evento" id="direccion_evento" class="form-control" value="<?php echo $detalle->direccion_evento;?>">
            </div>
            <div class="col-md-3 mb10">
                <label>Fecha de inicio del Evento</label>
                <input type="date" name="fecha_inicio_evento" id="fecha_inicio_evento" class="form-control" value="<?php echo $detalle->fecha_inicio_evento;?>">
            </div>
            <div class="col-md-3 mb10">
                <label>Fecha de fin del Evento</label>
                <input type="date" name="fecha_fin_evento" id="fecha_fin_evento" class="form-control" value="<?php echo $detalle->fecha_fin_evento;?>">
            </div>
            <div class="col-md-3 mb10">
                <label>Hora Inicio del Evento</label>
                <input type="text" name="hora_inicio_evento" id="hora_inicio_evento" class="form-control" value="<?php echo $detalle->hora_inicio_evento;?>">
            </div>
            <div class="col-md-3 mb10">
                <label>Hora de fin del Evento</label>
                <input type="text" name="hora_fin_evento" id="hora_fin_evento" class="form-control" value="<?php echo $detalle->hora_fin_evento;?>">
            </div>
            <div class="col-md-12 mb10"> 
                   <label>Descripción Corta para Wigets</label>
                  <textarea name="descripcion_corta_evento" class="form-control"><?php echo $detalle->descripcion_corta_evento;?></textarea>
            </div> 
          </div>
<!-- FOTOS -->
            <div class="mb10 row"> <br> </div>
            <div class="panel panel-alert">
              <div class="panel-heading">
                 <span class="panel-icon"></span>
                 <span class="panel-title"> Fotos del evento</span>
              </div>    
              <div class="panel-body border">
              <div class="col-md-2">
                <?php if ($detalle-> foto0) { ?>
                  <input type="hidden" name="foto0" value="<?php echo $detalle-> foto0; ?>">
                  <label>Foto Widget 200 x 200</label>
                  <img src="<?php echo base_url();?>fotos_eventos/<?php echo $detalle-> foto0;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/eventos/borrar_foto/<?php echo $detalle-> id_evento;?>/foto0/<?php echo $detalle-> foto0;?>" type="button" data-style="zoom-out" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Foto Widget 200 x 200">
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
                <?php if ($detalle-> foto1) { ?>
                  <input type="hidden" name="foto1" value="<?php echo $detalle->foto1; ?>">
                  <label>Foto sliders 770 x 373"</label>
                  <img src="<?php echo base_url();?>fotos_eventos/<?php echo $detalle->foto1;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/eventos/borrar_foto/<?php echo $detalle->id_evento;?>/foto1/<?php echo $detalle->foto1;?>" type="button" data-style="zoom-out" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Foto sliders 770 x 373">
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
                  <img src="<?php echo base_url();?>fotos_eventos/<?php echo $detalle->foto2;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/eventos/borrar_foto/<?php echo $detalle->id_evento;?>/foto2/<?php echo $detalle->foto2;?>" type="button" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                  <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="Foto Para  sliders 770 x 373">
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
                  <img src="<?php echo base_url();?>fotos_eventos/<?php echo $detalle->foto3;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/eventos/borrar_foto/<?php echo $detalle->id_evento;?>/foto3/<?php echo $detalle->foto3;?>" type="button" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
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
                  <img src="<?php echo base_url();?>fotos_eventos/<?php echo $detalle->foto4;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/eventos/borrar_foto/<?php echo $detalle->id_evento;?>/foto4/<?php echo $detalle->foto4;?>" type="button" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                  <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="foto 4">
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
                  <img src="<?php echo base_url();?>fotos_eventos/<?php echo $detalle->foto5;?>" class="img-responsive">
                  <br><a href="<?php echo base_url();?>admin/eventos/borrar_foto/<?php echo $detalle->id_evento;?>/foto5/<?php echo $detalle->foto5;?>" type="button" class="btn btn-danger btn-small btn-block"><span class="fa fa-trash-o"></span> Borrar Foto</a>
                  <?php } else {?>
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                          <div class="fileupload-preview thumbnail mb20">
                            <img data-src=" " alt="foto 5">
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
              </div>
            </div>
            <div class="panel panel-dark">
                <div class="panel-heading">
                   <span class="panel-icon"></span>
                   <span class="panel-title"> Descripcion</span>
                </div>    
                <div class="col-md-12">
                  <label>Descripción Completa</label>
                  <textarea name="descripcion_evento" id="descripcion_evento"  rows="20">
                     <?php echo $detalle-> descripcion_evento; ?>
                  </textarea>
                </div>
                  <div class="col-md-12 pl15 text-right">
                    <br /> <br />
                   <input type="submit" name="actualizar_evento" class="btn btn-danger" value="Actualizar evento">
                   <hr class="short alt">
                  </div>
                </div>
            </div>
          </div>
        </div>
        </form> <!-- FIN FORMULARIO -->
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
      return confirm('¿Está seguro de borrar esta evento?');
    });
    "use strict";
    // Init Theme Core    
    Core.init();
         // Init Ckeditor
    CKEDITOR.replace('descripcion_evento', {
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
