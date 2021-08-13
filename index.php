<!DOCTYPE html>
<html>
<title>Courier Service</title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Jay Couriers</title>
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<style>
.backdrop{
  content="";
  position:fixed;
  left: 0;
    right: 0;
    z-index: -1;
    display:block;
    background-image:url(del5.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    
    filter:blur(5px);
    height:100vh;
}
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {

    height: 100%;
    color: #ffc530;
    line-height: 1.8;
    
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  
  background-size:200%;
}


.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>

	
<!-- Navbar (sit on top) -->


<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
<div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
		<div class="relative flex items-center justify-between">
			<div class="flex items-center">
				<a href="#" aria-label="Company" title="Company" class="inline-flex items-center mr-8">
					<svg class="w-8 text-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round"
					 stroke-miterlimit="10" stroke="currentColor" fill="none">
						<rect class="text-purple-400" x="3" y="1" width="7" height="12"></rect>
						<rect class="text-red-400" x="3" y="17" width="7" height="6"></rect>
						<rect class="text-red-400" x="14" y="1" width="7" height="6"></rect>
						<rect class="text-purple-400" x="14" y="11" width="7" height="12"></rect>
					</svg>
					<span class="ml-2 text-xl font-bold tracking-wide text-red-900 uppercase">JAY COURIERS</span>
      </a>
      <ul class="flex items-center hidden space-x-8 lg:flex">
        <li><a href="index.php" aria-label="Home" title="Home" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">HOME</a></li>
        <li><a href="#about" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400" href="javascript:void(0);" onclick="toggleFunction()">ABOUT</a></li>
        
        
      </ul>
</div>
</div>
</div>
</div>

<!-- Container (About Section) -->
<section class="text-gray-600 body-font" style="
    padding-left: 96px;
    padding-top: 20px;
    padding-right: 96px;
">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center" style="padding-top: 20px;">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Services Provided
        <br class="hidden lg:inline-block">By Us.
      </h1>
      <p class="mb-8 leading-relaxed">In this, we provide mainly 2 services. One is Admin Login in which branch managers and administrators people can login and can do many things by accessing the couriers data and managing them.The other is for customers to track status of the courier.</p>
      <div class="flex justify-center">
        <a href="..login.php" ><button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Admin Login</button></a>
        <a href="track-status.php"> <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Track Status</button></a>
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="del3r.jpg">
    </div>
  </div>
</section>
<section class="max-w-screen-xxl bg-green-500 dark:bg-gray-800 px-4 py-12 mx-auto sm:py-16 sm:px-6 lg:px-8 lg:py-20" style="
    margin-left: 0px;
    margin-right: 0px;
">
    <div class="max-w-4xl mx-auto text-center" id="about">
        <h2 class="text-3xl font-extrabold leading-9 text-white sm:text-4xl sm:leading-10">
            ABOUT US
        </h2>
        <p class="mt-3 text-base leading-7 sm:mt-4 text-white">
        JAY COURIERS is one of the most reputed and fast growing courier services to the clients.Our services are widely acknowledge for their features like time saving and very efficient in use.Sending the courier across the internet and no need to visit anywhere.The system is used for daily activities such as booking a courier and track courier etc.
        </p>
        <p class="mt-3 text-base leading-7 sm:mt-4 text-white">A Courier company is one which delivers messages, packages and mail and is known for their speed, security, tracking service and specialisation.
   Courier services became increasingly popular with the arrival of Internet shopping. Being able to order large and multiple items from online sellers required specialist delivery services that would enable customers to not only receive their items but also enable online sellers to offer things such as next day delivery. Something that is only possible with a courier service.
   </p> </div>
    
    
</section>


<!-- Footer -->
<footer class="bg-white dark:bg-purple-800 pt-4 pb-8 xl:pt-8" style="
    padding-top: 0px;
">
<div class="relative mt-16" style="margin-top: 0px;background-color:#ffc530;">
  <svg class="absolute top-0 w-full h-6 -mt-5 sm:-mt-10 sm:h-16 text--400" preserveAspectRatio="none" viewBox="0 0 1440 54">
    <path fill="currentColor" d="M0 22L120 16.7C240 11 480 1.00001 720 0.700012C960 1.00001 1200 11 1320 16.7L1440 22V54H1320C1200 54 960 54 720 54C480 54 240 54 120 54H0V22Z"></path>
  </svg>
  <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
  <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">
    <div class="sm:col-span-2">
      <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
      <svg class="w-8 text-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round"
					 stroke-miterlimit="10" stroke="currentColor" fill="none">
						<rect class="text-purple-400" x="3" y="1" width="7" height="12"></rect>
						<rect class="text-red-400" x="3" y="17" width="7" height="6"></rect>
						<rect class="text-red-400" x="14" y="1" width="7" height="6"></rect>
						<rect class="text-purple-400" x="14" y="11" width="7" height="12"></rect>
					</svg>
					<span class="ml-2 text-xl font-bold tracking-wide text-red-900 uppercase">JAY COURIERS</span>
      </a>
      <div class="mt-6 lg:max-w-sm">
        <p class="text-sm text-gray-800">
        <b>JAY COURIERS</b> is one of the most reputed and fast growing courier services to the clients.
        </p>
        <p class="mt-4 text-sm text-gray-800">
        Sending the courier across the internet and no need to visit anywhere.The system is used for daily activities such as booking a courier and track courier etc.
        </p>
      </div>
    </div>
    <div class="space-y-2 text-sm">
      <p class="text-base font-bold tracking-wide text-gray-900">Contacts</p>
      <div class="flex">
        <p class="mr-1 text-gray-800">Phone:</p>
        <a href="tel:850-123-5021" aria-label="Our phone" title="Our phone" class="transition-colors duration-300 text-purple-400 hover:text-green-800">850-123-5021</a>
      </div>
      <div class="flex">
        <p class="mr-1 text-gray-800">Email:</p>
        <a href="mailto:info@lorem.mail" aria-label="Our email" title="Our email" class="transition-colors duration-300 text-purple-400 hover:text-green-800">info@jaycouriers.mail</a>
      </div>
      <div class="flex">
        <p class="mr-1 text-gray-800">Address:</p>
        <a href="https://www.google.com/maps" target="_blank" rel="noopener noreferrer" aria-label="Our address" title="Our address" class="transition-colors duration-300 text-purple-400 hover:text-green-800">
          312 Police Colony, VJA
        </a>
      </div>
    </div>
    <div>
      <span class="text-base font-bold tracking-wide text-gray-900">Social</span>
      <div class="flex items-center mt-1 space-x-3">
        <a href="https://github.com/thunder0104" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792">
                        <path d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z">
                        </path>
                    </svg>
        </a>
        <a href="https://www.linkedin.com/in/jayanth-gollapudi-328a871b8/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                <svg width="20" height="20" fill="currentColor" class="text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z">
                    </path>
                </svg>
            </a>
      </div>
      
    </div>
  </div>
  
  
  <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row">
    <p class="text-sm font-light text-gray-600">
      © 2020 Created by <a class="underline hover:text-primary-gray-20" href="https://www.linkedin.com/in/jayanth-gollapudi-328a871b8/">Jayanth</a>
    </p>
    
  </div>
</div>


</footer>

<script>
  function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
