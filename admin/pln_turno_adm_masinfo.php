<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pln_turno_id = Gral::getVars(2, 'id');
$pln_turno = PlnTurno::getOxId($pln_turno_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pln_turno->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PLN_TURNO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pln_turno->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pln_turno->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PLN_TURNO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pln_turno->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pln_turno->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PLN_TURNO_MASINFO_PLN_TURNO_NOVEDAD')){ ?>
            <li><a href="#tab_pln_turno_novedad"><?php Lang::_lang('PlnTurnoNovedads') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PLN_TURNO_MASINFO_PLN_TURNO_NOVEDAD')){ ?>
	<div id="tab_pln_turno_novedad" class="bloque-relacion pln_turno_novedad">
		
            <h4><?php Lang::_lang('PlnTurnoNovedad') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PlnTurno') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pln_turno->getPlnTurnoNovedadsParaBloqueMasInfo() as $pln_turno_novedad){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pln_turno_novedad->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pln_turno_novedad->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pln_turno_novedad->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pln_turno_novedad->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pln_turno_novedad->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pln_turno_novedad->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pln_turno_novedad->getId() ?>" archivo="ajax/modulos/pln_turno_novedad/pln_turno_novedad_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PlnTurnoNovedad') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PLN_TURNO_NOVEDAD_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PlnTurnoNovedad') ?>">
                                <a href="pln_turno_novedad_alta.php?id=<?php echo $pln_turno_novedad->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PLN_TURNO_MASINFO_PLN_TURNO_NOVEDAD_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pln_turno_novedad){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PlnTurnoNovedad::getFiltrosArrGral() ?>&arr=<?php echo $pln_turno_novedad->getFiltrosArrXCampo('PlnTurno', 'pln_turno_id') ?>" >
                                <?php Lang::_lang('Ver PlnTurnoNovedads de ') ?> <strong><?php echo($pln_turno->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pln_turno_novedad_alta.php" >
                            <?php Lang::_lang('Agregar PlnTurnoNovedad') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

