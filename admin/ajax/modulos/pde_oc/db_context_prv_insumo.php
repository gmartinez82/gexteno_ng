<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_oc_id = Gral::getVars(2, 'pde_oc_id');
$pde_oc = PdeOc::getOxId($pde_oc_id);
$prv_insumo = $pde_oc->getPrvInsumo();

?>
<div class="datos" id="<?php Gral::_echo($prv_insumo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PrvInsumo') ?>: 
        <strong><?php Gral::_echo($prv_insumo->getId()) ?> - <?php Gral::_echo($prv_insumo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="prv_insumo_alta.php?id=<?php echo($prv_insumo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvInsumo') ?>: <strong><?php Gral::_echo($prv_insumo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc->getFiltrosArrXCampo('PrvInsumo', 'prv_insumo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeOcs') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prv_insumo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

