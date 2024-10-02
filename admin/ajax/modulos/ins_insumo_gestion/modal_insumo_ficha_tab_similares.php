
<div class="titulo"><?php Lang::_lang('Insumos Similares') ?></div>

<div class="insumos-similares">
    <?php include "bloque_insumos_similares.php" ?>
</div>

<br />

<div class="botonera-left similar-nuevo-insumo">
    
    <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_GESTION_ACCION_FICHA_SIMILARES_AGREGAR')) { ?>
    <?php echo Html::html_get_dbsuggest(1, 'dbsug_ins_insumo_similar', 'ajax/modulos/ins_insumo_gestion/ins_insumo_gestion_dbsuggest_custom.php', false, true, true, 'Ingrese ...', null, '') ?>
    <input type="button" class="boton" id="btn_registrar_similar" name="btn_registrar_similar" value="Registrar como Similar" />
    <?php } ?>
    
</div>