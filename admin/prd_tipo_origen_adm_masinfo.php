<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$prd_tipo_origen_id = Gral::getVars(2, 'id');
$prd_tipo_origen = PrdTipoOrigen::getOxId($prd_tipo_origen_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($prd_tipo_origen->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRD_TIPO_ORIGEN_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_tipo_origen->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prd_tipo_origen->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PRD_TIPO_ORIGEN_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_tipo_origen->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($prd_tipo_origen->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PRD_TIPO_ORIGEN_MASINFO_PRD_ORDEN_TRABAJO')){ ?>
            <li><a href="#tab_prd_orden_trabajo"><?php Lang::_lang('PrdOrdenTrabajos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PRD_TIPO_ORIGEN_MASINFO_PRD_ORDEN_TRABAJO')){ ?>
	<div id="tab_prd_orden_trabajo" class="bloque-relacion prd_orden_trabajo">
		
            <h4><?php Lang::_lang('PrdOrdenTrabajo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PrdTipoOrigen') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($prd_tipo_origen->getPrdOrdenTrabajosParaBloqueMasInfo() as $prd_orden_trabajo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prd_orden_trabajo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prd_orden_trabajo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prd_orden_trabajo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prd_orden_trabajo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prd_orden_trabajo->getId() ?>" archivo="ajax/modulos/prd_orden_trabajo/prd_orden_trabajo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrdOrdenTrabajo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdOrdenTrabajo') ?>">
                                <a href="prd_orden_trabajo_alta.php?id=<?php echo $prd_orden_trabajo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PRD_TIPO_ORIGEN_MASINFO_PRD_ORDEN_TRABAJO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prd_orden_trabajo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrdOrdenTrabajo::getFiltrosArrGral() ?>&arr=<?php echo $prd_orden_trabajo->getFiltrosArrXCampo('PrdTipoOrigen', 'prd_tipo_origen_id') ?>" >
                                <?php Lang::_lang('Ver PrdOrdenTrabajos de ') ?> <strong><?php echo($prd_tipo_origen->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prd_orden_trabajo_alta.php" >
                            <?php Lang::_lang('Agregar PrdOrdenTrabajo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

