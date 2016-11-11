function addAlumno(xcod,xnom1, xnom2, xape1, xape2, xfol, xlib, xact, xdir, xsex, xest, xfec, xenc, xdpi, xdep, xgra, xprof){
	var variables = {cod: xcod, nom: xape1+' '+xape2+' '+xnom1+' '+xnom2, fol: xfol, lib: xlib, act: xact, dir: xdir, sex: xsex, est: xest, fec: xfec, enc: xenc, dpi: xdpi, dep: xdep, gra: xgra, prof: xprof};
	var resultado = 0;

	$.ajax({
		type: 'POST',
		url: 'addAlumno.php',
		async: false,
		data: variables,
		success: function(xResultado){
			if (xResultado=="<br />
<font size='1'><table class='xdebug-error xe-notice xe-scream' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> SCREAM: Error suppression ignored for</th></tr>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom1 in C:\wamp\www\PaginaWeb\addAlumno.php on line <i>4</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0005</td><td bgcolor='#eeeeec' align='right'>266792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\PaginaWeb\addAlumno.php' bgcolor='#eeeeec'>..\addAlumno.php<b>:</b>0</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice xe-scream' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> SCREAM: Error suppression ignored for</th></tr>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: nom2 in C:\wamp\www\PaginaWeb\addAlumno.php on line <i>5</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0005</td><td bgcolor='#eeeeec' align='right'>266792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\PaginaWeb\addAlumno.php' bgcolor='#eeeeec'>..\addAlumno.php<b>:</b>0</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice xe-scream' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> SCREAM: Error suppression ignored for</th></tr>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: ape1 in C:\wamp\www\PaginaWeb\addAlumno.php on line <i>6</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0005</td><td bgcolor='#eeeeec' align='right'>266792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\PaginaWeb\addAlumno.php' bgcolor='#eeeeec'>..\addAlumno.php<b>:</b>0</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice xe-scream' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> SCREAM: Error suppression ignored for</th></tr>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: ape2 in C:\wamp\www\PaginaWeb\addAlumno.php on line <i>7</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0005</td><td bgcolor='#eeeeec' align='right'>266792</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\PaginaWeb\addAlumno.php' bgcolor='#eeeeec'>..\addAlumno.php<b>:</b>0</td></tr>
</table></font>
{"Registrado":1}"){
				alert('Datos guardados');
			}else{

				alert('Datos no guardados');
			}
		}
	});


}

function upAlumno(xid, xcod,xnom1,xfol, xlib, xact, xdir, xsex, xest, xfec, xenc, xdpi, xdep, xgra, xprof){
	var variables = {id:xid, cod: xcod, nom: xnom1, fol: xfol, lib: xlib, act: xact, dir: xdir, sex: xsex, est: xest, fec: xfec, enc: xenc, dpi: xdpi, dep: xdep, gra: xgra, prof: xprof};
	var resultado = 0;

	$.ajax({
		type: 'POST',
		url: 'upAlumno2.php',
		async: false,
		data: variables,
		success: function(xResultado){
			console.log(xResultado);
		}
	})
}