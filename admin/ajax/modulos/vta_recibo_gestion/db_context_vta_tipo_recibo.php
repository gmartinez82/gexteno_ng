<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$vta_recibo_id = Gral::getVars(2, 'vta_recibo_id');
$vta_recibo = VtaRecibo::getOxId($vta_recibo_id);
$vta_tipo_recibo = $vta_recibo->getVtaTipoRecibo();

?>
<div class="datos" id="<?php Gral::_echo($vta_tipo_recibo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaTipoRecibo') ?>: 
        <strong><?php Gral::_echo($vta_tipo_recibo->getId()) ?> - <?php Gral::_echo($vta_tipo_recibo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_tipo_recibo_alta.php?id=<?php echo($vta_tipo_recibo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaTipoRecibo') ?>: <strong><?php Gral::_echo($vta_tipo_recibo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaRecibo::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo->getFiltrosArrXCampo('VtaTipoRecibo', 'vta_tipo_recibo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaRecibos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_tipo_recibo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

