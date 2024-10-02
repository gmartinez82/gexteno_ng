<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_tipo_punto_venta_id = Gral::getVars(2, 'id');
$vta_tipo_punto_venta = VtaTipoPuntoVenta::getOxId($vta_tipo_punto_venta_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_tipo_punto_venta->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_TIPO_PUNTO_VENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_punto_venta->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_tipo_punto_venta->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_TIPO_PUNTO_VENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tipo_punto_venta->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_tipo_punto_venta->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_PUNTO_VENTA_MASINFO_VTA_PUNTO_VENTA')){ ?>
            <li><a href="#tab_vta_punto_venta"><?php Lang::_lang('VtaPuntoVenta') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_PUNTO_VENTA_MASINFO_VTA_PUNTO_VENTA_ACTUAL')){ ?>
            <li><a href="#tab_vta_punto_venta_actual"><?php Lang::_lang('VtaPuntoVentaActuals') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_TIPO_PUNTO_VENTA_MASINFO_VTA_PUNTO_VENTA')){ ?>
	<div id="tab_vta_punto_venta" class="bloque-relacion vta_punto_venta">
		
            <h4><?php Lang::_lang('VtaPuntoVenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaTipoPuntoVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_tipo_punto_venta->getVtaPuntoVentasParaBloqueMasInfo() as $vta_punto_venta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_punto_venta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_punto_venta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_punto_venta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_punto_venta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_punto_venta->getId() ?>" archivo="ajax/modulos/vta_punto_venta/vta_punto_venta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPuntoVenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPuntoVenta') ?>">
                                <a href="vta_punto_venta_alta.php?id=<?php echo $vta_punto_venta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_PUNTO_VENTA_MASINFO_VTA_PUNTO_VENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_punto_venta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPuntoVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_punto_venta->getFiltrosArrXCampo('VtaTipoPuntoVenta', 'vta_tipo_punto_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaPuntoVentas de ') ?> <strong><?php echo($vta_tipo_punto_venta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_punto_venta_alta.php" >
                            <?php Lang::_lang('Agregar VtaPuntoVenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_TIPO_PUNTO_VENTA_MASINFO_VTA_PUNTO_VENTA_ACTUAL')){ ?>
	<div id="tab_vta_punto_venta_actual" class="bloque-relacion vta_punto_venta_actual">
		
            <h4><?php Lang::_lang('VtaPuntoVentaActual') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaTipoPuntoVenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_tipo_punto_venta->getVtaPuntoVentaActualsParaBloqueMasInfo() as $vta_punto_venta_actual){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_punto_venta_actual->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_punto_venta_actual->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_punto_venta_actual->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta_actual->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_punto_venta_actual->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_punto_venta_actual->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_punto_venta_actual->getId() ?>" archivo="ajax/modulos/vta_punto_venta_actual/vta_punto_venta_actual_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaPuntoVentaActual') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_PUNTO_VENTA_ACTUAL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaPuntoVentaActual') ?>">
                                <a href="vta_punto_venta_actual_alta.php?id=<?php echo $vta_punto_venta_actual->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_TIPO_PUNTO_VENTA_MASINFO_VTA_PUNTO_VENTA_ACTUAL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_punto_venta_actual){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaPuntoVentaActual::getFiltrosArrGral() ?>&arr=<?php echo $vta_punto_venta_actual->getFiltrosArrXCampo('VtaTipoPuntoVenta', 'vta_tipo_punto_venta_id') ?>" >
                                <?php Lang::_lang('Ver VtaPuntoVentaActuals de ') ?> <strong><?php echo($vta_tipo_punto_venta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_punto_venta_actual_alta.php" >
                            <?php Lang::_lang('Agregar VtaPuntoVentaActual') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

