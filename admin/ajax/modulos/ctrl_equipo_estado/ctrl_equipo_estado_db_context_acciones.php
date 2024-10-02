<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ctrl_equipo_estado = CtrlEquipoEstado::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ctrl_equipo_estado->getId()) ?>" modulo="ctrl_equipo_estado">

    <div class="titulo">
        <?php Lang::_lang('CtrlEquipoEstado') ?>: 
        <strong><?php Gral::_echo($ctrl_equipo_estado->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CTRL_EQUIPO_ESTADO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('CtrlEquipoEstado') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

