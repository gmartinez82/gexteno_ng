// JavaScript Document

$(function ($) {
    setXmlTraduccionKeyPress();
});

function setXmlTraduccionKeyPress() {
    $("#table_xml_traduccion textarea").unbind();
    $("#table_xml_traduccion textarea").keyup(function () {
        var id = $(this).attr('id');

        if ($("#hdn_" + id).val() == 0) {
            $(this).addClass('textarea-modificado');
        }

        $("#hdn_" + id).val(1);
    });
}