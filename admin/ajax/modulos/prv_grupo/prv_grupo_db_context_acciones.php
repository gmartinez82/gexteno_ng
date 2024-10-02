<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$prv_grupo = PrvGrupo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($prv_grupo->getId()) ?>" modulo="prv_grupo">

    <div class="titulo">
        <?php Lang::_lang('PrvGrupo') ?>: 
        <strong><?php Gral::_echo($prv_grupo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PRV_GRUPO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PrvGrupo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

