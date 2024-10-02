<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$conf_variable = ConfVariable::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($conf_variable->getId()) ?>" modulo="conf_variable">

    <div class="titulo">
        <?php Lang::_lang('ConfVariable') ?>: 
        <strong><?php Gral::_echo($conf_variable->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CONF_VARIABLE_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('ConfVariable') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

