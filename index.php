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
    <div id="container" class="clearfix">
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
        setInterval(function(){
           getNews()
        }, 18050);

    });

    function getTime() {
        var d = new Date();
        console.log(d);
    }

    function getNews() {


        $.ajax({
            method: "GET",
            url: "data.php",
            dataType: "json",
            success: function (data) {
                getData(data);
            }
        })
    }

    function getData(data) {
        var num = data.length;
        var div = $(".firstnews");
        var main = $("#main");
        if (num == 0) {
            $(".firstnews").html("");
            var nonews = '<div>' +
                '<h3 style="text-align: center"> No news today this webpage is here to stay.... </h3>'
            '</div>';
            div.append(nonews);
        } else {
            var counter = 0;
            var delay = 6000;

            for (var i = 0; i < num; i++) {
                (function (i) {
                    setTimeout(function () {
                        var pickNews = data[counter];
                        div.html("");
                        var yesNews = '<div>' +
                            '<div style="text-align: center"><img src="' + pickNews.pic + '"></div>' +
                            '<h3 style="text-align: center">' + pickNews.headline + '</h3>' +
                            '<div style="text-align: center">' + pickNews.content + '</div>'
                        '</div>';
                        counter++;
                        div.append(yesNews).slideDown(1500).delay(3000).slideUp(1500);
                    }, delay * i);
                }(i));
            }
            getData();


            // var randomNumber = Math.floor((Math.random() * num));
            //var newsData = data[randomNumber];
            //var newsDiv = '<div>' +
            //  '<div style="text-align: center"><img src="' + newsData.pic + '"></div>' +
            //   '<h3 style="text-align: center">' + newsData.headline + '</h3>' +
            //   '<div style="text-align: center">' + newsData.content + '</div>'
            //'</div>';
            //div.append(newsDiv);
        }
    }
</script>

</body>
</html>
