<br />
<div class="widget poll-widget">
    <h2>Encuesta</h2>
    <div class="inner">
        <?php $info_encuesta = $encuesta->row();  ?>
        <p><strong><?php echo $info_encuesta -> titulo_encuesta; ?></strong></p>
        <form action="<?php echo base_url();?>Welcome/respuesta_encuesta" method="POST" id="formulario_encuesta">

            <?php foreach ($encuesta -> result() as $item) { ?>  
                <input type="radio" id="<?php echo $item-> id_respuesta;?>" class="css-checkbox" name="id_respuesta" value="<?php echo $item-> id_respuesta;?>">
                <label for="<?php echo $item-> id_respuesta;?>" class="css-label"><?php echo $item-> respuesta;?></label>
                <br>
            <?php } ?>
                <a href="#myModal" data-toggle="modal" class="pull-right">Ver resultado</a>
                <a class="pull-left" onclick="alert('Respuesta enviada, gracias por su voto'); $('#formulario_encuesta').submit()">Votar </a>
                <!-- <input type="submit" class=" pull-right btn btn-danger" value="Votar" onclick="alert('Respuesta enviada, gracias por su voto'); $('#formulario_encuesta').submit()"> -->
        </form>
    </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel" class="text-center text-error"><?php echo $info_encuesta -> titulo_encuesta; ?></h3>
  </div>
  <div class="modal-body">
      <table class="table table-hover table-bordered" cellspacing="0" width="100%">
          <thead>
             <tr class="success">
              <th >Opción</th>
              <th >Respuesta</th>
              <th >Votos</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($encuesta ->result() as $respuesta) { ?>
          <tr>
            <td class="text-danger"><?php echo $respuesta -> orden_respuesta; ?></td>
            <td><?php echo $respuesta -> respuesta; ?></td>
            <td><?php echo $respuesta -> puntaje; ?></td>
          </tr>
          <?php  } ?>
      </tbody>
    </table>                        
  </div>
</div>