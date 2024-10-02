<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$cntb_tipo_cuenta_id = Gral::getVars(2, 'id');
$cntb_tipo_cuenta = CntbTipoCuenta::getOxId($cntb_tipo_cuenta_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($cntb_tipo_cuenta->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_TIPO_CUENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_tipo_cuenta->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_tipo_cuenta->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'CNTB_TIPO_CUENTA_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_tipo_cuenta->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($cntb_tipo_cuenta->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('CNTB_TIPO_CUENTA_MASINFO_CNTB_CUENTA')){ ?>
            <li><a href="#tab_cntb_cuenta"><?php Lang::_lang('CntbCuentas') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('CNTB_TIPO_CUENTA_MASINFO_CNTB_CUENTA')){ ?>
	<div id="tab_cntb_cuenta" class="bloque-relacion cntb_cuenta">
		
            <h4><?php Lang::_lang('CntbCuenta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('CntbTipoCuenta') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($cntb_tipo_cuenta->getCntbCuentasParaBloqueMasInfo() as $cntb_cuenta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($cntb_cuenta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($cntb_cuenta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($cntb_cuenta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_cuenta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($cntb_cuenta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($cntb_cuenta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $cntb_cuenta->getId() ?>" archivo="ajax/modulos/cntb_cuenta/cntb_cuenta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('CntbCuenta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('CNTB_CUENTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('CntbCuenta') ?>">
                                <a href="cntb_cuenta_alta.php?id=<?php echo $cntb_cuenta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('CNTB_TIPO_CUENTA_MASINFO_CNTB_CUENTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($cntb_cuenta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo CntbCuenta::getFiltrosArrGral() ?>&arr=<?php echo $cntb_cuenta->getFiltrosArrXCampo('CntbTipoCuenta', 'cntb_tipo_cuenta_id') ?>" >
                                <?php Lang::_lang('Ver CntbCuentas de ') ?> <strong><?php echo($cntb_tipo_cuenta->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="cntb_cuenta_alta.php" >
                            <?php Lang::_lang('Agregar CntbCuenta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

