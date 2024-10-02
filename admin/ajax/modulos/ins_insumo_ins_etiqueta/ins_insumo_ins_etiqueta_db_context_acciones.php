<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ins_insumo_ins_etiqueta = InsInsumoInsEtiqueta::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ins_insumo_ins_etiqueta->getId()) ?>" modulo="ins_insumo_ins_etiqueta">

    <div class="titulo">
        <?php Lang::_lang('InsInsumoInsEtiqueta') ?>: 
        <strong><?php Gral::_echo($ins_insumo_ins_etiqueta->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_INS_ETIQUETA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('InsInsumoInsEtiqueta') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

