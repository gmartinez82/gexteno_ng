<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ins_tipo_necesidad = InsTipoNecesidad::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ins_tipo_necesidad->getId()) ?>" modulo="ins_tipo_necesidad">

    <div class="titulo">
        <?php Lang::_lang('InsTipoNecesidad') ?>: 
        <strong><?php Gral::_echo($ins_tipo_necesidad->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('INS_TIPO_NECESIDAD_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('InsTipoNecesidad') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

