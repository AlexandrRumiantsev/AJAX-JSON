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
    <script type="text/javascript" src="sonic.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            function drawFlame(color, px, py, radius) {
                this._.fillStyle = color;
                this._.beginPath();
                this._.arc(
                    px, py,
                    radius, 0,
                    Math.PI*2, false
                );
                this._.closePath();
                this._.fill();
            }

            var loader = new Sonic({

                width: 100,
                height: 100,

                stepsPerFrame: 4,
                trailLength: 0.8,
                pointDistance: 0.01,
                fps: 20,

                backgroundColor: '#FFFFFF',

                path: [
                    ['arc', 60, 60, 30, 0, 360]
                ],

                step: function(point, index, frame) {

                    var sizeMultiplier = 10;
                    var radius = sizeMultiplier * (index > 0.5 ? 1-index : index);

                    drawFlame.call(this, '#FF6C08', point.x*index, point.y, radius);
                    drawFlame.call(this, '#FFD341', point.x, point.y*index, radius);
                    drawFlame.call(this, '#FF3000', point.x, point.y, radius);

                }

            });

            loader.play();

            $("#loader").append(loader.canvas);

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