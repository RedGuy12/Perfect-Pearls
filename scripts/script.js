setInterval(() => { 
	if(!document.hasFocus()) {
		window.location.href = `https://redguy12.github.io/perfect-pearls/sleeping?url=$(window.location.pathname)&y=$(document.documentElement.scrollTop)&x=$(document.documentElement.scrollLeft)`;
	}
}, 100);
