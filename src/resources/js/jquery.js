$(function(){
    $("a[href^='http://']").attr("target","_blank");
    $(".accordion").click(function(){
         $("#slideBox").slideToggle("slow");
    });
});