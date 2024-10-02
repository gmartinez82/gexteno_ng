<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pln_turno = PlnTurno::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pln_turno->getId()) ?>" modulo="pln_turno">

    <div class="titulo">
        <?php Lang::_lang('PlnTurno') ?>: 
        <strong><?php Gral::_echo($pln_turno->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PLN_TURNO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PlnTurno') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

