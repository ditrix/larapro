window.addEventListener('load',function(){

var arrSpoilers = document.querySelectorAll('section aside');
var el, a;

for(var i= 0; i < arrSpoilers.lenght; i++){
	el = arrSpoilers[i];
	console.log(el);
	a = el.querySelector('a');
	a.addEventListener('click',spoilerHeaderClick);
	a = el.querySelector('div');
	el.fullHeight = a.clientHeight;
	a.style.height = "0px";
	el.className = "condensed";
}


function spoilerHeaderClick(evt){
	var el = evt.target.parentElement;
	var oSB = el.querySelector('div');
	if(el.className == 'condensed'){
		el.className = '';
		oSB.style.height = el.	fullHeight + "px";
	} else  {
		el.className = 'condensed';
		oSB.style.height = "0px";
	}
}

})
