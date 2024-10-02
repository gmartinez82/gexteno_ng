<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_presupuesto_id = Gral::getVars(2, 'vta_presupuesto_id');
$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
$ins_tipo_lista_precio = $vta_presupuesto->getInsTipoListaPrecio();

?>
<div class="datos" id="<?php Gral::_echo($ins_tipo_lista_precio->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsTipoListaPrecio') ?>: 
        <strong><?php Gral::_echo($ins_tipo_lista_precio->getId()) ?> - <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_tipo_lista_precio_alta.php?id=<?php echo($ins_tipo_lista_precio->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsTipoListaPrecio') ?>: <strong><?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaPresupuesto::getFiltrosArrGral() ?>&arr=<?php echo $vta_presupuesto->getFiltrosArrXCampo('InsTipoListaPrecio', 'ins_tipo_lista_precio_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaPresupuestos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

