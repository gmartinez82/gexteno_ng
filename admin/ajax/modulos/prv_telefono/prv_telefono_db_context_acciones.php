<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$prv_telefono = PrvTelefono::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($prv_telefono->getId()) ?>" modulo="prv_telefono">

    <div class="titulo">
        <?php Lang::_lang('PrvTelefono') ?>: 
        <strong><?php Gral::_echo($prv_telefono->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PRV_TELEFONO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PrvTelefono') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

