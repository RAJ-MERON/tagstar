TagStar is a very simple jQuery plugin
> tagstar.jquery.min v0.1 makes it easier to create,enhance and costumize TAGS in websites.

How to use Tagstar?

Create DOM element with id "tagcontainer".

Include tagstar.jquery.min.js

 <a style="text-decoration:none; background:#fff;" href='http://jquery.com'> Include Jquery Library minimum v1.7 </a> 

Default Usage: 
      $('#tagcontainer').tagstar();

Passing Tag Values and their corresponding links successively into stringarr:
  [ Tags have IDs #tag1, #tag2, #tag3 .. etc. and Class .tags ] 
  
    $("#tagcontainer").tagstar({
      stringarr:[
      ["Books","http://bookslink.com"],
      ["Novels","http://novelslink.com"],
      ["Authors","http://authorslink.com"],
      ["Tesimonials","http://testmonlink.com"],
      ["Puzzles","http://Puzzleslink.com"],
      ["Favbooks","http://favbookslink.com"]
      ]
      });

#tagcontainer costumizable parameters

        //Default values 
        backgroundColor:'#CCC',
        border:'solid thin #999'
        opacity:'0.7',
        width:'20em',
        padding:'1em',
        borderradius:'0.5em'

.tags costumizable parameters

        //Default values
         tagpadding:'0.5em',
         tagbackground:'#333',
         tagmargin:'0.3em',
         tagfloat:'left',
         tagfontsize:'1em',
         tagborderradius:'0.2em'
  
  
Links costumizable parameters

        //Default values
         linkunderscore:'none',
         linkfontsize:'1.5em',
         linkcolor:'white',
         linkfontfamily:'"Gill Sans", "Gill Sans MT", "Myriad Pro","DejaVu Sans Condensed", Helvetica, Arial, sans-serif"' 


#  Developed by Raj Kishor Maharana 
#  December 2015
