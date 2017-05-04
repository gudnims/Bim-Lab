$(function(){

    $("#login").click(function(){

        var name = $("#name").val();
        var pwd = $("#pwd").val();
        console.log(name);

        $.post("login.php", {name: name, pwd: pwd})
            .done(function(data){
                if(data == "success"){
                    console.log(data);
                    //window.location = "admin.php";
                    $(location).attr('href', 'admin.php');
                }else{
                    alert ("Failed try again");
                }
            });
    });
});
