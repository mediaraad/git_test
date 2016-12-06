<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Mediaraad</title>
        <link rel="stylesheet" type="text/css" href="css/init.css"/>
        <link rel="stylesheet" type="text/css" href="css/global.css"/>
        <style>

            .videodiv{
                margin-top: -100px;
                width: 1900px; 
                height: 1230px;
                background-color: #777;
                z-index:1;
            }

            body{
                background-color: #000;
            }

            #sub1{
                width: 500px;
            }

            #afdek{
                position:absolute;
                width:2000px;
                height:2000px;
                z-index:2;
                left: 0px;
                top: 0px;
                font-size: 36px;
                background-color: #db4;
                text-align: left;
                opacity:0.1;
                filter:alpha(opacity=10); /* For IE8 and earlier */
            }

            #click-me{
                position:absolute;
                width:520px;
                height:269px;
                z-index:20;
                left: 90px;
                top: 210px;
                cursor: pointer;
            }

            #apDiv1 {
                position:absolute;
                width:520px;
                height:269px;
                z-index:1;
                left: 90px;
                top: 210px;
                font-size: 36px;
                background-color: #0066CC;
                text-align: left;
                opacity:0.4;
                z-index:3;
                filter:alpha(opacity=40); /* For IE8 and earlier */
            }

            #apDiv2 {
                font-family: museo_sans_700regular, Arial, Helvetica, sans-serif;
                font-size: 36px;
                position:absolute;
                width:729px;
                height:362px;
                z-index:1;
                line-height: 10px;
                left: 125px;
                top: 310px;
                color: #EEE;
                z-index:3;
                text-align: left;
            }
            #apDiv3 {
                font-family: museo_sans_700regular, Arial, Helvetica, sans-serif;
                font-size: 36px;
                position:absolute;
                width:442px;
                height:115px;
                z-index:2;
                left: 120px;
                top: 230px;
                z-index:3;
                font-size: 72px;
                color: #EEE;
            }
        </style>
 


        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-min.js"></script>

        <script type="text/javascript">


 

            $(document).ready(function() {
 

                $(":button").button();
                $(":submit").button();


                $.ajax({
                    url: 'ajax_getvideo.php',
                    type: "POST",
                    dataType: "text",
                    data: {
                        'vr_ant_ID': 1,
                        'delete_children': 2
                    }
                }).done(function(back) {
                    back = $.parseJSON(back);
                    var the_video_str = back.video;
                  
                   $('#video_frame').attr('src', the_video_str);
                });

                $('#click-me').click(function() {
                    //window.location = "index2.php";
                })



            });
        </script>

    </head>


    <body >

        <?PHP ?>


        <div class="videodiv">
            <iframe id="video_frame"  width="100%" height="100%"  frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen>
                
            </iframe> 
        </div>>



        <div id="apDiv1">

        </div>
        <div id="apDiv2" ><br />
            Webapplicaties<br />
            <br />
            Websites<br />
            <br />
            Animatie<br />
            <br />
            Multimedia-installaties <br />
        </div>


        <div id="apDiv3" >Mediaraad</div>

        <div id="afdek"></div>

        <div id="click-me"></div>

    </body>
</html>





