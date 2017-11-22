$(document).ready(function () {

    $("#myTable1").tablesorter({
        widgets: ["zebra"]
    }).tablesorterPager({ // настройки пагинации
        size: 5,
        container: $('#pager'),
        positionFixed: false
    });
});
$(document).ready(function () {

    $("#myTable2").tablesorter({
        widgets: ["zebra"]
    }).tablesorterPager({ // настройки пагинации
        size: 5,
        container: $('#pager'),
        positionFixed: false
    });
});