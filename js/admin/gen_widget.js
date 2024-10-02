// JavaScript Document
$(function ($) {
    setInitGenWidget();
});

function setInitGenWidget() {
    // general
    setGenWidgetTabs();

    // buscador
    setGenWidgetBuscadorModulo();
}

function setGenWidgetTabs() {
    try {
        $(".gen_widgets .gen_widgets_tabs").tabs({
            beforeLoad: function (event, ui) {
                ui.panel.siblings('.ui-tabs-panel').empty();
                ui.panel.html(html_loading_img_widget_tab);
            },
            load: function (event, ui) {
                setInitGenWidget();
                setInit();
            }
        });
    } catch (e) {
    }
}

function setGenWidgetBuscadorModulo() {
    var filtro;
    var value;
    var boton;

    try {
        $(".gen-widget-modulo-buscador .boton-buscar").unbind();
        $(".gen-widget-modulo-buscador .boton-buscar").click(function (e) {

            $('.gen-widget-modulo-buscador input[type=text], .gen-widget-modulo-buscador select').each(function () {
                filtro = $(this).attr('filtro');
                value = $(this).val();

                $('.' + filtro).val(value);
            });

            setTimeout(function () {
                $('.buscador .botonera .boton').trigger('click');
            }, 200);

            setTimeout(function () {
                //$('.buscador').hide();
            }, 2000);
        });

    } catch (e) {
    }
}

function formatNumber(value) {

}

function formatMoney(number, decPlaces, decSep, thouSep) {
    decPlaces = isNaN(decPlaces = Math.abs(decPlaces)) ? 2 : decPlaces,
            decSep = typeof decSep === "undefined" ? "." : decSep;
    thouSep = typeof thouSep === "undefined" ? "," : thouSep;
    var sign = number < 0 ? "-" : "";
    var i = String(parseInt(number = Math.abs(Number(number) || 0).toFixed(decPlaces)));
    var j = (j = i.length) > 3 ? j % 3 : 0;

    return sign +
            (j ? i.substr(0, j) + thouSep : "") +
            i.substr(j).replace(/(\decSep{3})(?=\decSep)/g, "$1" + thouSep) +
            (decPlaces ? decSep + Math.abs(number - i).toFixed(decPlaces).slice(2) : "");
}

// -----------------------------------------------------------------------------
// Se crea un number format para los widgets
// -----------------------------------------------------------------------------
var gen_widget_formatter = new Intl.NumberFormat('en-AR', {
  style: 'currency',
  currency: 'ARS',
  // These options are needed to round to whole numbers if that's what you want.
  //minimumFractionDigits: 0, // (this suffices for whole numbers, but will print 2500.10 as $2,500.1)
  //maximumFractionDigits: 0, // (causes 2500.99 to be printed as $2,501)
});
