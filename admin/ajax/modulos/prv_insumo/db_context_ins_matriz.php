<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$prv_insumo_id = Gral::getVars(2, 'prv_insumo_id');
$prv_insumo = PrvInsumo::getOxId($prv_insumo_id);
$ins_matriz = $prv_insumo->getInsMatriz();

?>
<div class="datos" id="<?php Gral::_echo($ins_matriz->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsMatriz') ?>: 
        <strong><?php Gral::_echo($ins_matriz->getId()) ?> - <?php Gral::_echo($ins_matriz->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_matriz_alta.php?id=<?php echo($ins_matriz->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsMatriz') ?>: <strong><?php Gral::_echo($ins_matriz->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PrvInsumo::getFiltrosArrGral() ?>&arr=<?php echo $prv_insumo->getFiltrosArrXCampo('InsMatriz', 'ins_matriz_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PrvInsumos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_matriz->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

