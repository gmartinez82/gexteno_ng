<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$prv_proveedor_ins_marca_id = Gral::getVars(2, 'prv_proveedor_ins_marca_id');
$prv_proveedor_ins_marca = PrvProveedorInsMarca::getOxId($prv_proveedor_ins_marca_id);
$ins_marca = $prv_proveedor_ins_marca->getInsMarca();

?>
<div class="datos" id="<?php Gral::_echo($ins_marca->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsMarca') ?>: 
        <strong><?php Gral::_echo($ins_marca->getId()) ?> - <?php Gral::_echo($ins_marca->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_marca_alta.php?id=<?php echo($ins_marca->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsMarca') ?>: <strong><?php Gral::_echo($ins_marca->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PrvProveedorInsMarca::getFiltrosArrGral() ?>&arr=<?php echo $prv_proveedor_ins_marca->getFiltrosArrXCampo('InsMarca', 'ins_marca_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PrvProveedorInsMarcas') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_marca->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

