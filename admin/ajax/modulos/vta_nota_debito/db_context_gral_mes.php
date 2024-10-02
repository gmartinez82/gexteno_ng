<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_nota_debito_id = Gral::getVars(2, 'vta_nota_debito_id');
$vta_nota_debito = VtaNotaDebito::getOxId($vta_nota_debito_id);
$gral_mes = $vta_nota_debito->getGralMes();

?>
<div class="datos" id="<?php Gral::_echo($gral_mes->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralMes') ?>: 
        <strong><?php Gral::_echo($gral_mes->getId()) ?> - <?php Gral::_echo($gral_mes->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_mes_alta.php?id=<?php echo($gral_mes->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralMes') ?>: <strong><?php Gral::_echo($gral_mes->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito->getFiltrosArrXCampo('GralMes', 'gral_mes_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaNotaDebitos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_mes->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

