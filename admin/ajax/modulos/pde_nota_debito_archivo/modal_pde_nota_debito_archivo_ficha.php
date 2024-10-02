<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_nota_debito_archivo = PdeNotaDebitoArchivo::getOxId($id);
//Gral::prr($pde_nota_debito_archivo);
?>

<div class="tabs ficha-pde_nota_debito_archivo" identificador="<?php echo $pde_nota_debito_archivo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_nota_debito_archivo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_archivo->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_nota_debito_archivo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_archivo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_archivo pde_nota_debito_id">
            <div class="label"><?php Lang::_lang('PdeNotaDebito') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_archivo->getPdeNotaDebito()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_archivo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_archivo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_archivo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_archivo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_archivo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_archivo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_archivo archivo">
            <div class="label"><?php Lang::_lang('Archivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_archivo peso">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_archivo->getPeso()) ?>
            </div>
        </div>
		
        <div class="par pde_nota_debito_archivo tipo">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_nota_debito_archivo->getTipo()) ?>
            </div>
        </div>
	
    </div>    

</div>

