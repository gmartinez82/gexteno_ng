<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$afip_citi_cabecera = AfipCitiCabecera::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($afip_citi_cabecera->getId()) ?>" modulo="afip_citi_cabecera">

    <div class="titulo">
        <?php Lang::_lang('AfipCitiCabecera') ?>: 
        <strong><?php Gral::_echo($afip_citi_cabecera->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('AFIP_CITI_CABECERA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('AfipCitiCabecera') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

