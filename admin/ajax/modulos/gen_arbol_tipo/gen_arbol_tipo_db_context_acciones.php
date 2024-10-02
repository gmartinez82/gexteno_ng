<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gen_arbol_tipo = GenArbolTipo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gen_arbol_tipo->getId()) ?>" modulo="gen_arbol_tipo">

    <div class="titulo">
        <?php Lang::_lang('GenArbolTipo') ?>: 
        <strong><?php Gral::_echo($gen_arbol_tipo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GEN_ARBOL_TIPO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GenArbolTipo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

