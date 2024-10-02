<?php
include '_autoload.php';
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';
include_once Gral::getPathAbs().'admin/control/init.php';

$vta_hoja_ruta_id = Gral::getVars(Gral::VARS_GET, 'identificador', 0, Gral::TIPO_INTEGER);
$vta_hoja_ruta = VtaHojaRuta::getOxId($vta_hoja_ruta_id);

//Gral::pr('objeto ppmas_proyecto_seguimiento');
//Gral::prr($ppmas_proyecto_seguimiento);

if($vta_hoja_ruta)
{
    $arr_filtro = array(
        'vta_hoja_ruta_id' => $vta_hoja_ruta_id,
        'fecha_desde' => Date::sumarDias(date('Y-m-d'), -30),
        'fecha_hasta' => Date::sumarDias(date('Y-m-d'), 0),
    );

    $vta_remitos = VtaRemito::getVtaRemitosVinculablesAVtaHojaRuta($arr_filtro);
    $vta_remito_ajustes = VtaRemitoAjuste::getVtaRemitoAjustesVinculablesAVtaHojaRuta($arr_filtro);

    $vta_hoja_ruta_vta_remitos = $vta_hoja_ruta->getVtaHojaRutaVtaRemitos(null, null, true);
    $vta_hoja_ruta_vta_remito_ajustes = $vta_hoja_ruta->getVtaHojaRutaVtaRemitoAjustes(null, null, true);

    $gral_ruta = $vta_hoja_ruta->getGralRuta();
}
?>

<form id='form_modal' name='form_modal' method='post' action='' vta_hoja_ruta_id='<?php echo $vta_hoja_ruta_id; ?>'>
    
    <!-- INFO TOP -->
    <div class='modal-top'>
        
        <div class='col fecha'>
            <div class='label'>Fecha Despacho:</div> 
            <div class='dato'><?php Gral::_echo(Gral::getFechaToWEB($vta_hoja_ruta->getFechaDespacho())); ?></div>                 
        </div>

        <div class='col codigo'>
            <div class='label'>Codigo:</div> 
            <div class='dato'><?php Gral::_echo($vta_hoja_ruta->getCodigo()) ?></div> 
        </div>

        <div class='col tipo-estado'>
            <div class='label'>Tipo Estado:</div> 
            <div class='dato'><?php Gral::_echo($vta_hoja_ruta->getVtaHojaRutaTipoEstado()->getDescripcion()); ?></div> 
        </div>

        <div class='col gral-ruta'>
            <div class='label'>Ruta:</div> 
            <div class='dato'><?php Gral::_echo($vta_hoja_ruta->getGralRuta()->getDescripcion()); ?></div> 
        </div>

        <div class='col ope-chofer'>
            <div class='label'>Chofer:</div> 
            <div class='dato'><?php Gral::_echo($vta_hoja_ruta->getOpeChofer()->getDescripcion()); ?></div> 
        </div>
        
    </div>
    
    <!-- BUSCADOR -->
    <div class='div_listado_buscador' modulo='vta_hoja_ruta_gestion' buscador_de='vta_comprobante'>
        
        <div class='col fecha-desde'>
            <div class='label'><?php Lang::_lang('Desde') ?></div>
            <div class='dato'>
                <input id='txt_filtro_comprobante_desde' name='txt_filtro_comprobante_desde' type='text' class='textbox date' size='10' value='<?php echo Gral::getFechaToWEB($arr_filtro['fecha_desde']); ?>' title='<?php Lang::_lang('Ingrese la fecha DESDE') ?>' placeholder='dd/mm/aaaa'/>
                <input type='button' id='cal_txt_filtro_comprobante_desde' value=' ... '>
                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'txt_filtro_comprobante_desde', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_comprobante_desde'
                    });
                </script>
            </div>
        </div>
        
        <div class='col fecha-hasta'>
            <div class='label'><?php Lang::_lang('Hasta') ?></div>
            <div class='dato'>
                <input id='txt_filtro_comprobante_hasta' name='txt_filtro_comprobante_hasta' type='text' class='textbox date' size='10' value='<?php echo Gral::getFechaToWEB($arr_filtro['fecha_hasta']); ?>' title='<?php Lang::_lang('Ingrese la fecha HASTA') ?>' placeholder='dd/mm/aaaa'/>
                <input type='button' id='cal_txt_filtro_comprobante_hasta' value=' ... '>
                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'txt_filtro_comprobante_hasta', ifFormat: '%d/%m/%Y', button: 'cal_txt_filtro_comprobante_hasta'
                    });
                </script>
            </div>
        </div>
        
        <div class='col gral_ruta'>
            <div class='label'><?php Lang::_lang('Localidades') ?></div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'cmb_filtro_geo_localidad_id', Gral::getCmbFiltro($gral_ruta->getGeoLocalidadsCmbXGralRutaGeoLocalidad(), '...'), $cmb_filtro_geo_localidad_id, 'textbox') ?>
            </div>
        </div>
        
        <div class='col'>
            <div class='label'><?php Lang::_lang('Busqueda rapida (2 letras min)') ?></div>
            <input id='txt_buscador' name='txt_buscador' type='text' class='textbox' size='30' placeholder='<?php Lang::_lang('Ingrese palabra a buscar') ?>' title='<?php Lang::_lang('Ingrese la palabra que desea buscar') ?>' />
            <img class='txt_buscador_boton' src='imgs/lupa.png' width='20'>
        </div>
        
    </div>
    
    <div class='bloque-tabs'>
        <?php include 'bloque_modal_agregar_comprobante_tabs.php'; ?>
    </div>
</form>
<script>
    setInit();
    setInitVtaHojaRutaGestion();
</script>