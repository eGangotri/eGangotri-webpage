<!doctype html>
<html>
<head>
<meta charset="UTF-8">	
<meta name="viewport" content="width=device-width, initial-scale=1">

	
<title>Mission | Akshay Anant Foundation</title>	
	


<link rel= "icon" href="images/favicon.png" type="image/ico"  />
<link rel= "SHORTCUT ICON" href="images/favicon.png" />
<link rel="apple-touch-icon" href="images/favicon.png" alt="Touch icon">	
	
	
	
	
	
<script type="text/javascript">
<!--
function toggle_visibility(id) {
var x = document.getElementById(id);
if (x.style.display === "block") {
x.style.display = "none";
} else {
x.style.display = "block";
}
} //-->
</script>	
		
	
	
	
<!-- Sticky Header -->
<script src="js/classie.js"></script>
<script>
function init() {
window.addEventListener('scroll', function(e){
var distanceY = window.pageYOffset || document.documentElement.scrollTop,
shrinkOn = 50,
header = document.querySelector("header");
if (distanceY > shrinkOn) {
classie.add(header,"darker");
} else {
if (classie.has(header,"darker")) {
classie.remove(header,"darker");
}
}
});
}
window.onload = init();
</script>
<!-- Sticky Header -->
		
	


<script src="js/jquery-2.1.1.min.js"></script>
	
<link href="css/menu.css" rel="stylesheet" type="text/css" />	
<link href="css/carousel3.css" rel="stylesheet" type="text/css" />	
<link href="css/lightcase.css" rel="stylesheet" type="text/css">
<link href="css/banner.css" rel="stylesheet" type="text/css" />	
<link href="css/custom.css" rel="stylesheet" type="text/css" />
<link href="css/custom-responsive.css" rel="stylesheet" type="text/css" />		
		
	
	
</head>

<body>
	
	
	

<!-- Responsive Menu -->
<div class="responsive-menu-icon" onClick="myFunction2(this); toggle_visibility('menu');"  >
<div class="bar1"></div>
<div class="bar2"></div>
<div class="bar3"></div>
</div>
<!-- Responsive Menu -->	
	
	
	
	
<!-- Header -->	
<?php include 'header.php';?>
<!-- Header -->	
	
	
	


<div class="header-gap">&nbsp;</div>	
	
	
	
	
	
	
	
	
	
<!-- Inside Banner -->		
<div class="inside-banner" style="background-image:url(images/inside-banner2.jpg);"> 	
<div class="grid-1280">
<div class="row">


<div class="col-1-of-2">
<h2 class="page-title"> Mission </h2>
</div>



</div>
</div>
</div>
<!-- Inside Banner -->			

	
	



	

	
	
	
<!-- Lastest Blog -->		
<div class="latest-blog">	
<div class="grid-1280">
<div class="row">




<div class="col-3-of-4" id="blog-left">
<h4>Mission</h4>
<p>Akshay Anant Foundation is on a mission to establish schools and colleges that provide not only education but also a nurturing environment for the holistic development of underprivileged children. We extend our support by providing financial assistance to various educational institutions, including universities, laboratories, and research centers across India. Our mission includes offering scholarships and studentships without any discrimination, ensuring that every deserving student has the opportunity to pursue their dreams. </p>

<h4>Vision</h4>
<p>Our vision encompasses more than just education; it embraces the overall well-being of communities. Akshay Anant Foundation strives to develop and maintain healthcare institutions such as hospitals, medical colleges, nursing facilities, maternity homes, and child welfare centers. In addition, we are committed to promoting the arts and sciences, recognizing the importance of a well-rounded education for a brighter future.</p>

<p>As part of our broader social responsibility, we aim to provide aid to homes for the aged, orphanages, and institutions catering to physically handicapped or mentally challenged individuals. During times of crisis, our vision extends to extending timely relief to victims of disasters such as famine, earthquakes, floods, fires, or pestilence.</p>

<p>In alignment with our commitment to environmental sustainability and cultural preservation, Akshay Anant Foundation actively supports initiatives that safeguard India's rich heritage and culture. We envision a society where every individual, regardless of their background, has the opportunity to thrive and contribute positively to the community. Join us in our mission to create a lasting impact on the lives of those in need.</p>

</div>











</div>













	

	
	
</div>
</div>
</div>	
<!-- Lastest Blog -->				
	
		
	
	
	
	
	
		
	
	
	
	


	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<!-- Footer -->	
<?php include 'footer.php';?>
<!-- Footer -->	
	
	
	
	
	
	
<div class='scrolltop'><div class='scroll icon'><a href="#"><span>&nbsp;</span></a></div></div>
	

<script type="text/javascript">
<!--
$(window).scroll(function() {
if ($(this).scrollTop() > 50 ) {
$('.scrolltop:hidden').stop(true, true).fadeIn();
} else {
$('.scrolltop').stop(true, true).fadeOut();
}
});
$(function(){$(".scroll").click(function(){$("html,body").animate({scrollTop:$(".thetop").offset().top},"1000");return false})})	
//-->
</script>		
		
	
	
	
	
	
<script>
function myFunction2(x) {x.classList.toggle("change");}	
</script>		

	
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
	easing: 'ease-in-out-sine'
  });
  setInterval(addItem, 300);
  var itemsCounter = 1;
  var container = document.getElementById('aos-demo');
  function addItem () {
	if (itemsCounter > 42) return;
	var item = document.createElement('div');
	item.classList.add('aos-item');
	item.setAttribute('data-aos', 'fade-up');
	item.innerHTML = '<div class="aos-item__inner"><h3>' + itemsCounter + '</h3></div>';
	container.appendChild(item);
	itemsCounter++;
  }
</script>		




<script src="js/multislider.js"></script> 

<script>
$('#mixedSlider3').multislider({
duration: 750,
interval: 3000
});
</script>	
	

<script src="js/lightcase.js"></script>
<script src="js/jquery.events.touch.js"></script>

<script>
$('.showcase').lightcase();
</script>


<script type="text/javascript" src="js/tickerme.min.js"></script>	
<script type="text/javascript">$(function(){$('#ticker').tickerme();});</script>

</body>
</html>
