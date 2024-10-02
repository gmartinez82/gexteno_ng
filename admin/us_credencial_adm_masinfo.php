<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$us_credencial_id = Gral::getVars(2, 'id');
$us_credencial = UsCredencial::getOxId($us_credencial_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($us_credencial->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'US_CREDENCIAL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_credencial->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($us_credencial->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'US_CREDENCIAL_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_credencial->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($us_credencial->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('US_CREDENCIAL_MASINFO_US_AGRUPADOR')){ ?>
            <li><a href="#tab_us_agrupador"><?php Lang::_lang('UsAgrupador') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('US_CREDENCIAL_MASINFO_US_ACREDITADO')){ ?>
            <li><a href="#tab_us_acreditado"><?php Lang::_lang('UsAcreditado') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('US_CREDENCIAL_MASINFO_US_AGRUPADOR')){ ?>
	<div id="tab_us_agrupador" class="bloque-relacion us_agrupador">
		
            <h4><?php Lang::_lang('UsAgrupador') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsCredencial') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_credencial->getUsAgrupadorsParaBloqueMasInfo() as $us_agrupador){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($us_agrupador->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($us_agrupador->getDescripcionVinculante('UsCredencial')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($us_agrupador->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_agrupador->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $us_agrupador->getId() ?>" archivo="ajax/modulos/us_agrupador/us_agrupador_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('UsAgrupador') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('US_AGRUPADOR_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsAgrupador') ?>">
                                <a href="us_agrupador_alta.php?id=<?php echo $us_agrupador->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_CREDENCIAL_MASINFO_US_AGRUPADOR_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($us_agrupador){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo UsAgrupador::getFiltrosArrGral() ?>&arr=<?php echo $us_agrupador->getFiltrosArrXCampo('UsCredencial', 'us_credencial_id') ?>" >
                                <?php Lang::_lang('Ver UsAgrupadors de ') ?> <strong><?php echo($us_credencial->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="us_agrupador_alta.php" >
                            <?php Lang::_lang('Agregar UsAgrupador') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('US_CREDENCIAL_MASINFO_US_ACREDITADO')){ ?>
	<div id="tab_us_acreditado" class="bloque-relacion us_acreditado">
		
            <h4><?php Lang::_lang('UsAcreditado') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('UsCredencial') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($us_credencial->getUsAcreditadosParaBloqueMasInfo() as $us_acreditado){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($us_acreditado->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($us_acreditado->getDescripcionVinculante('UsCredencial')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($us_acreditado->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($us_acreditado->getCreado())) ?> h</label><br/>
					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $us_acreditado->getId() ?>" archivo="ajax/modulos/us_acreditado/us_acreditado_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('UsAcreditado') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('US_ACREDITADO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('UsAcreditado') ?>">
                                <a href="us_acreditado_alta.php?id=<?php echo $us_acreditado->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('US_CREDENCIAL_MASINFO_US_ACREDITADO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($us_acreditado){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo UsAcreditado::getFiltrosArrGral() ?>&arr=<?php echo $us_acreditado->getFiltrosArrXCampo('UsCredencial', 'us_credencial_id') ?>" >
                                <?php Lang::_lang('Ver UsAcreditados de ') ?> <strong><?php echo($us_credencial->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="us_acreditado_alta.php" >
                            <?php Lang::_lang('Agregar UsAcreditado') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

