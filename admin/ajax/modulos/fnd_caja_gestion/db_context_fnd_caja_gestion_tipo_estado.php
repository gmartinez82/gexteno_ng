<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$fnd_caja_id = Gral::getVars(2, 'fnd_caja_id');
$fnd_caja = FndCaja::getOxId($fnd_caja_id);
$fnd_caja_tipo_estado = $fnd_caja->getFndCajaTipoEstado();

?>
<div class="datos" id="<?php Gral::_echo($fnd_caja_tipo_estado->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('FndCajaTipoEstado') ?>: 
        <strong><?php Gral::_echo($fnd_caja_tipo_estado->getId()) ?> - <?php Gral::_echo($fnd_caja_tipo_estado->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="fnd_caja_tipo_estado_alta.php?id=<?php echo($fnd_caja_tipo_estado->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('FndCajaTipoEstado') ?>: <strong><?php Gral::_echo($fnd_caja_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo FndCaja::getFiltrosArrGral() ?>&arr=<?php echo $fnd_caja->getFiltrosArrXCampo('FndCajaTipoEstado', 'fnd_caja_tipo_estado_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('FndCajas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($fnd_caja_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

