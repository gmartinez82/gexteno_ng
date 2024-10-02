<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$per_persona_gral_sucursal = PerPersonaGralSucursal::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($per_persona_gral_sucursal->getId()) ?>" modulo="per_persona_gral_sucursal">

    <div class="titulo">
        <?php Lang::_lang('PerPersonaGralSucursal') ?>: 
        <strong><?php Gral::_echo($per_persona_gral_sucursal->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PER_PERSONA_GRAL_SUCURSAL_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PerPersonaGralSucursal') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

