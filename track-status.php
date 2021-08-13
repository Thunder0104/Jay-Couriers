<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Track Your Courier</title>
	<meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway+Dots&display=swap" rel="stylesheet">

    <style>
        .body-bg {
            background-color: #9921e8;
            background-image: linear-gradient(315deg, #9921e8 0%, #5f72be 74%);
        }
        .backdrop{
          background: #f7f6f6;
    color: #5f5f5f;
        }
        button {
    background-color: #F5B461;}
    button:hover{
      background-color:#EC524B;
      color:#F3EAC2;
      font-weight: bold;
    }
    .rounded{
      
    border-radius: 1.5rem;
    }
    .lemon:hover{
      color:#7D0633;
      font-weight: bold;
    }
    </style>


</head>

<body class="min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;padding-top:0px;padding-bottom:0px; background-color:#9AD3BC;">
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
					<span class="ml-2 text-xl font-bold tracking-wide text-purple-900 uppercase">JAY COURIERS</span>
      </a>
      <ul class="flex items-center hidden space-x-8 lg:flex">
        <li><a href="index.php" aria-label="Our product" title="Our product" class="lemon font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-deep-purple-accent-400">HOME</a></li>
        <li><a href="login.php" aria-label="Our product" title="Our product" class="lemon font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-deep-purple-accent-400">ADMIN LOGIN</a></li>
        
        
      </ul>
</div>
</div>
</div>
	
<section class="text-gray-600 body-font" style="
    padding-left: 96px;
    padding-top: 20px;
    padding-right: 96px;
    
">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center" style="padding-top: 20px;">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Tracking Order
        <br class="hidden lg:inline-block">Is Easy Now.
      </h1>
      <p class="mb-8 leading-relaxed">Now customers can easily track status their courier by just using their shipment's consignment order.</p>
      <div class="flex justify-center">
        <a href="#puppy" onclick="toggleFunction()"> <button class="inline-flex text-white border-0 py-2 px-6 focus:outline-none hover:bg-F3EAC2 rounded text-lg" >Track Shipment</button></a>
  
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="del3r.jpg">
    </div>
  </div>
</section>
    <main id="puppy" class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl">Track and Trace Your Courier!</h3>
            <p class="text-gray-600 pt-2">Enter Your Consignment Number to track your courier.</p>
        </section>

        <section class="mt-10" style="margin-top:0px;">
        <form action="track-result.php" method="post" name="form" id="form" class="flex flex-col pt-3 md:pt-8">
                    <div class="flex flex-col pt-4">
                        <label for="Details" class="text-lg">Enter Details</label>
                        <input name="Consignment" id="Consignment" maxlength="50" type="text"placeholder="Enter Your Consignment Number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
    
                    
    
                    <input type="submit" name="Submit" onClick="MM_validateForm('Consignment','','R');return document.MM_returnValue" value="Track Now" class="rounded bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">
                </form>
        </section>
    </main>

    


<script language="javascript">
function validate()
  {
 if (form.Consignment.value == "" )
		 {
			alert("Consignment No is required.");
			form.track.focus( );
			return false;
		}
	}
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
             
                      
<footer class="backdrop pt-4 pb-8 xl:pt-8" style="
    padding-top: 0px;
    padding-bottom:0px;
">
<div class="relative mt-16" style="margin-top: 0px;background-color:#F5B461;">
  
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
        <a href="tel:850-123-5021" aria-label="Our phone" title="Our phone" class="transition-colors duration-300 text-green-500 hover:text-green-800">850-123-5021</a>
      </div>
      <div class="flex">
        <p class="mr-1 text-gray-800">Email:</p>
        <a href="mailto:info@lorem.mail" aria-label="Our email" title="Our email" class="transition-colors duration-300 text-green-500 hover:text-green-800">info@jaycouriers.mail</a>
      </div>
      <div class="flex">
        <p class="mr-1 text-gray-800">Address:</p>
        <a href="https://www.google.com/maps" target="_blank" rel="noopener noreferrer" aria-label="Our address" title="Our address" class="transition-colors duration-300 text-green-500 hover:text-green-800">
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



</footer>


</body>
</html>
