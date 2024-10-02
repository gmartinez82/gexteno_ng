<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$prv_proveedor_prv_rubro_id = Gral::getVars(2, 'prv_proveedor_prv_rubro_id');
$prv_proveedor_prv_rubro = PrvProveedorPrvRubro::getOxId($prv_proveedor_prv_rubro_id);
$prv_rubro = $prv_proveedor_prv_rubro->getPrvRubro();

?>
<div class="datos" id="<?php Gral::_echo($prv_rubro->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PrvRubro') ?>: 
        <strong><?php Gral::_echo($prv_rubro->getId()) ?> - <?php Gral::_echo($prv_rubro->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="prv_rubro_alta.php?id=<?php echo($prv_rubro->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvRubro') ?>: <strong><?php Gral::_echo($prv_rubro->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PrvProveedorPrvRubro::getFiltrosArrGral() ?>&arr=<?php echo $prv_proveedor_prv_rubro->getFiltrosArrXCampo('PrvRubro', 'prv_rubro_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PrvProveedorPrvRubros') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prv_rubro->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

