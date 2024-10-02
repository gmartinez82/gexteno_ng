<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$vta_nota_credito_id = Gral::getVars(2, 'vta_nota_credito_id');
$vta_nota_credito = VtaNotaCredito::getOxId($vta_nota_credito_id);
$vta_tipo_origen_nota_credito = $vta_nota_credito->getVtaTipoOrigenNotaCredito();

?>
<div class="datos" id="<?php Gral::_echo($vta_tipo_origen_nota_credito->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaTipoOrigenNotaCredito') ?>: 
        <strong><?php Gral::_echo($vta_tipo_origen_nota_credito->getId()) ?> - <?php Gral::_echo($vta_tipo_origen_nota_credito->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_tipo_origen_nota_credito_alta.php?id=<?php echo($vta_tipo_origen_nota_credito->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaTipoOrigenNotaCredito') ?>: <strong><?php Gral::_echo($vta_tipo_origen_nota_credito->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo VtaNotaCredito::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito->getFiltrosArrXCampo('VtaTipoOrigenNotaCredito', 'vta_tipo_origen_nota_credito_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('VtaNotaCreditos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_tipo_origen_nota_credito->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

