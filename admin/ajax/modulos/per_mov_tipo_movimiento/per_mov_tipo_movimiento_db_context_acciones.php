<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$per_mov_tipo_movimiento = PerMovTipoMovimiento::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($per_mov_tipo_movimiento->getId()) ?>" modulo="per_mov_tipo_movimiento">

    <div class="titulo">
        <?php Lang::_lang('PerMovTipoMovimiento') ?>: 
        <strong><?php Gral::_echo($per_mov_tipo_movimiento->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PER_MOV_TIPO_MOVIMIENTO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PerMovTipoMovimiento') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

