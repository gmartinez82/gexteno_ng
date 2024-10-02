
<?php if(UsCredencial::getEsAcreditado('GEO_PAIS_ALTA_VINCULO_GEO_PROVINCIA')){ ?>
<div class='vinculo geo_provincia' padre='geo_pais' hijo='geo_provincia' padre_id='<?php echo $geo_pais->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('GeoProvincias') ?>
        <?php 
        $cantidad_geo_provincias = count($geo_pais->getGeoProvincias());
        echo ($cantidad_geo_provincias > 0) ? '('.$cantidad_geo_provincias.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='geo_provincia_txt_buscar' id='geo_provincia_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('GEO_PAIS_ALTA_VINCULO_GEO_PROVINCIA_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/geo_provincia/geo_provincia_alta.php?geo_pais_id=<?php Gral::_echo($geo_pais->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'geo_pais', 'geo_provincia', <?php Gral::_echo($geo_pais->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('GeoProvincia') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

