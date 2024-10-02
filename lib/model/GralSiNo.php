<?php 
require_once "base/BGralSiNo.php"; 
class GralSiNo extends BGralSiNo
{
    
    const GRAL_SINO_SI = 'SI';
    const GRAL_SINO_NO = 'NO';
    
    const GRAL_SINO_CI_CANTIDAD = 'CANTIDAD';
    const GRAL_SINO_CI_IMPORTE = 'IMPORTE';
    
    const GRAL_SINO_CP_CANTIDAD = 'CANTIDAD';
    const GRAL_SINO_CP_PORCENTAJE = 'PORCENTAJE';
    
    const GRAL_SINO_OV_TIPO_ESTADO = 'ESTADO';    
    const GRAL_SINO_OV_TIPO_ESTADO_REMISION = 'ESTADO_REMISION';
    const GRAL_SINO_OV_TIPO_ESTADO_FACTURACION = 'ESTADO_FACTURACION';
    
    const GRAL_SINO_OC_TIPO_ESTADO = 'ESTADO';
    const GRAL_SINO_OC_TIPO_ESTADO_RECEPCION = 'ESTADO_RECEPCION';
    const GRAL_SINO_OC_TIPO_ESTADO_FACTURACION = 'ESTADO_FACTURACION';
    
    const GRAL_SINO_OV_CANTIDAD_VENDIDA = 'CANTIDAD_VENDIDA';
    const GRAL_SINO_OV_CANTIDAD_VENTAS = 'CANTIDAD_VENTAS';    
    
    const GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL = 'POR_VINCULO_CON_SUCURSAL';
    const GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_VENDEDOR = 'POR_VINCULO_CON_VENDEDOR';
    
    const GRAL_SINO_VENDEDOR_ALFABETICO = 'ALFABETICO';
    const GRAL_SINO_VENDEDOR_CANTIDAD_VENTAS = 'CANTIDAD_VENTAS';
    const GRAL_SINO_VENDEDOR_IMPORTE_TOTAL = 'IMPORTE_TOTAL';
    const GRAL_SINO_VENDEDOR_DIFERENCIA_DIAS = 'DIFERENCIA_DIAS';
    
    const GRAL_SINO_ORDENAMIENTO_ALFABETICO = 'ALFABETICO';
    const GRAL_SINO_ORDENAMIENTO_RANKING = 'RANKING';
    
    const GRAL_SINO_ORDENAMIENTO_MODO_ASCENDENTE = 'ASC';
    const GRAL_SINO_ORDENAMIENTO_MODO_DESCENDENTE = 'DESC';
    
    static function getGralSisCmb($estado = true) {
        $paginador = new Paginador(self::getCantidadTotalDeRegistros(), 1);
        $criterio = new Criterio();
        if ($estado)
            $criterio->add('estado', 1, Criterio::IGUAL);
        $criterio->addTabla('gral_si_no');
        $criterio->addOrden('2');
        $criterio->setCriterios();

        $col = GralSiNo::getGralSiNos($paginador, $criterio);

        $cont = 0;
        $arr = array();
        foreach ($col as $o) {
            
            if($o->getCodigo() == 'NO') continue;
            
            $cont++;
            $arr[$cont]['cod'] = $o->getId();
            $arr[$cont]['descripcion'] = $o->getDescripcion();
        }
        return $arr;
    }
    
    static function getGralSiNosCustomDescripcionCmb($array_descripcion) {

        $cont = 0;
        $arr = array();

        $cont++;
        $arr[$cont]['cod'] = 0;
        $arr[$cont]['descripcion'] = $array_descripcion[0];

        $cont++;
        $arr[$cont]['cod'] = 1;
        $arr[$cont]['descripcion'] = $array_descripcion[1];

        return $arr;
    }

    static function getTipoVisualizacionCantidadImporteCmb() {

        $cont = 0;
        $arr = array();

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_CI_CANTIDAD;
        $arr[$cont]['descripcion'] = 'Cantidad';

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_CI_IMPORTE;
        $arr[$cont]['descripcion'] = 'Importe';

        return $arr;
    }

