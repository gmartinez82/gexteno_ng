<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$geo_pais_id = Gral::getVars(2, 'id');
$geo_pais = GeoPais::getOxId($geo_pais_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($geo_pais->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEO_PAIS_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($geo_pais->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($geo_pais->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEO_PAIS_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($geo_pais->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($geo_pais->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GEO_PAIS_MASINFO_GEO_PROVINCIA')){ ?>
            <li><a href="#tab_geo_provincia"><?php Lang::_lang('GeoProvincia') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_PAIS_MASINFO_PRV_TELEFONO')){ ?>
            <li><a href="#tab_prv_telefono"><?php Lang::_lang('PrvTelefono') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_PAIS_MASINFO_CLI_TELEFONO')){ ?>
            <li><a href="#tab_cli_telefono"><?php Lang::_lang('CliTelefono') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEO_PAIS_MASINFO_EKU_PARAM_GEO_PAIS_GEO_PAIS')){ ?>
            <li><a href="#tab_eku_param_geo_pais_geo_pais"><?php Lang::_lang('EkuParamGeoPaisGeoPaiss') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_PAIS_MASINFO_GEO_PROVINCIA')){ ?>
	<div id="tab_geo_provincia" class="bloque-relacion geo_provincia">
		
            <h4><?php Lang::_lang('GeoProvincia') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoPais') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_pais->getGeoProvinciasParaBloqueMasInfo() as $geo_provincia){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($geo_provincia->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($geo_provincia->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($geo_provincia->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($geo_provincia->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($geo_provincia->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($geo_provincia->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $geo_provincia->getId() ?>" archivo="ajax/modulos/geo_provincia/geo_provincia_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GeoProvincia') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GEO_PROVINCIA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GeoProvincia') ?>">
                                <a href="geo_provincia_alta.php?id=<?php echo $geo_provincia->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_PAIS_MASINFO_GEO_PROVINCIA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($geo_provincia){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GeoProvincia::getFiltrosArrGral() ?>&arr=<?php echo $geo_provincia->getFiltrosArrXCampo('GeoPais', 'geo_pais_id') ?>" >
                                <?php Lang::_lang('Ver GeoProvincias de ') ?> <strong><?php echo($geo_pais->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="geo_provincia_alta.php" >
                            <?php Lang::_lang('Agregar GeoProvincia') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_PAIS_MASINFO_PRV_TELEFONO')){ ?>
	<div id="tab_prv_telefono" class="bloque-relacion prv_telefono">
		
            <h4><?php Lang::_lang('PrvTelefono') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoPais') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_pais->getPrvTelefonosParaBloqueMasInfo() as $prv_telefono){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prv_telefono->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prv_telefono->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prv_telefono->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_telefono->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prv_telefono->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prv_telefono->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prv_telefono->getId() ?>" archivo="ajax/modulos/prv_telefono/prv_telefono_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrvTelefono') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRV_TELEFONO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrvTelefono') ?>">
                                <a href="prv_telefono_alta.php?id=<?php echo $prv_telefono->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_PAIS_MASINFO_PRV_TELEFONO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prv_telefono){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrvTelefono::getFiltrosArrGral() ?>&arr=<?php echo $prv_telefono->getFiltrosArrXCampo('GeoPais', 'geo_pais_id') ?>" >
                                <?php Lang::_lang('Ver PrvTelefonos de ') ?> <strong><?php echo($geo_pais->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prv_telefono_alta.php" >
                            <?php Lang::_lang('Agregar PrvTelefono') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_PAIS_MASINFO_CLI_TELEFONO')){ ?>
	<div id="tab_cli_telefono" class="bloque-relacion cli_telefono">
		
            <h4><?php Lang::_lang('CliTelefono') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoPais') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_pais->getCliTelefonosParaBloqueMasInfo() as $cli_telefono){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cli_telefono->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cli_telefono->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cli_telefono->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_telefono->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cli_telefono->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cli_telefono->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cli_telefono->getId() ?>" archivo="ajax/modulos/cli_telefono/cli_telefono_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CliTelefono') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CLI_TELEFONO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CliTelefono') ?>">
                                <a href="cli_telefono_alta.php?id=<?php echo $cli_telefono->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_PAIS_MASINFO_CLI_TELEFONO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cli_telefono){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CliTelefono::getFiltrosArrGral() ?>&arr=<?php echo $cli_telefono->getFiltrosArrXCampo('GeoPais', 'geo_pais_id') ?>" >
                                <?php Lang::_lang('Ver CliTelefonos de ') ?> <strong><?php echo($geo_pais->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cli_telefono_alta.php" >
                            <?php Lang::_lang('Agregar CliTelefono') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEO_PAIS_MASINFO_EKU_PARAM_GEO_PAIS_GEO_PAIS')){ ?>
	<div id="tab_eku_param_geo_pais_geo_pais" class="bloque-relacion eku_param_geo_pais_geo_pais">
		
            <h4><?php Lang::_lang('EkuParamGeoPaisGeoPais') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GeoPais') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($geo_pais->getEkuParamGeoPaisGeoPaissParaBloqueMasInfo() as $eku_param_geo_pais_geo_pais){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($eku_param_geo_pais_geo_pais->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($eku_param_geo_pais_geo_pais->getDescripcionVinculante('GeoPais')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($eku_param_geo_pais_geo_pais->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($eku_param_geo_pais_geo_pais->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $eku_param_geo_pais_geo_pais->getId() ?>" archivo="ajax/modulos/eku_param_geo_pais_geo_pais/eku_param_geo_pais_geo_pais_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('EkuParamGeoPaisGeoPais') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('EKU_PARAM_GEO_PAIS_GEO_PAIS_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('EkuParamGeoPaisGeoPais') ?>">
                                <a href="eku_param_geo_pais_geo_pais_alta.php?id=<?php echo $eku_param_geo_pais_geo_pais->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEO_PAIS_MASINFO_EKU_PARAM_GEO_PAIS_GEO_PAIS_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($eku_param_geo_pais_geo_pais){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo EkuParamGeoPaisGeoPais::getFiltrosArrGral() ?>&arr=<?php echo $eku_param_geo_pais_geo_pais->getFiltrosArrXCampo('GeoPais', 'geo_pais_id') ?>" >
                                <?php Lang::_lang('Ver EkuParamGeoPaisGeoPaiss de ') ?> <strong><?php echo($geo_pais->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="eku_param_geo_pais_geo_pais_alta.php" >
                            <?php Lang::_lang('Agregar EkuParamGeoPaisGeoPais') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

