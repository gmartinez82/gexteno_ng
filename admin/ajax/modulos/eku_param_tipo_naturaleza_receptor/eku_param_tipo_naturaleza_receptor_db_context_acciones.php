<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_param_tipo_naturaleza_receptor = EkuParamTipoNaturalezaReceptor::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_param_tipo_naturaleza_receptor->getId()) ?>" modulo="eku_param_tipo_naturaleza_receptor">

    <div class="titulo">
        <?php Lang::_lang('EkuParamTipoNaturalezaReceptor') ?>: 
        <strong><?php Gral::_echo($eku_param_tipo_naturaleza_receptor->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_PARAM_TIPO_NATURALEZA_RECEPTOR_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuParamTipoNaturalezaReceptor') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

