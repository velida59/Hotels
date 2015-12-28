<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
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
                color: #CD853F;

            }
            

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 40px;
            }
            

        </style>
    </head>
    <body>
    
       
        
        <div class="container">
        <div class="content">
            
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
  </div>
  </div>
    <div class="title" 
         style="color: black";> Choose your place to stay and live the great experience!
                </div>
       <div>
       <div class="btn-lg">
	<button 
         type="button" 
         style="background-color:#FFDEAD;
                color:#FFDEAD; 
                padding:10px;
                border-radius: 10px;
                border: 3px solid #CD853F"
                
                >
            
		<li><a href="{{ url('/home') }}">HOTEL PING</a></li>
	</button>
    </div>
        
        
        <div class="btn-lg">
	<button 
         type="button" 
         style="background-color:#FFDEAD; 
                color:#FFDEAD; 
                padding:10px;
                border-radius: 10px;
                border: 3px solid #CD853F">
		<li><a href="{{ url('/home') }}">HOTEL SARAJEVO</a></li>
	</button>
    </div> 
    
    <div class="btn-lg">
	<button 
         type="button" 
         style="background-color:#FFDEAD; 
                color:#FFDEAD; 
                padding:10px;
                border-radius: 10px;
                border: 3px solid #CD853F">
		<li><a href="{{ url('/home') }}">HOTEL BOSNA</a></li>
	</button>
    </div>
                
    <div class="btn-lg">
	<button 
         type="button" 
         style="background-color:#FFDEAD; 
                color:#FFDEAD; 
                padding:10px;
                border-radius: 10px;
                border: 3px solid #CD853F"
                >
		<li><a href="{{ url('/home') }}">HOTEL IUS</a></li>
	</button>
    </div>            
    </body>
</html>

