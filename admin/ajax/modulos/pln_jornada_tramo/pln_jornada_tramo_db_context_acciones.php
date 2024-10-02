<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pln_jornada_tramo = PlnJornadaTramo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pln_jornada_tramo->getId()) ?>" modulo="pln_jornada_tramo">

    <div class="titulo">
        <?php Lang::_lang('PlnJornadaTramo') ?>: 
        <strong><?php Gral::_echo($pln_jornada_tramo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PLN_JORNADA_TRAMO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PlnJornadaTramo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

