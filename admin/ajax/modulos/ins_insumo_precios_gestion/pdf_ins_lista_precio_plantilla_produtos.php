<?php
include_once "_autoload.php";

$c = new Criterio();
$c->add(InsCategoria::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
$c->addTabla(InsCategoria::GEN_TABLA);
$c->addOrden(InsCategoria::GEN_ATTR_ORDEN, Criterio::_ASC);
$c->setCriterios();

$p = new Paginador(100, 1);
$p = null;

$ins_categorias = InsCategoria::getInsCategorias($p, $c);

$ins_tipo_lista_precios = InsTipoListaPrecio::getInsTipoListaPrecios(null, null, true);
?>
<style>
    .listado{
        font-size: 7px;
    }

    .adm_tbl_titulo{
        font-weight: normal;
        text-decoration: none;
        color: #274D20;
        font-weight:bold;
        border-bottom:#CCCCCC solid 1px;

    }
    .adm_tbl_encabezado{
        font-weight: normal;
        text-decoration: none;
        color: #FFFFFF;
        background-color:#999999;
        padding:5px;
        height:14px;
    }
    .adm_tbl_encabezado_gris{
        font-weight: normal;
        text-decoration: none;
        color: #333333;
        font-weight:bold;
        background-color:#d0d0d0;
        border: #000 solid 1px;
    }
    .adm_tbl_lineas{
        font-weight: normal;
        text-decoration: none;
        border-bottom:#eeeeee dotted 1px;
        color: #000;
        height:12px;            
    }    
    .adm_tbl_lineas_categoria{
        background-color:#ffffff;
        border-bottom:#000000 solid 1px;
    }    
      
</style>

<table cellpadding="3" class="listado" id="listado_adm_vta_factura_gestion" border="0" align="center">

    <tbody>
        <tr>
            <td class="adm_tbl_encabezado_gris" width="70" align="center">
                Cod Int
            </td>

            <td class="adm_tbl_encabezado_gris" width="308" align="center">
                Producto
            </td>

            <?php foreach($ins_tipo_lista_precios as $ins_tipo_lista_precio){ ?>
            <td class="adm_tbl_encabezado_gris" width="80" align="center">
                <?php Gral::_echo($ins_tipo_lista_precio->getDescripcion()) ?>
            </td>
            <?php } ?>

        </tr>

        <?php
        foreach ($ins_categorias as $i => $ins_categoria) {
            $c = new Criterio();
            $c->addSelect(InsCategoria::GEN_ATTR_ORDEN);
            $c->add(InsCategoria::GEN_ATTR_ID, $ins_categoria->getId(), Criterio::IGUAL);
            $c->add(InsInsumo::GEN_ATTR_ESTADO, 1, Criterio::IGUAL);
            $c->addTabla(InsInsumo::GEN_TABLA);
            $c->addRealJoin(InsCategoria::GEN_TABLA, InsCategoria::GEN_ATTR_ID, InsInsumo::GEN_ATTR_INS_CATEGORIA_ID);
            $c->addOrden(InsCategoria::GEN_ATTR_ORDEN, Criterio::_ASC);
            $c->addOrden(InsInsumo::GEN_ATTR_ID, Criterio::_ASC);
            $c->setCriterios();

            $p = new Paginador(150, 1);
            $p = null;

            $ins_insumos = InsInsumo::getInsInsumos($p, $c);
            
            if(count($ins_insumos) == 0){
                continue;
            }
            ?>
                <tr id="tr_ins_categoria_uno_<?php echo $ins_categoria->getId() ?>" class="uno" identificador="<?php echo $ins_categoria->getId() ?>">

                    <td class="adm_tbl_lineas_categoria <?php echo $css_bg ?>" align="left" colspan="<?php echo count($ins_tipo_lista_precios) + 2 ?>">
                        <label class="categoria">
                            <?php Gral::_echo(str_replace(InsCategoria::GEN_ARBOL_SEPARADOR, ' > ',$ins_categoria->getFamiliaDescripcion())) ?>
                        </label>
                    </td>	

                </tr>        
            <?php
            
            foreach ($ins_insumos as $i => $ins_insumo) {
                $cont++;
                ?>
                <tr <?php echo($cont == 45) ? 'pagebreak="true"' : '' ?> id="tr_ins_insumo_uno_<?php echo $ins_insumo->getId() ?>" class="uno" identificador="<?php echo $ins_insumo->getId() ?>">

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                        <label class="codigo-interno">
                            <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
                        </label>
                    </td>	

                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                        <label class="descripcion">
                            <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
                        </label>
                    </td>	

                    <?php 
                    foreach($ins_tipo_lista_precios as $ins_tipo_lista_precio){ 
                        $importe_venta = $ins_insumo->getInsInsumoImporteVentaActual($ins_tipo_lista_precio, $incluye_iva = true);
                        ?>
                    <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                        <label class="tipo-lista-precio">
                            <?php Gral::_echoImp($importe_venta) ?>
                        </label>
                    </td>
                    <?php } ?>

                </tr>
            <?php } ?>
        <?php } ?>
            
    </tbody>
</table>
