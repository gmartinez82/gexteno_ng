<style>
    .bloque-cliente-info-sifen{
        border: #cccccc dotted 1px; 
        background-color: #ffffff; 
        color: #cccccc; 
        margin: 5px; 
        padding: 3px; 
        font-size: 12px;
    }
    .bloque-cliente-info-sifen.ACT{ color: green;}
    .bloque-cliente-info-sifen.CAN{ color: orangered;}
    .bloque-cliente-info-sifen.BLQ{ color: red;}
    
    .bloque-cliente-info-sifen-titulo{
        font-size: 9px;
        font-weight: bold;
        color: #999999;
        
        margin-left: 16px;
        text-align: left;
    }
    .bloque-cliente-info-sifen-icon{
        display: inline-block;
        vertical-align: middle;
        height: 12px;
        width: 12px;
        background: #CCC;
          background-color: rgb(204, 204, 204);
        -moz-border-radius: 50px;
        -webkit-border-radius: 50px;
        border-radius: 50px;
        margin-top: -2px;
    }
    .bloque-cliente-info-sifen-icon.ACT{ background: green; }
    .bloque-cliente-info-sifen-icon.CAN{ background: orangered; }
    .bloque-cliente-info-sifen-icon.BLQ{ background: red; }
    
    .bloque-cliente-info-sifen-label{
        display: inline-block;
        vertical-align: middle;
        
        max-width: 93%;
    }
    .bloque-cliente-info-sifen-modificado{
        font-size: 9px;
        color: #666666;
        
        margin-left: 16px;
        text-align: left;
    }
</style>
<?php 
Gral::prr($arr_cliente);
if($arr_cliente){     
    ?>

    
    <div class="bloque-cliente-info-sifen <?php Gral::_echo($arr_cliente->xContRUC->dCodEstCons) ?>" >
        <div class="bloque-cliente-info-sifen-titulo">INFO SIFEN (<?php Gral::_echo($arr_cliente->dMsgRes) ?>)</div>
        
        <?php if($arr_cliente->dCodRes == '0502'){ ?>
        <div class="bloque-cliente-info-sifen-icon <?php Gral::_echo($arr_cliente->xContRUC->dCodEstCons) ?>"></div>
        <div class="bloque-cliente-info-sifen-label">
            <?php Gral::_echo($arr_cliente->xContRUC->dRazCons) ?> - <?php Gral::_echo($arr_cliente->xContRUC->dDesEstCons) ?>
        </div>
        <?php } ?>
        
    </div>
<?php } ?>