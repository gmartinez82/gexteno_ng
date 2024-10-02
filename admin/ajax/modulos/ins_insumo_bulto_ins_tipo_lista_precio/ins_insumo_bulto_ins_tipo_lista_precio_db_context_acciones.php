<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ins_insumo_bulto_ins_tipo_lista_precio = InsInsumoBultoInsTipoListaPrecio::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ins_insumo_bulto_ins_tipo_lista_precio->getId()) ?>" modulo="ins_insumo_bulto_ins_tipo_lista_precio">

    <div class="titulo">
        <?php Lang::_lang('InsInsumoBultoInsTipoListaPrecio') ?>: 
        <strong><?php Gral::_echo($ins_insumo_bulto_ins_tipo_lista_precio->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_BULTO_INS_TIPO_LISTA_PRECIO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('InsInsumoBultoInsTipoListaPrecio') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

