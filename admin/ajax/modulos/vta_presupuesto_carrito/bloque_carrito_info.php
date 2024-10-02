<div class="col presupuesto-id">
    <div class="par">
        <div class="label">Presupuesto</div>
        <div class="dato">
            <?php echo $vta_presupuesto_activo->getCodigo() ?>
        </div>
    </div>
</div>

<div class="col sucursal">
    <div class="par">
        <div class="label">Sucursal</div>
        <div class="dato">
            <?php Gral::_echo($vta_presupuesto_activo->getGralSucursal()->getDescripcion()) ?>
        </div>
    </div>
</div>

<div class="col vendedor">
    <div class="par">
        <div class="label">Vendedor</div>
        <div class="dato">
            <?php Gral::_echo($vta_presupuesto_activo->getVtaVendedor()->getDescripcion()) ?>
        </div>
    </div>
</div>

<?php if(trim($vta_presupuesto_activo->getPersonaDescripcion()) != ''){ ?>
<div class="col cliente">
    <div class="par">
        <div class="label">Cliente</div>
        <div class="dato">
                <?php echo $vta_presupuesto_activo->getPersonaDescripcion() ?>
        </div>
    </div>
</div>
<?php } ?>

<div class="col tipo-lista-precio">
    <div class="par">
        <div class="label">Lista de precio</div>
        <div class="dato">
            <?php Gral::_echo($vta_presupuesto_activo->getInsTipoListaPrecio()->getDescripcion()) ?>
        </div>
    </div>
</div>

<div class="col tipo-estado">
    <div class="par">
        <div class="label">Estado</div>
        <div class="dato">
            <img src="imgs/vta_presupuesto_tipo_estado/<?php Gral::_echo($vta_presupuesto_activo->getVtaPresupuestoTipoEstado()->getCodigo()) ?>.png" class="icon-tipo-estado" alt="tipo-estado" width="13" />
            <?php Gral::_echo($vta_presupuesto_activo->getVtaPresupuestoTipoEstado()->getDescripcion()) ?>
        </div>
    </div>
</div>

<div class="col presupuesto-cantidad">
    <div class="par">
        <div class="label">Items</div>
        <div class="dato">
            <?php Gral::_echo($vta_presupuesto_activo->getCantidadItems()) ?>
        </div>
    </div>
</div>

<div class="col presupuesto-subtotal">
    <div class="par">
        <div class="label">Subtotal</div>
        <div class="dato">
            <?php Gral::_echoImp($vta_presupuesto_activo->getImporteTotalPresupuestoConDescuentoSinIva()); ?>
        </div>
        <div class="label">
            + IVA <?php Gral::_echoImp($vta_presupuesto_activo->getIvaPresupuesto()); ?>
        </div>
    </div>
</div>

<div class="col presupuesto-total">
    <div class="par">
        <div class="label">Total</div>
        <div class="dato">
            <?php Gral::_echoImp($vta_presupuesto_activo->getImporteTotalPresupuestoConIva()); ?>
        </div>
    </div>
</div>

<div class="col botonera">
    <button type="button" class="boton-carrito" id="btn_carrito_nuevo" name="btn_carrito_nuevo" title="Nuevo Presupuesto">
        <img src="imgs/btn_carrito_nuevo.png" alt="img" width="23" />
    </button>
    <button type="button" class="boton-carrito" id="btn_carrito_abandonar" name="btn_carrito_abandonar" title="Abandonar Presupuesto">
        <img src="imgs/btn_carrito_abandonar.png" alt="img" width="23" />
    </button>
    <button type="button" class="boton-carrito" id="btn_carrito_ver" name="btn_carrito_ver" vta_presupuesto_id='<?php echo $vta_presupuesto_activo->getId() ?>' title="Editar Presupuesto">
        <img src="imgs/btn_carrito_editar.png" alt="img" width="23" />
    </button>
    <button type="button" class="boton-carrito" id="btn_carrito_ver_presupuestos" name="btn_carrito_ver_presupuestos" title="Ver Todos los Presupuestos">
        <img src="imgs/btn_carrito_ver_presupuestos.png" alt="img" width="23" />
    </button>
    <button type="button" class="boton-carrito" id="btn_carrito_volver_buscador" name="btn_carrito_volver_buscador" title="Buscador de Insumos">
        <img src="imgs/btn_carrito_buscar.png" alt="img" width="23" />
    </button>
</div>

