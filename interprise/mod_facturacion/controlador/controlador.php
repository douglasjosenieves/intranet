 
  <script type="text/javascript">


$(document).ready(function() {



/*====================================
=            Borrar items            =
====================================*/

$("body").on("click",".borrar-row",function(event){
  event.preventDefault();
  var index = $( ".borrar-row" ).index( this );
 
var Self = $(this);
$('.itemsrow:eq( '+index +' )').fadeOut("slow").remove();
//Self.eq(index).remove();




  /* Act on the event */
});

/*=====  End of Borrar items  ======*/

/*=====================================
=            Agregar Items            =
=====================================*/

 $('#agregar-row').on('click',  function(event) {
   event.preventDefault();
   /* Act on the event */


agregarItems(); 


 });


function agregarItems(argument) {

var numero = $('.itemsrow').size();

if (numero ==10) { alert('Numero máximo de Items por documento!.')} else {


$.get("items.php", function(data) {
    $(data).appendTo("#container-items").fadeIn("slow");
    $('.itemsrow:last() input[name="reg_nombre[]"]').focus();
});

}


  // body...
}
/*=====  End of Agregar Items  ======*/




$("body").on("click",".arti",function(event){
  event.preventDefault();

 
var Self = $(this);
var id = Self.data('id');
var nombre = Self.data('nombre'); 
var precio = Self.data('precio');
var descripcion = Self.data('descripcion');
var index = Self.data('index');
//alert(index);


$('.itemsrow:eq( '+index +' ) input[name="reg_nombre[]"]').val(nombre);
$('.itemsrow:eq( '+index +' ) input[name="reg_id[]"]').val(id);
$('.itemsrow:eq( '+index +' ) input[name="reg_descripcion[]"]').val(descripcion);

$('.itemsrow:eq( '+index +' ) input[name="reg_cantidad[]"]').focus();
$('.itemsrow:eq( '+index +' ) input[name="reg_precio[]"]').val(precio);


var Self = $('.itemsrow ul').hide();
  /* Act on the event */
});
  

$('.cargando').hide();
$('#id_cat').val('<?php echo $data['data'][0]['id_cat'] ?>').change();
$('#estado').val('<?php echo $data['data'][0]['estado'] ?>').change();
$('#stock').val('<?php echo $data['data'][0]['stock'] ?>').change();

    
   var imgr = $('#imgRemover').val();

   if (imgr=='') {
 $('#imgRemover').remove();
   }
  
$('#borrar-img').on('click',  function(event) {
  event.preventDefault();
  $.ajax({
url: "imagen_borrar.php",
type: "POST",
data: { "name" : '<?php echo $img[0] ?>' }
});
$('#img_muestra').hide();
 $('#imgRemover').remove();
alert('Borrado');
  /* Act on the event */
});
   



   
  });

/*========================================
=            Buscar clientes            =
========================================*/


$(document).ready(function() {
  

$('#buscar').on('keyup',  function(event) {
  event.preventDefault();
  buscarArticulos($(this).val());
  /* Act on the event */
});


function buscarArticulos(texto) {


$.ajax({
  url: '../mod_clientes/async/buscar.php',
  type: 'POST',
 
  data: {parametro: texto},
})
.done(function(data) {
  console.log("success");
  $('#resultado_busqueda').html(data);
//alert(data);

})
.fail(function() {
  console.log("error");
})
.always(function() {
  console.log("complete");
});

  
}

});
/*=====  End of Buscar clientes  ======*/



 



/*========================================
=            Buscar items            =
========================================*/


$(document).ready(function() {

 $("body").on("keyup",".buscaritems",function(event){


 
  event.preventDefault();
  var index = $( ".buscaritems" ).index( this );
  buscarArticulos($(this).val(), index );
  

  /* Act on the event */
});


function buscarArticulos(texto, index) {


$.ajax({
  url: '../mod_servicios/async/buscar_detalle.php',
  type: 'POST',
 
  data: {parametro: texto, index: index},
})
.done(function(data) {
  console.log("success");

 
  $('.respuestaItems:eq('+index+')').html(data);
//alert(data);

})
.fail(function() {
  console.log("error");
})
.always(function() {
  console.log("complete");
});

  
}

});
/*=====  End of Buscar items  ======*/


 
 

/*========================================================
=            sumar sub totales            =
========================================================*/

$('#subtotal-sum').on('click', function(event) {
  event.preventDefault();
  sumarSubTotales();
  /* Act on the event */
});


function sumarSubTotales(argument) {


 



$('.subtotal').each(function () {

var index = $( ".subtotal" ).index( this );
// getting options from html 
var Self = $(this);
var cantidad = $( ".cantidad:eq( "+index +" )" ).val();
var precio = $( ".precio:eq( "+index +" )" ).val();
var subtotal = cantidad * precio;
$( ".subtotal:eq( "+index +" )" ).val(roundToTwo(subtotal));

 

console.log(index, cantidad );




});
 
var total_parcial = 0;
$('.subtotal').each(function(){
    total_parcial += parseFloat(this.value);
});

$('#total_parcial').val(roundToTwo(total_parcial));
$('#e_total_parcial').text(roundToTwo(total_parcial));
  
var iva = total_parcial*12/100
$('#total_tax').val(roundToTwo(iva));
$('#e_total_tax').text(roundToTwo(iva));


var total_total = total_parcial + iva;

$('#total_total').val(roundToTwo(total_total));
$('#e_total_total').text(roundToTwo(total_total));
}


 $("body").on("change",".cantidad,.precio",function(event){
event.preventDefault();
sumarSubTotales();
  

  /* Act on the event */
});


/*=====  End of sumar sub totales  ======*/


function roundToTwo(num) {    
    return +(Math.round(num + "e+2")  + "e-2");
}
  



</script>

 





 