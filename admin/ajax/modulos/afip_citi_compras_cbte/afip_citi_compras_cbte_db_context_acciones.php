<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$afip_citi_compras_cbte = AfipCitiComprasCbte::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($afip_citi_compras_cbte->getId()) ?>" modulo="afip_citi_compras_cbte">

    <div class="titulo">
        <?php Lang::_lang('AfipCitiComprasCbte') ?>: 
        <strong><?php Gral::_echo($afip_citi_compras_cbte->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('AFIP_CITI_COMPRAS_CBTE_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('AfipCitiComprasCbte') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

