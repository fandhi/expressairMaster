<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Daniel" />

	<title>Test</title>
    
    <link href="css/jscroll.pane.css" rel="stylesheet" type="text/css" media="screen"/>
    
    <script type="text/javascript" src="js/lib.jquery.1.8.0.js"></script>
    <script type="text/javascript" src="js/plugin/jscroll.pane.js"></script>
    <script type="text/javascript" src="js/plugin/jquery.mousewheel.js"></script>
    
    <style type="text/css" id="page-css">
        body {
            margin: 20px;
        }
		.mobile {
		    margin-left:50%;
            left:-120px;
		}
        .mobile .title {color:red;}
        
		.desktop {
		    margin-left:50%;
            left:-220px;
		}
        .desktop .title {color:blue;}
        .mobile,
        .desktop {
            display:none;
        }
	</style>
</head>

<body>
    <script>
        $(document).ready(function(){
            
            function detect_device() {  
                // Get browser width
                var w = $(window).width();
                          
                if ( w <= 400 ) {
                    $('title').text('Mobile');
                    $('.mobile').show().siblings('.desktop').hide();
                } else {
                    $('title').text('Desktop');
                    $('.desktop').show().siblings('.mobile').hide();
                }    
            }
            
            $(window).bind('resize',detect_device).trigger('resize');
            
        });
    </script>
    
    <div class="mobile" style="position: relative;background-color:#ccc;width:200px;padding:20px;color:#fff;">
        <div class="title">Mobile</div>
    </div>
    <div class="desktop" style="position: relative;background-color:#ccc;width:400px;padding:20px;color:#fff;">
        <div class="title">Desktop</div>
    </div>
</body>
</html>