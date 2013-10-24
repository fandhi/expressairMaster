$(document).ready(function(){
	  
	//jquery for select language
	$("#country_id").selectbox();
		
	//jquery ui tabs
	$( "#tabs" ).tabs();
	$( "#accordion" ).accordion();
	
	//jquery input field
	/*$('input[type="text"], textarea, select').addClass("idleField");
		$('input[type="text"], textarea, select').focus(function() {
			$(this).removeClass("idleField").addClass("focusField");
			if (this.value == this.defaultValue){ 
				this.value = '';
			}
			if(this.value != this.defaultValue){
				this.select();
			}
		});
		$('input[type="text"], textarea, select').blur(function() {
			$(this).removeClass("focusField").addClass("idleField");
			if ($.trim(this.value) == ''){
				this.value = (this.defaultValue ? this.defaultValue : '');
			}
		});*/
	
	
	
	
	//show table promo
		$('.myRadio').change(function() {           
			$('.currentGreen').removeClass('currentGreen'); // remove from all
			if ($(this).is(':checked')) {
				$(this).parent().addClass('currentGreen'); // add to current
			}
		});	

		
		/*expand1*/
		$("#showExpand").click(function(){
			$(".expand").toggle(250);
		});
		$(".closeImg").click(function(){
			$(".expand").hide(250);
		});			
		
		/*expand2*/
		$("#showExpand2").click(function(){
				$(".expand2").toggle(250);
			});
		$(".closeImg2").click(function(){
			$(".expand2").hide(250);
		});
		
		/*expand3*/
		$("#showExpand3").click(function(){
				$(".expand3").toggle(250);
			});
		$(".closeImg3").click(function(){
			$(".expand3").hide(250);
		});
		
		/*expand4*/
		$("#showExpand4").click(function(){
			$(".expand4").toggle(250);
		});
		$(".closeImg4").click(function(){
			$(".expand4").hide(250);
		});			
		
		/*expand5*/
		$("#showExpand5").click(function(){
				$(".expand5").toggle(250);
			});
		$(".closeImg5").click(function(){
			$(".expand5").hide(250);
		});
		
		/*expand6*/
		$("#showExpand6").click(function(){
				$(".expand6").toggle(250);
			});
		$(".closeImg6").click(function(){
			$(".expand6").hide(250);
		});
		
		
		//jquery banner home fade 
		$('#banner-fade').bjqs({
			height      : 460,
			width       : 1024,
			responsive  : true,
			autoplay	:true	
		  });	
		  
		  
		//show hide_show menu top1
			$(".menu_top1_mobile").hide();
			$(".show_menu_top1").show();
 
			$('.show_menu_top1').click(function(){
				$(".menu_top1_mobile").toggle();				
			});				
			

		//show hide_show search
			$(".search_mobile").hide();
			$(".toggle_search").show();
 
			$('.toggle_search').click(function(){
				$(".search_mobile").toggle();				
			});			
		
		
			
			
			
				
			
			
				
						
});