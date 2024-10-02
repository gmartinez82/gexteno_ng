<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$prv_telefono_tipo = PrvTelefonoTipo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($prv_telefono_tipo->getId()) ?>" modulo="prv_telefono_tipo">

    <div class="titulo">
        <?php Lang::_lang('PrvTelefonoTipo') ?>: 
        <strong><?php Gral::_echo($prv_telefono_tipo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PRV_TELEFONO_TIPO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PrvTelefonoTipo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

