<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$geo_provincia_id = Gral::getVars(2, 'id');
$geo_provincia = GeoProvincia::getOxId($geo_provincia_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($geo_provincia->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEO_PROVINCIA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($geo_provincia->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($geo_provincia->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEO_PROVINCIA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($geo_provincia->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($geo_provincia->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GEO_PROVINCIA_MASINFO_GEO_LOCALIDAD')){ ?>
            <li><a href="#tab_geo_localidad"><?php Lang::_lang('GeoLocalidad') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_PROVINCIA_MASINFO_GEO_LOCALIDAD')){ ?>
	<div id="tab_geo_localidad" class="bloque-relacion geo_localidad">
		
            <h4><?php Lang::_lang('GeoLocalidad') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoProvincia') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_provincia->getGeoLocalidadsParaBloqueMasInfo() as $geo_localidad){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($geo_localidad->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($geo_localidad->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($geo_localidad->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($geo_localidad->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($geo_localidad->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($geo_localidad->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $geo_localidad->getId() ?>" archivo="ajax/modulos/geo_localidad/geo_localidad_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GeoLocalidad') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GEO_LOCALIDAD_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GeoLocalidad') ?>">
                                <a href="geo_localidad_alta.php?id=<?php echo $geo_localidad->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_PROVINCIA_MASINFO_GEO_LOCALIDAD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($geo_localidad){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GeoLocalidad::getFiltrosArrGral() ?>&arr=<?php echo $geo_localidad->getFiltrosArrXCampo('GeoProvincia', 'geo_provincia_id') ?>" >
                                <?php Lang::_lang('Ver GeoLocalidads de ') ?> <strong><?php echo($geo_provincia->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="geo_localidad_alta.php" >
                            <?php Lang::_lang('Agregar GeoLocalidad') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

