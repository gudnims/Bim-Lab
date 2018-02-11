var data = [];
var time = 60000;

function getTheShit(){
    callBack(data);
    emptyArray(data);
    getNews();
}

function getNews(){

    $.ajax({
        method: "GET",
        url: "data.php",
        dataType: "json",
        success: function (response) {
            data.push(response);
            listData(response);
        }
    });
}

function emptyArray(data){
    if(data.length >= 0){
        data.splice(0, data.length);
    }
    return data;
}

function callBack(data){
    var num = data.length + 1;
    var callAgain = num * time;
    return callAgain;
}

function listData(data){
            var num = data.length;
            var div = $(".firstnews");
            if (num == 0) {
                $(".firstnews").html("");
                var nonews = '<div>' +
                    '<h3 style="text-align: center"> No news today this webpage is here to stay.... </h3>'
                '</div>';
                div.append(nonews);
            } else {
                var counter = 0;
                var slide = 5000;
                var pause = time - slide - slide;
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
                            div.append(yesNews).slideDown(slide).delay(pause).slideUp(slide);
                        }, time * i);
                    }(i));
                }
            }
}

