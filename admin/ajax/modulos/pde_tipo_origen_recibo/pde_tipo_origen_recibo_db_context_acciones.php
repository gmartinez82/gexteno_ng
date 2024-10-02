<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pde_tipo_origen_recibo = PdeTipoOrigenRecibo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pde_tipo_origen_recibo->getId()) ?>" modulo="pde_tipo_origen_recibo">

    <div class="titulo">
        <?php Lang::_lang('PdeTipoOrigenRecibo') ?>: 
        <strong><?php Gral::_echo($pde_tipo_origen_recibo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PDE_TIPO_ORIGEN_RECIBO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PdeTipoOrigenRecibo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

