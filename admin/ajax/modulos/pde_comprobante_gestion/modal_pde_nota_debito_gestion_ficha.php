<?php
include "_autoload.php";

$pde_nota_debito_id = Gral::getVars(Gral::VARS_GET, 'pde_nota_debito_id', 0);
$pde_nota_debito = PdeNotaDebito::getOxId($pde_nota_debito_id);

$pde_nota_debito_pde_nota_creditos = $pde_nota_debito->getPdeNotaDebitoPdeNotaCreditos(null, null, true);
$pde_nota_debito_pde_recibos = $pde_nota_debito->getPdeNotaDebitoPdeRecibos(null, null, true);

$pde_nota_debito_items = $pde_nota_debito->getPdeNotaDebitoItems();

?>


<div class="tabs ficha-nota_debito" pde_nota_debito_id="<?php echo $pde_nota_debito->getId(); ?>">
    <?php
    if ((int) $pde_nota_debito->getId() != 0):
        include "modal_pde_nota_debito_gestion_ficha_top.php";
    endif;
    ?>

    <ul>
        <li>
            <a href="#tab_general">
                <?php Lang::_lang('General') ?>
            </a>
        </li>

        <li>
            <a href="#tab_items">
                <?php Lang::_lang('Items del Comprobante') ?>
            </a>
        </li>

        
        <?php if ((int) $pde_nota_debito->getId() != 0){ ?>
            <li>
                <a href="#tab_comprobantes_vinculado">
                    <?php Lang::_lang('Comprobantes Vinculados') ?>
                </a>
            </li>
        <?php } ?>
            
    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">
        <?php include "modal_pde_nota_debito_gestion_ficha_tab_general.php"; ?>  
    </div>

    <!-- Tab Items de la Nota de Debito -->
    <?php if ((int) $pde_nota_debito->getId() != 0): ?>
        <div id="tab_items" class="datos">
            <?php include "modal_pde_nota_debito_gestion_ficha_tab_items.php"; ?>  
        </div>
    <?php endif; ?>
    
    <!-- Tab Comprobantes Vinculado -->
    <?php if ((int) $pde_nota_debito->getId() != 0){ ?>
        <div id="tab_comprobantes_vinculado" class="datos">
            <?php include "modal_pde_nota_debito_gestion_ficha_tab_comprobantes_vinculado.php"; ?>  
        </div>
    <?php } ?>

</div>