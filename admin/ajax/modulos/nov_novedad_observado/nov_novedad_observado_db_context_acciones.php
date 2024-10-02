<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$nov_novedad_observado = NovNovedadObservado::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($nov_novedad_observado->getId()) ?>" modulo="nov_novedad_observado">

    <div class="titulo">
        <?php Lang::_lang('NovNovedadObservado') ?>: 
        <strong><?php Gral::_echo($nov_novedad_observado->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('NOV_NOVEDAD_OBSERVADO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('NovNovedadObservado') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

