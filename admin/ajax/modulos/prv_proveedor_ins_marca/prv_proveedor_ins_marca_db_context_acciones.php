<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$prv_proveedor_ins_marca = PrvProveedorInsMarca::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($prv_proveedor_ins_marca->getId()) ?>" modulo="prv_proveedor_ins_marca">

    <div class="titulo">
        <?php Lang::_lang('PrvProveedorInsMarca') ?>: 
        <strong><?php Gral::_echo($prv_proveedor_ins_marca->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PRV_PROVEEDOR_INS_MARCA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PrvProveedorInsMarca') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

