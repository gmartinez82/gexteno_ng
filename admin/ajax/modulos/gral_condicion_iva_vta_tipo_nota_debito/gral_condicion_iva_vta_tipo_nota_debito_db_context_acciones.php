<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gral_condicion_iva_vta_tipo_nota_debito = GralCondicionIvaVtaTipoNotaDebito::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gral_condicion_iva_vta_tipo_nota_debito->getId()) ?>" modulo="gral_condicion_iva_vta_tipo_nota_debito">

    <div class="titulo">
        <?php Lang::_lang('GralCondicionIvaVtaTipoNotaDebito') ?>: 
        <strong><?php Gral::_echo($gral_condicion_iva_vta_tipo_nota_debito->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_VTA_TIPO_NOTA_DEBITO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GralCondicionIvaVtaTipoNotaDebito') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

