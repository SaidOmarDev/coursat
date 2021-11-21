/* global, $, console, alert*/
$(function(){
    'use strict';
    $('.content-bar:first .bar-content').css('display','block');
    $('.content-bar .head-bar').click(function(){
        $(this).next('.bar-content').slideToggle(500);
    });
});

function logout(e) {
    e.preventDefault();
    document.querySelector('#logout-form').submit();
}
