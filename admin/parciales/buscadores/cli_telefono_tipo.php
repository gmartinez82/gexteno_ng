<?php
include_once "_autoload.php";
$criterio = new Criterio(CliTelefonoTipo::SES_CRITERIOS);
$criterio->addTabla('cli_telefono_tipo');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='cli_telefono_tipo'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Descripcion') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_telefono_tipo_descripcion' type='text' class='textbox' id='buscador_cli_telefono_tipo_descripcion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_telefono_tipo.descripcion')) ?>' size='22' />
        	<?php 
			$buscador_cli_telefono_tipo_descripcion_comparador = $criterio->getComparadorDeCampo('cli_telefono_tipo.descripcion');
			if(trim($buscador_cli_telefono_tipo_descripcion_comparador) == '') $buscador_cli_telefono_tipo_descripcion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_telefono_tipo_descripcion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_telefono_tipo_descripcion_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Codigo') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_telefono_tipo_codigo' type='text' class='textbox' id='buscador_cli_telefono_tipo_codigo' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_telefono_tipo.codigo')) ?>' size='22' />
        	<?php 
			$buscador_cli_telefono_tipo_codigo_comparador = $criterio->getComparadorDeCampo('cli_telefono_tipo.codigo');
			if(trim($buscador_cli_telefono_tipo_codigo_comparador) == '') $buscador_cli_telefono_tipo_codigo_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_telefono_tipo_codigo_comparador', Criterio::getComparadoresCmb(), $buscador_cli_telefono_tipo_codigo_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('Observaciones') ?></div>
		  <div class='dato'>
		  
			<input name='buscador_cli_telefono_tipo_observacion' type='text' class='textbox' id='buscador_cli_telefono_tipo_observacion' value='<?php Gral::_echoTxt(($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('cli_telefono_tipo.observacion')) ?>' size='22' />
        	<?php 
			$buscador_cli_telefono_tipo_observacion_comparador = $criterio->getComparadorDeCampo('cli_telefono_tipo.observacion');
			if(trim($buscador_cli_telefono_tipo_observacion_comparador) == '') $buscador_cli_telefono_tipo_observacion_comparador = Criterio::LIKE;
			
			Html::html_dib_select(1, 'buscador_cli_telefono_tipo_observacion_comparador', Criterio::getComparadoresCmb(), $buscador_cli_telefono_tipo_observacion_comparador, 'textbox comparador') ?>
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

