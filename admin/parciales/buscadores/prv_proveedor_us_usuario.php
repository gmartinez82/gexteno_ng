<?php
include_once "_autoload.php";
$criterio = new Criterio(PrvProveedorUsUsuario::SES_CRITERIOS);
$criterio->addTabla('prv_proveedor_us_usuario');
$criterio->setCriteriosInicial();
?>
<div id='div_buscador'>
<form id='form_buscador' name='form_buscador' method='post' action='' modulo='prv_proveedor_us_usuario'>
	
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('PrvProveedor') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_proveedor_us_usuario_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor_us_usuario.prv_proveedor_id'), 'textbox')?>
        	<?php 
			$buscador_prv_proveedor_us_usuario_prv_proveedor_id_comparador = $criterio->getComparadorDeCampo('prv_proveedor_us_usuario.prv_proveedor_id');
			if(trim($buscador_prv_proveedor_us_usuario_prv_proveedor_id_comparador) == '') $buscador_prv_proveedor_us_usuario_prv_proveedor_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_us_usuario_prv_proveedor_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_us_usuario_prv_proveedor_id_comparador, 'textbox comparador') ?>
		  </div>
		</div>
		  
		<div class='par-buscador'>
		  <div class='label'><?php Lang::_lang('UsUsuario') ?></div>
		  <div class='dato'>
		  
			<?php Html::html_dib_select(1, 'buscador_prv_proveedor_us_usuario_us_usuario_id', Gral::getCmbFiltro(UsUsuario::getUsUsuariosCmb(), '...'), ($criterio->getAmbiguo()) ? '' : $criterio->getValorDeCampo('prv_proveedor_us_usuario.us_usuario_id'), 'textbox')?>
        	<?php 
			$buscador_prv_proveedor_us_usuario_us_usuario_id_comparador = $criterio->getComparadorDeCampo('prv_proveedor_us_usuario.us_usuario_id');
			if(trim($buscador_prv_proveedor_us_usuario_us_usuario_id_comparador) == '') $buscador_prv_proveedor_us_usuario_us_usuario_id_comparador = Criterio::IGUAL;
			
			Html::html_dib_select(1, 'buscador_prv_proveedor_us_usuario_us_usuario_id_comparador', Criterio::getComparadoresCmb(), $buscador_prv_proveedor_us_usuario_us_usuario_id_comparador, 'textbox comparador') ?>
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

