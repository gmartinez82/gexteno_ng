<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cntb_tipo_clasificacion_id = Gral::getVars(2, 'id');
$cntb_tipo_clasificacion = CntbTipoClasificacion::getOxId($cntb_tipo_clasificacion_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cntb_tipo_clasificacion->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_TIPO_CLASIFICACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_tipo_clasificacion->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_tipo_clasificacion->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_TIPO_CLASIFICACION_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_tipo_clasificacion->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_tipo_clasificacion->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('CNTB_TIPO_CLASIFICACION_MASINFO_CNTB_TIPO_CUENTA')){ ?>
            <li><a href="#tab_cntb_tipo_cuenta"><?php Lang::_lang('CntbTipoCuentas') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_TIPO_CLASIFICACION_MASINFO_CNTB_TIPO_CUENTA')){ ?>
	<div id="tab_cntb_tipo_cuenta" class="bloque-relacion cntb_tipo_cuenta">
		
            <h4><?php Lang::_lang('CntbTipoCuenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbTipoClasificacion') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_tipo_clasificacion->getCntbTipoCuentasParaBloqueMasInfo() as $cntb_tipo_cuenta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_tipo_cuenta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_tipo_cuenta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_tipo_cuenta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_tipo_cuenta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_tipo_cuenta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_tipo_cuenta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_tipo_cuenta->getId() ?>" archivo="ajax/modulos/cntb_tipo_cuenta/cntb_tipo_cuenta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbTipoCuenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_TIPO_CUENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbTipoCuenta') ?>">
                                <a href="cntb_tipo_cuenta_alta.php?id=<?php echo $cntb_tipo_cuenta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_TIPO_CLASIFICACION_MASINFO_CNTB_TIPO_CUENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_tipo_cuenta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbTipoCuenta::getFiltrosArrGral() ?>&arr=<?php echo $cntb_tipo_cuenta->getFiltrosArrXCampo('CntbTipoClasificacion', 'cntb_tipo_clasificacion_id') ?>" >
                                <?php Lang::_lang('Ver CntbTipoCuentas de ') ?> <strong><?php echo($cntb_tipo_clasificacion->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_tipo_cuenta_alta.php" >
                            <?php Lang::_lang('Agregar CntbTipoCuenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