    static function getTipoVisualizacionOrdenesVentaCmb() {

        $cont = 0;
        $arr = array();

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_OV_TIPO_ESTADO;
        $arr[$cont]['descripcion'] = 'Estado';

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_OV_TIPO_ESTADO_REMISION;
        $arr[$cont]['descripcion'] = 'Estado Remision';

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_OV_TIPO_ESTADO_FACTURACION;
        $arr[$cont]['descripcion'] = 'Estado Facturacion';

        return $arr;
    }

    static function getTipoVisualizacionOrdenesVentaCantidadCmb() {

        $cont = 0;
        $arr = array();

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_OV_CANTIDAD_VENDIDA;
        $arr[$cont]['descripcion'] = 'Total';

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_OV_CANTIDAD_VENTAS;
        $arr[$cont]['descripcion'] = 'Cantidad';

        return $arr;
    }    

    static function getTipoVisualizacionOrdenesCompraCmb() {

        $cont = 0;
        $arr = array();

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_OC_TIPO_ESTADO;
        $arr[$cont]['descripcion'] = 'Estado';

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_OC_TIPO_ESTADO_RECEPCION;
        $arr[$cont]['descripcion'] = 'Estado Recepcion';

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_OC_TIPO_ESTADO_FACTURACION;
        $arr[$cont]['descripcion'] = 'Estado Facturacion';

        return $arr;
    }

    static function getGralSiNosParaPorcentajeLogisticaCmb($porcentaje_maximo) {        

        $cont = 0;
        $arr = array();
        
            $cont++;
            $arr[$cont]['cod'] = 0;
            $arr[$cont]['descripcion'] = 'No Incluir';
            
        for ($i = 1; $i <= $porcentaje_maximo; $i++) {
            $cont++;
            
            $cont++;
            $arr[$cont]['cod'] = $i;
            $arr[$cont]['descripcion'] = $i.' %';
        }
        return $arr;
    }
    
    static function getOrdenamientoVendedorBusquedaCmb() {

        $cont = 0;
        $arr = array();

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_SUCURSAL;
        $arr[$cont]['descripcion'] = 'Por Sucursal Vinculada';

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_VENDEDOR_BUSQUEDA_POR_VINCULO_CON_VENDEDOR;
        $arr[$cont]['descripcion'] = 'Por Vendedor Vinculado';
        
        return $arr;
    }
    
    static function getOrdenamientoVendedorCmb() {

        $cont = 0;
        $arr = array();

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_VENDEDOR_ALFABETICO;
        $arr[$cont]['descripcion'] = 'Alfabeticamente';

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_VENDEDOR_CANTIDAD_VENTAS;
        $arr[$cont]['descripcion'] = 'Ventas';
        
        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_VENDEDOR_IMPORTE_TOTAL;
        $arr[$cont]['descripcion'] = 'Imp Total';

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_VENDEDOR_DIFERENCIA_DIAS;
        $arr[$cont]['descripcion'] = 'Dias';

        return $arr;
    }

    static function getTipoVisualizacionCantidadPorcentajeCmb() {

        $cont = 0;
        $arr = array();

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_CP_CANTIDAD;
        $arr[$cont]['descripcion'] = 'Cantidad';

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_CP_PORCENTAJE;
        $arr[$cont]['descripcion'] = 'Porcentaje';

        return $arr;
    }
    
    static function getOrdenamientoCmb() {

        $cont = 0;
        $arr = array();

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_ORDENAMIENTO_ALFABETICO;
        $arr[$cont]['descripcion'] = 'Alfabeticamente';

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_ORDENAMIENTO_RANKING;
        $arr[$cont]['descripcion'] = 'Ranking Mas Buscados';

        return $arr;
    }
    
    static function getOrdenamientoModoCmb() {
        
        $cont = 0;
        $arr = array();
        
        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_ORDENAMIENTO_MODO_ASCENDENTE;
        $arr[$cont]['descripcion'] = 'Asc';

        $cont++;
        $arr[$cont]['cod'] = GralSiNo::GRAL_SINO_ORDENAMIENTO_MODO_DESCENDENTE;
        $arr[$cont]['descripcion'] = 'Desc';
        
        return $arr;
    }
    
}
?>