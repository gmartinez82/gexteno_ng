<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$pde_recepcion_id = Gral::getVars(2, 'pde_recepcion_id');
$pde_recepcion = PdeRecepcion::getOxId($pde_recepcion_id);
$prv_proveedor = $pde_recepcion->getPrvProveedor();

?>
<div class="datos" id="<?php Gral::_echo($prv_proveedor->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PrvProveedor') ?>: 
        <strong><?php Gral::_echo($prv_proveedor->getId()) ?> - <?php Gral::_echo($prv_proveedor->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="prv_proveedor_alta.php?id=<?php echo($prv_proveedor->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvProveedor') ?>: <strong><?php Gral::_echo($prv_proveedor->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo PdeRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $pde_recepcion->getFiltrosArrXCampo('PrvProveedor', 'prv_proveedor_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('PdeRecepcions') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($prv_proveedor->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

