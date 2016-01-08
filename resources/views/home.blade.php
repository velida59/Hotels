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
                color: #000000;

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
                text-align: center
            }
            

        </style>
    </head>
    <body>
      
    <div class="title" 
         style="color: black"> Choose your place to stay and live the great experience!
     </div
     <br><br>
       <div class="btn-lg">
          @foreach($facilities as $facility)
         <a href="facility/{{$facility->id}}" type="submit"
         style="background-color:#FFDEAD;
                color:#000000; 
                padding:10px;
                border-radius: 10px;
                border: 3px solid #CD853F">{{$facility->name}}</a>
          @endforeach
    </div>
           
    </body>
</html>

