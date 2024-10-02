
<?php if(UsCredencial::getEsAcreditado('GEO_PROVINCIA_ALTA_VINCULO_GEO_LOCALIDAD')){ ?>
<div class='vinculo geo_localidad' padre='geo_provincia' hijo='geo_localidad' padre_id='<?php echo $geo_provincia->getId() ?>'>

    <div class='titulo'>
         <?php Lang::_lang('GeoLocalidads') ?>
        <?php 
        $cantidad_geo_localidads = count($geo_provincia->getGeoLocalidads());
        echo ($cantidad_geo_localidads > 0) ? '('.$cantidad_geo_localidads.')' : '' ;
        ?>			 
    </div>

    <div class='buscador'>
        <input name='geo_localidad_txt_buscar' id='geo_localidad_txt_buscar' type='text' />
        <img src='<?php echo Gral::getPath('path_http') ?>admin/imgs/lupa.png' align="absmiddle">

        <?php if(UsCredencial::getEsAcreditado('GEO_PROVINCIA_ALTA_VINCULO_GEO_LOCALIDAD_ACCIONES_ALTA')){ ?>
        <div class="trigger wopenModal boton" archivo="ajax/modulos/geo_localidad/geo_localidad_alta.php?geo_provincia_id=<?php Gral::_echo($geo_provincia->getId()) ?>" contenedor="div_modal" ancho="750" alto="600" tipo="formulario" post="buscarVinculoResultados(1, '', 'geo_provincia', 'geo_localidad', <?php Gral::_echo($geo_provincia->getId()) ?>)" title='<?php Lang::_lang('Agregar') ?> <?php Lang::_lang('GeoLocalidad') ?>'>
        <img src='imgs/btn_add.png' border='0' width='18' align='absmiddle' />
        </div>
        <?php } ?>
		
    </div>

    <div class='datos'>
        &nbsp;
    </div>

</div>
<?php } ?>

