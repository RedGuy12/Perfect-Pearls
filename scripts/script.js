setInterval(() => {
	if (!document.hasFocus()) {
		window.location.href = `https://redguy12.github.io/perfect-pearls/sleeping?url=${encodeURIComponent(window.location.pathname+window.location.search)}&y=${document.documentElement.scrollTop || document.body.scrollTop}&x=${document.documentElement.scrollLeft || document.body.scrollLeft}`;
	}
}, 100);
document.documentElement.scrollTop = document.body.scrollTop = parseFloat(new URLSearchParams(window.location.search).get('y'));
document.documentElement.scrollLeft = document.body.scrollLeft = parseFloat(new URLSearchParams(window.location.search).get('x'));
