<?php
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


    <link rel="stylesheet" type="text/css" href="style/admin.css">

    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
<div>
    <div class="welcome">
        <h4 id="wel">Welcome to the admin page<br>
            Here you can create news</h4><br>
    </div>

    <div id="but">
        <div id="first">
            <div id="fir">
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#newsModal">
                    Create news
                </button>
            </div>
            <div id="sec">
                <form action="logout.php">
                    <input type="submit" class="btn btn-primary btn-lg" value="Logout">
                </form>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="offers">
            <div class="panel panel-primary">
                <div class="panel-heading">BIM-Labs NEWS</div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped table-hover" id="getId">
                        <thead>
                        <tr>
                            <th><i class="fa"></i></th>

                        </tr>
                        </thead>
                        <tbody id="info">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


    <div class="modal fade bs-example-modal-lg" id="newsModal" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create news</h4>
                </div>
                <form action="insertNews.php" method="post">
                    <div class="modal-body">
                        <div class="input-group"></div>
                        <span class="input-group-addon">
                    <h4>Headline</h4>
                <input name="headline" type="text" class="form-control" aria-label="...">
                    <h4>Create news</h4>
                <textarea name="editor1" id="editor1"></textarea>
                <script type="text/javascript">CKEDITOR.replace('editor1');</script>

                    </div>


                    <div class="modal-footer">
                        <input id="cn" type="submit" value="Create News">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
<script>
    $(document).ready(function () {
        getNews()
    });


    function getNews() {
        $.ajax({
            method: "GET",
            url: "data.php",
            dataType: "json",

            success: function (news) {
                var table = $("#info");
                table.html("");
                news.forEach(function (element) {
                    var tr = '<tr id="newsTable">' +
                        '<div id="iddiv"><td id="id">' + element.id + '</td></div><br>' +
                        '<div id="headline"><td>' + element.headline + '</td></div><br>' +
                        '<div id="content"><td>' + element.content + '</td></div>'
                    '</tr>';
                    table.append(tr);
                })
            }
        });
    }


</script>

</body>
</html>
