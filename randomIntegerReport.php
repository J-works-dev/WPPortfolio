<?php
    $num1 = $num2 = $num3 = $num4 = $num5 = $num6 = $num7 = $num8 = $num9 = $num10 = 0;
    for ($i = 0; $i < 100; $i++) {
        $rnd = rand(1, 10);
        switch ($rnd) {
            case 1:
                $num1++;
                break;
            case 2:
                $num2++;
                break;
            case 3:
                $num3++;
                break;
            case 4:
                $num4++;
                break;
            case 5:
                $num5++;
                break;
            case 6:
                $num6++;
                break;
            case 7:
                $num7++;
                break;
            case 8:
                $num8++;
                break;
            case 9:
                $num9++;
                break;
            case 10:
                $num10++;
                break;
        }
    }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <!-- <script type="text/javascript">
            const num1 = "<?php echo $num1; ?>";

        </script> -->
        <script>
            window.onload = function () {

            const num1 = parseInt("<?php echo $num1; ?>");
            const num2 = parseInt("<?php echo $num2; ?>");
            const num3 = parseInt("<?php echo $num3; ?>");
            const num4 = parseInt("<?php echo $num4; ?>");
            const num5 = parseInt("<?php echo $num5; ?>");
            const num6 = parseInt("<?php echo $num6; ?>");
            const num7 = parseInt("<?php echo $num7; ?>");
            const num8 = parseInt("<?php echo $num8; ?>");
            const num9 = parseInt("<?php echo $num9; ?>");
            const num10 = parseInt("<?php echo $num10; ?>");

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title:{
                    text: "Random Integer Report"
                },
                axisY: {
                    title: "Count"
                },
                data: [{        
                    type: "column",  
                    showInLegend: true, 
                    legendMarkerColor: "grey",
                    legendText: "Numbers",
                    dataPoints: [      
                        { y: num1, label: "No 1" },
                        { y: num2,  label: "No 2" },
                        { y: num3,  label: "No 3" },
                        { y: num4,  label: "No 4" },
                        { y: num5,  label: "No 5" },
                        { y: num6, label: "No 6" },
                        { y: num7,  label: "No 7" },
                        { y: num8, label: "No 8" },
                        { y: num9,  label: "No 9" },
                        { y: num10,  label: "No 10" }
                    ]
                }]
            });
            chart.render();
            }
        </script>
    </head>
    <body>
        <div id="chartContainer" class="chartContainer" style="height: 300px; width: 50%; padding: 30px;"></div>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </body>
</html>