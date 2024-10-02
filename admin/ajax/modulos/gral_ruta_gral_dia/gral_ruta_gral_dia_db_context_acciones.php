<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gral_ruta_gral_dia = GralRutaGralDia::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gral_ruta_gral_dia->getId()) ?>" modulo="gral_ruta_gral_dia">

    <div class="titulo">
        <?php Lang::_lang('GralRutaGralDia') ?>: 
        <strong><?php Gral::_echo($gral_ruta_gral_dia->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GRAL_RUTA_GRAL_DIA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GralRutaGralDia') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

