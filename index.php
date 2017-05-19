<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nexfort Home</title>
<script src="jquery.min.js">
</script>
<style>
*{
	background:#EFEFEF;
}
#top_section{
	width:60%;
	margin:auto;
	margin-top:50px;
	padding-top:20px;
		background:#0072A8;}
	#logo{
		margin-left:5%;
		
		color:#fff;
		background:#0072A8;
		font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
		font-size:36px;}
		#summary{
			padding:3%;
		color:#fff;
		background:#0072A8;
		font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
		font-size:12px;}
#middle_section{
	font-family:'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;
	width:60%;
	margin:auto;
	margin-top:5px;
	background:#fff;}
	#bottom_section{
	width:60%;
	margin:auto;
	text-align:right;
	color:#fff;
	background:#424242;}
</style>
</head>

<body>
<div id='top_section'>
<div id='logo'>
TagStar
</div>
<div id='summary'>
TagStar is a very simple <span style="font-size:16px; background:#0072A8; margin-left:2px; margin-right:2px; ">jQuery plugin</span>. Apply it to your website to create,enhance and costumize TAGS easily.
</div>
<button id='dfs' style="float:right; margin:10px; padding:10px; font-size:30px; color:#fff; background:#033; cursor:pointer;">
Download File<div style=" font-size:12px; color:#fff; background:#033; cursor:pointer;">Download tagstar.jquery.min v0.1</div></button>
<script>
$(document).ready(function(e) {
    $('#dfs').click(function(){
		window.location='/tagstar_plugin/tagstar.jquery.min.js';
		});
});
</script>
<div style="clear:right;"></div>
</div>
<div id='middle_section'>
<div style=" background:#fff; margin:10px;">
<div style="padding:10px;  font-size:20px; background:#fff;">
How to use Tagstar?
</div>
<div style="color:#818181; background:#fff;"> Create DOM element with id "tagcontainer" </div>
  
 
  <input type="text" style="border:0; padding:10px; background:#fff; color:#000; width:300px; outline:0;" placeholder="<div id='tagcontainer'></div>">
  
  

<div style="color:#818181; background:#fff;"> Include tagstar.jquery.min.js </div>
 <input type="text" style="border:0; padding:10px; background:#fff; color:#000; width:300px; outline:0;" placeholder="
 <script src='tagstar.jquery.min.js'></script>
 ">
  
    
<div style="color:#818181; background:#fff;">  Include Jquery Library v1.7 and onwards from <a style="text-decoration:none; background:#fff;" href='http://jquery.com'>JQuery website</a>. </div>

  <br/>

<div style="color:#818181; background:#fff;"> Default </div>
<input type="text" style="border:0; padding:10px; background:#fff; color:#000; width:300px; outline:0;" placeholder="
$('#tagcontainer').tagstar();
 ">
<br/>
<div style="width:100%; display:block;">
<div style="text-align:center; background:#fff;">
<img src="tagstar plugin/Default_screenshot.png">
  </div>
  </div>
 
<br/>
<div style="color:#818181; background:#fff;"> Passing Tag values and their links successively into <b style="background:#fff;">stringarr</b> </div>
<div style="color:#818181; background:#fff; font-size:14px; padding-left:20px;">
  [ Tags have IDs #tag1, #tag2, #tag3 .. etc. and Class .tags ] </div>
  
  <div type="text" style="border:0; padding:10px; color:#0072A8; background:#fff; outline:0;">
  
    $("#tagcontainer").tagstar({<br/>
      stringarr:[<br/>
      ["Books","http://bookslink.com"],<br/>
      ["Novels","http://novelslink.com"],<br/>
      ["Authors","http://authorslink.com"],<br/>
      ["Tesimonials","http://testmonlink.com"],<br/>
      ["Puzzles","http://Puzzleslink.com"],<br/>
      ["Favbooks","http://favbookslink.com"]<br/>
      ]<br/>
      });

    <p style="color:#999; background:#fff;">Which looks like</p>
  </div>
<div style="width:100%; display:block;">
<div style="text-align:center; background:#fff;">
<img src="tagstar plugin/Costume_tags_screenshot.png">
  </div>
  </div>
  
  <br/>
  <div style="color:#818181; background:#fff;"> <b>#tagcontainer</b> costumizable parameters </div>
  <div type="text" style="border:0; padding:10px; color:#0072A8; background:#fff;  outline:0;">
 
//Default values <br/>
backgroundColor:'#CCC',<br/>
border:'solid thin #999'<br/>
opacity:'0.7',<br/>
width:'20em',<br/>
padding:'1em',<br/>
borderradius:'0.5em'<br/>
 
  </div>





  <div style="color:#818181; background:#fff;"> 
 
 <b>.tags</b> costumizable parameters</div>
  <div type="text" style="border:0; padding:10px; color:#0072A8; background:#fff;  outline:0;">
 
//Default values<br/>
 tagpadding:'0.5em',<br/>
 tagbackground:'#333',<br/>
 tagmargin:'0.3em',<br/>
 tagfloat:'left',<br/>
 tagfontsize:'1em',<br/>
 tagborderradius:'0.2em'<br/>
 
  </div>
  
  
  
  
  <div style="color:#818181; background:#fff;"> 
Links costumizable parameters</div>
  <div type="text" style="border:0; padding:10px; color:#0072A8; background:#fff;  outline:0;">
 
//Default values<br/>
 linkunderscore:'none',<br/>
 linkfontsize:'1.5em',<br/>
 linkcolor:'white',<br/>
 linkfontfamily:'"Gill Sans", "Gill Sans MT", "Myriad Pro","DejaVu Sans Condensed", Helvetica, Arial, sans-serif"' 
 
  </div>
 
  
  
  
  
  
  
</p>
</div>
</div>
<div id='bottom_section'>
<div style="padding:20px; font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; background:#424242;">
Copyrights 2016-17<br/>
Powered by Nexfort Basics<br/>
Developed by RK |
<a style="text-decoration:underline;  background:#424242; color:#fff;" href='www.facebook.com/OrganicDice'>Meet me</a> 
</div>
</div>
</body>
</html>