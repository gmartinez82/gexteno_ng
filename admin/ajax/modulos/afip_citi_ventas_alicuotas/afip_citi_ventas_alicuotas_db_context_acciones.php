<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$afip_citi_ventas_alicuotas = AfipCitiVentasAlicuotas::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($afip_citi_ventas_alicuotas->getId()) ?>" modulo="afip_citi_ventas_alicuotas">

    <div class="titulo">
        <?php Lang::_lang('AfipCitiVentasAlicuotas') ?>: 
        <strong><?php Gral::_echo($afip_citi_ventas_alicuotas->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('AFIP_CITI_VENTAS_ALICUOTAS_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('AfipCitiVentasAlicuotas') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

