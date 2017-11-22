$(document).ready(function () {

    $("#myTable1").tablesorter({
        sortList: [[2, 0]], // отсортировано по мылу
        widgets: ["zebra"]
    }).tablesorterPager({ // настройки пагинации
        size: 5,
        container: $('#pager'),
        positionFixed: false
    });
});
$(document).ready(function () {

    $("#myTable2").tablesorter({
        sortList: [[2, 0]], // отсортировано по мылу
        widgets: ["zebra"]
    }).tablesorterPager({ // настройки пагинации
        size: 5,
        container: $('#pager'),
        positionFixed: false
    });
});