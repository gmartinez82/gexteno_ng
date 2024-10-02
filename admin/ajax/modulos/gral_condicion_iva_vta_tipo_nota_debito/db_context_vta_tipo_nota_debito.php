<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$gral_condicion_iva_vta_tipo_nota_debito_id = Gral::getVars(2, 'gral_condicion_iva_vta_tipo_nota_debito_id');
$gral_condicion_iva_vta_tipo_nota_debito = GralCondicionIvaVtaTipoNotaDebito::getOxId($gral_condicion_iva_vta_tipo_nota_debito_id);
$vta_tipo_nota_debito = $gral_condicion_iva_vta_tipo_nota_debito->getVtaTipoNotaDebito();

?>
<div class="datos" id="<?php Gral::_echo($vta_tipo_nota_debito->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaTipoNotaDebito') ?>: 
        <strong><?php Gral::_echo($vta_tipo_nota_debito->getId()) ?> - <?php Gral::_echo($vta_tipo_nota_debito->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_tipo_nota_debito_alta.php?id=<?php echo($vta_tipo_nota_debito->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaTipoNotaDebito') ?>: <strong><?php Gral::_echo($vta_tipo_nota_debito->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo GralCondicionIvaVtaTipoNotaDebito::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_vta_tipo_nota_debito->getFiltrosArrXCampo('VtaTipoNotaDebito', 'vta_tipo_nota_debito_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoNotaDebitos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_tipo_nota_debito->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

