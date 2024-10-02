<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_factura_vta_tributo_id = Gral::getVars(2, 'id');
$vta_factura_vta_tributo = VtaFacturaVtaTributo::getOxId($vta_factura_vta_tributo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_factura_vta_tributo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_FACTURA_VTA_TRIBUTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_vta_tributo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_factura_vta_tributo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_FACTURA_VTA_TRIBUTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura_vta_tributo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_factura_vta_tributo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_TRIBUTO_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_TRIBUTO')){ ?>
            <li><a href="#tab_vta_nota_credito_vta_factura_vta_tributo"><?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaTributo') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_TRIBUTO_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_TRIBUTO')){ ?>
	<div id="tab_vta_nota_credito_vta_factura_vta_tributo" class="bloque-relacion vta_nota_credito_vta_factura_vta_tributo">
		
            <h4><?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaFacturaVtaTributo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_factura_vta_tributo->getVtaNotaCreditoVtaFacturaVtaTributosParaBloqueMasInfo() as $vta_nota_credito_vta_factura_vta_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_nota_credito_vta_factura_vta_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_nota_credito_vta_factura_vta_tributo->getDescripcionVinculante('VtaFacturaVtaTributo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_nota_credito_vta_factura_vta_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_vta_factura_vta_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_nota_credito_vta_factura_vta_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito_vta_factura_vta_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_nota_credito_vta_factura_vta_tributo->getId() ?>" archivo="ajax/modulos/vta_nota_credito_vta_factura_vta_tributo/vta_nota_credito_vta_factura_vta_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_VTA_FACTURA_VTA_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaNotaCreditoVtaFacturaVtaTributo') ?>">
                                <a href="vta_nota_credito_vta_factura_vta_tributo_alta.php?id=<?php echo $vta_nota_credito_vta_factura_vta_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_TRIBUTO_MASINFO_VTA_NOTA_CREDITO_VTA_FACTURA_VTA_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_nota_credito_vta_factura_vta_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaNotaCreditoVtaFacturaVtaTributo::getFiltrosArrGral() ?>&arr=<?php echo $vta_nota_credito_vta_factura_vta_tributo->getFiltrosArrXCampo('VtaFacturaVtaTributo', 'vta_factura_vta_tributo_id') ?>" >
                                <?php Lang::_lang('Ver VtaNotaCreditoVtaFacturaVtaTributos de ') ?> <strong><?php echo($vta_factura_vta_tributo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_nota_credito_vta_factura_vta_tributo_alta.php" >
                            <?php Lang::_lang('Agregar VtaNotaCreditoVtaFacturaVtaTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

