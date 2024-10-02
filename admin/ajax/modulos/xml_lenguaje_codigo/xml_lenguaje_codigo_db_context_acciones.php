<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$xml_lenguaje_codigo = XmlLenguajeCodigo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($xml_lenguaje_codigo->getId()) ?>" modulo="xml_lenguaje_codigo">

    <div class="titulo">
        <?php Lang::_lang('XmlLenguajeCodigo') ?>: 
        <strong><?php Gral::_echo($xml_lenguaje_codigo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('XML_LENGUAJE_CODIGO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('XmlLenguajeCodigo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

