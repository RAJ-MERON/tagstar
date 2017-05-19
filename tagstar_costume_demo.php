<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tagstar</title>
<script src="jquery.min.js"></script>
<script src="tagstar.jquery.js"></script>
<script>
$(document).ready(function(e) {
$('#tagcontainer').tagstar({
	                    backgroundColor:'#CCC',
						border:'solid thin #999',
						opacity:'0.7',
					    width:'20em',
						padding:'1em',
						borderradius:'0.5em',
						stringarr:[["Tag1","tag1link.com"],["Tag2","tag2link.com"]],
						tagpadding:'0.5em',
	                    tagbackground:'#333',
						tagmargin:'0.3em',
	                    tagfloat:'left',
	                    tagfontsize:'1em',
						tagborderradius:'0.2em',
						linkunderscore:'none',
						linkfontsize:'1.5em',
						linkcolor:'white',
	                    linkfontfamily:'"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif"'
	});
});
</script>
</head>
<body>
<div id='tagcontainer'></div>
</body>
</html>