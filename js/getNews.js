var data = [];

function getNews(){

    $.ajax({
        method: "GET",
        url: "data.php",
        dataType: "json",
        success: function (response) {
            data.push(response);
            var number = data.length;
            console.log(number, data);
            listData(response);
        }
    });
}

function callBack(data){
    var num = data.length;
    console.log(num);
    return num;
}

function listData(data){
            var num = data.length;
            //console.log(num);
            var milliSeconds = 10000;
            var div = $(".firstnews");
            if (num == 0) {
                $(".firstnews").html("");
                var nonews = '<div>' +
                    '<h3 style="text-align: center"> No news today this webpage is here to stay.... </h3>'
                '</div>';
                div.append(nonews);
            } else {
                var counter = 0;
                var delayed = milliSeconds;
                var slide = 1500;
                var pause = milliSeconds - slide - slide;
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
                        }, delayed * i);
                    }(i));
                }
            }

}

