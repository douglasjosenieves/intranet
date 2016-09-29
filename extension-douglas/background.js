
 

  console.log("it works!");
  //alert("it works!");


// VarWithGlobe.js

if (jQuery) {  
    // jQuery loaded
     console.log("jquery it works!");
} else {
    // jQuery not loaded
     console.log("jquery not it works!");
}
  /*=====  End of Notificaciones en chrome  ======*/
  //verificaChatTexArea() ;
function verificaChatTexArea() {

	$.ajax({
		url: 'http://cohenyaguirre.tk/interprise/async/chatNotification.php',
		type: 'POST',
	  dataType: 'json',
		data: {usuario: localStorage.id},
	})
	.done(function(data) {
		console.log("success chatTexArea comprobado");
		console.log(data);


 
  if (data!='') {
$.each(data['mensaje'], function(i, item) {
    //console.log(data['persona'][i]);
    //console.log(data['mensaje'][i]);

showMensaje(data['persona'][i], data['mensaje'][i])

});

 }




	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
	//	console.log("complete");
	});
	
	// body...
}

function showMensaje(titulo, mensaje) {
 
  new Notification(titulo, {
    icon: 'icon.png',
    body: mensaje
  });
}

function show() {
  var time = /(..)(:..)/.exec(new Date());     // The prettyprinted time.
  var hour = time[1] % 12 || 12;               // The prettyprinted hour.
  var period = time[1] < 12 ? 'a.m.' : 'p.m.'; // The period of the day.
  new Notification(hour + time[2] + ' ' + period, {
    icon: 'icon.png',
    body: 'Time to make the toast.'
  });
}


// Conditionally initialize the options.
if (!localStorage.isInitialized) {
  localStorage.isActivated = true;   // The display activation.
  localStorage.frequency = 1;        // The display frequency, in minutes.
  localStorage.isInitialized = true; // The option initialization.
}

// Test for notification support.
if (window.Notification) {
  // While activated, show notifications at the display frequency.
  if (JSON.parse(localStorage.isActivated)) { verificaChatTexArea();/* show();*/ }

  var interval = 0; // The display interval, in minutes.

  setInterval(function() {
    interval++;

    if (
      JSON.parse(localStorage.isActivated) &&
        localStorage.frequency <= interval
    ) {
     verificaChatTexArea(); /*show();*/
      interval = 0;
    }
  }, 60000);
}
