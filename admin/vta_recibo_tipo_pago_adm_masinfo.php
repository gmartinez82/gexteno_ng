<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_recibo_tipo_pago_id = Gral::getVars(2, 'id');
$vta_recibo_tipo_pago = VtaReciboTipoPago::getOxId($vta_recibo_tipo_pago_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo Min') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_recibo_tipo_pago->getCodigoMin())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_recibo_tipo_pago->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_RECIBO_TIPO_PAGO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_tipo_pago->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_recibo_tipo_pago->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_RECIBO_TIPO_PAGO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo_tipo_pago->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_recibo_tipo_pago->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_TIPO_PAGO_MASINFO_VTA_RECIBO')){ ?>
            <li><a href="#tab_vta_recibo"><?php Lang::_lang('VtaRecibo') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_TIPO_PAGO_MASINFO_VTA_RECIBO')){ ?>
	<div id="tab_vta_recibo" class="bloque-relacion vta_recibo">
		
            <h4><?php Lang::_lang('VtaRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaReciboTipoPago') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_recibo_tipo_pago->getVtaRecibosParaBloqueMasInfo() as $vta_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_recibo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_recibo->getId() ?>" archivo="ajax/modulos/vta_recibo/vta_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRecibo') ?>">
                                <a href="vta_recibo_alta.php?id=<?php echo $vta_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_RECIBO_TIPO_PAGO_MASINFO_VTA_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaRecibo::getFiltrosArrGral() ?>&arr=<?php echo $vta_recibo->getFiltrosArrXCampo('VtaReciboTipoPago', 'vta_recibo_tipo_pago_id') ?>" >
                                <?php Lang::_lang('Ver VtaRecibos de ') ?> <strong><?php echo($vta_recibo_tipo_pago->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_recibo_alta.php" >
                            <?php Lang::_lang('Agregar VtaRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

