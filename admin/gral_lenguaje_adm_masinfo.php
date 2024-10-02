<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gral_lenguaje_id = Gral::getVars(2, 'id');
$gral_lenguaje = GralLenguaje::getOxId($gral_lenguaje_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gral_lenguaje->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_LENGUAJE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_lenguaje->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_lenguaje->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GRAL_LENGUAJE_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_lenguaje->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gral_lenguaje->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GRAL_LENGUAJE_MASINFO_US_USUARIO')){ ?>
            <li><a href="#tab_us_usuario"><?php Lang::_lang('UsUsuario') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_LENGUAJE_MASINFO_XML_LENGUAJE_TRADUCCION')){ ?>
            <li><a href="#tab_xml_lenguaje_traduccion"><?php Lang::_lang('XmlLenguajeTraduccion') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GRAL_LENGUAJE_MASINFO_GEO_PAIS')){ ?>
            <li><a href="#tab_geo_pais"><?php Lang::_lang('GeoPais') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_LENGUAJE_MASINFO_US_USUARIO')){ ?>
	<div id="tab_us_usuario" class="bloque-relacion us_usuario">
		
            <h4><?php Lang::_lang('UsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralLenguaje') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_lenguaje->getUsUsuariosParaBloqueMasInfo() as $us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($us_usuario->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_usuario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($us_usuario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_usuario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $us_usuario->getId() ?>" archivo="ajax/modulos/us_usuario/us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('UsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsUsuario') ?>">
                                <a href="us_usuario_alta.php?id=<?php echo $us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_LENGUAJE_MASINFO_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo UsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $us_usuario->getFiltrosArrXCampo('GralLenguaje', 'gral_lenguaje_id') ?>" >
                                <?php Lang::_lang('Ver UsUsuarios de ') ?> <strong><?php echo($gral_lenguaje->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar UsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_LENGUAJE_MASINFO_XML_LENGUAJE_TRADUCCION')){ ?>
	<div id="tab_xml_lenguaje_traduccion" class="bloque-relacion xml_lenguaje_traduccion">
		
            <h4><?php Lang::_lang('XmlLenguajeTraduccion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralLenguaje') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_lenguaje->getXmlLenguajeTraduccionsParaBloqueMasInfo() as $xml_lenguaje_traduccion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($xml_lenguaje_traduccion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($xml_lenguaje_traduccion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($xml_lenguaje_traduccion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($xml_lenguaje_traduccion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($xml_lenguaje_traduccion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($xml_lenguaje_traduccion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $xml_lenguaje_traduccion->getId() ?>" archivo="ajax/modulos/xml_lenguaje_traduccion/xml_lenguaje_traduccion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('XmlLenguajeTraduccion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('XML_LENGUAJE_TRADUCCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('XmlLenguajeTraduccion') ?>">
                                <a href="xml_lenguaje_traduccion_alta.php?id=<?php echo $xml_lenguaje_traduccion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_LENGUAJE_MASINFO_XML_LENGUAJE_TRADUCCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($xml_lenguaje_traduccion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo XmlLenguajeTraduccion::getFiltrosArrGral() ?>&arr=<?php echo $xml_lenguaje_traduccion->getFiltrosArrXCampo('GralLenguaje', 'gral_lenguaje_id') ?>" >
                                <?php Lang::_lang('Ver XmlLenguajeTraduccions de ') ?> <strong><?php echo($gral_lenguaje->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="xml_lenguaje_traduccion_alta.php" >
                            <?php Lang::_lang('Agregar XmlLenguajeTraduccion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GRAL_LENGUAJE_MASINFO_GEO_PAIS')){ ?>
	<div id="tab_geo_pais" class="bloque-relacion geo_pais">
		
            <h4><?php Lang::_lang('GeoPais') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GralLenguaje') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gral_lenguaje->getGeoPaissParaBloqueMasInfo() as $geo_pais){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($geo_pais->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($geo_pais->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($geo_pais->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($geo_pais->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($geo_pais->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($geo_pais->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $geo_pais->getId() ?>" archivo="ajax/modulos/geo_pais/geo_pais_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GeoPais') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GEO_PAIS_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GeoPais') ?>">
                                <a href="geo_pais_alta.php?id=<?php echo $geo_pais->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GRAL_LENGUAJE_MASINFO_GEO_PAIS_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($geo_pais){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GeoPais::getFiltrosArrGral() ?>&arr=<?php echo $geo_pais->getFiltrosArrXCampo('GralLenguaje', 'gral_lenguaje_id') ?>" >
                                <?php Lang::_lang('Ver GeoPaiss de ') ?> <strong><?php echo($gral_lenguaje->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="geo_pais_alta.php" >
                            <?php Lang::_lang('Agregar GeoPais') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

