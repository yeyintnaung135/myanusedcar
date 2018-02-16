<?php
echo header("Cache-Control:no-store,no-cache,must-revalidate,max-age=0");header("Cache-Control:post-check=0,pre-check=0", false);header("Pragma:no-cache");header('Content-Type:text/html');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Connection slow</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
            <link href="{{asset('backends/css/bootstrap.min.css')}}" rel="stylesheet">


        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
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
                font-size: 143%;
                color:#d4853f;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container" style="background:whitesmoke;">
            <div class="content" style="width:70%;background:white;border-left:12px solid #8d443f;">
                <div class="title">Connection Time Out .Please! Refresh page again</div>
                            <a href="{{url('mm/user/confirm_email')}}" class="btn btn-info" style="margin-bottom:12px;">Refresh!</a>

            </div>
        </div>
    </body>
</html>
