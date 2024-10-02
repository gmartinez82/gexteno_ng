<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$per_mov_tipo_estado_id = Gral::getVars(2, 'id');
$per_mov_tipo_estado = PerMovTipoEstado::getOxId($per_mov_tipo_estado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($per_mov_tipo_estado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PER_MOV_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_tipo_estado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($per_mov_tipo_estado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PER_MOV_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_tipo_estado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($per_mov_tipo_estado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PER_MOV_TIPO_ESTADO_MASINFO_PER_MOV_MOVIMIENTO')){ ?>
            <li><a href="#tab_per_mov_movimiento"><?php Lang::_lang('PerMovMovimientos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PER_MOV_TIPO_ESTADO_MASINFO_PER_MOV_MOVIMIENTO')){ ?>
	<div id="tab_per_mov_movimiento" class="bloque-relacion per_mov_movimiento">
		
            <h4><?php Lang::_lang('PerMovMovimiento') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PerMovTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($per_mov_tipo_estado->getPerMovMovimientosParaBloqueMasInfo() as $per_mov_movimiento){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($per_mov_movimiento->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($per_mov_movimiento->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($per_mov_movimiento->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_movimiento->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($per_mov_movimiento->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($per_mov_movimiento->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $per_mov_movimiento->getId() ?>" archivo="ajax/modulos/per_mov_movimiento/per_mov_movimiento_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PerMovMovimiento') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PerMovMovimiento') ?>">
                                <a href="per_mov_movimiento_alta.php?id=<?php echo $per_mov_movimiento->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PER_MOV_TIPO_ESTADO_MASINFO_PER_MOV_MOVIMIENTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($per_mov_movimiento){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PerMovMovimiento::getFiltrosArrGral() ?>&arr=<?php echo $per_mov_movimiento->getFiltrosArrXCampo('PerMovTipoEstado', 'per_mov_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver PerMovMovimientos de ') ?> <strong><?php echo($per_mov_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="per_mov_movimiento_alta.php" >
                            <?php Lang::_lang('Agregar PerMovMovimiento') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

