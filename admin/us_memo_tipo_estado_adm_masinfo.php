<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$us_memo_tipo_estado_id = Gral::getVars(2, 'id');
$us_memo_tipo_estado = UsMemoTipoEstado::getOxId($us_memo_tipo_estado_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_memo_tipo_estado->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'US_MEMO_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_memo_tipo_estado->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($us_memo_tipo_estado->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'US_MEMO_TIPO_ESTADO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_memo_tipo_estado->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($us_memo_tipo_estado->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('US_MEMO_TIPO_ESTADO_MASINFO_US_MEMO')){ ?>
            <li><a href="#tab_us_memo"><?php Lang::_lang('UsMemo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_MEMO_TIPO_ESTADO_MASINFO_US_MEMO_ESTADO')){ ?>
            <li><a href="#tab_us_memo_estado"><?php Lang::_lang('UsMemoEstado') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('US_MEMO_TIPO_ESTADO_MASINFO_US_MEMO')){ ?>
	<div id="tab_us_memo" class="bloque-relacion us_memo">
		
            <h4><?php Lang::_lang('UsMemo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsMemoTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_memo_tipo_estado->getUsMemosParaBloqueMasInfo() as $us_memo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($us_memo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($us_memo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($us_memo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_memo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($us_memo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_memo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $us_memo->getId() ?>" archivo="ajax/modulos/us_memo/us_memo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('UsMemo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('US_MEMO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsMemo') ?>">
                                <a href="us_memo_alta.php?id=<?php echo $us_memo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_MEMO_TIPO_ESTADO_MASINFO_US_MEMO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($us_memo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo UsMemo::getFiltrosArrGral() ?>&arr=<?php echo $us_memo->getFiltrosArrXCampo('UsMemoTipoEstado', 'us_memo_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver UsMemos de ') ?> <strong><?php echo($us_memo_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="us_memo_alta.php" >
                            <?php Lang::_lang('Agregar UsMemo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_MEMO_TIPO_ESTADO_MASINFO_US_MEMO_ESTADO')){ ?>
	<div id="tab_us_memo_estado" class="bloque-relacion us_memo_estado">
		
            <h4><?php Lang::_lang('UsMemoEstado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsMemoTipoEstado') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_memo_tipo_estado->getUsMemoEstadosParaBloqueMasInfo() as $us_memo_estado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($us_memo_estado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($us_memo_estado->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($us_memo_estado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_memo_estado->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($us_memo_estado->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_memo_estado->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $us_memo_estado->getId() ?>" archivo="ajax/modulos/us_memo_estado/us_memo_estado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('UsMemoEstado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('US_MEMO_ESTADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsMemoEstado') ?>">
                                <a href="us_memo_estado_alta.php?id=<?php echo $us_memo_estado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_MEMO_TIPO_ESTADO_MASINFO_US_MEMO_ESTADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($us_memo_estado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo UsMemoEstado::getFiltrosArrGral() ?>&arr=<?php echo $us_memo_estado->getFiltrosArrXCampo('UsMemoTipoEstado', 'us_memo_tipo_estado_id') ?>" >
                                <?php Lang::_lang('Ver UsMemoEstados de ') ?> <strong><?php echo($us_memo_tipo_estado->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="us_memo_estado_alta.php" >
                            <?php Lang::_lang('Agregar UsMemoEstado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

