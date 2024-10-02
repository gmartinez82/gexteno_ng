<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_ruta_id = Gral::getVars(2, 'id');
$gral_ruta = GralRuta::getOxId($gral_ruta_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_ruta->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_RUTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_ruta->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_RUTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_ruta->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_MASINFO_GRAL_RUTA_VTA_VENDEDOR')){ ?>
            <li><a href="#tab_gral_ruta_vta_vendedor"><?php Lang::_lang('GralRutaVtaVendedors') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_MASINFO_GRAL_RUTA_GEO_LOCALIDAD')){ ?>
            <li><a href="#tab_gral_ruta_geo_localidad"><?php Lang::_lang('GralRutaGeoLocalidads') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_MASINFO_GRAL_RUTA_GEO_LOCALIDAD_CLI_CENTRO_RECEPCION')){ ?>
            <li><a href="#tab_gral_ruta_geo_localidad_cli_centro_recepcion"><?php Lang::_lang('GralRutaGeoLocalidads') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_MASINFO_GRAL_RUTA_GRAL_DIA')){ ?>
            <li><a href="#tab_gral_ruta_gral_dia"><?php Lang::_lang('GralRutaGralDias') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_MASINFO_VTA_HOJA_RUTA')){ ?>
            <li><a href="#tab_vta_hoja_ruta"><?php Lang::_lang('VtaHojaRutas') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_MASINFO_GRAL_RUTA_VTA_VENDEDOR')){ ?>
	<div id="tab_gral_ruta_vta_vendedor" class="bloque-relacion gral_ruta_vta_vendedor">
		
            <h4><?php Lang::_lang('GralRutaVtaVendedor') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralRuta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_ruta->getGralRutaVtaVendedorsParaBloqueMasInfo() as $gral_ruta_vta_vendedor){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_ruta_vta_vendedor->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_ruta_vta_vendedor->getDescripcionVinculante('GralRuta')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_ruta_vta_vendedor->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta_vta_vendedor->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_ruta_vta_vendedor->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta_vta_vendedor->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_ruta_vta_vendedor->getId() ?>" archivo="ajax/modulos/gral_ruta_vta_vendedor/gral_ruta_vta_vendedor_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralRutaVtaVendedor') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_VTA_VENDEDOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralRutaVtaVendedor') ?>">
                                <a href="gral_ruta_vta_vendedor_alta.php?id=<?php echo $gral_ruta_vta_vendedor->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_MASINFO_GRAL_RUTA_VTA_VENDEDOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_ruta_vta_vendedor){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralRutaVtaVendedor::getFiltrosArrGral() ?>&arr=<?php echo $gral_ruta_vta_vendedor->getFiltrosArrXCampo('GralRuta', 'gral_ruta_id') ?>" >
                                <?php Lang::_lang('Ver GralRutaVtaVendedors de ') ?> <strong><?php echo($gral_ruta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_ruta_vta_vendedor_alta.php" >
                            <?php Lang::_lang('Agregar GralRutaVtaVendedor') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_MASINFO_GRAL_RUTA_GEO_LOCALIDAD')){ ?>
	<div id="tab_gral_ruta_geo_localidad" class="bloque-relacion gral_ruta_geo_localidad">
		
            <h4><?php Lang::_lang('GralRutaGeoLocalidad') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralRuta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_ruta->getGralRutaGeoLocalidadsParaBloqueMasInfo() as $gral_ruta_geo_localidad){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_ruta_geo_localidad->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_ruta_geo_localidad->getDescripcionVinculante('GralRuta')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_ruta_geo_localidad->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta_geo_localidad->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_ruta_geo_localidad->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta_geo_localidad->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_ruta_geo_localidad->getId() ?>" archivo="ajax/modulos/gral_ruta_geo_localidad/gral_ruta_geo_localidad_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralRutaGeoLocalidad') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_GEO_LOCALIDAD_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralRutaGeoLocalidad') ?>">
                                <a href="gral_ruta_geo_localidad_alta.php?id=<?php echo $gral_ruta_geo_localidad->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_MASINFO_GRAL_RUTA_GEO_LOCALIDAD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_ruta_geo_localidad){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralRutaGeoLocalidad::getFiltrosArrGral() ?>&arr=<?php echo $gral_ruta_geo_localidad->getFiltrosArrXCampo('GralRuta', 'gral_ruta_id') ?>" >
                                <?php Lang::_lang('Ver GralRutaGeoLocalidads de ') ?> <strong><?php echo($gral_ruta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_ruta_geo_localidad_alta.php" >
                            <?php Lang::_lang('Agregar GralRutaGeoLocalidad') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_MASINFO_GRAL_RUTA_GEO_LOCALIDAD_CLI_CENTRO_RECEPCION')){ ?>
	<div id="tab_gral_ruta_geo_localidad_cli_centro_recepcion" class="bloque-relacion gral_ruta_geo_localidad_cli_centro_recepcion">
		
            <h4><?php Lang::_lang('GralRutaGeoLocalidadCliCentroRecepcion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralRuta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_ruta->getGralRutaGeoLocalidadCliCentroRecepcionsParaBloqueMasInfo() as $gral_ruta_geo_localidad_cli_centro_recepcion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta_geo_localidad_cli_centro_recepcion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_ruta_geo_localidad_cli_centro_recepcion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta_geo_localidad_cli_centro_recepcion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_ruta_geo_localidad_cli_centro_recepcion->getId() ?>" archivo="ajax/modulos/gral_ruta_geo_localidad_cli_centro_recepcion/gral_ruta_geo_localidad_cli_centro_recepcion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralRutaGeoLocalidadCliCentroRecepcion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_GEO_LOCALIDAD_CLI_CENTRO_RECEPCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralRutaGeoLocalidadCliCentroRecepcion') ?>">
                                <a href="gral_ruta_geo_localidad_cli_centro_recepcion_alta.php?id=<?php echo $gral_ruta_geo_localidad_cli_centro_recepcion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_MASINFO_GRAL_RUTA_GEO_LOCALIDAD_CLI_CENTRO_RECEPCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_ruta_geo_localidad_cli_centro_recepcion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralRutaGeoLocalidadCliCentroRecepcion::getFiltrosArrGral() ?>&arr=<?php echo $gral_ruta_geo_localidad_cli_centro_recepcion->getFiltrosArrXCampo('GralRuta', 'gral_ruta_id') ?>" >
                                <?php Lang::_lang('Ver GralRutaGeoLocalidadCliCentroRecepcions de ') ?> <strong><?php echo($gral_ruta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_ruta_geo_localidad_cli_centro_recepcion_alta.php" >
                            <?php Lang::_lang('Agregar GralRutaGeoLocalidadCliCentroRecepcion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_MASINFO_GRAL_RUTA_GRAL_DIA')){ ?>
	<div id="tab_gral_ruta_gral_dia" class="bloque-relacion gral_ruta_gral_dia">
		
            <h4><?php Lang::_lang('GralRutaGralDia') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralRuta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_ruta->getGralRutaGralDiasParaBloqueMasInfo() as $gral_ruta_gral_dia){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_ruta_gral_dia->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_ruta_gral_dia->getDescripcionVinculante('GralRuta')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_ruta_gral_dia->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta_gral_dia->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_ruta_gral_dia->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_ruta_gral_dia->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_ruta_gral_dia->getId() ?>" archivo="ajax/modulos/gral_ruta_gral_dia/gral_ruta_gral_dia_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralRutaGralDia') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_GRAL_DIA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralRutaGralDia') ?>">
                                <a href="gral_ruta_gral_dia_alta.php?id=<?php echo $gral_ruta_gral_dia->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_MASINFO_GRAL_RUTA_GRAL_DIA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_ruta_gral_dia){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralRutaGralDia::getFiltrosArrGral() ?>&arr=<?php echo $gral_ruta_gral_dia->getFiltrosArrXCampo('GralRuta', 'gral_ruta_id') ?>" >
                                <?php Lang::_lang('Ver GralRutaGralDias de ') ?> <strong><?php echo($gral_ruta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_ruta_gral_dia_alta.php" >
                            <?php Lang::_lang('Agregar GralRutaGralDia') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_MASINFO_VTA_HOJA_RUTA')){ ?>
	<div id="tab_vta_hoja_ruta" class="bloque-relacion vta_hoja_ruta">
		
            <h4><?php Lang::_lang('VtaHojaRuta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralRuta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_ruta->getVtaHojaRutasParaBloqueMasInfo() as $vta_hoja_ruta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_hoja_ruta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_hoja_ruta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_hoja_ruta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_hoja_ruta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_hoja_ruta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_hoja_ruta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_hoja_ruta->getId() ?>" archivo="ajax/modulos/vta_hoja_ruta/vta_hoja_ruta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaHojaRuta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_HOJA_RUTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaHojaRuta') ?>">
                                <a href="vta_hoja_ruta_alta.php?id=<?php echo $vta_hoja_ruta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_RUTA_MASINFO_VTA_HOJA_RUTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_hoja_ruta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaHojaRuta::getFiltrosArrGral() ?>&arr=<?php echo $vta_hoja_ruta->getFiltrosArrXCampo('GralRuta', 'gral_ruta_id') ?>" >
                                <?php Lang::_lang('Ver VtaHojaRutas de ') ?> <strong><?php echo($gral_ruta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_hoja_ruta_alta.php" >
                            <?php Lang::_lang('Agregar VtaHojaRuta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

