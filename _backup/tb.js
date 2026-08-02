$(document).ready(function() {
    function popup() {
        $("#contactdiv").css("display", "none");
    }
    $("#otevrit-rozmer-box").click(function() {
        $("#contactdiv").css("display", "block");
    });
    $("#popupcontent #cancel").click(function() {
        $(this).parent().parent().hide();
    });

});