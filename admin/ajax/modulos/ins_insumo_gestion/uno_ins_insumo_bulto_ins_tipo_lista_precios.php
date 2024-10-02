<?php
// archivo que se debe incluir en "uno_ins_insumo_bulto_vinculo.php" de la carpeta "ins_insumo"
//include Gral::getPathAbs()."admin/ajax/modulos/ins_insumo_gestion/uno_ins_insumo_bulto_ins_tipo_lista_precios.php"
?>
<style>
    .vinculo.ins_insumo_bulto .ins-tipo-lista-precios{
        margin: 10px;
        padding: 0px;
    }
    .vinculo.ins_insumo_bulto .ins-tipo-lista-precios .ins-tipo-lista-precio{
        border: #ccc solid 1px;
        background-color: #dddddd;
        margin: 3px;
        padding: 3px 6px;
        
        font-size: 11px;
        color: black;
    }
</style>
<div class="ins-tipo-lista-precios">
    <?php 
    foreach(InsTipoListaPrecio::getInsTipoListaPrecios(null, null, true) as $ins_tipo_lista_precio){ 
        
        $array = array(
            array('campo' => InsInsumoBultoInsTipoListaPrecio::GEN_ATTR_INS_INSUMO_BULTO_ID, 'valor' => $ins_insumo_bulto->getId()),
            array('campo' => InsInsumoBultoInsTipoListaPrecio::GEN_ATTR_INS_TIPO_LISTA_PRECIO_ID, 'valor' => $ins_tipo_lista_precio->getId()),
        );
        $ins_insumo_bulto_ins_tipo_lista_precio = InsInsumoBultoInsTipoListaPrecio::getOxArray($array);
        if($ins_insumo_bulto_ins_tipo_lista_precio){
            $checked = 'checked="checked"';
        }else{
            $checked = '';
        }
        ?>
        <label class="ins-tipo-lista-precio">
            <input type="checkbox" id="chk_ins_tipo_lista_precio_id_<?php echo $ins_tipo_lista_precio->getId() ?>" name="chk_ins_tipo_lista_precio_id[<?php echo $ins_tipo_lista_precio->getId() ?>]" value="<?php echo $ins_tipo_lista_precio->getId() ?>" <?php echo $checked ?> />
            <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>
        </label>
    <?php } ?>
</div>
<script>
    $('.vinculo.ins_insumo_bulto .ins-tipo-lista-precios .ins-tipo-lista-precio input').unbind();
    $('.vinculo.ins_insumo_bulto .ins-tipo-lista-precios .ins-tipo-lista-precio input').click(function(){
        var ins_insumo_bulto_id = $(this).parents('.uno').attr('identificador');
        var ins_tipo_lista_precio_id = $(this).val();
        
        setInsInsumoBultoInsTipoListaPrecio(ins_insumo_bulto_id, ins_tipo_lista_precio_id);
    });
    
    function setInsInsumoBultoInsTipoListaPrecio(ins_insumo_bulto_id, ins_tipo_lista_precio_id){
        $.ajax({
            type: 'POST',
            url: "ajax/modulos/ins_insumo_gestion/set_ins_insumo_bulto_ins_tipo_lista_precio.php",
            data: 'ins_insumo_bulto_id=' + ins_insumo_bulto_id + '&ins_tipo_lista_precio_id=' + ins_tipo_lista_precio_id,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (data) {
                
            },
            error: function (objeto, quepaso, otroobj) {
                //alert("errorx "+ objeto.status);
            }
        });
    }
</script>