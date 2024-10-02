<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pln_turno_novedad = PlnTurnoNovedad::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pln_turno_novedad->getId()) ?>" modulo="pln_turno_novedad">

    <div class="titulo">
        <?php Lang::_lang('PlnTurnoNovedad') ?>: 
        <strong><?php Gral::_echo($pln_turno_novedad->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PLN_TURNO_NOVEDAD_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PlnTurnoNovedad') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

