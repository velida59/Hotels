<!DOCTYPE html>
<html>
    <head>
       
        <title>Welcome</title>

        <link href="http://allfont.net/allfont.css?fonts=commercial-script-bt" rel="stylesheet" type="text/css" />

        <style>
            html, body {
                background-image: url('https://themancalledkenny.files.wordpress.com/2015/10/open-door-2.jpg'); 
                height: 100%; 
                line-height: 0.5;
                background-size: 1400px 650px;
    background-repeat: no-repeat;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Commercial Script BT', arial;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
                text-decoration: none;
            }

            .content {
                text-align: center;
                display: inline-block;
                text-decoration: none;
            }

            .title {
                font-size: 50px;
                text-shadow: 2px 2px white;
            }
            .button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 18px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #EEE;
  border-radius: 15px;
}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">

                <div class="title" 
                     style="color: gray";>
                 

                <p>Welcome!</p>
                <p>We're glad you're here...</p>
                </div>
            
    <div>
        
         
	<button 
         type="button" 
         class="button"
         >
            
	<li><a href="{{ url('auth/login') }}"style="text-decoration:none">Sign in</a></li>
	</button>
         </div>
        
     
    </div>
        <div class="col-md-6 col-md-offset-4">
	<button type="button" 
         class="button" 
        >
		<li><a href="{{ url('auth/register') }}"style="text-decoration:none">Sign up</a></li>
	</button>
        
      
    </div>
        

                
        </div>

    </body>
</html>
