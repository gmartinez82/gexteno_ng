<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$xml_lenguaje_pagina = XmlLenguajePagina::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($xml_lenguaje_pagina->getId()) ?>" modulo="xml_lenguaje_pagina">

    <div class="titulo">
        <?php Lang::_lang('XmlLenguajePagina') ?>: 
        <strong><?php Gral::_echo($xml_lenguaje_pagina->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('XML_LENGUAJE_PAGINA_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('XmlLenguajePagina') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

