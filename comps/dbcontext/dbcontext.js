// JavaScript Document
$(function ($) {
    setInitDbContext();
});

function setInitDbContext() {
    setDbContextAddContent();
    setDbContextMouseEvents();
    setClickDbContextContentElement();
}
function setDbContextAddContent() {
    $('.db_context .db_context_content').unbind();
    //$('.db_context').append('<div class="db_context_content"></div>');
}
function setDbContextMouseEvents() {
    $('.db_context').unbind();
    $('.db_context').click(function (e) {
        dbContextHideContent();
        dbContextViewContent($(this));
    });
    $('body').click(function (e) {
        if (!$(e.target).is('.db_context')) {
            dbContextHideContent();
            e.stopPropagation();
        }
    });

}
function dbContextViewContent(element) {
    var archivo = element.attr('archivo');
    var modulo_metodo_init = element.attr('modulo_metodo_init');
    
    $.ajax({
        type: 'POST',
        url: archivo,
        dataType: "html",
        beforeSend: function (objeto) {
            element.find('.db_context_content').remove();
            element.append('<div class="db_context_content">'+img_loading+'</div>');
            
            var ventana_ancho = $(window).width();
            var ventana_alto = $(window).height();
       
            var posicion = element.position();

            var elemento_ancho = element.find('.db_context_content').width();
            var elemento_alto = element.find('.db_context_content').height();
                        
            if((ventana_ancho - posicion.left) < elemento_ancho){
                // se corrige visualizacion si el elemento sale de la pantalla a la derecha
                element.find('.db_context_content').css('margin-left', '-'+(elemento_ancho - 50)+'px');
            }

            if(posicion.left < elemento_ancho){
                // se corrige visualizacion si el elemento sale de la pantalla a la izquierda
                element.find('.db_context_content').css('margin-left', '0px');
            }

            element.children('.db_context_content').show();            
        },
        success: function (data) {
            element.children('.db_context_content').show();
            element.children('.db_context_content').html(data);

            setInitDbContext();
            setTimeout(modulo_metodo_init, 1);
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("errorx "+ objeto.status);
        }
    });
}
function dbContextHideContent() {
    $('.db_context .db_context_content').hide();
}

function setClickDbContextContentElement() {
    $('.db_context .db_context_content').unbind();
    $('.db_context .db_context_content').click(function (e) {
        e.stopPropagation();
    });
}
