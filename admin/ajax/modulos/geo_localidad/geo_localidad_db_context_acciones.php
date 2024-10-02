<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$geo_localidad = GeoLocalidad::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($geo_localidad->getId()) ?>" modulo="geo_localidad">

    <div class="titulo">
        <?php Lang::_lang('GeoLocalidad') ?>: 
        <strong><?php Gral::_echo($geo_localidad->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GEO_LOCALIDAD_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GeoLocalidad') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

