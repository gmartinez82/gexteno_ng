<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$nov_novedad_us_grupo = NovNovedadUsGrupo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($nov_novedad_us_grupo->getId()) ?>" modulo="nov_novedad_us_grupo">

    <div class="titulo">
        <?php Lang::_lang('NovNovedadUsGrupo') ?>: 
        <strong><?php Gral::_echo($nov_novedad_us_grupo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('NOV_NOVEDAD_US_GRUPO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('NovNovedadUsGrupo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

