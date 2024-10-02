<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$gen_api_proyecto_id = Gral::getVars(2, 'id');
$gen_api_proyecto = GenApiProyecto::getOxId($gen_api_proyecto_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($gen_api_proyecto->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEN_API_PROYECTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_api_proyecto->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gen_api_proyecto->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'GEN_API_PROYECTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_api_proyecto->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($gen_api_proyecto->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('GEN_API_PROYECTO_MASINFO_GEN_API_CONSUMER')){ ?>
            <li><a href="#tab_gen_api_consumer"><?php Lang::_lang('GenApiConsumers') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEN_API_PROYECTO_MASINFO_GEN_API_TOKEN')){ ?>
            <li><a href="#tab_gen_api_token"><?php Lang::_lang('GenApiTokens') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEN_API_PROYECTO_MASINFO_GEN_PRCA_EJECUCION')){ ?>
            <li><a href="#tab_gen_prca_ejecucion"><?php Lang::_lang('GenPrcaEjecucion') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('GEN_API_PROYECTO_MASINFO_GEN_PRCA_EJECUCION_DETALLE')){ ?>
            <li><a href="#tab_gen_prca_ejecucion_detalle"><?php Lang::_lang('GenPrcaEjecucionDetalle') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('GEN_API_PROYECTO_MASINFO_GEN_API_CONSUMER')){ ?>
	<div id="tab_gen_api_consumer" class="bloque-relacion gen_api_consumer">
		
            <h4><?php Lang::_lang('GenApiConsumer') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GenApiProyecto') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gen_api_proyecto->getGenApiConsumersParaBloqueMasInfo() as $gen_api_consumer){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gen_api_consumer->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gen_api_consumer->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gen_api_consumer->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_api_consumer->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gen_api_consumer->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_api_consumer->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gen_api_consumer->getId() ?>" archivo="ajax/modulos/gen_api_consumer/gen_api_consumer_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GenApiConsumer') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GEN_API_CONSUMER_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GenApiConsumer') ?>">
                                <a href="gen_api_consumer_alta.php?id=<?php echo $gen_api_consumer->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEN_API_PROYECTO_MASINFO_GEN_API_CONSUMER_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gen_api_consumer){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GenApiConsumer::getFiltrosArrGral() ?>&arr=<?php echo $gen_api_consumer->getFiltrosArrXCampo('GenApiProyecto', 'gen_api_proyecto_id') ?>" >
                                <?php Lang::_lang('Ver GenApiConsumers de ') ?> <strong><?php echo($gen_api_proyecto->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gen_api_consumer_alta.php" >
                            <?php Lang::_lang('Agregar GenApiConsumer') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEN_API_PROYECTO_MASINFO_GEN_API_TOKEN')){ ?>
	<div id="tab_gen_api_token" class="bloque-relacion gen_api_token">
		
            <h4><?php Lang::_lang('GenApiToken') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GenApiProyecto') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gen_api_proyecto->getGenApiTokensParaBloqueMasInfo() as $gen_api_token){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gen_api_token->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gen_api_token->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gen_api_token->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_api_token->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gen_api_token->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_api_token->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gen_api_token->getId() ?>" archivo="ajax/modulos/gen_api_token/gen_api_token_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GenApiToken') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GEN_API_TOKEN_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GenApiToken') ?>">
                                <a href="gen_api_token_alta.php?id=<?php echo $gen_api_token->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEN_API_PROYECTO_MASINFO_GEN_API_TOKEN_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gen_api_token){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GenApiToken::getFiltrosArrGral() ?>&arr=<?php echo $gen_api_token->getFiltrosArrXCampo('GenApiProyecto', 'gen_api_proyecto_id') ?>" >
                                <?php Lang::_lang('Ver GenApiTokens de ') ?> <strong><?php echo($gen_api_proyecto->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gen_api_token_alta.php" >
                            <?php Lang::_lang('Agregar GenApiToken') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEN_API_PROYECTO_MASINFO_GEN_PRCA_EJECUCION')){ ?>
	<div id="tab_gen_prca_ejecucion" class="bloque-relacion gen_prca_ejecucion">
		
            <h4><?php Lang::_lang('GenPrcaEjecucion') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GenApiProyecto') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gen_api_proyecto->getGenPrcaEjecucionsParaBloqueMasInfo() as $gen_prca_ejecucion){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gen_prca_ejecucion->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gen_prca_ejecucion->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gen_prca_ejecucion->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_prca_ejecucion->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gen_prca_ejecucion->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_prca_ejecucion->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gen_prca_ejecucion->getId() ?>" archivo="ajax/modulos/gen_prca_ejecucion/gen_prca_ejecucion_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GenPrcaEjecucion') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GEN_PRCA_EJECUCION_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GenPrcaEjecucion') ?>">
                                <a href="gen_prca_ejecucion_alta.php?id=<?php echo $gen_prca_ejecucion->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEN_API_PROYECTO_MASINFO_GEN_PRCA_EJECUCION_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gen_prca_ejecucion){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GenPrcaEjecucion::getFiltrosArrGral() ?>&arr=<?php echo $gen_prca_ejecucion->getFiltrosArrXCampo('GenApiProyecto', 'gen_api_proyecto_id') ?>" >
                                <?php Lang::_lang('Ver GenPrcaEjecucions de ') ?> <strong><?php echo($gen_api_proyecto->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gen_prca_ejecucion_alta.php" >
                            <?php Lang::_lang('Agregar GenPrcaEjecucion') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('GEN_API_PROYECTO_MASINFO_GEN_PRCA_EJECUCION_DETALLE')){ ?>
	<div id="tab_gen_prca_ejecucion_detalle" class="bloque-relacion gen_prca_ejecucion_detalle">
		
            <h4><?php Lang::_lang('GenPrcaEjecucionDetalle') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('GenApiProyecto') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($gen_api_proyecto->getGenPrcaEjecucionDetallesParaBloqueMasInfo() as $gen_prca_ejecucion_detalle){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gen_prca_ejecucion_detalle->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gen_prca_ejecucion_detalle->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gen_prca_ejecucion_detalle->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_prca_ejecucion_detalle->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gen_prca_ejecucion_detalle->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gen_prca_ejecucion_detalle->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gen_prca_ejecucion_detalle->getId() ?>" archivo="ajax/modulos/gen_prca_ejecucion_detalle/gen_prca_ejecucion_detalle_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GenPrcaEjecucionDetalle') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GEN_PRCA_EJECUCION_DETALLE_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GenPrcaEjecucionDetalle') ?>">
                                <a href="gen_prca_ejecucion_detalle_alta.php?id=<?php echo $gen_prca_ejecucion_detalle->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('GEN_API_PROYECTO_MASINFO_GEN_PRCA_EJECUCION_DETALLE_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gen_prca_ejecucion_detalle){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GenPrcaEjecucionDetalle::getFiltrosArrGral() ?>&arr=<?php echo $gen_prca_ejecucion_detalle->getFiltrosArrXCampo('GenApiProyecto', 'gen_api_proyecto_id') ?>" >
                                <?php Lang::_lang('Ver GenPrcaEjecucionDetalles de ') ?> <strong><?php echo($gen_api_proyecto->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gen_prca_ejecucion_detalle_alta.php" >
                            <?php Lang::_lang('Agregar GenPrcaEjecucionDetalle') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

