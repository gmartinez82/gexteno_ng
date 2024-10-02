<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_comprador_id = Gral::getVars(2, 'vta_comprador_id');
$vta_comprador = VtaComprador::getOxId($vta_comprador_id);
$vta_tipo_comprador = $vta_comprador->getVtaTipoComprador();

?>
<div class="datos" id="<?php Gral::_echo($vta_tipo_comprador->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaTipoComprador') ?>: 
        <strong><?php Gral::_echo($vta_tipo_comprador->getId()) ?> - <?php Gral::_echo($vta_tipo_comprador->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_tipo_comprador_alta.php?id=<?php echo($vta_tipo_comprador->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaTipoComprador') ?>: <strong><?php Gral::_echo($vta_tipo_comprador->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaComprador::getFiltrosArrGral() ?>&arr=<?php echo $vta_comprador->getFiltrosArrXCampo('VtaTipoComprador', 'vta_tipo_comprador_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaCompradors') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_tipo_comprador->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

