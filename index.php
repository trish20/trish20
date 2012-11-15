<!DOCTYPE html>

<html lang="en">
<head>

<meta charset="UTF-8" name="pebble beach resort">
<meta http-equiv="Content-Style-Type" content="text/css">

<link rel="Stylesheet" href="styles.css" type="text/css" />

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.cycle.all.latest.js"></script>

<title> Pebble Beach Resort</title>


    <style type="text/css">
        .style1
        {
            font-family: "Bodoni MT";
            font-size: medium;
        }
    </style>

</head>

<body>
<a href="#"> <img src= "images/pebblelogo.png" class="logo"></a>
    <header>
    <p></p>
    <form method="get" action="/search" id="search">
    <input name="q" type="text" size="40" placeholder="Search the resort..." />
    </form>
    <p class="style1">Resort Reservations: (800) 654-9300</p>
    </header>


    <nav>
     <div id="cssmenu">
      <ul id="cssmenu">
<li ><a href="#">Golf</a></li>
<li><a href="#">Accomodations</a></li>
<li><a href="#">Packages</a></li>
        <li ><a href="#">Spa</a></li>
<li><a href="#">Dining</a></li>
<li><a href="#">Activities</a></li>
        <li><a href="#">Events</a></li>
      </ul>
     </div>
    </nav>

    <div class="slideshow">
      <img src= "images/resortinn.jpg" width="960px">
      <img src= "images/resortgolf.jpg" width="960px">
      <img src= "images/Resort2.jpg" width="960px">
    </div>
       <script type="text/javascript">
           $(document).ready(function () {
               $(".slideshow").cycle({
                   //next: "#slideshow",
                   //speed: 5000,
                   //timeout: 200,
                   fx: 'fade',
                   responsive: true,
               });
           });
    </script>

   <script type="text/javascript">     
     jQuery(document).ready(function ($) {
           $.ajax({
               url: "http://api.wunderground.com/api/89a09f90c993eb58/geolookup/conditions/q/CA/Pebble_Beach.json",
               dataType: "jsonp",
               success: function (parsed_json) {
                   var location = parsed_json['location']['city'];
                   var temp_f = parsed_json['current_observation']['temp_f'];
                    var weather = "<p>" +
                "Current temperature in " + location + " is: " + temp_f + "</p>"; } 
                $("#temp").append("<p>" + "Current temperature in " + location + " is: " + temp_f + "</p>")
         
               }
           });
       });
    </script>
                                                                                                        
   <div id="weather"></div>
   <div id="temp"></div> 
   <div id="article">
    <h1 class="style4">Welcome to Pebble Beach Resorts</h1>
     <p>Pebble Beach Resorts is a legendary place. Combine a dramatic coastline and mystical forest with a rich history of world-class accommodations, warm hospitality, expert service and grand recreation. Perhaps nowhere else on the planet does this combination come together quite like Pebble Beach Resorts.
     It's no wonder Pebble Beach Resorts has attracted extraordinary visitors throughout its history. From Samuel F. B. Morse to Clint Eastwood. Teddy Roosevelt to Sir Winston Churchill. Jay Leno to Chef Thomas Keller. Bing Crosby to Bill Murray. Bobby Jones and Jack Nicklaus to Phil Mickelson and Tiger Woods. Legendary people drawn to a legendary setting.
     Stay at the award-winning Lodge at Pebble Beach, Inn at Spanish Bay and Casa Palmero. Enjoy our numerous dining experiences. Play our fabled golf courses. All in one truly spectacular corner of the world. Become part of the legend that is Pebble Beach Resorts.</p>
  </div>
  <div id="date">
<h2 class="style3">Make a Reservation</h2>
<img src= "images/calendar.png" class="calendar"><br> <!--will be a JQuery Calendar Datepicker-->
</div>
  </article>

 <footer>
    <div id="bottom">
    <ul id="bottom">
    <!--I'll probably change up the menu style-->
     <li><a href="#" class="reset">Contact Us</a></li>
     <li><a href="#" class="reset">Press & Media</a></li>
     <li><a href="#" class="reset">Directions & Location</a></li>	
     <li><a href="#" class="reset">Site Map</a></li>
     <li><a href="#" class="reset">Privacy Policy</a></li>
     <li><a href="#" class="reset">Home</a></li>
    </ul>
    </div>
    <div id="address">
    Pebble Beach Resorts 17-Mile Drive, Pebble Beach, CA 93953, (800) 654-9300
    </div>

</footer>


<aside>
 </aside>


</body>
</html>