<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_recibo_item_cheque_id = Gral::getVars(2, 'vta_recibo_item_cheque_id');
$vta_recibo_item_cheque = VtaReciboItemCheque::getOxId($vta_recibo_item_cheque_id);
$gral_banco = $vta_recibo_item_cheque->getGralBanco();

?>
<div class="datos" id="<?php Gral::_echo($gral_banco->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralBanco') ?>: 
        <strong><?php Gral::_echo($gral_banco->getId()) ?> - <?php Gral::_echo($gral_banco->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_banco_alta.php?id=<?php echo($gral_banco->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralBanco') ?>: <strong><?php Gral::_echo($gral_banco->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaReciboItemCheque::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_item_cheque->getFiltrosArrXCampo('GralBanco', 'gral_banco_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaReciboItemCheques') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_banco->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

