<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ope_operario_id = Gral::getVars(2, 'id');
$ope_operario = OpeOperario::getOxId($ope_operario_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ope_operario->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'OPE_OPERARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ope_operario->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ope_operario->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'OPE_OPERARIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ope_operario->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ope_operario->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('OPE_OPERARIO_MASINFO_PRD_ORDEN_TRABAJO_OPERACION_OPE_OPERARIO')){ ?>
            <li><a href="#tab_prd_orden_trabajo_operacion_ope_operario"><?php Lang::_lang('PrdOrdenTrabajoOperacionOpeOperarios') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('OPE_OPERARIO_MASINFO_PRD_PARAM_OPERACION_OPE_OPERARIO')){ ?>
            <li><a href="#tab_prd_param_operacion_ope_operario"><?php Lang::_lang('PrdParamOperacionOpeOperario') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('OPE_OPERARIO_MASINFO_OPE_OPERARIO_US_USUARIO')){ ?>
            <li><a href="#tab_ope_operario_us_usuario"><?php Lang::_lang('OpeOperarioUsUsuarios') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('OPE_OPERARIO_MASINFO_PRD_ORDEN_TRABAJO_OPERACION_OPE_OPERARIO')){ ?>
	<div id="tab_prd_orden_trabajo_operacion_ope_operario" class="bloque-relacion prd_orden_trabajo_operacion_ope_operario">
		
            <h4><?php Lang::_lang('PrdOrdenTrabajoOperacionOpeOperario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('OpeOperario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ope_operario->getPrdOrdenTrabajoOperacionOpeOperariosParaBloqueMasInfo() as $prd_orden_trabajo_operacion_ope_operario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prd_orden_trabajo_operacion_ope_operario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prd_orden_trabajo_operacion_ope_operario->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prd_orden_trabajo_operacion_ope_operario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_operacion_ope_operario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prd_orden_trabajo_operacion_ope_operario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_orden_trabajo_operacion_ope_operario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prd_orden_trabajo_operacion_ope_operario->getId() ?>" archivo="ajax/modulos/prd_orden_trabajo_operacion_ope_operario/prd_orden_trabajo_operacion_ope_operario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrdOrdenTrabajoOperacionOpeOperario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_OPE_OPERARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdOrdenTrabajoOperacionOpeOperario') ?>">
                                <a href="prd_orden_trabajo_operacion_ope_operario_alta.php?id=<?php echo $prd_orden_trabajo_operacion_ope_operario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('OPE_OPERARIO_MASINFO_PRD_ORDEN_TRABAJO_OPERACION_OPE_OPERARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prd_orden_trabajo_operacion_ope_operario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrdOrdenTrabajoOperacionOpeOperario::getFiltrosArrGral() ?>&arr=<?php echo $prd_orden_trabajo_operacion_ope_operario->getFiltrosArrXCampo('OpeOperario', 'ope_operario_id') ?>" >
                                <?php Lang::_lang('Ver PrdOrdenTrabajoOperacionOpeOperarios de ') ?> <strong><?php echo($ope_operario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prd_orden_trabajo_operacion_ope_operario_alta.php" >
                            <?php Lang::_lang('Agregar PrdOrdenTrabajoOperacionOpeOperario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('OPE_OPERARIO_MASINFO_PRD_PARAM_OPERACION_OPE_OPERARIO')){ ?>
	<div id="tab_prd_param_operacion_ope_operario" class="bloque-relacion prd_param_operacion_ope_operario">
		
            <h4><?php Lang::_lang('PrdParamOperacionOpeOperario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('OpeOperario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ope_operario->getPrdParamOperacionOpeOperariosParaBloqueMasInfo() as $prd_param_operacion_ope_operario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($prd_param_operacion_ope_operario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($prd_param_operacion_ope_operario->getDescripcionVinculante('OpeOperario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($prd_param_operacion_ope_operario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_param_operacion_ope_operario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($prd_param_operacion_ope_operario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($prd_param_operacion_ope_operario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $prd_param_operacion_ope_operario->getId() ?>" archivo="ajax/modulos/prd_param_operacion_ope_operario/prd_param_operacion_ope_operario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PrdParamOperacionOpeOperario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PRD_PARAM_OPERACION_OPE_OPERARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PrdParamOperacionOpeOperario') ?>">
                                <a href="prd_param_operacion_ope_operario_alta.php?id=<?php echo $prd_param_operacion_ope_operario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('OPE_OPERARIO_MASINFO_PRD_PARAM_OPERACION_OPE_OPERARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($prd_param_operacion_ope_operario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PrdParamOperacionOpeOperario::getFiltrosArrGral() ?>&arr=<?php echo $prd_param_operacion_ope_operario->getFiltrosArrXCampo('OpeOperario', 'ope_operario_id') ?>" >
                                <?php Lang::_lang('Ver PrdParamOperacionOpeOperarios de ') ?> <strong><?php echo($ope_operario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="prd_param_operacion_ope_operario_alta.php" >
                            <?php Lang::_lang('Agregar PrdParamOperacionOpeOperario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('OPE_OPERARIO_MASINFO_OPE_OPERARIO_US_USUARIO')){ ?>
	<div id="tab_ope_operario_us_usuario" class="bloque-relacion ope_operario_us_usuario">
		
            <h4><?php Lang::_lang('OpeOperarioUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('OpeOperario') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ope_operario->getOpeOperarioUsUsuariosParaBloqueMasInfo() as $ope_operario_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ope_operario_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ope_operario_us_usuario->getDescripcionVinculante('OpeOperario')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ope_operario_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ope_operario_us_usuario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ope_operario_us_usuario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ope_operario_us_usuario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ope_operario_us_usuario->getId() ?>" archivo="ajax/modulos/ope_operario_us_usuario/ope_operario_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('OpeOperarioUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('OPE_OPERARIO_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('OpeOperarioUsUsuario') ?>">
                                <a href="ope_operario_us_usuario_alta.php?id=<?php echo $ope_operario_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('OPE_OPERARIO_MASINFO_OPE_OPERARIO_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ope_operario_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo OpeOperarioUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $ope_operario_us_usuario->getFiltrosArrXCampo('OpeOperario', 'ope_operario_id') ?>" >
                                <?php Lang::_lang('Ver OpeOperarioUsUsuarios de ') ?> <strong><?php echo($ope_operario->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ope_operario_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar OpeOperarioUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

