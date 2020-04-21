<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" href="css/craftyslide.css" />
        <style>
            #pagination {
                clear:both;
                width:50px;
                margin:25px auto 0;
                padding:0;
            }
        </style>
    </head>

    <body>
        <div id="slideshow">
            <ul>
                <li>
                    <img src="images/camiones.png" alt="" title="Camiones" />
                </li>

                <li>
                    <img src="images/REBABAYESMERIL.png" alt="" title="Rebaba y Esmeril" />
                </li>

                <li>           
                    <img src="images/PRENSA.png" alt="" title="Prensa" />
                </li>

            </ul>
        </div>   

        <script src="js/jquery-1.6.1.min.js"></script>
        <script src="js/craftyslide.min.js"></script>

        <script>
//          $("#slideshow").craftyslide();
//            $("#slideshow").craftyslide({
//                'width': 600,
//                'height': 289,
//                'pagination': false,
//                'fadetime': 500,
//                'delay': 1500
//            });

$("#slideshow").craftyslide({
  'width': 600,
  'height': 289,
  'pagination': false,
  'fadetime': 4000,
  'delay': 4000
});
        </script> 

    </body>
</html>

