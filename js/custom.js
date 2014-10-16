//preload images
$(document).ready(function () {
    $("body").queryLoader2({
        barColor: "#4a8fad",
        backgroundColor: "#f6f6f6",
        percentage: true,
        barHeight: 4,
		deepSearch:true,
        completeAnimation: "grow",
        minimumTime: 500
	});
});

//animate on scroll
jQuery(document).ready(function() {
    jQuery('.fade-scroll').addClass("hidden-scroll").viewportChecker({
        classToAdd: 'visible-scroll animated fadeIn',
        offset: 100
	});
	jQuery('.fade-scroll-left').addClass("hidden-scroll").viewportChecker({
        classToAdd: 'visible-scroll animated fadeInLeft',
        offset: 100
	});  
	jQuery('.fade-scroll-right').addClass("hidden-scroll").viewportChecker({
        classToAdd: 'visible-scroll animated fadeInRight',
        offset: 100
	});      
});
//top menu

$('#menuButton').click(function()
{
	$(this).fadeOut();
	$('.overlay').removeClass('hidden');
	$('.menu').
	animate({"right":"0px"}, 1000);
});

$('.closeButton').click(function()
{	$('#menuButton').fadeIn();
	$('.overlay').addClass('hidden');
	$('.menu').animate({"right":"-200px"}, 1000);
});

$('.menu ul li a').click(function()
{
	$('.overlay').addClass('hidden');
});

/*
	$(function() {
    var pull = $('#pull');
	menu = $('.menu');
	menuHeight = menu.height(); 
	
	$(pull).on('click', function(e) {
	e.preventDefault();
	menu.slideToggle();
	});
	var pull2 = $('#pull2');
	menu = $('.menu');
	menuHeight = menu.height(); 
	
	$(pull2).on('click', function(e) {
	e.preventDefault();
	menu.slideToggle();
	});
	
	//Fix per evitare scomparsa dopo apertura se riallargo finestra.
	$(window).resize(function(){
	var w = $(window).width();
	if(w > 320 && menu.is(':hidden')) {
	menu.removeAttr('style');
	}
	}); 
});*/
//top menu
//pulsante torna su
$(window).scroll(function(){
	if ($(this).scrollTop() > 250) {
		$('.scrolltotop').fadeIn();
	}
	else {
		$('.scrolltotop').fadeOut();
	}
});
$('.scrolltotop').click(function(){
	$("html, body").animate({ scrollTop: 0 }, 800);
	return false;
});
//pulsante torna su
//ancore
$('a[href*=#]').click(function() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
	&& location.hostname == this.hostname) {
		var $target = $(this.hash);
		$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
		if ($target.length) {
			var targetOffset = $target.offset().top;
			$('html,body').animate({scrollTop: targetOffset}, 1000);
		return false;}
	}
});

//ancore	

/*grafico torta*/

$.fn.chartAnimate = function(){
	var doughnutData = [
	{
		value: 30,
		color:"#F9706B"
	},
	{
		value : 100,
		color : "#55969D"
	},
	
	{
		value : 50,
		color : "#64C670"
	},
	
	{
		value : 40,
		color : "#FAB67A"
	}
	
	];
	
	var myDoughnut = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(doughnutData); 
}

jQuery(document).ready(function() {
    jQuery('.fade-scroll-right').addClass("hidden-scroll").viewportChecker({
		classToAdd: 'visible-scroll animated fadeIn',
		offset: 100,
		repeat: true
	});
});
jQuery('#canvas').chartAnimate();

//fancybox
$(document).ready(function() {
	$(".fancybox").fancybox();
});	