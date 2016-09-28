
 

  console.log("it works!");
  //alert("it works!");


prueba_notificacion('Douglas', 'Nieves');
  function prueba_notificacion(titulo, body) {
if (Notification) {
if (Notification.permission !== "granted") {
Notification.requestPermission()
}
var title = titulo
var extra = {
icon: "img/logo-light.png",
body: body,
sound: 'audio/alert.mp3'
}
var noti = new Notification( title, extra)
noti.onclick = function(event) {
  event.preventDefault(); // prevent the browser from focusing the Notification's tab
  window.focus(); 
  lasViTodas();

}
noti.onclose = function(event) {
  event.preventDefault(); // prevent the browser from focusing the Notification's tab
  window.focus(); 
  lasViTodas();

}
setTimeout( function() { noti.close() }, 10000)
}
}
  
  /*=====  End of Notificaciones en chrome  ======*/
  