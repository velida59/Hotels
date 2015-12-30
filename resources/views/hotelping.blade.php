<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Ping</title>
        <script type="text/javascript">

/***********************************************
* Drop Down Date select script- by JavaScriptKit.com
* This notice MUST stay intact for use
* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and more
***********************************************/

var monthtext=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'];

function populatedropdown(dayfield, monthfield, yearfield){
var today=new Date()
var dayfield=document.getElementById(dayfield)
var monthfield=document.getElementById(monthfield)
var yearfield=document.getElementById(yearfield)
for (var i=0; i<31; i++)
dayfield.options[i]=new Option(i, i+1)
dayfield.options[today.getDate()]=new Option(today.getDate(), today.getDate(), true, true) //select today's day
for (var m=0; m<12; m++)
monthfield.options[m]=new Option(monthtext[m], monthtext[m])
monthfield.options[today.getMonth()]=new Option(monthtext[today.getMonth()], monthtext[today.getMonth()], true, true) //select today's month
var thisyear=today.getFullYear()
for (var y=0; y<20; y++){
yearfield.options[y]=new Option(thisyear, thisyear)
thisyear+=1
}
yearfield.options[0]=new Option(today.getFullYear(), today.getFullYear(), true, true) //select today's year
}

</script>


<FORM>
  

    <INPUT Type="button"
             style="background-color:#FFDEAD;
                color:#CD853F;
                margin-left: 10px;
                padding:10px;
                border-radius: 10px;
                border: 3px solid #CD853F" 
                VALUE="Go Back" 
                onClick="history.go(-1);
                    return true;"
                    >
</FORM>
<link href="http://allfont.net/allfont.css?fonts=commercial-script-bt" rel="stylesheet" type="text/css" />
<style>
            html, body {
                height: 100%;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-image: url('http://mediaserver.pulse2.com/wp-content/uploads/2012/11/vintage-texture13.jpg');
               
            }

            body {
               
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Commercial Script BT', arial;
                font-size: 50px;
                text-shadow: 2px 2px 2px #aaa;
                color: #000000;

            }
            

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
                font-size: 30px;
            }

            .content {
                text-align: center;
                display: inline-block;
                font-size: 30px;
            }

            .title {
                font-size: 40px;
            }
            .subtitle {
                font-size: 40px;
                text-align: left;
            }
            

        </style>
    </head>
    <body>
        <h1 align="center"> Hotel Ping </h1>
         <div class="title" 
         style="color: black" align="center";> Discover a Hotel That Defines a New Dimension of Luxury
                </div>
        <br>
        <div class="subtitle" 
         style="color: black"> Book Your Stay
                </div>
        <br>
       
        
       
        <form  action="" name="someform" >
            <div class="container">
                <span>Check in: </span>
<select id="daydropdown">
</select> 
<select id="monthdropdown">
</select> 
<select id="yeardropdown">
</select> 
            </div>
</form>

<script type="text/javascript">

//populatedropdown(id_of_day_select, id_of_month_select, id_of_year_select)
window.onload=function(){
populatedropdown("daydropdown", "monthdropdown", "yeardropdown")
}
</script>
<form  action="" name="someform" >
            <div class="container">
                <span>Check out: </span>
<select id="daydropdown">
</select> 
<select id="monthdropdown">
</select> 
<select id="yeardropdown">
</select> 
            </div>
</form>

<script type="text/javascript">

//populatedropdown(id_of_day_select, id_of_month_select, id_of_year_select)
window.onload=function(){
populatedropdown("daydropdown", "monthdropdown", "yeardropdown")
}
</script>
 <div class="content">
      <span>Room Type: </span>
        <select align="center" name="mydropdown">
            
           <option value="" disabled="disabled" selected="selected">Please select</option>

 <option value="RoomType">Single Bed</option>
 <option value="RoomType">Double Bed</option>
 <option value="RoomType">Three Beds</option>
 </select>
 </div>
         
        <div class="container">
        <div class="content">
            
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
  </div>
  </div>
	
	
    </div>
          
    </body>
</html>

