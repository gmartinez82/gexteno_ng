<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_factura_tipo_concepto_id = Gral::getVars(2, 'id');
$pde_factura_tipo_concepto = PdeFacturaTipoConcepto::getOxId($pde_factura_tipo_concepto_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_factura_tipo_concepto->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_FACTURA_TIPO_CONCEPTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_tipo_concepto->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_factura_tipo_concepto->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_FACTURA_TIPO_CONCEPTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_tipo_concepto->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_factura_tipo_concepto->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_TIPO_CONCEPTO_MASINFO_PDE_FACTURA_CONCEPTO')){ ?>
            <li><a href="#tab_pde_factura_concepto"><?php Lang::_lang('PdeFacturaConceptos') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_TIPO_CONCEPTO_MASINFO_PDE_FACTURA_CONCEPTO')){ ?>
	<div id="tab_pde_factura_concepto" class="bloque-relacion pde_factura_concepto">
		
            <h4><?php Lang::_lang('PdeFacturaConcepto') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeFacturaTipoConcepto') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_factura_tipo_concepto->getPdeFacturaConceptosParaBloqueMasInfo() as $pde_factura_concepto){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_factura_concepto->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_factura_concepto->getDescripcionBloqueMasInfo()) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_factura_concepto->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_concepto->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_factura_concepto->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_concepto->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_factura_concepto->getId() ?>" archivo="ajax/modulos/pde_factura_concepto/pde_factura_concepto_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeFacturaConcepto') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_CONCEPTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeFacturaConcepto') ?>">
                                <a href="pde_factura_concepto_alta.php?id=<?php echo $pde_factura_concepto->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_TIPO_CONCEPTO_MASINFO_PDE_FACTURA_CONCEPTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_factura_concepto){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeFacturaConcepto::getFiltrosArrGral() ?>&arr=<?php echo $pde_factura_concepto->getFiltrosArrXCampo('PdeFacturaTipoConcepto', 'pde_factura_tipo_concepto_id') ?>" >
                                <?php Lang::_lang('Ver PdeFacturaConceptos de ') ?> <strong><?php echo($pde_factura_tipo_concepto->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_factura_concepto_alta.php" >
                            <?php Lang::_lang('Agregar PdeFacturaConcepto') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

