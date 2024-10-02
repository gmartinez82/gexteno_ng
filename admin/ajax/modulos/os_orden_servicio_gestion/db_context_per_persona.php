<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$os_orden_servicio_id = Gral::getVars(2, 'os_orden_servicio_id');
$os_orden_servicio = OsOrdenServicio::getOxId($os_orden_servicio_id);
$per_persona = $os_orden_servicio->getPerPersona();

?>
<div class="datos" id="<?php Gral::_echo($per_persona->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PerPersona') ?>: 
        <strong><?php Gral::_echo($per_persona->getId()) ?> - <?php Gral::_echo($per_persona->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="per_persona_alta.php?id=<?php echo($per_persona->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerPersona') ?>: <strong><?php Gral::_echo($per_persona->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo OsOrdenServicio::getFiltrosArrGral() ?>&arr=<?php echo $os_orden_servicio->getFiltrosArrXCampo('PerPersona', 'per_persona_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('OsOrdenServicios') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($per_persona->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

