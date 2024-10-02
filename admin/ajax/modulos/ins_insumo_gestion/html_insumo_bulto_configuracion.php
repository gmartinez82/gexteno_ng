<style>
    .ins-insumo-bultos{
        font-size: 10px;
        color: #666;
    }
    .ins-insumo-bultos .ins-insumo-bulto{
        color: #003366;
    }
    .ins-insumo-bultos .ins-insumo-bulto .ins-insumo-bulto-tipo-lista{
        background-color: #013254;
        color: white;
        padding: 1px 3px;
        font-size: 9px;

        border-radius: 3px;
    }
</style>
<?php if(count($ins_insumo_bultos) > 0){ ?>
<div class="ins-insumo-bultos">
    <label class="label">Bultos:</label>
    <?php foreach ($ins_insumo_bultos as $ins_insumo_bulto) { ?>
        <label class="ins-insumo-bulto">
            <?php Gral::_echo($ins_insumo_bulto->getInsUnidadMedida()->getDescripcion()) ?> de <?php Gral::_echo($ins_insumo_bulto->getCantidad()) ?>

            <?php foreach($ins_insumo_bulto->getInsTipoListaPreciosXInsInsumoBultoInsTipoListaPrecio() as $ins_tipo_lista_precio_bulto){ ?>                
                <label class="ins-insumo-bulto-tipo-lista" title="<?php Gral::_echo($ins_tipo_lista_precio_bulto->getDescripcion()) ?>"><?php Gral::_echo($ins_tipo_lista_precio_bulto->getDescripcionCorta()) ?></label>
            <?php } ?>

        </label> /
    <?php } ?>
</div>
<?php } ?>

<script>

</script>