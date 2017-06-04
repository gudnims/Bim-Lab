function getData(data) {
    var num = data.length;
    var p = $("#fullTime");
    p.append(num);
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
        var delay = document.getElementById('delay').innerText * 30000;
        var delayed = delay;
        var slide = 1500;
        var pause = delay - slide - slide;
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
        getData();
    }
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
