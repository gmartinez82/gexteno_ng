<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$os_orden_servicio_id = Gral::getVars(2, 'os_orden_servicio_id');
$os_orden_servicio = OsOrdenServicio::getOxId($os_orden_servicio_id);
$os_tipo_estado = $os_orden_servicio->getOsTipoEstado();

?>
<div class="datos" id="<?php Gral::_echo($os_tipo_estado->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('OsTipoEstado') ?>: 
        <strong><?php Gral::_echo($os_tipo_estado->getId()) ?> - <?php Gral::_echo($os_tipo_estado->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="os_tipo_estado_alta.php?id=<?php echo($os_tipo_estado->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('OsTipoEstado') ?>: <strong><?php Gral::_echo($os_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo OsOrdenServicio::getFiltrosArrGral() ?>&arr=<?php echo $os_orden_servicio->getFiltrosArrXCampo('OsTipoEstado', 'os_tipo_estado_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('OsOrdenServicios') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($os_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

