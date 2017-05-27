<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BIMLab</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style/index.css">

</head>
<body>
<div id="gradient">
    <header>

        <ul>
            <div class="dropdown">

                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="true">
                    Admin
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <form action="login.php" method="post">
                    <input class="form-control" type='text' id="name" name='name' placeholder='name'><br>
                    <input class="form-control" type='password' id="pwd" name='pwd' placeholder='password'><br>
                    <input class="btn btn-default" style="margin-left: 30%;" type='submit' value="Login">
                    </form>

                </ul>
            </div>
        </ul>
        </nav>
    </header>
    <div id="container" class="col-md-12">
        <div id="pic" class="col.md.5">
            <img src="csm_160317_kompetenceloeft_02f1ad1123.jpg" width="120%">
        </div>


        <div id="main" class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>News</h4></div>
                <div class="firstnews">
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>


<script>

    $(document).ready(function () {
        getNews();
        getTime();
        setInterval(function () {
            $(".firstnews").html("");
            getTime();
            getNews();
        }, 3600000);
    });

    function getTime(){
        var d = new Date();
        console.log(d);
    }

    function getNews() {


        $.ajax({
            method: "GET",
            url: "data.php",
            dataType: "json",
            success: function (data) {
                var div = $(".firstnews");
                $.each(data, function (key, value) {
                    var di = '<div>' +
                            '<div><img>' + value.pic + '</img>' +
                            '<h3>' + value.headline + '</h3>' +
                            '<div>' + value.content + '</div>'
                    '</div>';
                    div.append(di);
                });
            }
        })
    }

</script>
</div>
</body>
</html>
