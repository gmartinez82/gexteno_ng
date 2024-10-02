<?php
include "_autoload.php";

// -----------------------------------------------------------------------------
// se recuperan datos elegidos via checkbox
// -----------------------------------------------------------------------------
$chk_insumo_ids = Gral::getVars(1, 'chk_insumo_id');
//Gral::prr($chk_insumo_ids);

// -----------------------------------------------------------------------------
// se inicializa criterio para reconocer la busqueda realizada
// -----------------------------------------------------------------------------
$criterio = new Criterio(InsInsumo::SES_CRITERIOS);
$criterio->addTabla(InsInsumo::GEN_TABLA);
$criterio->setCriteriosInicial();

$paginador = null;
$ins_insumos = InsInsumo::getInsInsumos($paginador, $criterio);

if ($chk_insumo_ids == '') {
    echo "Debe seleccionar al menos 1 insumo";
    exit;
}

$ins_tipo_lista_precios = InsTipoListaPrecio::getInsTipoListaPrecios();
?>
<div class="datos modificar-importe">

    <div class="col insumos">
        
        <!-- Selector de Cantidad a Afectar -->
        <div class="comentarios-cantidad">
            <div class="comentario-cantidad">
                <input type="radio" id="rad_aplicar_todos_0" name="rad_aplicar_todos" value="0" checked="checked">
                Aplicar a los <?php Gral::_echoFloatDyn(count($chk_insumo_ids)) ?> productos seleccionados.
            </div>
            <div class="comentario-cantidad">
                <input type="radio" id="rad_aplicar_todos_1" name="rad_aplicar_todos" value="1">
                Aplicar a los <?php Gral::_echoFloatDyn(count($ins_insumos)) ?> productos filtrados.
            </div>
        </div>

        <?php
        foreach ($chk_insumo_ids as $chk_insumo_id) {
            $ins_insumo = InsInsumo::getOxId($chk_insumo_id);
            ?>
            <div class="uno insumo">

                <div class="descripcion">
                    <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
                </div>

            </div>
        <?php } ?>
    </div>

    <div class="col tipos">

        
        <!-- Tienda Online -->
        <div class="tipo">
            <h4 class="descripcion"><?php Lang::_lang('Tienda Online') ?></h4>

            <div class="botonera">
                <button type="button" class="boton" id="btn_habilitar_tienda_online" name="btn_habilitar_tienda_online"><?php Lang::_lang('Habilitar') ?></button>
                <button type="button" class="boton" id="btn_deshabilitar_tienda_online" name="btn_deshabilitar_tienda_online"><?php Lang::_lang('Deshabilitar') ?></button>
            </div>
        </div>

        <!-- Tienda Mayorista -->
        <div class="tipo">
            <h4 class="descripcion"><?php Lang::_lang('Tienda Mayorista') ?></h4>

            <div class="botonera">
                <button type="button" class="boton" id="btn_habilitar_tienda_mayorista" name="btn_vincular_etiqueta"><?php Lang::_lang('Habilitar') ?></button>
                <button type="button" class="boton" id="btn_deshabilitar_tienda_mayorista" name="btn_quitar_etiqueta"><?php Lang::_lang('Deshabilitar') ?></button>
            </div>
        </div>
        
    </div>

</div>