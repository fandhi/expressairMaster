<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Express Air</title>
        <link rel="shortcut icon" type="images/x-icon" href="favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="css/reset.css"/>	
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" href="css/styles_old.css"/>
        <link rel="stylesheet" type="text/css" href="css/dropdown_menu.css"/>		
        <link rel="stylesheet" type="text/css" href="css/style_booking_form.css"/>
        <link rel="stylesheet" type="text/css" href="css/jquery.selectbox.css"/><!-- style for select language -->
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>		
        <link rel="stylesheet" type="text/css" href="css/bjqs.css"/>		
        <link rel="stylesheet" type="text/css" href="css/accordian.css"/>	        	

        <link rel="stylesheet" type="text/css" href="mobile/css/style_mobile.css"/>
        <link rel="stylesheet" type="text/css" href="mobile/css/styles_old_mobile.css"/>
        <link rel="stylesheet" type="text/css" href="mobile/css/dropdown_menu_mobile.css"/>		
        <link rel="stylesheet" type="text/css" href="mobile/css/style_booking_form_mobile.css"/>
        <link rel="stylesheet" type="text/css" href="mobile/css/jquery.selectbox_mobile.css"/><!-- style for select language -->
        <link rel="stylesheet" type="text/css" href="mobile/css/jquery-ui_mobile.css"/>		
        <link rel="stylesheet" type="text/css" href="mobile/css/bjqs_mobile.css"/>		
        <link rel="stylesheet" type="text/css" href="mobile/css/accordian_mobile.css"/>	

		<link rel="stylesheet" type="text/css" href="css/mediaqueries.css"/>	

        <script type="text/javascript" src="js/jquery_1.8.2.js"></script>
        <script type="text/javascript" src="js/jquery_ui-1.9.0.js"></script>	
        <script type="text/javascript" src="js/jquery_selectbox-0.2.js"></script><!-- js for select language -->		
        <script type="text/javascript" src="js/jquery_bjqs-1.3.min.js"></script><!-- js for fade home -->	
        <script type="text/javascript" src="js/jquery_accordian.js"></script>
        <script type="text/javascript" src="js/jquery_scrolltopcontrol.js"></script><!-- js for scroll top -->	
        <script type="text/javascript" src="js/jquery_functions.js"></script>		

        <!--[if IE 7]>
                <link rel="stylesheet" type="text/css" href="css/style_ie7.css"/>
        <![endif]-->
        <!--[if IE 8]>
                <link rel="stylesheet" type="text/css" href="css/style_ie8.css"/>
        <![endif]-->
        <!--[if IE 9]>
                <link rel="stylesheet" type="text/css" href="css/style_ie9.css"/>
        <![endif]-->	

        <style type="text/css">
            #mobile, #desktop {
                adisplay:none;
            }
        </style>	


    </head>

    <body>

        <script type="text/javascript">      
         
            $(document).ready(function(){
			
                function detect_device() {  
                    // Get browser width
                    var w = $(window).width();
                          
                    if ( w <= 990 ) {                    
                        $('#mobile').show().siblings('#desktop').hide();
                    } else {                    
                        $('#desktop').show().siblings('#mobile').hide();
                    }    
                }            
                $(window).bind('resize',detect_device).trigger('resize');		
				
					
            });          
            
      
        </script>



        


