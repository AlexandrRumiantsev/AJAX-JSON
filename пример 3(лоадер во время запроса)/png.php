<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title></title>

    <style type="text/css">
        @-webkit-keyframes loaderSprite {
            from { background-position: 0px; }
            to { background-position: -2500px; }
        }

        @-moz-keyframes loaderSprite {
            from { background-position: 0px; }
            to { background-position: -2500px; }
        }

        @keyframes loaderSprite {
            from { background-position: 0px; }
            to { background-position: -2500px; }
        }

        #loader {
            width: 100px;
            height: 100px;
            background-image: url("loader.png");
            -webkit-animation: loaderSprite 1.25s steps(25, end) infinite;
            -moz-animation: loaderSprite 1.25s steps(25, end) infinite;
            animation: loaderSprite 1.25s steps(25, end) infinite;
        }

        #loader {
            display: none;
            opacity: 0;
        }
    </style>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#ajax").click(function(){
                $.ajax({
                    url: 'ajax.php',
                    beforeSend: function(){
                        $("#loader").css("display", "block");
                        $("#loader").animate({ opacity: 1 }, 500);
                    }
                }).done(function(data){
                        $("#loader").animate({ opacity: 0 }, 500, function(){ $("#loader").css("display", "none"); });
                    });
            });
        });
    </script>
</head>

<body>
    <button id="ajax">Сделать ajax запрос</button>
    <div id="loader"></div>
</body>
</html>