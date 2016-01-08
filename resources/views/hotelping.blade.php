<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Ping</title>
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
                font-family: 'Commercial Script BT', arial;
            }

            .content {
                text-align: center;
                display: inline-block;
                font-size: 30px;
                font-family: 'Commercial Script BT', arial;
            }

            .title {
                font-size: 40px;
                font-family: 'Commercial Script BT', arial;
            }
            .subtitle {
                font-size: 40px;
                text-align: left;
                font-family: 'Commercial Script BT', arial;
            }
            .description {
                font-size: 25px;
                font-family: cursive
               
            }
        </style>
    </head>
   <body>
   <input type="button"
             style="background-color:#FFDEAD;
                color:#CD853F;
                margin-left: 10px;
                padding:10px;
                border-radius: 10px;
                border: 3px solid #CD853F" 
                value="Go Back" 
                onClick="history.go(-1);
                    return true;"
                    />

        <h1 align="center" value="type" name="hotel"> Hotel Ping </h1>
         <div class="title" style="color: black" align="center"> Discover a Hotel That Defines a New Dimension of Luxury
                </div>
        <br> <br>
         <div class="description" style="color: black" value="description"> Hotel Ping is located in very peaceful area. Green surrounding makes it perfect for relaxing and escaping from everyday stress.
                </div>
        <br>
         
        <div class="subtitle" style="color: black"> Book Your Stay!
            </div>
        <br>
       
        
       
        <form  action="/booking" name="booking" method="POST">
            <div class="description">
                <span>Check in: </span>
                <select id="daydropdown_checkin" name="daydropdown_checkin"></select> 
                <select id="monthdropdown_checkin"></select> 
                <select id="yeardropdown_checkin"></select> 
            </div>

            <div class="description">
                <span>Check in: </span>
                <select id="daydropdown_checkout"></select> 
                <select id="monthdropdown_checkout"></select> 
                <select id="yeardropdown_checkout"></select> 
            </div>


            <div class="description">
                <span>Room Type: </span>
                <select align="center" name="mydropdown">
                    <option value="" disabled="disabled" selected="selected">Please select</option>
                    <option value="bedNo">Single Bed</option>
                    <option value="bedNo">Double Bed</option>
                    <option value="bedNo">Three Beds</option>
                </select>
            </div>
            <button type="submit">Rezerviši</button>
        </form>
 <script type="text/javascript">

    /***********************************************
    * Drop Down Date select script- by JavaScriptKit.com
    * This notice MUST stay intact for use
    * Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and more
    ***********************************************/
    window.onload=function(){
    var monthtext=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'];

    function populatedropdown(dayfield, monthfield, yearfield){
        var today=new Date()
        var dayfield=document.getElementById(dayfield)
        var monthfield=document.getElementById(monthfield)
        var yearfield=document.getElementById(yearfield)
        for (var i=1; i<31; i++)
            dayfield.options[i]=new Option(i, i+1)
        dayfield.options[today.getDate()]=new Option(today.getDate(), today.getDate(), true, true) //select today's day
        for (var m=1; m<12; m++)
            monthfield.options[m]=new Option(monthtext[m], monthtext[m])
        monthfield.options[today.getMonth()]=new Option(monthtext[today.getMonth()], monthtext[today.getMonth()], true, true) //select today's month
        var thisyear=today.getFullYear()
        for (var y=0; y<20; y++){
            yearfield.options[y]=new Option(thisyear, thisyear)
            thisyear+=1
        }
        yearfield.options[0]=new Option(today.getFullYear(), today.getFullYear(), true, true) //select today's year
    }
        populatedropdown("daydropdown_checkin", "monthdropdown_checkin", "yeardropdown_checkin");
        populatedropdown("daydropdown_checkout", "monthdropdown_checkout", "yeardropdown_checkout");
    }
</script>
  </body>
</html>

