'use strict';

var main = function () {
    var r = pageId;
    
    $('header .cube').css({
        'transform': 'rotate3d(0, 1, 0, ' + 90 * r + 'deg)'
    });
    
    $('.lang-menu').click(function () {
        $('.lang-menu .languages').fadeToggle(300, 'linear');
    });
    
    $('.lang-menu').mouseleave(function () {
        $('.lang-menu .languages').fadeOut(300, 'linear');
    });
    
    $('.service .text, .service .button').click(function () {
        $(this).siblings('.demo').fadeIn(300, 'linear');
        $(this).siblings('.demo').css('display', 'flex');
    });
    
    $('header .arrow:last-of-type').click(function () {
        r++;
        $('header .cube').css({
            'transform': 'rotate3d(0, 1, 0, ' + 90 * r + 'deg)'
        });
    });
    
    $('header .arrow:first-of-type').click(function () {
        r--;
        $('header .cube').css({
            'animation-name': 'none',
            'transform': 'rotate3d(0, 1, 0, ' + 90 * r + 'deg)'
        });
    });
    
    $('.service').click(function () {
        $('.details').css({
            "right": "0",
            "opacity": "0",
            "z-index": "-5"
        });
        if ($(this).children('.details').css('right') !== "0px") {
            $(this).children('.details').css({
                "right": "0px",
                "opacity": "0",
                "z-index": "-5"
            });
        } else {
            $(this).children('.details').css({
                "right": "100%",
                "opacity": "1",
                "z-index": "1"
            });
        }
    });
    
    $('.list').mouseleave(function () {
        $('.details').css({
            "right": "0px",
            "opacity": "0",
            "z-index": "-5"
        }); 
    });
        
    $(".sites li").click(function () {
        var target = $(this).attr('class').trim();
        $(".catalog").children('.' + target).slideToggle(300);
        $(".catalog").children(':not(.' + target + ')').slideUp(300);
        $(".catalog").children('.' + target).accordion({
            collapsible: true,
            heightStyle: 'content'
        });
        
    });
    
    $(".sites li").mouseenter(function () {
        $(this).children('p').fadeIn(0);
    });
    
    $(".sites li").mouseleave(function () {
        $(this).children('p').fadeOut(0);
    });
};

$(document).ready(main);