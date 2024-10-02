<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

?>
<div class="datos" width="11">
	<div class="titulo">
		<?php Lang::_lang('Acciones Masivas') ?>
    </div>

	<?php if(UsCredencial::getEsAcreditado('PDI_PEDIDO_GESTION_ACCIONES_MASIVAS_GENERAR_REMITO')){ ?>
    <div class="uno masivo generar-remito">
    	<img class="icono" src="imgs/btn_comprobante.png" width="16" align="absmiddle" />
        <?php Lang::_lang('Generar Remito') ?>
    </div>
	<?php } ?>
    
	<br />
</div>