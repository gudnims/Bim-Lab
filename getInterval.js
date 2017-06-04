function getInterval() {
    var value = $("#delay");
    $.ajax({
        method: "GET",
        url: "getInterval.php",
        dataType: "json",

        success: function (data) {
            data.forEach(function (get) {
                var inter = get.setting;
                value.append(inter);


            });
        }
    });
}
