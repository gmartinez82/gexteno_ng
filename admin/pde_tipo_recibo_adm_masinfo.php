<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_tipo_recibo_id = Gral::getVars(2, 'id');
$pde_tipo_recibo = PdeTipoRecibo::getOxId($pde_tipo_recibo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_tipo_recibo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_TIPO_RECIBO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_recibo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_tipo_recibo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_TIPO_RECIBO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_tipo_recibo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_tipo_recibo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_RECIBO_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_RECIBO')){ ?>
            <li><a href="#tab_gral_condicion_iva_pde_tipo_recibo"><?php Lang::_lang('GralCondicionIvaPdeTipoRecibo') ?></a></li>
            <?php } ?>
            
            <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_RECIBO_MASINFO_PDE_RECIBO')){ ?>
            <li><a href="#tab_pde_recibo"><?php Lang::_lang('PdeRecibo') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TIPO_RECIBO_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_RECIBO')){ ?>
	<div id="tab_gral_condicion_iva_pde_tipo_recibo" class="bloque-relacion gral_condicion_iva_pde_tipo_recibo">
		
            <h4><?php Lang::_lang('GralCondicionIvaPdeTipoRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTipoRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tipo_recibo->getGralCondicionIvaPdeTipoRecibosParaBloqueMasInfo() as $gral_condicion_iva_pde_tipo_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($gral_condicion_iva_pde_tipo_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($gral_condicion_iva_pde_tipo_recibo->getDescripcionVinculante('PdeTipoRecibo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($gral_condicion_iva_pde_tipo_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_pde_tipo_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($gral_condicion_iva_pde_tipo_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($gral_condicion_iva_pde_tipo_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $gral_condicion_iva_pde_tipo_recibo->getId() ?>" archivo="ajax/modulos/gral_condicion_iva_pde_tipo_recibo/gral_condicion_iva_pde_tipo_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('GRAL_CONDICION_IVA_PDE_TIPO_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('GralCondicionIvaPdeTipoRecibo') ?>">
                                <a href="gral_condicion_iva_pde_tipo_recibo_alta.php?id=<?php echo $gral_condicion_iva_pde_tipo_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_RECIBO_MASINFO_GRAL_CONDICION_IVA_PDE_TIPO_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($gral_condicion_iva_pde_tipo_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo GralCondicionIvaPdeTipoRecibo::getFiltrosArrGral() ?>&arr=<?php echo $gral_condicion_iva_pde_tipo_recibo->getFiltrosArrXCampo('PdeTipoRecibo', 'pde_tipo_recibo_id') ?>" >
                                <?php Lang::_lang('Ver GralCondicionIvaPdeTipoRecibos de ') ?> <strong><?php echo($pde_tipo_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="gral_condicion_iva_pde_tipo_recibo_alta.php" >
                            <?php Lang::_lang('Agregar GralCondicionIvaPdeTipoRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_TIPO_RECIBO_MASINFO_PDE_RECIBO')){ ?>
	<div id="tab_pde_recibo" class="bloque-relacion pde_recibo">
		
            <h4><?php Lang::_lang('PdeRecibo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeTipoRecibo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_tipo_recibo->getPdeRecibosParaBloqueMasInfo() as $pde_recibo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_recibo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_recibo->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_recibo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_recibo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_recibo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_recibo->getId() ?>" archivo="ajax/modulos/pde_recibo/pde_recibo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeRecibo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_RECIBO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeRecibo') ?>">
                                <a href="pde_recibo_alta.php?id=<?php echo $pde_recibo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_TIPO_RECIBO_MASINFO_PDE_RECIBO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_recibo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeRecibo::getFiltrosArrGral() ?>&arr=<?php echo $pde_recibo->getFiltrosArrXCampo('PdeTipoRecibo', 'pde_tipo_recibo_id') ?>" >
                                <?php Lang::_lang('Ver PdeRecibos de ') ?> <strong><?php echo($pde_tipo_recibo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_recibo_alta.php" >
                            <?php Lang::_lang('Agregar PdeRecibo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

