<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>การใช้งาน Highcharts JS With PHP MySQL</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<h1>Hello, world!</h1>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table class="table" id="datatable">
    <thead>
    <tr>
        <th></th>
        <th>Jane2</th>
        <th>John</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th>Apples</th>
        <td>10</td>
        <td>200</td>
    </tr>
    <tr>
        <th>Pears</th>
        <td>2</td>
        <td>0</td>
    </tr>
    <tr>
        <th>Plums</th>
        <td>5</td>
        <td>11</td>
    </tr>
    <tr>
        <th>Bananas</th>
        <td>1</td>
        <td>1</td>
    </tr>
    <tr>
        <th>Oranges</th>
        <td>2</td>
        <td>4</td>
    </tr>
    <tr>
        <th>Oranges</th>
        <td>2</td>
        <td>4</td>
    </tr>
    </tbody>
</table>

<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<script>

    $(function () {

        $('#container').highcharts({
            data: {
                table: 'datatable'
            },
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data extracted from a HTML table in the page'
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'Units'
                }
            },

            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
                }
            },

            exporting: {
                buttons: {
                    contextButton: {
                        enabled: false
                    }
                }
            }

        });
    });

</script>

</body>
</html>