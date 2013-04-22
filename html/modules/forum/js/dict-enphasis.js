window.onload =function(){
	document.body.innerHTML = document.body.innerHTML.split('&lt;dict&gt;').join('<dict>');
	document.body.innerHTML = document.body.innerHTML.split('&lt;/dict&gt;').join('</dict>');
}
