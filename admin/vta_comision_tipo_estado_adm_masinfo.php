<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$vta_comision_tipo_estado_id = Gral::getVars(2, 'id');
$vta_comision_tipo_estado = VtaComisionTipoEstado::getOxId($vta_comision_tipo_estado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($vta_comision_tipo_estado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_COMISION_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_tipo_estado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_comision_tipo_estado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'VTA_COMISION_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_tipo_estado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($vta_comision_tipo_estado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_TIPO_ESTADO_MASINFO_VTA_COMISION')){ ?>
            <li><a href="#tab_vta_comision"><?php Lang::_lang('VtaComisions') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_TIPO_ESTADO_MASINFO_VTA_COMISION_ESTADO')){ ?>
            <li><a href="#tab_vta_comision_estado"><?php Lang::_lang('VtaComisionEstado') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_COMISION_TIPO_ESTADO_MASINFO_VTA_COMISION')){ ?>
	<div id="tab_vta_comision" class="bloque-relacion vta_comision">
		
            <h4><?php Lang::_lang('VtaComision') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaComisionTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_comision_tipo_estado->getVtaComisionsParaBloqueMasInfo() as $vta_comision){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_comision->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_comision->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_comision->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_comision->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_comision->getId() ?>" archivo="ajax/modulos/vta_comision/vta_comision_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaComision') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaComision') ?>">
                                <a href="vta_comision_alta.php?id=<?php echo $vta_comision->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_TIPO_ESTADO_MASINFO_VTA_COMISION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_comision){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaComision::getFiltrosArrGral() ?>&arr=<?php echo $vta_comision->getFiltrosArrXCampo('VtaComisionTipoEstado', 'vta_comision_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver VtaComisions de ') ?> <strong><?php echo($vta_comision_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_comision_alta.php" >
                            <?php Lang::_lang('Agregar VtaComision') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('VTA_COMISION_TIPO_ESTADO_MASINFO_VTA_COMISION_ESTADO')){ ?>
	<div id="tab_vta_comision_estado" class="bloque-relacion vta_comision_estado">
		
            <h4><?php Lang::_lang('VtaComisionEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('VtaComisionTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($vta_comision_tipo_estado->getVtaComisionEstadosParaBloqueMasInfo() as $vta_comision_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_comision_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_comision_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_comision_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_comision_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_comision_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_comision_estado->getId() ?>" archivo="ajax/modulos/vta_comision_estado/vta_comision_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaComisionEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaComisionEstado') ?>">
                                <a href="vta_comision_estado_alta.php?id=<?php echo $vta_comision_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('VTA_COMISION_TIPO_ESTADO_MASINFO_VTA_COMISION_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_comision_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaComisionEstado::getFiltrosArrGral() ?>&arr=<?php echo $vta_comision_estado->getFiltrosArrXCampo('VtaComisionTipoEstado', 'vta_comision_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver VtaComisionEstados de ') ?> <strong><?php echo($vta_comision_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_comision_estado_alta.php" >
                            <?php Lang::_lang('Agregar VtaComisionEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

