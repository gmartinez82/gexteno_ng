<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_factura_pde_oc_id = Gral::getVars(2, 'pde_factura_pde_oc_id');
$pde_factura_pde_oc = PdeFacturaPdeOc::getOxId($pde_factura_pde_oc_id);
$pde_oc = $pde_factura_pde_oc->getPdeOc();

?>
<div class="datos" id="<?php Gral::_echo($pde_oc->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeOc') ?>: 
        <strong><?php Gral::_echo($pde_oc->getId()) ?> - <?php Gral::_echo($pde_oc->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_oc_alta.php?id=<?php echo($pde_oc->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOc') ?>: <strong><?php Gral::_echo($pde_oc->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeFacturaPdeOc::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_pde_oc->getFiltrosArrXCampo('PdeOc', 'pde_oc_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeFacturaPdeOcs') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_oc->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

