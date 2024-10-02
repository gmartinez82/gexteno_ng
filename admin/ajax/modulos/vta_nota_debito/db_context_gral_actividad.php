<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_nota_debito_id = Gral::getVars(2, 'vta_nota_debito_id');
$vta_nota_debito = VtaNotaDebito::getOxId($vta_nota_debito_id);
$gral_actividad = $vta_nota_debito->getGralActividad();

?>
<div class="datos" id="<?php Gral::_echo($gral_actividad->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('GralActividad') ?>: 
        <strong><?php Gral::_echo($gral_actividad->getId()) ?> - <?php Gral::_echo($gral_actividad->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="gral_actividad_alta.php?id=<?php echo($gral_actividad->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralActividad') ?>: <strong><?php Gral::_echo($gral_actividad->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_debito->getFiltrosArrXCampo('GralActividad', 'gral_actividad_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaNotaDebitos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($gral_actividad->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

