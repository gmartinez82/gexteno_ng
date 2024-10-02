<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_insumo_destino_transformacion_id = Gral::getVars(2, 'ins_insumo_destino_transformacion_id');
$ins_insumo_destino_transformacion = InsInsumoDestinoTransformacion::getOxId($ins_insumo_destino_transformacion_id);
$ins_insumo_dest = $ins_insumo_destino_transformacion->getInsInsumoDest();

?>
<div class="datos" id="<?php Gral::_echo($ins_insumo_dest->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsInsumoDest') ?>: 
        <strong><?php Gral::_echo($ins_insumo_dest->getId()) ?> - <?php Gral::_echo($ins_insumo_dest->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_insumo_dest_alta.php?id=<?php echo($ins_insumo_dest->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsInsumoDest') ?>: <strong><?php Gral::_echo($ins_insumo_dest->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsInsumoDestinoTransformacion::getFiltrosArrGral() ?>&arr=<?php echo $ins_insumo_destino_transformacion->getFiltrosArrXCampo('InsInsumoDest', 'ins_insumo_dest_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsInsumoDestinoTransformacions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_insumo_dest->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

