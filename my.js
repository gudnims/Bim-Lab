
$(document).ready(function () {
    getInfo();
});
function getInfo() {

    $.ajax({
        method: "GET",
        url: 'Dbconnector.php',
        data: {

        },
        dataType: "json",

        success: function (data2) {
            console.log(data2);
            var table = $("#info");
            table.html("");
            data2.data.forEach(function (element) {
                var tr = '<tr id="offertable">' +
                    '<td>' + element.headline+ '</td>' +
                    '<td>' + element.content + '</td>' +
                    '</tr>';
                table.append(tr);
            })

        }
    });
}
