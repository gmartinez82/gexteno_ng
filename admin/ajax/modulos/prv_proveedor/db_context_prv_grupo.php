<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$prv_proveedor_id = Gral::getVars(2, 'prv_proveedor_id');
$prv_proveedor = PrvProveedor::getOxId($prv_proveedor_id);
$prv_grupo = $prv_proveedor->getPrvGrupo();

?>
<div class="datos" id="<?php Gral::_echo($prv_grupo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PrvGrupo') ?>: 
        <strong><?php Gral::_echo($prv_grupo->getId()) ?> - <?php Gral::_echo($prv_grupo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="prv_grupo_alta.php?id=<?php echo($prv_grupo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvGrupo') ?>: <strong><?php Gral::_echo($prv_grupo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PrvProveedor::getFiltrosArrGral() ?>&arr=<?php echo $prv_proveedor->getFiltrosArrXCampo('PrvGrupo', 'prv_grupo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PrvProveedors') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prv_grupo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

