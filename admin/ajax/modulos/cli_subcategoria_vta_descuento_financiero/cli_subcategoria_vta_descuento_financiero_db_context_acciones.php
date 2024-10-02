<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$cli_subcategoria_vta_descuento_financiero = CliSubcategoriaVtaDescuentoFinanciero::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($cli_subcategoria_vta_descuento_financiero->getId()) ?>" modulo="cli_subcategoria_vta_descuento_financiero">

    <div class="titulo">
        <?php Lang::_lang('CliSubcategoriaVtaDescuentoFinanciero') ?>: 
        <strong><?php Gral::_echo($cli_subcategoria_vta_descuento_financiero->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_VTA_DESCUENTO_FINANCIERO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('CliSubcategoriaVtaDescuentoFinanciero') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

