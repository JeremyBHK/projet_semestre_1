$(document).ready(function(){
    $("#switch-ins").click(function(){
        $('#ins').removeClass('displayNone');
        $('#ins').addClass('displayBlock');
        $('#conn').removeClass('displayBlock');
        $('#conn').addClass('displayNone');
    });
    
    $("#switch-conn").click(function(){
        $('#conn').removeClass('displayNone');
        $('#conn').addClass('displayBlock');
        $('#ins').removeClass('displayBlock');
        $('#ins').addClass('displayNone');
    });
});