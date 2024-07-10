$(document).ready(function() {

    $('.btn').addClass("main-btn btn-hover");

    $(".datepicker").datepicker({
        format: "dd-mm-yyyy"
    });
    $("#all-date").click(function(e) {
        e.preventDefault();
        $("input[name=date_start]").val("");
        $("input[name=date_end]").val("");
        $("input[name=item_name]").val("");
    });
});