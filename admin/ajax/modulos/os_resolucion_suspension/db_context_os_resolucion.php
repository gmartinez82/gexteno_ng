<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$os_resolucion_suspension_id = Gral::getVars(2, 'os_resolucion_suspension_id');
$os_resolucion_suspension = OsResolucionSuspension::getOxId($os_resolucion_suspension_id);
$os_resolucion = $os_resolucion_suspension->getOsResolucion();

?>
<div class="datos" id="<?php Gral::_echo($os_resolucion->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('OsResolucion') ?>: 
        <strong><?php Gral::_echo($os_resolucion->getId()) ?> - <?php Gral::_echo($os_resolucion->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="os_resolucion_alta.php?id=<?php echo($os_resolucion->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('OsResolucion') ?>: <strong><?php Gral::_echo($os_resolucion->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo OsResolucionSuspension::getFiltrosArrGral() ?>&arr=<?php echo $os_resolucion_suspension->getFiltrosArrXCampo('OsResolucion', 'os_resolucion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('OsResolucionSuspensions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($os_resolucion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

