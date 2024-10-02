
<div class="titulo"><?php Lang::_lang('Egresos') ?></div>

<div class="botonera-left">

    <?php if (UsCredencial::getEsAcreditado('FND_CAJA_GESTION_ACCION_FICHA_EGRESOS_AGREGAR')) { ?>
        <?php if ($fnd_caja_tipo_estado->getCodigo() == FndCajaTipoEstado::TIPO_ABIERTA) { ?>
            <input type="button" class="boton" id="btn_agregar_egreso" name="btn_agregar_egreso" value="Agregar Nuevo Egreso" />
        <?php } ?>
    <?php } ?>

</div>

<div class="bloque-ficha-egresos">
    <?php include "bloque_ficha_egresos.php" ?>
</div>
<br />

