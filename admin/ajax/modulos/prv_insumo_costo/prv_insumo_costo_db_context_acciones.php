<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$prv_insumo_costo = PrvInsumoCosto::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($prv_insumo_costo->getId()) ?>" modulo="prv_insumo_costo">

    <div class="titulo">
        <?php Lang::_lang('PrvInsumoCosto') ?>: 
        <strong><?php Gral::_echo($prv_insumo_costo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PRV_INSUMO_COSTO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PrvInsumoCosto') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

