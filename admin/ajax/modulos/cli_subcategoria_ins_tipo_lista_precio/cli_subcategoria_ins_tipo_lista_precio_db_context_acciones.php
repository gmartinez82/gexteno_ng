<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$cli_subcategoria_ins_tipo_lista_precio = CliSubcategoriaInsTipoListaPrecio::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($cli_subcategoria_ins_tipo_lista_precio->getId()) ?>" modulo="cli_subcategoria_ins_tipo_lista_precio">

    <div class="titulo">
        <?php Lang::_lang('CliSubcategoriaInsTipoListaPrecio') ?>: 
        <strong><?php Gral::_echo($cli_subcategoria_ins_tipo_lista_precio->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CLI_SUBCATEGORIA_INS_TIPO_LISTA_PRECIO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('CliSubcategoriaInsTipoListaPrecio') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

