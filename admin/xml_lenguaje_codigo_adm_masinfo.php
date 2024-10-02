<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$xml_lenguaje_codigo_id = Gral::getVars(2, 'id');
$xml_lenguaje_codigo = XmlLenguajeCodigo::getOxId($xml_lenguaje_codigo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($xml_lenguaje_codigo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'XML_LENGUAJE_CODIGO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($xml_lenguaje_codigo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($xml_lenguaje_codigo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'XML_LENGUAJE_CODIGO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($xml_lenguaje_codigo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($xml_lenguaje_codigo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('XML_LENGUAJE_CODIGO_MASINFO_XML_LENGUAJE_TRADUCCION')){ ?>
            <li><a href="#tab_xml_lenguaje_traduccion"><?php Lang::_lang('XmlLenguajeTraduccion') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('XML_LENGUAJE_CODIGO_MASINFO_XML_LENGUAJE_TRADUCCION')){ ?>
	<div id="tab_xml_lenguaje_traduccion" class="bloque-relacion xml_lenguaje_traduccion">
		
            <h4><?php Lang::_lang('XmlLenguajeTraduccion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('XmlLenguajeCodigo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($xml_lenguaje_codigo->getXmlLenguajeTraduccionsParaBloqueMasInfo() as $xml_lenguaje_traduccion){ ?>
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


                    <?php if(UsCredencial::getEsAcreditado('XML_LENGUAJE_CODIGO_MASINFO_XML_LENGUAJE_TRADUCCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($xml_lenguaje_traduccion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo XmlLenguajeTraduccion::getFiltrosArrGral() ?>&arr=<?php echo $xml_lenguaje_traduccion->getFiltrosArrXCampo('XmlLenguajeCodigo', 'xml_lenguaje_codigo_id') ?>" >
                                <?php Lang::_lang('Ver XmlLenguajeTraduccions de ') ?> <strong><?php echo($xml_lenguaje_codigo->getDescripcion()) ?></strong>
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
	
</div>

