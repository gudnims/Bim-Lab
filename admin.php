<?php
session_start();

//if(!isset($_SESSION['id'])){
//    header("Location: index.html");
//}
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

    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="welcome">
    Welcome to the admin page<br>
    Here you can create or delete news.<br>


    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#newsModal">
        Create news
    </button>


    <div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create news</h4>
                </div>
                <form action="insertNews.php" method="post">
                <div class="modal-body">
                    <h4>Headline</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
      <span class="input-group-addon">
                        <input name="headline" type="text" class="form-control" aria-label="...">
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <h4>News</h4>
                            <textarea name="editor1" id="editor1"></textarea>
                            <script type="text/javascript">CKEDITOR.replace('editor1');</script>
                            </div>
                        <input type="submit" placeholder="Create News" value="Insert">
                </form>


                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Create news</button>
                </div>
            </div>
        </div>
    </div>

            </div>
        </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#deleteModal">
        Delete news
    </button>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete news</h4>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Delete news</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>

</body>
</html>
