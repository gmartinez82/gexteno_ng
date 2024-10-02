<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$pln_jornada = PlnJornada::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($pln_jornada->getId()) ?>" modulo="pln_jornada">

    <div class="titulo">
        <?php Lang::_lang('PlnJornada') ?>: 
        <strong><?php Gral::_echo($pln_jornada->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PLN_JORNADA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PlnJornada') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

