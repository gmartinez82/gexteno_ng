
<div class="titulo"><?php Lang::_lang('Insumos Vinculados') ?></div>

<div class="insumos-vinculados">
    <?php include "bloque_insumos_vinculados.php" ?>
</div>

<br />

<div class="botonera-left vincular-nuevo-insumo">
    
    <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_GESTION_ACCION_FICHA_VINCULADOS_AGREGAR')) { ?>
    <?php echo Html::html_get_dbsuggest(1, 'dbsug_ins_insumo_vinculado', 'ajax/modulos/ins_insumo_gestion/ins_insumo_gestion_dbsuggest_custom.php', false, true, true, 'Ingrese ...', null, '') ?>
    <input type="button" class="boton" id="btn_vincular" name="btn_vincular" value="Registrar como Vinculado" />
    <?php } ?>
    
</div>