<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="js/jquery-latest.js"></script>
    <script type="text/javascript" src="js/jquery.tablesorter.js"></script>
    <script type="text/javascript" src="js/jquery.tablesorter.pager.js"></script>
    <script type="text/javascript" src="js/userJs.js"></script>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        table {
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
            font-size: 14px;
            border-radius: 10px;
            border-spacing: 0;
            text-align: center;
        }

        th {
            background: #BCEBDD;
            color: white;
            text-shadow: 0 1px 1px #2D2020;
            padding: 10px 20px;
        }

        th, td {
            border-style: solid;
            border-width: 0 1px 1px 0;
            border-color: white;
        }

        th:first-child, td:first-child {
            text-align: left;
        }

        th:first-child {
            border-top-left-radius: 10px;
        }

        th:last-child {
            border-top-right-radius: 10px;
            border-right: none;
        }

        td {
            padding: 10px 20px;
            background: #F8E391;
        }

        tr:last-child td:first-child {
            border-radius: 0 0 0 10px;
        }

        tr:last-child td:last-child {
            border-radius: 0 0 10px 0;
        }

        tr td:last-child {
            border-right: none;
        }

        #pager {
            text-align: center;
            margin-top: 20px;
        }

        .star {
            /*font-size: 20px;*/
        }
    </style>
</head>
<body>

<div class="flex-center position-ref full-height">

    <div class="content">
        <h1>Code&Care test work</h1>
        <h2>Last 3 coin value</h2>

        <div class="row">
            <div id="pager" class="pager">
                <form>
                    <img width="10" src="img/no-translate-detected_318-73640.jpg" class="first">
                    <img width="10" src="img/no-translate-detected_318-85985.jpg" class="prev">
                    <input type="text" class="pagedisplay">
                    <img width="10" src="img/no-translate-detected_318-85964.jpg" class="next">
                    <img width="10" src="img/no-translate-detected_318-72463.jpg" class="last">
                    <select class="pagesize">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                    </select>
                </form>

            </div>
            <div class="col-md-6">
                <h3>blockchain</h3>
                <table id="myTable1" class="tablesorter">
                    <thead>
                    <tr>
                        <th>Date*</th>
                        <th>USD*</th>
                        <th>GBP*</th>
                        <th>EUR*</th>
                    </tr>
                    </thead>
                    @foreach($blockchain as $value)
                        <tr>
                            <td>{{ $value->created_at }}</td>
                            <td>{{ $value->USD }}</td>
                            <td>{{ $value->GBP }}</td>
                            <td>{{ $value->EUR }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-md-6">

                <h3>coindesk</h3>
                <table id="myTable2" class="tablesorter">
                    <thead>
                    <tr>
                        <th>Date*</th>
                        <th>USD*</th>
                        <th>GBP*</th>
                        <th>EUR*</th>
                    </tr>
                    </thead>
                    @foreach($coindesk as $value)
                        <tr>
                            <td>{{ $value->created_at }}</td>
                            <td>{{ $value->USD }}</td>
                            <td>{{ $value->GBP }}</td>
                            <td>{{ $value->EUR }}</td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
        <div style="margin-top: 20px">
            Use '<strong>star fields - *</strong>' to sort table
        </div>
    </div>
</div>
</body>
</html>

