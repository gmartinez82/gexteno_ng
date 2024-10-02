<link rel="stylesheet" type="text/css" href="../comps/menu/superfish/css/superfish.css" media="screen">
<script type="text/javascript" src="../comps/menu/superfish/js/hoverIntent.js"></script>
<script type="text/javascript" src="../comps/menu/superfish/js/superfish.js"></script>
<script type="text/javascript">
// initialise plugins
$(function(){
    $('ul.sf-menu').superfish();
});
</script>

<ul class="sf-menu">
<?php 
GenMenuItem::listarArbol('MENU_BACKEND', 'MENU');
?>
</ul>