$(document).ready(function(){
    $("#cnav_icon_right").on('click', function(){
        if($("#nav_ul").css("display") == "inline-block"){
            $("#nav_ul").css("display", "none");
        }
        else{
            $("#nav_ul").attr("style", "display:inline-block !important");
        }
    });
});
