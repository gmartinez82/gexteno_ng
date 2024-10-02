<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$prd_tipo_origen = PrdTipoOrigen::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($prd_tipo_origen->getId()) ?>" modulo="prd_tipo_origen">

    <div class="titulo">
        <?php Lang::_lang('PrdTipoOrigen') ?>: 
        <strong><?php Gral::_echo($prd_tipo_origen->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PRD_TIPO_ORIGEN_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PrdTipoOrigen') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

