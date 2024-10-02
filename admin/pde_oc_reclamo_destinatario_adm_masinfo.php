<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_oc_reclamo_destinatario_id = Gral::getVars(2, 'id');
$pde_oc_reclamo_destinatario = PdeOcReclamoDestinatario::getOxId($pde_oc_reclamo_destinatario_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_oc_reclamo_destinatario->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_OC_RECLAMO_DESTINATARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_reclamo_destinatario->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_oc_reclamo_destinatario->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_OC_RECLAMO_DESTINATARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_reclamo_destinatario->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_oc_reclamo_destinatario->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_OC_RECLAMO_DESTINATARIO_MASINFO_PDE_OC_RECLAMO_ENVIO_EMAIL')){ ?>
            <li><a href="#tab_pde_oc_reclamo_envio_email"><?php Lang::_lang('PdeOcReclamoEnvioEmails') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_OC_RECLAMO_DESTINATARIO_MASINFO_PDE_OC_RECLAMO_ENVIO_EMAIL')){ ?>
	<div id="tab_pde_oc_reclamo_envio_email" class="bloque-relacion pde_oc_reclamo_envio_email">
		
            <h4><?php Lang::_lang('PdeOcReclamoEnvioEmail') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeOcReclamoDestinatario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_oc_reclamo_destinatario->getPdeOcReclamoEnvioEmailsParaBloqueMasInfo() as $pde_oc_reclamo_envio_email){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_oc_reclamo_envio_email->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_oc_reclamo_envio_email->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_oc_reclamo_envio_email->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_reclamo_envio_email->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_oc_reclamo_envio_email->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_oc_reclamo_envio_email->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_oc_reclamo_envio_email->getId() ?>" archivo="ajax/modulos/pde_oc_reclamo_envio_email/pde_oc_reclamo_envio_email_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeOcReclamoEnvioEmail') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_OC_RECLAMO_ENVIO_EMAIL_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeOcReclamoEnvioEmail') ?>">
                                <a href="pde_oc_reclamo_envio_email_alta.php?id=<?php echo $pde_oc_reclamo_envio_email->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_OC_RECLAMO_DESTINATARIO_MASINFO_PDE_OC_RECLAMO_ENVIO_EMAIL_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_oc_reclamo_envio_email){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeOcReclamoEnvioEmail::getFiltrosArrGral() ?>&arr=<?php echo $pde_oc_reclamo_envio_email->getFiltrosArrXCampo('PdeOcReclamoDestinatario', 'pde_oc_reclamo_destinatario_id') ?>" >
                                <?php Lang::_lang('Ver PdeOcReclamoEnvioEmails de ') ?> <strong><?php echo($pde_oc_reclamo_destinatario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_oc_reclamo_envio_email_alta.php" >
                            <?php Lang::_lang('Agregar PdeOcReclamoEnvioEmail') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

