<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$pde_oc_agrupacion_id = Gral::getVars(2, 'pde_oc_agrupacion_id');
$pde_oc_agrupacion = PdeOcAgrupacion::getOxId($pde_oc_agrupacion_id);
$pde_oc_tipo_origen = $pde_oc_agrupacion->getPdeOcTipoOrigen();

?>
<div class="datos" id="<?php Gral::_echo($pde_oc_tipo_origen->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeOcTipoOrigen') ?>: 
        <strong><?php Gral::_echo($pde_oc_tipo_origen->getId()) ?> - <?php Gral::_echo($pde_oc_tipo_origen->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_oc_tipo_origen_alta.php?id=<?php echo($pde_oc_tipo_origen->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcTipoOrigen') ?>: <strong><?php Gral::_echo($pde_oc_tipo_origen->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeOcAgrupacion::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_agrupacion->getFiltrosArrXCampo('PdeOcTipoOrigen', 'pde_oc_tipo_origen_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeOcAgrupacions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_oc_tipo_origen->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

