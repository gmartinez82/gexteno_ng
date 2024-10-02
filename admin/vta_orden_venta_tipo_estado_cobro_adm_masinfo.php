<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_orden_venta_tipo_estado_cobro_id = Gral::getVars(2, 'id');
$vta_orden_venta_tipo_estado_cobro = VtaOrdenVentaTipoEstadoCobro::getOxId($vta_orden_venta_tipo_estado_cobro_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_orden_venta_tipo_estado_cobro->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_ORDEN_VENTA_TIPO_ESTADO_COBRO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_tipo_estado_cobro->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_orden_venta_tipo_estado_cobro->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_ORDEN_VENTA_TIPO_ESTADO_COBRO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_tipo_estado_cobro->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_orden_venta_tipo_estado_cobro->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_COBRO_MASINFO_VTA_ORDEN_VENTA_ESTADO_COBRO')){ ?>
            <li><a href="#tab_vta_orden_venta_estado_cobro"><?php Lang::_lang('VtaOrdenVentaEstadoCobro') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_COBRO_MASINFO_VTA_ORDEN_VENTA_ESTADO_COBRO')){ ?>
	<div id="tab_vta_orden_venta_estado_cobro" class="bloque-relacion vta_orden_venta_estado_cobro">
		
            <h4><?php Lang::_lang('VtaOrdenVentaEstadoCobro') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaOrdenVentaTipoEstadoCobro') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_orden_venta_tipo_estado_cobro->getVtaOrdenVentaEstadoCobrosParaBloqueMasInfo() as $vta_orden_venta_estado_cobro){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_orden_venta_estado_cobro->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_orden_venta_estado_cobro->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_orden_venta_estado_cobro->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado_cobro->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_orden_venta_estado_cobro->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta_estado_cobro->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_orden_venta_estado_cobro->getId() ?>" archivo="ajax/modulos/vta_orden_venta_estado_cobro/vta_orden_venta_estado_cobro_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaOrdenVentaEstadoCobro') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_ESTADO_COBRO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaOrdenVentaEstadoCobro') ?>">
                                <a href="vta_orden_venta_estado_cobro_alta.php?id=<?php echo $vta_orden_venta_estado_cobro->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_TIPO_ESTADO_COBRO_MASINFO_VTA_ORDEN_VENTA_ESTADO_COBRO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_orden_venta_estado_cobro){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaOrdenVentaEstadoCobro::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta_estado_cobro->getFiltrosArrXCampo('VtaOrdenVentaTipoEstadoCobro', 'vta_orden_venta_tipo_estado_cobro_id') ?>" >
                                <?php Lang::_lang('Ver VtaOrdenVentaEstadoCobros de ') ?> <strong><?php echo($vta_orden_venta_tipo_estado_cobro->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_orden_venta_estado_cobro_alta.php" >
                            <?php Lang::_lang('Agregar VtaOrdenVentaEstadoCobro') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

