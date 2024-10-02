
<div class="titulo"><?php Lang::_lang('Ingresos') ?></div>

<div class="botonera-left">

    <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ACCION_FICHA_INGRESOS_AGREGAR')) { ?>
        <?php if ($fnd_caja_tipo_estado->getCodigo() == FndCajaTipoEstado::TIPO_ABIERTA) { ?>
            <input type="button" class="boton" id="btn_agregar_ingreso" name="btn_agregar_ingreso" value="Agregar Nuevo Ingreso" />
        <?php } ?>
    <?php } ?>

</div>

<div class="bloque-ficha-ingresos">
    <?php include "bloque_ficha_ingresos.php" ?>
</div>
<br />

