
<div class="titulo"><?php Lang::_lang('Historial de Costos') ?></div>

<div class="botonera-left">
    
    <?php if (UsCredencial::getEsAcreditado('INS_INSUMO_GESTION_ACCION_FICHA_COSTOS_AGREGAR')) { ?>
    <input type="button" class="boton" id="btn_costo_agregar" name="btn_costo_agregar" value="Agregar Nuevo Costo" />
    <?php } ?>
    
</div>

<div class="bloque-insumo-costos">
    <?php include "bloque_insumo_costos.php" ?>
</div>
<br />