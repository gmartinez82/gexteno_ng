<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$vta_comision_id = Gral::getVars(2, 'vta_comision_id');
$vta_comision = VtaComision::getOxId($vta_comision_id);
$vta_comision_tipo_estado = $vta_comision->getVtaComisionTipoEstado();

?>
<div class="datos" id="<?php Gral::_echo($vta_comision_tipo_estado->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaComisionTipoEstado') ?>: 
        <strong><?php Gral::_echo($vta_comision_tipo_estado->getId()) ?> - <?php Gral::_echo($vta_comision_tipo_estado->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_comision_tipo_estado_alta.php?id=<?php echo($vta_comision_tipo_estado->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaComisionTipoEstado') ?>: <strong><?php Gral::_echo($vta_comision_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaComision::getFiltrosArrGral() ?>&arr=<?php echo $vta_comision->getFiltrosArrXCampo('VtaComisionTipoEstado', 'vta_comision_tipo_estado_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaComisions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_comision_tipo_estado->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

