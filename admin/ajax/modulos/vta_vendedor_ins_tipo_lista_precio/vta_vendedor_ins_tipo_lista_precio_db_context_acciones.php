<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_vendedor_ins_tipo_lista_precio = VtaVendedorInsTipoListaPrecio::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($vta_vendedor_ins_tipo_lista_precio->getId()) ?>" modulo="vta_vendedor_ins_tipo_lista_precio">

    <div class="titulo">
        <?php Lang::_lang('VtaVendedorInsTipoListaPrecio') ?>: 
        <strong><?php Gral::_echo($vta_vendedor_ins_tipo_lista_precio->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_VENDEDOR_INS_TIPO_LISTA_PRECIO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaVendedorInsTipoListaPrecio') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

