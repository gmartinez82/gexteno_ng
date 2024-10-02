<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_nota_debito_imagen = PdeNotaDebitoImagen::getOxId($id);
//Gral::prr($pde_nota_debito_imagen);
?>

<div class="tabs ficha-pde_nota_debito_imagen" identificador="<?php echo $pde_nota_debito_imagen->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_nota_debito_imagen id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_imagen->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_nota_debito_imagen pde_nota_debito_id">
            <div class="label"><?php Lang::_lang('PdeNotaDebito') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_imagen->getPdeNotaDebito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_imagen descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_imagen->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_imagen codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_imagen->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_imagen observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_imagen->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_imagen archivo">
            <div class="label"><?php Lang::_lang('Archivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_imagen->getArchivo()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_imagen peso">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_imagen->getPeso()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_imagen tipo">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_imagen->getTipo()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_imagen alto">
            <div class="label"><?php Lang::_lang('Alto') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_imagen->getAlto()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_imagen ancho">
            <div class="label"><?php Lang::_lang('Ancho') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_imagen->getAncho()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_imagen orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_imagen->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_imagen estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_imagen->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

