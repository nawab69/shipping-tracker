;(function($){

	'use strict';

	$(function(){

		/* ---------------------------------------------------- */
		/*	Revolution slider									*/
		/* ---------------------------------------------------- */


	    if ($('#header').hasClass('style-2')) {

	    	if ($('#rev-slider').length) {
				jQuery("#rev-slider").revolution({
		            sliderType:"standard",
			    	spinner: "spinner3",
			    	responsiveLevels: [4096,1024,778,480],
			    	delay:6000,
		            navigation: {
		                arrows:{
		                	enable:true,
		                	left: {
								container:"slider",
					            h_align:"left",
					            v_align:"center",
					            h_offset:30,
					            v_offset:0
							},
							right: {
					            container:"slider",
					            h_align:"right",
					            v_align:"center",
					            h_offset:30,
					            v_offset:0
							}
		                },
		                bullets:{
				        	style:"",
				        	enable: true,
				        	container: "slider",
				        	hide_onmobile: false,
				        	hide_onleave: false,
				        	hide_delay: 200,
				        	hide_under: 0,
				        	hide_over: 9999,
				        	tmp:'<span class="circle-bullet"></span>', 
				        	direction:"horisontal",
				        	space: 10,       
				        	h_align: "center",
				        	v_align: "bottom",
				        	v_offset: 20
				        }
		            },
		            gridwidth:1170,
		            gridheight:740
		        });

		    }

		}

		else{

			if ($('#rev-slider').length) {
				jQuery("#rev-slider").revolution({
		            sliderType:"standard",
			    	spinner: "spinner3",
			    	responsiveLevels: [4096,1024,778,480],
			    	delay:6000,
		            navigation: {
		                arrows:{
		                	enable:true,
		                	left: {
								container:"slider",
					            h_align:"left",
					            v_align:"center",
					            h_offset:30,
					            v_offset:0
							},
							right: {
					            container:"slider",
					            h_align:"right",
					            v_align:"center",
					            h_offset:30,
					            v_offset:0
							}
		                },
		                bullets:{
				        	style:"",
				        	enable: true,
				        	container: "slider",
				        	hide_onmobile: false,
				        	hide_onleave: false,
				        	hide_delay: 200,
				        	hide_under: 0,
				        	hide_over: 9999,
				        	tmp:'<span class="circle-bullet"></span>', 
				        	direction:"horisontal",
				        	space: 10,       
				        	h_align: "center",
				        	v_align: "bottom",
				        	v_offset: 20
				        }
		            },
		            gridwidth:1170,
		            gridheight:600
		        });

		    }

		}

		/* ---------------------------------------------------- */
        /*	Gallery carousel									*/
        /* ---------------------------------------------------- */

	  	$.mad_global.mad_init_carousel();

		/* ---------------------------------------------------- */
        /*	Tabs												*/
        /* ---------------------------------------------------- */

        $(window).on("load",function(){

        	var tabs = $('.tabs-section');
			if(tabs.length){
				tabs.tabs({
					beforeActivate: function(event, ui) {
				        var hash = ui.newTab.children("li a").attr("href");
				   	},
					hide : {
						effect : "fadeOut",
						duration : 450
					},
					show : {
						effect : "fadeIn",
						duration : 450
					},
					updateHash : false
				});
			}

			if($('ul.smooth_tabs').length){
				$('ul.smooth_tabs li:first').addClass('ui-tabs-active');

				$('ul.smooth_tabs li a').on("click", function(){
				   $('ul.smooth_tabs').find('li').removeClass('ui-tabs-active');
				   $(this).parent('li').addClass("ui-tabs-active");
				  
				   var x = $(this).attr('href');
				   $(".smooth_item").removeClass('current_catalog_item');
				   $(".tabs_content ").children('h3').removeClass('current_catalog_item');
				   $(x).addClass('current_catalog_item');
				});
			}

        });

		/* ---------------------------------------------------- */
        /*	Newsletter											*/
        /* ---------------------------------------------------- */

	    var subscribe = $('[id^="newsletter"]');
	      subscribe.append('<div class="message-container-subscribe"></div>');
	      var message = $('.message-container-subscribe'),text;

	      subscribe.on('submit',function(e){
	        var self = $(this);
	        
	        if(self.find('input[type="email"]').val() == ''){
	          text = "Please enter your e-mail!";
	          message.html('<div class="alert-box warning"><p>'+text+'</p></div>')
	            .slideDown()
	            .delay(4000)
	            .slideUp(function(){
	              $(this).html("");
	            });

	        }else{
	          self.find('span.error').hide();
	          $.ajax({
	            type: "POST",
	            url: "bat/newsletter.php",
	            data: self.serialize(), 
	            success: function(data){
	              if(data == '1'){
	                text = "Your email has been sent successfully!";
	                message.html('<div class="alert-box success"><p>'+text+'</p></div>')
	                  .slideDown()
	                  .delay(4000)
	                  .slideUp(function(){
	                    $(this).html("");
	                  })
	                  .prevAll('input[type="email"]').val("");
	              }else{
	                text = "Invalid email address!";
	                message.html('<div class="alert-box error"></i><p>'+text+'</p></div>')
	                  .slideDown()
	                  .delay(4000)
	                  .slideUp(function(){
	                    $(this).html("");
	                  });
	              }
	            }
	          });
	        }
	        e.preventDefault();
	    });

		/* ---------------------------------------------------- */
        /*	Loader												*/
        /* ---------------------------------------------------- */

		$("body").queryLoader2({
	        backgroundColor: '#fff',
	        barColor : '#038ed3',
	        barHeight: 4,
	        deepSearch:true,
	        minimumTime:1000,
	        onComplete: function(){
	        	$(".loader").fadeOut('200');
	        }
      	});

		/* ---------------------------------------------------- */
        /*	Sticky menu											*/
        /* ---------------------------------------------------- */

		$('body').Temp({
			sticky: true
		});

		/* ---------------------------------------------------- */
        /*	SmoothScroll										*/
        /* ---------------------------------------------------- */

		try {
			$.browserSelector();
			var $html = $('html');
			if ( $html.hasClass('chrome') || $html.hasClass('ie11') || $html.hasClass('ie10') ) {
				$.smoothScroll();
			}
		} catch(err) {}

		/* ---------------------------------------------------- */
        /*	Fancybox											*/
        /* ---------------------------------------------------- */

		if ($('a.fancy-gallery').length) {
			$('a.fancy-gallery').fancybox();
		}

		if ($('a.fancy-video').length) {
			$("a.fancy-video").on("click", function(){
		        $.fancybox({
		          href: this.href,
		          type: $(this).data("type")
		        }); // fancybox
		        return false;
		    }); // on
		}

	    /* ---------------------------------------------------- */
        /*	Custom Select										*/
        /* ---------------------------------------------------- */

		if ($('.custom-select').length) {
			$('.custom-select').mad_custom_select();
		}

		/* ---------------------------------------------------- */
        /*	Price Scale										    */
        /* ---------------------------------------------------- */

		var slider;
		if($('#price').length){
			slider = $('#price').slider({ 
		 		animate: true,
				range: true,
				values: [ 20, 400 ],
				min: 0,
				max: 500,
				slide : function(event ,ui){
					$('.range-values').find('.first-limit').val('$' + ui.values[0]);
					$('.range-values').find('.last-limit').val('$' + ui.values[1]);
				}
			});
		}
		if($('#distance').length){
			slider = $( "#distance" ).slider({
				animate: true,
			    value: 0,
			    min: 0,
			    max: 1000,
			    step: 1,
			    slide: function( event, ui ) {
			       $( "#amount" ).val(  ui.value + " km" );
			       $( "#total" ).val(  "Total: $ " + ui.value );
			    }
		    });
		    $( "#amount" ).val( $( "#distance" ).slider( "value" ) + " km" );
		    $( "#total" ).val( "Total: $ " +  $( "#distance" ).slider( "value" ) );
		}
		

		/* ---------------------------------------------------- */
        /*	Accordion & Toggle									*/
        /* ---------------------------------------------------- */

		var aItem = $('.accordion:not(.toggle) .accordion-item'),
			link = aItem.find('.a-title'),
			$label = aItem.find('label'),
			aToggleItem = $('.accordion.toggle .accordion-item'),
			tLink = aToggleItem.find('.a-title');

			aItem.add(aToggleItem).children('.a-title').not('.active').next().hide();

		function triggerAccordeon($item) {
			$item
			.addClass('active')
			.next().stop().slideDown()
			.parent().siblings()
			.children('.a-title')
			.removeClass('active')
			.next().stop().slideUp();
		}


		if ($label.length) {
			$label.on('click',function(){
				triggerAccordeon($(this).closest('.a-title'))
			});
		} else {
			link.on('click',function(){
				triggerAccordeon($(this))
			});
		}

		tLink.on('click',function(){
			$(this).toggleClass('active')
			.next().stop().slideToggle();

		});

		/* ---------------------------------------------------- */
        /*	Quantity											*/
        /* ---------------------------------------------------- */

		var q = $('.quantity');

		q.each(function(){
			var $this = $(this),
				button = $this.children('button'),
				input = $this.children('input[type="text"]'),
				val = +input.val();

			button.on('click',function(){
				if($(this).hasClass('qty-minus')){
					if(val === 1) return false;
					input.val(--val);
				}
				else{
					input.val(++val);
				}
			});
		});

		/* ---------------------------------------------------- */
        /*	Contact Form										*/
        /* ---------------------------------------------------- */

		if ($('#contact-form').length){

			var cf = $('#contact-form');
			cf.append('<div class="message-container"></div>');

			cf.on("submit",function(event){

				var self = $(this),text;

				var request = $.ajax({
					url:"bat/mail.php",
					type : "post",
					data : self.serialize()
				});

				request.then(function(data){
					if(data == "1"){

						text = "Your message has been sent successfully!";

						cf.find('input:not([type="submit"]),textarea').val('');

						$('.message-container').html('<div class="alert-box success"><i class="icon-smile"></i><p>'+text+'</p></div>')
							.delay(150)
							.slideDown(300)
							.delay(4000)
							.slideUp(300,function(){
								$(this).html("");
							});

					}
					else{
						if(cf.find('textarea').val().length < 20){
							text = "Message must contain at least 20 characters!"
						}
						if(cf.find('input').val() == ""){
							text = "All required fields must be filled!";
						}
						$('.message-container').html('<div class="alert-box error"><i class="icon-warning"></i><p>'+text+'</p></div>')
							.delay(150)
							.slideDown(300)
							.delay(4000)
							.slideUp(300,function(){
								$(this).html("");
							});
					}
				},function(){
					$('.message-container').html('<div class="alert-box error"><i class="icon-warning"></i><p>Connection to server failed!</p></div>')
							.delay(150)
							.slideDown(300)
							.delay(4000)
							.slideUp(300,function(){
								$(this).html("");
							});
				});

				event.preventDefault();

			});

		}
    
		/* ---------------------------------------------------- */
		/*	Main elements run									*/
		/* ---------------------------------------------------- */

		$.mad_core.run();

		/* ---------------------------------------------------- */
		/*	Demo switcher									    */
		/* ---------------------------------------------------- */

		$(window).on("load",function(){

			$(".btn-demo").on('click',function() {
	            $('.demo-sw').toggleClass('open');
	            return false;
	        });

	        var $win = $('.wrapper-container'); // or $box parent container
			var $box = $(".demo-sw");
			var $sb = $(".btn-demo");
			
		 	$win.on("click.Bst", function(event){		
				if ( 
	            $box.has(event.target).length == 0 //checks if descendants of $box was clicked
	            &&
	            !$box.is(event.target) //checks if the $box itself was clicked
	            &&
	            !$sb.is(event.target) //checks if the $box itself was clicked
		        ){
					$('.demo-sw').removeClass('open');;
				}
			});
			  
		});

		/* ---------------------------------------------------- */
		/*	Animate a regular anchor navigation					*/
		/* ---------------------------------------------------- */

	    if ($('a.animated').length) {

	    	$('body').localScroll({
	           hash: true,
	           filter: '.animated',
	           onBefore: function(){
                 this.offset = -200;
               }
	        });

	    }

	    /* ---------------------------------------------------- */
		/*	Elevate zoom					*/
		/* ---------------------------------------------------- */

		if($('[data-zoom-image]').length){

			var button = $('.qv-preview');

			$("#zoom-image").elevateZoom({
				gallery:'thumbnails',
				galleryActiveClass: 'active',
				zoomType: "inner",
				cursor: "crosshair",
				responsive:true,
			    zoomWindowFadeIn: 500,
				zoomWindowFadeOut: 500,
				easing:true,
				lensFadeIn: 500,
				lensFadeOut: 500
			});

			button.on("click", function(e){
			  var ez = $('#zoom-image').data('elevateZoom');
				$.fancybox(ez.getGalleryList());
			  	e.preventDefault();
			});

		}


		/* ---------------------------------------------------- */
		/*	Google Maps											*/
		/* ---------------------------------------------------- */

		if ($('#googleMap').length) {

			$(document).ready(function() {

				function loadMap() {
				  	var mapProp = {
					    center: {lat: 51.503454, lng: -0.124755},
					    zoom:15,
					    mapTypeId:google.maps.MapTypeId.ROADMAP,
					    styles : [{featureType:'all',stylers:[{saturation:-100},{gamma:0.0}]}]

					};

					var map = document.getElementById('googleMap');

					if(map !== null){

				    	var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

					}
		            
		            setMarkers(map);

				}
				var marks = [
				  ['first', 51.503454,-0.101562],
				  ['second', 51.501454,-0.124755],
				  ['third', 51.499633,-0.148755]
				];

	            function setMarkers(map) {

					for (var i = 0; i < marks.length; i++) {
						var mark = marks[i];
						var marker = new google.maps.Marker({
						  position: {lat: mark[1], lng: mark[2]},
						  map: map,
						  icon: 'images/map_marker.png',
						  title: mark[0],
						  zIndex: mark[3]
						});
					}
				}
				google.maps.event.addDomListener(window, 'load', loadMap);

			});
			
		}
    
	});

})(jQuery);