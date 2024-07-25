<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Live Google Drive Video Player</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h1><div class=" bttn-stretch bttn-md header"> <img width="15px" src="logo.png" alt="" srcset=""> Live Drive Player</div></h1>

    <div class="video">

    </div>
    <div class="middle container">
        <p class="bttn-fill" ><a href="https://plyr.0-0-0.click/GD-ID-Finder/" target="_blank">Find Drive File ID</a></p>
        <br>
        <center><input type="text" class="bttn-unite bttn-lg" name="id" id="id">
        <button class="bttn-unite bttn-lg" onclick="show()">Show Your Link</button></center>
        <br><br>
        
    </div>
    <div class="middle">
    <div class="bttn-stretch bttn-md" id="show"></div>
    </div>
    <div class="iframecode">
    <div id="iframecode"></div>
<br><br>
<img id="thumb" src="" alt="SumanMovies">
    </div>
    
    <br><br>




    <span class="bttn-pill bttn-md" style="color : #03A9F4 ;" id="visit"> 
        <a href="https://G.page/SumanOnline.Com" target="_blank"> Www.SumanOnline.Com <i style="color : #EF5350 ;" ></i></a></span>
    
    <script>
        var siteurl = "https://plyr.0-0-0.click/GD-Plyr/embed.php?id=" 
        ;
        function show(){
            var vidurl = siteurl + document.getElementById('id').value;
            var frame = '<iframe width="560" scrolling="no" height="315" src="'+siteurl+'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            document.getElementById('show').innerHTML = vidurl ;
            document.getElementById('thumb').src = document.getElementById('id').value ;
            document.getElementById('visit').innerHTML = "<a href='"+vidurl+"' target='_blank' > View Video <i style='color : rgb(241, 58, 58) ;' class='fa fa-play-circle'></i></a>";
            document.getElementById('iframecode').innerHTML = '<div style="background-color: #1e1e1e; color: #d4d4d4; font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;"><div><span style="color: grey;">&lt;</span><span style="color: #569cd6;">iframe</span>&nbsp;<span style="color: #9cdcfe;">width</span>=<span style="color: #ce9178;">"560"</span>&nbsp;<span style="color: #9cdcfe;">height</span>=<span style="color: #ce9178;">"315"</span>&nbsp;</div><div><span style="color: #9cdcfe;">scrolling</span>=<span style="color: #ce9178;">"no"</span></div><div><span style="color: #9cdcfe;">src</span>=<span style="color: #ce9178;">"'+vidurl+'"</span>&nbsp;</div><div><span style="color: #9cdcfe;">frameborder</span>=<span style="color: #ce9178;">"0"</span>&nbsp;<span style="color: #9cdcfe;">allow</span>=<span style="color: #ce9178;">"accelerometer;&nbsp;autoplay;&nbsp;clipboard-write;&nbsp;encrypted-media;&nbsp;</span></div><div><span style="color: #ce9178;">gyroscope;&nbsp;picture-in-picture"</span>&nbsp;<span style="color: #9cdcfe;">allowfullscreen</span><span style="color: grey;">&gt;</span></div><div><span style="color: grey;">&lt;/</span><span style="color: #569cd6;">iframe</span><span style="color: grey;">&gt;</span></div></div>'+frame;
        }
    </script>
        <style>
        img {
            background:#EC407A;
            border-radius: 50%;
            
        }
        .iframecode {
            text-align: center;
            border-radius: 10%;
            top: 95%;
            left: 50%;
            position: absolute;
            transform: translate( -50% , -50%);
        }
        iframe {
            overflow:hidden; 
        }
        .hidden {
            display: none;
        }
        h1 {
            background:#EC407A;
        }
        .header {
            font-size: 60px;
        }
        h2 {
            text-align: center;
            font-size: 10px;
        }
        body {
            background: rgb(50, 193, 236);
        }
        input , button {
            outline: none;
        }

        input{
            width: 100%;
        }
        .middle {
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate( -50% , -50%);
        }

        .container {
            top: 35%;
            left: 50%;
            position: absolute;
            transform: translate( -50% , -50%);
        }

        #visit {
            top: 80%;
            left: 50%;
            position: absolute;
            transform: translate( -50% , -50%);
        }
        a{
            text-decoration: none;
        }
        #show {
            text-align: center;
        }
    </style>

</body>
</html>