<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cntb_ejercicio_id = Gral::getVars(2, 'id');
$cntb_ejercicio = CntbEjercicio::getOxId($cntb_ejercicio_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Fecha Inicio') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(Gral::getFechaToWeb($cntb_ejercicio->getFechaInicio()))) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Fecha Fin') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br(Gral::getFechaToWeb($cntb_ejercicio->getFechaFin()))) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cntb_ejercicio->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_EJERCICIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_ejercicio->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_ejercicio->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_EJERCICIO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_ejercicio->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_ejercicio->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('CNTB_EJERCICIO_MASINFO_CNTB_PERIODO')){ ?>
            <li><a href="#tab_cntb_periodo"><?php Lang::_lang('CntbPeriodos') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('CNTB_EJERCICIO_MASINFO_CNTB_DIARIO_ASIENTO')){ ?>
            <li><a href="#tab_cntb_diario_asiento"><?php Lang::_lang('CntbDiarioAsientos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_EJERCICIO_MASINFO_CNTB_PERIODO')){ ?>
	<div id="tab_cntb_periodo" class="bloque-relacion cntb_periodo">
		
            <h4><?php Lang::_lang('CntbPeriodo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbEjercicio') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_ejercicio->getCntbPeriodosParaBloqueMasInfo() as $cntb_periodo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_periodo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_periodo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_periodo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_periodo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_periodo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_periodo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_periodo->getId() ?>" archivo="ajax/modulos/cntb_periodo/cntb_periodo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbPeriodo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_PERIODO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbPeriodo') ?>">
                                <a href="cntb_periodo_alta.php?id=<?php echo $cntb_periodo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_EJERCICIO_MASINFO_CNTB_PERIODO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_periodo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbPeriodo::getFiltrosArrGral() ?>&arr=<?php echo $cntb_periodo->getFiltrosArrXCampo('CntbEjercicio', 'cntb_ejercicio_id') ?>" >
                                <?php Lang::_lang('Ver CntbPeriodos de ') ?> <strong><?php echo($cntb_ejercicio->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_periodo_alta.php" >
                            <?php Lang::_lang('Agregar CntbPeriodo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_EJERCICIO_MASINFO_CNTB_DIARIO_ASIENTO')){ ?>
	<div id="tab_cntb_diario_asiento" class="bloque-relacion cntb_diario_asiento">
		
            <h4><?php Lang::_lang('CntbDiarioAsiento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbEjercicio') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_ejercicio->getCntbDiarioAsientosParaBloqueMasInfo() as $cntb_diario_asiento){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_diario_asiento->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_diario_asiento->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_diario_asiento->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_diario_asiento->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_diario_asiento->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_diario_asiento->getId() ?>" archivo="ajax/modulos/cntb_diario_asiento/cntb_diario_asiento_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbDiarioAsiento') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_DIARIO_ASIENTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbDiarioAsiento') ?>">
                                <a href="cntb_diario_asiento_alta.php?id=<?php echo $cntb_diario_asiento->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_EJERCICIO_MASINFO_CNTB_DIARIO_ASIENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_diario_asiento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbDiarioAsiento::getFiltrosArrGral() ?>&arr=<?php echo $cntb_diario_asiento->getFiltrosArrXCampo('CntbEjercicio', 'cntb_ejercicio_id') ?>" >
                                <?php Lang::_lang('Ver CntbDiarioAsientos de ') ?> <strong><?php echo($cntb_ejercicio->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_diario_asiento_alta.php" >
                            <?php Lang::_lang('Agregar CntbDiarioAsiento') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

