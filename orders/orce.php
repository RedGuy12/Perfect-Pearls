<!--BBCode Parser -  line 1: call parser file. line 2: choose bbcode to convert-->
<script async="false" src="https://cdn.jsdelivr.net/gh/wGEric/phpBB-BBCode-Javascript-Parser/bbcodeParser.min.js"></script>
<script async="false">
	bbcodeParser.addBBCode("[b]{TEXT}[/b]", "<b>{TEXT}</b>"), bbcodeParser.addBBCode("[big]{TEXT}[/big]", '<p class="big">{TEXT}</p>'), bbcodeParser.addBBCode("[color={COLOR}]{TEXT}[/color]", '<span style="color:{COLOR}">{TEXT}</span>'), bbcodeParser.addBBCode("[small]{TEXT}[/small]", "<small>{TEXT}</small>"), bbcodeParser.addBBCode("[wiki]{SIMPLETEXT}[/wiki]", '<a href="https://en.scratch-wiki.info/wiki/Special:Search?search={SIMPLETEXT}">{SIMPLETEXT}</a>'), bbcodeParser.addBBCode("[wiki={SIMPLETEXT}]{TEXT}[/wiki]", '<a href="https://en.scratch-wiki.info/wiki/Special:Search?search={SIMPLETEXT}">{TEXT}</a>'), bbcodeParser.addBBCode("[wp={SIMPLETEXT}]{TEXT}[/wp]", '<a href="https://en.wikipedia.org/wiki/Special:Search?search={SIMPLETEXT}">{TEXT}</a>'), bbcodeParser.addBBCode("[wp]{SIMPLETEXT}[/wp]", '<a href="https://en.wikipedia.org/wiki/Special:Search?search={SIMPLETEXT}">{SIMPLETEXT}</a>'), bbcodeParser.addBBCode("[google]{SIMPLETEXT}[/google]", '<a href="http://www.google.com/search?hl=en&amp;q={SIMPLETEXT}&amp;btnG=Google+Search">{SIMPLETEXT}</a>'), bbcodeParser.addBBCode("[google={SIMPLETEXT}]{TEXT}[/google]", '<a href="http://www.google.com/search?hl=en&amp;q={SIMPLETEXT}&amp;btnG=Google+Search">{TEXT}</a>'), bbcodeParser.addBBCode("[dict={SIMPLETEXT}]{TEXT}[/dict]", '<a href="http://dictionary.reference.com/browse/{SIMPLETEXT}">{TEXT}</a>'), bbcodeParser.addBBCode("[dictionary]{SIMPLETEXT}[/dictionary]", '<a href="http://dictionary.reference.com/browse/{SIMPLETEXT}">{SIMPLETEXT}</a>'), bbcodeParser.addBBCode("[dictionary={SIMPLETEXT}]{TEXT}[/dictionary]", '<a href="http://dictionary.reference.com/browse/{SIMPLETEXT}">{TEXT}</a>'), bbcodeParser.addBBCode("[dict]{SIMPLETEXT}[/dict]", '<a href="http://dictionary.reference.com/browse/{SIMPLETEXT}">{SIMPLETEXT}</a>'), bbcodeParser.addBBCode("[img]{URL}[/img]", '<img src="{URL}">'), bbcodeParser.addBBCode("[img={URL}]", '<img src="{URL}">'), bbcodeParser.addBBCode("[url={URL}]{TEXT}[/url]", '<a href="{URL}">{TEXT}</a>'), bbcodeParser.addBBCode("[url]{URL}[/url]", '<a href="{URL}">{URL}</a>'), bbcodeParser.addBBCode("[i]{TEXT}[/i]", "<i>{TEXT}</i>"), bbcodeParser.addBBCode("[u]{TEXT}[/u]", "<u>{TEXT}</u>"), bbcodeParser.addBBCode("[s]{TEXT}[/s]", "<s>{TEXT}</s>"), bbcodeParser.addBBCode("[list]{TEXT}[/list]", "<ul><li>{TEXT}</li></ul>"), bbcodeParser.addBBCode("[*]{TEXT}", "</li><li>{TEXT}"), bbcodeParser.addBBCode("[quote]{TEXT}[/quote]", "<blockquote>{TEXT}</blockquote>"), bbcodeParser.addBBCode("[quote={TEXT1}]{TEXT}[/quote]", "<blockquote><cite>{TEXT1} wrote:</cite>{TEXT}</blockquote>"), bbcodeParser.addBBCode("[scratchblocks]{TEXT}[/scratchblocks]", '<pre class="blocks"><code class="plaintext">{TEXT}</code></pre>'), bbcodeParser.addBBCode("[code={IDENTIFIER}]{TEXT}[/code]", '<pre><code class="lang-{IDENTIFIER}">{TEXT}</code></pre>'), bbcodeParser.addBBCode("[code]{TEXT}[/code]", '<pre><code class="plaintext">{TEXT}</code></pre>'), bbcodeParser.addBBCode("[center]{TEXT}[/center]", '<div style="text-align:center">{TEXT}</div>');
</script>

<!--Get contents of OrCe from forum-->
<script async="false">
	fetch("https://scratch.mit.edu/discuss/post/4594238/source/").then(response => response.text()).then(OrCe => { //get the post content
		let OrCeDiv = document.createElement("div");
		OrCeDiv.innerHTML = bbcodeParser.bbcodeToHtml(OrCe); //convert bbcode to html.
		//future: add [] escape code, emojis, and ordered lists
		document.body.appendChild(OrCeDiv);
	});
</script>

<!--Create scratchblocks in case they are used in an order form - line 13: call parser file. line 14: call scratchblock styles file. lines 15-19: set parser settings-->
<script async="false" src="https://scratchblocks.github.io/js/scratchblocks-v3.4-min.js"></script>
<script async="false">
	scratchblocks.renderMatching('pre.blocks', {
		style: 'scratch3'
	});
</script>

<!-- code blocks css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/highlight.js@10.5.0/src/styles/github-gist.min.css">
<script src="https://cdn.jsdelivr.net/gh/highlightjs/highlight.js/src/highlight.min.js"></script>
<script>
	hljs.initHighlightingOnLoad();
</script>
<!-- bbcode css -->
<link rel="stylesheet" href="../css/bbcode.css">
