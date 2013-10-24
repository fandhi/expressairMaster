<?php 
$page = "page4";
include("inc_header.php");
$url = $_SERVER['SERVER_NAME'] . "/expressair/";
$url_root = $_SERVER['DOCUMENT_ROOT'] . "/expressair/";
include("inc_menu.php");
?>
			
			<div id="banner_page">
				<img src="images/content/banner_page1.jpg" alt="banner page"/>
			<div class="clear"></div>	
			</div><!-- end banner_page -->
			
			
			<!-- star content_page -->
			<div id="content_page">	
				
				<div id="left_wrap">
				
					<div class="sideleft_top"><h2>Flight Information</h2></div>
					<div class="sideleft_mid">
						
						<div class="sideleftmenu">
							<ul class="">
								<li><a href="travel_tourist.php"><span>Tourist Guide</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a class="active" href="travel_place.php"><span>Place of Interest</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a href="travel_fare.php"><span>Fare Deals</span></a></li>
									<li><div class="side_line"></div></li>
								<li><a href="travel_reservation.php"><span>Travel & Reservation Tips</span></a></li>
							</ul>
						<div class="clear"></div>	
						</div><!--end sideleftmenu-->
						
					</div><!-- end sideleft_mid -->					
					<div class="sideleft_bot">left wrap</div><!-- end sideleft_bot -->
				
				<div class="clear"></div>	
				</div><!-- end left_wrap -->
				
				<div id="right_wrap">
				
					<div class="breadcrumb">
						<ul>
							<li><a href="#">Home</a>&nbsp;>&nbsp;</li>
							<li><a href="#">Travel Information</a>&nbsp;-&nbsp;</li>
							<li><a href="#">Place of Intereset</a>&nbsp;>&nbsp;</li>
							<li>Lovina Beach</li>
						</ul>
					<div class="clear"></div>		
					</div><!-- end breadcrumb -->
					
					<div id="artikel">
					
						<h1>Lovina Beach - "Berenang Ditemani Lumba-Lumba"</h1>											
						<div class="share_social">
							<img src="images/content/share_social.jpg" alt="img"/>
						<div class="clear"></div>
						</div>
						
						<div class="place_img_detail">
							<div class="map_absolute">
								<div class="block">
									<img src="images/content/map_place_detail.jpg" alt="img"/>
								</div>
							</div>
							<img src="images/content/place_detail.jpg" alt="img"/>
						<div class="clear"></div>
						</div><!-- end place_img_detail -->
						
						<p>Pantai Lovina adalah salah satu pantai yang menarik di Bali. Pemandangan dunia bawah air yang luar biasa dan atraksi populer lumba-lumba merupakan hal menarik yang ditawarkan pantai ini. Sebuah perahu tradisional kecil yang disebut, jukung, dapat disewa dari warga desa setempat di pagi hari untuk membawa Anda ke lepas pantai untuk bertemu dengan lumba-lumba. Menurut berita, ada sekitar 500 - 1000 lumba-lumba di pantai Lovina ini.</p>
						<p>Arti "Lovina". "Love" dan "Ina" yang diartikan sebagai Love Indonesia, tidak sesuai dalam konteks Panji Tisna. Istilah �INA� adalah singkatan untuk kontingen atau rombongan atlet Indonesia untuk Asian Games 1963. Sedangkan, Lovina didirikan pada tahun 1953. Menurut Panji Tisna, Lovina memiliki makna filosofis, campuran dua suku kata "Love" dan "Ina". Kata "Love" dari bahasa Inggris berarti kasih yang tulus dan "Ina" dari bahasa Bali atau bahasa daerah yang berarti "ibu". Menurut penggagasnya, Anak Agung Panji Tisna, arti "Lovina" adalah "Cinta Ibu" atau arti luhurnya adalah "Cinta Ibu Pertiwi".</p>
						<p>1. Tidak seperti kebanyakan pantai lain, warna pasir di Lovina berwarna hitam dan merupakan tempat tinggal Lumba-lumba yang sering muncul di pagi hari (jam 6-9 pagi)</p>
						<p>2. Agar lebih mudah, disarankan anda memilih untuk menginap di hotel atau cottage yang tersebar di sekitar pantai Lovina. Beberapa hotel di Lovina bahkan menyediakan show lumba-lumba termasuk berfoto dan terapi.  Jika anda merasa keberatan untuk bangun pagi pagi sekali , ada alternatif akomodasi di lovina .</p>
						<p>3.  Cuaca sangat mendukung kemunculan lumba-lumba di laut lepas. Apabila cuaca cerah, maka kemungkinan besar anda akan dapat menikmati Lumba-Lumba yang berenang di laut lepas. Bulan April � Oktober merupakan waktu yang tepat untuk mengunjungi pantai Lovina.</p>
						<p>4. Bawa kamera anda untuk mengabadikan momen cantik : siapa tahu lumba lumba Lovina muncul di samping perahu anda ?</p>
						<p>5. Perjalanan antara Pantai Lovina � Denpasar memiliki beberapa tempat wisata juga seperti Bedugul, dan beberapa tempat wisata menarik lainnya. Jadi, siapkan sedikit energy setelah wisata di Pantai Lovina untuk menikmati spot lainnya</p>
						
					
						<div class="other_place">
							<h5><span style="color:#006aac;">Other Place of Interest</span></h5>
							<br />
							<?php include('inc_list_other.php');?>
						<div class="clear"></div>	
						</div><!-- end other_place -->
						
						
					<div class="clear"></div>	
					</div><!-- end artikel ------------------------------------------------->
					
					
				<div class="clear"></div>	
				</div><!-- end right_wrap -->
				
			<div class="clear"></div>	
			</div>
			<!-- end content_page -->
			
			
		
	
<?php include("inc_footer.php");?>

<?php
include("mobile/inc_menu.php");
include("mobile/travel_place_detail.php");
include("mobile/inc_footer.php");
?>