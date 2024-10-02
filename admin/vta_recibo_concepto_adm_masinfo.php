<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_recibo_concepto_id = Gral::getVars(2, 'id');
$vta_recibo_concepto = VtaReciboConcepto::getOxId($vta_recibo_concepto_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Es Retencion') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(GralSiNo::getOxId($vta_recibo_concepto->getEsRetencion())->getDescripcion())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Es Retencion IIBB') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(GralSiNo::getOxId($vta_recibo_concepto->getEsRetencionIibb())->getDescripcion())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_recibo_concepto->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_RECIBO_CONCEPTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_concepto->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_recibo_concepto->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_RECIBO_CONCEPTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_concepto->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_recibo_concepto->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_CONCEPTO_MASINFO_VTA_RECIBO_ITEM')){ ?>
            <li><a href="#tab_vta_recibo_item"><?php Lang::_lang('VtaReciboItem') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_CONCEPTO_MASINFO_VTA_RECIBO_ITEM')){ ?>
	<div id="tab_vta_recibo_item" class="bloque-relacion vta_recibo_item">
		
            <h4><?php Lang::_lang('VtaReciboItem') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaReciboConcepto') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo_concepto->getVtaReciboItemsParaBloqueMasInfo() as $vta_recibo_item){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo_item->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo_item->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo_item->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo_item->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_item->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo_item->getId() ?>" archivo="ajax/modulos/vta_recibo_item/vta_recibo_item_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaReciboItem') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaReciboItem') ?>">
                                <a href="vta_recibo_item_alta.php?id=<?php echo $vta_recibo_item->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_CONCEPTO_MASINFO_VTA_RECIBO_ITEM_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo_item){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaReciboItem::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo_item->getFiltrosArrXCampo('VtaReciboConcepto', 'vta_recibo_concepto_id') ?>" >
                                <?php Lang::_lang('Ver VtaReciboItems de ') ?> <strong><?php echo($vta_recibo_concepto->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_item_alta.php" >
                            <?php Lang::_lang('Agregar VtaReciboItem') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

