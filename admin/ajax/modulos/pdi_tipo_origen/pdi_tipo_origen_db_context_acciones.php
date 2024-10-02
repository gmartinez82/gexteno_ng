<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pdi_tipo_origen = PdiTipoOrigen::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pdi_tipo_origen->getId()) ?>" modulo="pdi_tipo_origen">

    <div class="titulo">
        <?php Lang::_lang('PdiTipoOrigen') ?>: 
        <strong><?php Gral::_echo($pdi_tipo_origen->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDI_TIPO_ORIGEN_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PdiTipoOrigen') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

