<?php
include_once "_autoload.php";
$user = UsUsuario::autenticado();

$pde_factura_pde_tributo_id = Gral::getVars(2, 'id');
$pde_factura_pde_tributo = PdeFacturaPdeTributo::getOxId($pde_factura_pde_tributo_id);
?>
<div class="masinfo-datos">

	<div class="par ">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato"><?php Gral::_echo(nl2br($pde_factura_pde_tributo->getObservacion())) ?></div>
	</div>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_FACTURA_PDE_TRIBUTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Creado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_tributo->getCreado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_factura_pde_tributo->getCreadoPorDescripcion()) ?></strong></i></div>
    </div>
<?php } ?>

<?php if(Login::esAutorizado($user, 'GRAL_ADMIN_AUDITOR') || Login::esAutorizado($user, 'PDE_FACTURA_PDE_TRIBUTO_AUDITOR')){ ?>
    <div class="par inline">
        <div class="label"><?php Lang::_lang('Modificado') ?></div>
        <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_factura_pde_tributo->getModificado())) ?> hs<br /> <i>Por: <strong><?php Gral::_echo($pde_factura_pde_tributo->getModificadoPorDescripcion()) ?></strong></i></div>
    </div>		
<?php } ?>

</div>
	
<div class="tabs">
	<ul>
            <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_PDE_TRIBUTO_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_TRIBUTO')){ ?>
            <li><a href="#tab_pde_nota_credito_pde_factura_pde_tributo"><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeTributo') ?></a></li>
            <?php } ?>
            
	</ul>
	
	<?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_PDE_TRIBUTO_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_TRIBUTO')){ ?>
	<div id="tab_pde_nota_credito_pde_factura_pde_tributo" class="bloque-relacion pde_nota_credito_pde_factura_pde_tributo">
		
            <h4><?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeTributo') ?> <?php Lang::_lang('vinculados al') ?> <?php Lang::_lang('PdeFacturaPdeTributo') ?></h4>
            <div class="bloque-relacion-datos">

                    <div class="uno encabezado">
                        <div class="id"><?php Lang::_lang('ID') ?></div>
                        <div class="descripcion"><?php Lang::_lang('DESCRIPCION') ?></div>
                        <div class="creado"><?php Lang::_lang('CREADO') ?></div>
                        <div class="acciones">&nbsp;</div>
                    </div>

                    <?php foreach($pde_factura_pde_tributo->getPdeNotaCreditoPdeFacturaPdeTributosParaBloqueMasInfo() as $pde_nota_credito_pde_factura_pde_tributo){ ?>
                    <div class="uno">
                        <div class="id"><?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getId()) ?></div>
                        <div class="descripcion">
                        					
                        <?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getDescripcionVinculante('PdeFacturaPdeTributo')) ?>					
                        </div>

                        <div class="creado">
                            <label class="fecha-creado" title="<?php Lang::_lang('Creado Por') ?>: <?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getCreadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_factura_pde_tributo->getCreado())) ?> h</label><br/>
					
                            <label class="fecha-modificado" title="<?php Lang::_lang('Modificado Por') ?>: <?php Gral::_echo($pde_nota_credito_pde_factura_pde_tributo->getModificadoPorDescripcion()) ?>"><?php Gral::_echo(Gral::getFechaHoraToWeb($pde_nota_credito_pde_factura_pde_tributo->getModificado())) ?> h</label>					

                        </div>

                        <div class="acciones">

                            <div class="accion trigger wopenModal" contenedor="div_modal" elemento_id="<?php echo $pde_nota_credito_pde_factura_pde_tributo->getId() ?>" archivo="ajax/modulos/pde_nota_credito_pde_factura_pde_tributo/pde_nota_credito_pde_factura_pde_tributo_ficha.php" ancho="600" alto="500" title="<?php Lang::_lang('Ficha de') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeTributo') ?>"  post="">
                                    <img src="imgs/icn_ver_mas.png" width="20">
                            </div>

                            <?php if(UsCredencial::getEsAcreditado('PDE_NOTA_CREDITO_PDE_FACTURA_PDE_TRIBUTO_ALTA')){ ?>
                            <div class="accion" title="<?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeNotaCreditoPdeFacturaPdeTributo') ?>">
                                <a href="pde_nota_credito_pde_factura_pde_tributo_alta.php?id=<?php echo $pde_nota_credito_pde_factura_pde_tributo->getId() ?>"><img src="imgs/btn_modi.gif" width="20"></a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <?php } ?>


                    <?php if(UsCredencial::getEsAcreditado('PDE_FACTURA_PDE_TRIBUTO_MASINFO_PDE_NOTA_CREDITO_PDE_FACTURA_PDE_TRIBUTO_BOTONERA')){ ?>
                    <div class="botonera">
                            
                        <?php if($pde_nota_credito_pde_factura_pde_tributo){ ?>
                            <div class="boton">
                                <a href="_init.php?arr_gral=<?php echo PdeNotaCreditoPdeFacturaPdeTributo::getFiltrosArrGral() ?>&arr=<?php echo $pde_nota_credito_pde_factura_pde_tributo->getFiltrosArrXCampo('PdeFacturaPdeTributo', 'pde_factura_pde_tributo_id') ?>" >
                                <?php Lang::_lang('Ver PdeNotaCreditoPdeFacturaPdeTributos de ') ?> <strong><?php echo($pde_factura_pde_tributo->getDescripcion()) ?></strong>
                                </a>				
                            </div>
                        <?php } ?>
                        <div class="boton">
                            <a href="pde_nota_credito_pde_factura_pde_tributo_alta.php" >
                            <?php Lang::_lang('Agregar PdeNotaCreditoPdeFacturaPdeTributo') ?>
                            </a>				
                        </div>
                        
                    </div>
                    <?php } ?>

            </div>
	
	</div>
	<?php } ?>
	
</div>

