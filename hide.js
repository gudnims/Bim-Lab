$(document).ready(function () {
    getNews()
});

function getNews() {
    $.ajax({
        method: "GET",
        url: "php/data.php",
        dataType: "json",

        success: function (news) {
            console.log(news);
            var table = $("#info");
            table.html("");
            news.forEach(function (element) {
                var tr = '<tr id="newsTable">' +
                    '<div id="headline"><td>' + element.headline + '</td></div><br>' +
                    '<div id="content"><td>' + element.content + '</td></div>'
                '</tr>';
                table.append(tr);
            })
        }
    });
}
