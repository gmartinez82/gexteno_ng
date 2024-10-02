<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$eku_param_geo_ciudad_id = Gral::getVars(2, 'id');
$eku_param_geo_ciudad = EkuParamGeoCiudad::getOxId($eku_param_geo_ciudad_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_geo_ciudad->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($eku_param_geo_ciudad->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_GEO_CIUDAD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_geo_ciudad->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_geo_ciudad->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'EKU_PARAM_GEO_CIUDAD_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_geo_ciudad->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($eku_param_geo_ciudad->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_CIUDAD_MASINFO_EKU_PARAM_GEO_CIUDAD_GEO_LOCALIDAD')){ ?>
            <li><a href="#tab_eku_param_geo_ciudad_geo_localidad"><?php Lang::_lang('EkuParamGeoCiudadGeoLocalidads') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_CIUDAD_MASINFO_EKU_PARAM_GEO_CIUDAD_GEO_LOCALIDAD')){ ?>
	<div id="tab_eku_param_geo_ciudad_geo_localidad" class="bloque-relacion eku_param_geo_ciudad_geo_localidad">
		
            <h4><?php Lang::_lang('EkuParamGeoCiudadGeoLocalidad') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('EkuParamGeoCiudad') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($eku_param_geo_ciudad->getEkuParamGeoCiudadGeoLocalidadsParaBloqueMasInfo() as $eku_param_geo_ciudad_geo_localidad){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_geo_ciudad_geo_localidad->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_geo_ciudad_geo_localidad->getDescripcionVinculante('EkuParamGeoCiudad')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_param_geo_ciudad_geo_localidad->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_geo_ciudad_geo_localidad->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_param_geo_ciudad_geo_localidad->getId() ?>" archivo="ajax/modulos/eku_param_geo_ciudad_geo_localidad/eku_param_geo_ciudad_geo_localidad_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuParamGeoCiudadGeoLocalidad') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_CIUDAD_GEO_LOCALIDAD_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamGeoCiudadGeoLocalidad') ?>">
                                <a href="eku_param_geo_ciudad_geo_localidad_alta.php?id=<?php echo $eku_param_geo_ciudad_geo_localidad->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_CIUDAD_MASINFO_EKU_PARAM_GEO_CIUDAD_GEO_LOCALIDAD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_geo_ciudad_geo_localidad){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamGeoCiudadGeoLocalidad::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_geo_ciudad_geo_localidad->getFiltrosArrXCampo('EkuParamGeoCiudad', 'eku_param_geo_ciudad_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamGeoCiudadGeoLocalidads de ') ?> <strong><?php echo($eku_param_geo_ciudad->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_param_geo_ciudad_geo_localidad_alta.php" >
                            <?php Lang::_lang('Agregar EkuParamGeoCiudadGeoLocalidad') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

