<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title></title>

    <style type="text/css">
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
    <div id="loader"><img src="loader.gif" alt=""/></div>
</body>
</html>