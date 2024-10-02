<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$ope_chofer_id = Gral::getVars(2, 'id');
$ope_chofer = OpeChofer::getOxId($ope_chofer_id);
?>
<div class="masinfo-datos">

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Apellido') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ope_chofer->getApellido())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Nombre') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ope_chofer->getNombre())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ope_chofer->getEmail())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ope_chofer->getTelefono())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Celular') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ope_chofer->getCelular())) ?></div>
	</div>

	<div class="par inline">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ope_chofer->getCodigo())) ?></div>
	</div>

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($ope_chofer->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'OPE_CHOFER_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ope_chofer->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ope_chofer->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'OPE_CHOFER_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($ope_chofer->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($ope_chofer->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('OPE_CHOFER_MASINFO_VTA_HOJA_RUTA')){ ?>
            <li><a href="#tab_vta_hoja_ruta"><?php Lang::_lang('VtaHojaRutas') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('OPE_CHOFER_MASINFO_OPE_CHOFER_US_USUARIO')){ ?>
            <li><a href="#tab_ope_chofer_us_usuario"><?php Lang::_lang('OpeChoferUsUsuarios') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('OPE_CHOFER_MASINFO_VTA_HOJA_RUTA')){ ?>
	<div id="tab_vta_hoja_ruta" class="bloque-relacion vta_hoja_ruta">
		
            <h4><?php Lang::_lang('VtaHojaRuta') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('OpeChofer') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ope_chofer->getVtaHojaRutasParaBloqueMasInfo() as $vta_hoja_ruta){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($vta_hoja_ruta->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($vta_hoja_ruta->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($vta_hoja_ruta->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_hoja_ruta->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($vta_hoja_ruta->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($vta_hoja_ruta->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $vta_hoja_ruta->getId() ?>" archivo="ajax/modulos/vta_hoja_ruta/vta_hoja_ruta_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('VtaHojaRuta') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('VTA_HOJA_RUTA_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaHojaRuta') ?>">
                                <a href="vta_hoja_ruta_alta.php?id=<?php echo $vta_hoja_ruta->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('OPE_CHOFER_MASINFO_VTA_HOJA_RUTA_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($vta_hoja_ruta){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo VtaHojaRuta::getFiltrosArrGral() ?>&arr=<?php echo $vta_hoja_ruta->getFiltrosArrXCampo('OpeChofer', 'ope_chofer_id') ?>" >
                                <?php Lang::_lang('Ver VtaHojaRutas de ') ?> <strong><?php echo($ope_chofer->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="vta_hoja_ruta_alta.php" >
                            <?php Lang::_lang('Agregar VtaHojaRuta') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('OPE_CHOFER_MASINFO_OPE_CHOFER_US_USUARIO')){ ?>
	<div id="tab_ope_chofer_us_usuario" class="bloque-relacion ope_chofer_us_usuario">
		
            <h4><?php Lang::_lang('OpeChoferUsUsuario') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('OpeChofer') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($ope_chofer->getOpeChoferUsUsuariosParaBloqueMasInfo() as $ope_chofer_us_usuario){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($ope_chofer_us_usuario->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($ope_chofer_us_usuario->getDescripcionVinculante('OpeChofer')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($ope_chofer_us_usuario->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ope_chofer_us_usuario->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($ope_chofer_us_usuario->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($ope_chofer_us_usuario->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $ope_chofer_us_usuario->getId() ?>" archivo="ajax/modulos/ope_chofer_us_usuario/ope_chofer_us_usuario_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('OpeChoferUsUsuario') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('OPE_CHOFER_US_USUARIO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('OpeChoferUsUsuario') ?>">
                                <a href="ope_chofer_us_usuario_alta.php?id=<?php echo $ope_chofer_us_usuario->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('OPE_CHOFER_MASINFO_OPE_CHOFER_US_USUARIO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($ope_chofer_us_usuario){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo OpeChoferUsUsuario::getFiltrosArrGral() ?>&arr=<?php echo $ope_chofer_us_usuario->getFiltrosArrXCampo('OpeChofer', 'ope_chofer_id') ?>" >
                                <?php Lang::_lang('Ver OpeChoferUsUsuarios de ') ?> <strong><?php echo($ope_chofer->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="ope_chofer_us_usuario_alta.php" >
                            <?php Lang::_lang('Agregar OpeChoferUsUsuario') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

