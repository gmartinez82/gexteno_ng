<?php
include_once "_autoload.php";
$criterio = new Criterio(UsUsuario::SES_CRITERIOS);
$criterio->addTabla('us_usuario');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='us_usuario'>
	
	<div class='par-buscador'>
	  <div class='label'><?php Lang::_lang('UsGrupo') ?></div>
	  <div class='dato'>
	  
		<?php Html::html_dib_select(1, 'buscador_us_agrupado_us_grupo_id', Gral::getCmbFiltro(UsGrupo::getUsGruposCmb()), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_agrupado.us_grupo_id'), 'textbox')?>
		<?php 
		$buscador_us_agrupado_us_grupo_id_comparador = $criterio->getComparadorDeCampo('us_agrupado.us_grupo_id');
		if(trim($buscador_us_agrupado_us_grupo_id_comparador) == '') $buscador_us_agrupado_us_grupo_id_comparador = Criterio::IGUAL;
		
		Html::html_dib_select(1, 'buscador_us_agrupado_us_grupo_id_comparador', Criterio::getComparadoresCmb(), $buscador_us_agrupado_us_grupo_id_comparador, 'textbox comparador') ?>
	  </div>
	</div>
	  
	<div class='par-buscador'>
	  <div class='label'><?php Lang::_lang('UsCredencial') ?></div>
	  <div class='dato'>
	  
		<?php Html::html_dib_select(1, 'buscador_us_acreditado_us_credencial_id', Gral::getCmbFiltro(UsCredencial::getUsCredencialsCmb()), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_acreditado.us_credencial_id'), 'textbox')?>
		<?php 
		$buscador_us_acreditado_us_credencial_id_comparador = $criterio->getComparadorDeCampo('us_acreditado.us_credencial_id');
		if(trim($buscador_us_acreditado_us_credencial_id_comparador) == '') $buscador_us_acreditado_us_credencial_id_comparador = Criterio::IGUAL;
		
		Html::html_dib_select(1, 'buscador_us_acreditado_us_credencial_id_comparador', Criterio::getComparadoresCmb(), $buscador_us_acreditado_us_credencial_id_comparador, 'textbox comparador') ?>
	  </div>
	</div>
	  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Lenguaje') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_us_usuario_gral_lenguaje_id', Gral::getCmbFiltro(GralLenguaje::getGralLenguajesCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario.gral_lenguaje_id'), 'textbox')?>
        	<?php 
			$buscador_us_usuario_gral_lenguaje_id_comparador = $criterio->getComparadorDeCampo('us_usuario.gral_lenguaje_id');
			if(trim($buscador_us_usuario_gral_lenguaje_id_comparador) == '') $buscador_us_usuario_gral_lenguaje_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_usuario_gral_lenguaje_id_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_gral_lenguaje_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_descripcion' type='text' class='textbox' id='buscador_us_usuario_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_descripcion_comparador = $criterio->getComparadorDeCampo('us_usuario.descripcion');
			if(trim($buscador_us_usuario_descripcion_comparador) == '') $buscador_us_usuario_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Apellido') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_apellido' type='text' class='textbox' id='buscador_us_usuario_apellido' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario.apellido')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_apellido_comparador = $criterio->getComparadorDeCampo('us_usuario.apellido');
			if(trim($buscador_us_usuario_apellido_comparador) == '') $buscador_us_usuario_apellido_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_apellido_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_apellido_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Nombre') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_nombre' type='text' class='textbox' id='buscador_us_usuario_nombre' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario.nombre')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_nombre_comparador = $criterio->getComparadorDeCampo('us_usuario.nombre');
			if(trim($buscador_us_usuario_nombre_comparador) == '') $buscador_us_usuario_nombre_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_nombre_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_nombre_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Usuario') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_usuario' type='text' class='textbox' id='buscador_us_usuario_usuario' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario.usuario')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_usuario_comparador = $criterio->getComparadorDeCampo('us_usuario.usuario');
			if(trim($buscador_us_usuario_usuario_comparador) == '') $buscador_us_usuario_usuario_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_usuario_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_usuario_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_codigo' type='text' class='textbox' id='buscador_us_usuario_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario.codigo')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_codigo_comparador = $criterio->getComparadorDeCampo('us_usuario.codigo');
			if(trim($buscador_us_usuario_codigo_comparador) == '') $buscador_us_usuario_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Hash') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_hash' type='text' class='textbox' id='buscador_us_usuario_hash' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario.hash')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_hash_comparador = $criterio->getComparadorDeCampo('us_usuario.hash');
			if(trim($buscador_us_usuario_hash_comparador) == '') $buscador_us_usuario_hash_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_hash_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_hash_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Email') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_email' type='text' class='textbox' id='buscador_us_usuario_email' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario.email')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_email_comparador = $criterio->getComparadorDeCampo('us_usuario.email');
			if(trim($buscador_us_usuario_email_comparador) == '') $buscador_us_usuario_email_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_email_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_email_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Telefono') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_telefono' type='text' class='textbox' id='buscador_us_usuario_telefono' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario.telefono')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_telefono_comparador = $criterio->getComparadorDeCampo('us_usuario.telefono');
			if(trim($buscador_us_usuario_telefono_comparador) == '') $buscador_us_usuario_telefono_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_telefono_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_telefono_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Celular') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_celular' type='text' class='textbox' id='buscador_us_usuario_celular' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario.celular')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_celular_comparador = $criterio->getComparadorDeCampo('us_usuario.celular');
			if(trim($buscador_us_usuario_celular_comparador) == '') $buscador_us_usuario_celular_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_celular_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_celular_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_us_usuario_observacion' type='text' class='textbox' id='buscador_us_usuario_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario.observacion')) ?>' size='22' />
        	<?php 
			$buscador_us_usuario_observacion_comparador = $criterio->getComparadorDeCampo('us_usuario.observacion');
			if(trim($buscador_us_usuario_observacion_comparador) == '') $buscador_us_usuario_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_us_usuario_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_observacion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Estado') ?></div>
		  <div class='dato'>
		  
		<?php Html::html_dib_select(1, 'buscador_us_usuario_estado', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('us_usuario.estado'), 'textbox') ?>
		
        	<?php 
			$buscador_us_usuario_estado_comparador = $criterio->getComparadorDeCampo('us_usuario.estado');
			if(trim($buscador_us_usuario_estado_comparador) == '') $buscador_us_usuario_estado_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_us_usuario_estado_comparador', Criterio::getComparadoresCmb(), $buscador_us_usuario_estado_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		     
  <div class='botones'>
    <input name='btn_buscar' type='submit' id='btn_buscar' value='&nbsp;&nbsp;&nbsp; <?php Lang::_lang('Buscar') ?>' />    
    <input name='btn_limpiar' type='submit' id='btn_limpiar' value='<?php Lang::_lang('Limpiar') ?>' />
  </div>

</form>
</div>
<script>
try{
	setInit();
	setInitAdm();
}catch(e){}
</script>

