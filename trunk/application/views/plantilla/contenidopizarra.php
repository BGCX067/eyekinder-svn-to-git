<div class="contenidoBasico1">
	<div class="pizarra1">
		
	</div>
	<div class="pizarra2">
		<h2> NOTIFICACIONES RECIENTES</h2>
		<div class="pizarranoti">
			<ul>
			<?php if (isset($notificaciones) && !empty($notificaciones)){
						foreach ($notificaciones as $key => $value) {
							
			 
			?>
			<?php if ($value['tipo'] == 1){?>
				<form id="form<?= $value['id'] ?>" action="<?= base_url() ?>comun/ver_notificaciones" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				<span class="ico-insert"></span><li onclick="form<?= $value['id'] ?>.submit();" <?= $value['notinueva'] ?>>
					[<?= $value['fecha']." ". $value['hora'] ?>] - <?= $value['autor_nombre'] ?> (<?= $value['autor_rol'] ?>) ha insertado la información 
					<?php if($value['objetivo_sexo'] == "h"){ ?> del niño <?php }else{ ?> de la niña <?php } ?><?= $value['objetivo_nombre'] ?> correspondiente al 
					<?= $this -> comunes -> fechaElegida($value['year'], $value['mon'], $value['day']) ?>
				</li>
				<input type="hidden" name="redirect" value="<?= $value['objetivo_enlace'] ?>" />
				<input type="hidden" name="idnoti" value="<?= $value['id'] ?>" />
				</form>
			<?php }else if ($value['tipo'] == 2){?>
				<form id="form<?= $value['id'] ?>" action="<?= base_url() ?>comun/ver_notificaciones" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				<span class="ico-edit"></span><li onclick="form<?= $value['id'] ?>.submit();" <?= $value['notinueva'] ?>>
					[<?= $value['fecha']." ". $value['hora'] ?>] - <?= $value['autor_nombre'] ?> (<?= $value['autor_rol'] ?>) ha modificado la información 
					<?php if($value['objetivo_sexo'] == "h"){ ?> del niño <?php }else{ ?> de la niña <?php } ?><?= $value['objetivo_nombre'] ?> correspondiente al 
					<?= $this -> comunes -> fechaElegida($value['year'], $value['mon'], $value['day']) ?>
				</li>
				<input type="hidden" name="redirect" value="<?= $value['objetivo_enlace'] ?>" />
				<input type="hidden" name="idnoti" value="<?= $value['id'] ?>" />
				</form>
			<?php }else if ($value['tipo'] == 3){?>
				<form id="form<?= $value['id'] ?>" action="<?= base_url() ?>comun/ver_notificaciones" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				<span class="ico-nuevonino"></span><li onclick="form<?= $value['id'] ?>.submit();" <?= $value['notinueva'] ?>>
					[<?= $value['fecha']." ". $value['hora'] ?>] - <?= $value['autor_nombre'] ?> (<?= $value['autor_rol'] ?>) ha registrado 
					<?php if($value['objetivo_sexo'] == "h"){ ?> un nuevo niño, <?php }else{ ?> una nueva niña <?php } ?><?= $value['objetivo_nombre'] ?>, debe asignarle una clase para que pueda disponer de los servicios de la aplicación.
				</li>
				<input type="hidden" name="redirect" value="<?= $value['objetivo_enlace'] ?>" />
				<input type="hidden" name="idnoti" value="<?= $value['id'] ?>" />
				</form>
			<?php }else if ($value['tipo'] == 4){?>
				<form id="form<?= $value['id'] ?>" action="<?= base_url() ?>comun/ver_notificaciones" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				<span class="ico-nuevonino"></span><li onclick="form<?= $value['id'] ?>.submit();" <?= $value['notinueva'] ?>>
					[<?= $value['fecha']." ". $value['hora'] ?>] - <?= $value['autor_nombre'] ?> (<?= $value['autor_rol'] ?>) ha asignado una clase para 
					<?php if($value['objetivo_sexo'] == "h"){ ?> el niño, <?php }else{ ?> la niña <?php } ?><?= $value['objetivo_nombre'] ?>, ya puede acceder a su perfil.
				</li>
				<input type="hidden" name="redirect" value="<?= $value['objetivo_enlace'] ?>" />
				<input type="hidden" name="idnoti" value="<?= $value['id'] ?>" />
				</form>
			<?php }else if ($value['tipo'] == 5){?>
				<form id="form<?= $value['id'] ?>" action="<?= base_url() ?>comun/ver_notificaciones" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				<span class="ico-etiq"></span><li onclick="form<?= $value['id'] ?>.submit();" <?= $value['notinueva'] ?>>
					[<?= $value['fecha']." ". $value['hora'] ?>] - <?= $value['autor_nombre'] ?> (<?= $value['autor_rol'] ?>) le ha etiquetado en una foto.
				</li>
				<input type="hidden" name="redirect" value="<?= $value['objetivo_enlace'] ?>" />
				<input type="hidden" name="idnoti" value="<?= $value['id'] ?>" />
				</form>
			<?php } ?>		
			
			
			
			<?php 
						}
				echo $this->pagination->create_links();		
			}
			 ?>
			</ul>
		</div>
	</div>
	<div class="pizarra3">
		
	</div>
</div>