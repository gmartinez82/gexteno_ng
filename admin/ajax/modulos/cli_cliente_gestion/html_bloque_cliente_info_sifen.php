<style>
    .bloque-cliente-info-sifen{
        border: #cccccc dotted 1px; 
        background-color: #ffffff; 
        color: #cccccc; 
        margin: 5px; 
        padding: 3px; 
        font-size: 12px;
    }
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
<?php if($cli_cliente_info_sifen){ ?>
<div class="bloque-cliente-info-sifen" style="border: <?php Gral::_echo($cli_cliente_info_sifen->getColor()) ?> dotted 1px; color: <?php Gral::_echo($cli_cliente_info_sifen->getColor()) ?>;">
    
    <div class="bloque-cliente-info-sifen-titulo">INFO DE SIFEN</div>
    
    <div class="bloque-cliente-info-sifen-icon" style="background-color: <?php Gral::_echo($cli_cliente_info_sifen->getColor()) ?>;"></div>
    <div class="bloque-cliente-info-sifen-label">
        <?php Gral::_echo($cli_cliente_info_sifen->getDescripcion()) ?>
    </div>
    <div class="bloque-cliente-info-sifen-modificado">
        Actualizado el <?php Gral::_echo(Gral::getFechaHoraToWEB($cli_cliente_info_sifen->getModificado())) ?>
    </div>
    
</div>
<?php } ?>