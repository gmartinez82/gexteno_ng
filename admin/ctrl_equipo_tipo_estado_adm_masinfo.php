<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ctrl_equipo_tipo_estado_id = Gral::getVars(2, 'id');
$ctrl_equipo_tipo_estado = CtrlEquipoTipoEstado::getOxId($ctrl_equipo_tipo_estado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ctrl_equipo_tipo_estado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CTRL_EQUIPO_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ctrl_equipo_tipo_estado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ctrl_equipo_tipo_estado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CTRL_EQUIPO_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ctrl_equipo_tipo_estado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ctrl_equipo_tipo_estado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_TIPO_ESTADO_MASINFO_CTRL_EQUIPO_ESTADO')){ ?>
            <li><a href="#tab_ctrl_equipo_estado"><?php Lang::_lang('CtrlEquipoEstados') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_TIPO_ESTADO_MASINFO_CTRL_EQUIPO_ESTADO')){ ?>
	<div id="tab_ctrl_equipo_estado" class="bloque-relacion ctrl_equipo_estado">
		
            <h4><?php Lang::_lang('CtrlEquipoEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CtrlEquipoTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ctrl_equipo_tipo_estado->getCtrlEquipoEstadosParaBloqueMasInfo() as $ctrl_equipo_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ctrl_equipo_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ctrl_equipo_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ctrl_equipo_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ctrl_equipo_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ctrl_equipo_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ctrl_equipo_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ctrl_equipo_estado->getId() ?>" archivo="ajax/modulos/ctrl_equipo_estado/ctrl_equipo_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CtrlEquipoEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CtrlEquipoEstado') ?>">
                                <a href="ctrl_equipo_estado_alta.php?id=<?php echo $ctrl_equipo_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CTRL_EQUIPO_TIPO_ESTADO_MASINFO_CTRL_EQUIPO_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ctrl_equipo_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CtrlEquipoEstado::getFiltrosArrGral() ?>&arr=<?php echo $ctrl_equipo_estado->getFiltrosArrXCampo('CtrlEquipoTipoEstado', 'ctrl_equipo_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver CtrlEquipoEstados de ') ?> <strong><?php echo($ctrl_equipo_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ctrl_equipo_estado_alta.php" >
                            <?php Lang::_lang('Agregar CtrlEquipoEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

