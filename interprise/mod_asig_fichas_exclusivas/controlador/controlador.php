 
  <script type="text/javascript">


$(document).ready(function() {

sector = "<?php echo $_GET['sector']; ?>";


$('.opcion1').each(function(index, el) {
var html = $(this).html();
 
if (html == sector) {
 
$('tbody tr').eq(index).attr('class', 'warning');
}

});

$('.opcion2').each(function(index, el) {
var html = $(this).html();
 
if (html == sector) {
 
$('tbody tr').eq(index).attr('class', 'warning');
}

});

$('.opcion3').each(function(index, el) {
var html = $(this).html();
 
if (html == sector) {
 
$('tbody tr').eq(index).attr('class', 'warning');
}

}); 
 
 
try {
  var id_select = <?php echo json_encode($id_asig);?>;
$.each(id_select, function(index, val) {
 $('.imput_checkbox[data-cliente="'+val+'"]').attr('checked','true');
});
}
catch(err) {
    console.log('NO SE ACTIVO EL ARRAY DE LOS SELECIONADOS!')
}



 


function roundToTwo(num) {    
    return +(Math.round(num + "e+2")  + "e-2");
}
  


 
  
});

</script>

 





 