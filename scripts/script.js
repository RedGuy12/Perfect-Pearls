setInterval(() => { 
	if(!document.hasFocus()) {
		window.location.href = `https://redguy12.github.io/perfect-pearls/sleeping?url=${window.location.pathname}&y=${document.documentElement.scrollTop || document.body.scrollTop}&x=${document.documentElement.scrollLeft || document.body.scrollLeft}`;
	}
}, 100);
document.documentElement.scrollLeft = document.body.scrollLeft = new URLSearchParams(window.location.search).get('x');
document.documentElement.scrollTop = document.body.scrollTop = new URLSearchParams(window.location.search).get('y');