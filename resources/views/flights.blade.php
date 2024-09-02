 <!DOCTYPE html>
 <html lang="en">
 <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Keyword" Content="Travel Agency, Tour, Flight Ticket, Hotel Booking">
        <meta name="Keyword" Description=" Travelling,Holiday Package,Ticketing, Airport Services">
        <meta name="Keyword" Author=" Wole George-Taylor">
        <link rel="icon" href="./img/spicy banner.jpg">
        <title>Spicy Travel n Tour Ltd</title>
        <link rel="stylesheet" href="{{asset('css/output.css')}}">
        <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css')}}">

 </head>
 
 <body class="font-primary">
    <main class="w-full">
    <section class="w-full h-[100vh]  bg-header  bg-cover bg-no-repeat bg-center bg-color1 bg-blend-multiply bg-opacity-60 " >
        <section class="w-full flex flex-wrap justify-center ">
            <header 
            class="w-[85%]  xl:w-[73%]  container hidden lg:flex justify-between h-[60px]  items-center py-[45px] border-b-[1px] border-white border-opacity-40">
            <figure class="w-[140px]">
               <img src="img/spicy banner.jpg" alt="logo"  class="w-[50%] text-white  bg-color1 p-3 rounded-[50%]" id="logo">
            </figure>
            <nav class="h-[100%] md:w-[70%]">
                <ul class="h-[100%] flex items-center gap-8 justify-end">
                    <li class="list-none  "><a class="decoration-none text-white hover:text-color3 transition-all duration-500"
                            href="welcome">Home</a></li>
                    <li class="list-none "><a class="decoration-none text-white  hover:text-color3 transition-all duration-500"
                            href="flights">Flights</a></li>
                    <li class="list-none"><a class="decoration-none text-white  hover:text-color3 transition-all duration-500"
                            href="visa">VISA</a></li>
                    <li class="list-none "><a class="decoration-none text-white  hover:text-color3 transition-all duration-500"
                            href="https://www.facebook.com/profile.php?id=61559042624426&mibextid=ZbWKwL">Blog</a></li>
                    <li class="list-none"><a class="decoration-none text-white  hover:text-color3 transition-all duration-500"
                            href="aboutus">About Us</a></li>
                    <li class="list-none"><a class="decoration-none text-white  hover:text-color3 transition-all duration-500"
                            href="contactus">Contact Us</a></li>
                </ul>
            </nav>
        </header>

 <!-- header for mobile -->
 <header
 class="w-[95%] sm:w-[70%] md:w-[80%] container flex h-[60px] justify-between  items-center  lg:hidden  py-[45px] relative border-b-[1px] border-white border-opacity-40 ">
 <figure class="w-[140px]"> 
    <img src="./img/spicy banner.jpg" alt="" class="w-[100%]">
 </figure>
 <div class=" w-1/2 h-full flex justify-end items-center ">
     <i class="bi bi-list text-3xl text-white cursor-pointer ham-menu-icon"></i>
 </div>
 <nav class="menu hidden h-[400px] w-full absolute bg-white left-0 top-[90px]   z-30 ">
     <ul class="h-full w-full flex flex-col  justify-center ms-6">
         <li class="list-none my-3"><a
                 class="decoration-none text-color2 flex hover:text-color4  transition-all duration-600"
                 href="welcome">Home</a></li>
         <li class="list-none my-3"><a
                 class="decoration-none text-color2 flex  hover:text-color4 transition-all duration-600"
                 href="flights">Flights</a></li>
         <li class="list-none my-3"><a
                 class="decoration-none text-color2 flex  hover:text-color4 transition-all duration-600"
                 href="visa">VISA</a></li>
         <li class="list-none my-3"><a
                 class="decoration-none text-color2 flex   hover:text-color4  transition-all duration-600"
                 href="https://www.facebook.com/profile.php?id=61559042624426&mibextid=ZbWKwL">Blog</a></li>
         <li class="list-none my-3"><a
                 class="decoration-none text-color2 flex  hover:text-color4  transition-all duration-600"
                 href="aboutus">About Us</a></li>
         <li class="list-none my-3"><a
                 class="decoration-none text-color2 flex   hover:text-color4 transition-all duration-600"
                 href="contactus">Contact US</a></li>
     </ul>
 </nav>
</header>
<!-- end header mobile  -->
 
 <!-- body starts -->
<marquee>
        <div>A spicy way to explore...</div>
</marquee>
<h1>Flight search form</h1> 

 
    <form action="API" method="GET">

    <div class="booking-form">
    <div class="radio-btn">
    <input type="radio" class="btn" name="check" checked="checked"> <span>Roundtrip</span>
    <input type="radio" class="btn" name="check"> <span>One-way</span>
    <input type="radio" class="btn" name="check"> <span>Multi-City</span>
    </div>

    <div class="booking-form">
    <label>Flying From</label>
    <input type="text" class="form-control" placeholder="City or Airport">
    <label>Flying To</label>
    <input type="text" class="form-control" placeholder="City or Airport">

    <div class="input-grp">
    <label>Departing</label>
    <input type="date" class="form-control select-date">           
    </div>

    <div class="input-grp">
    <label>Returning</label>
    <input type="date" class="form-control select-date">           
    </div>

    <div class="input-grp">
    <label>Adults</label>
    <input type="number" class="form-control" value="1">           
    </div>

    <div class="input-grp">
    <label>Children</label>
    <input type="number" class="form-control" value="0">           
    </div>

    <div class="input-grp">
    <label>Travel Class</label>
    <select class="custom-select">
        <option value="1">Economy Class</option>
        <option value="2">Premium Class</option>
        <option value="3">Business Class</option>
    </select>         
    </div>

    <div class="input-grp">
    <button type="button" class="btn btn-primary flight">Show Flights</button>
    </div>

    </div>
    </form>


  <section class="w-full flex justify-center h-auto  bg-color3">
        <footer class="w-full container h-auto flex flex-col 2xl:px-36 ">
                <div class="flex justify-center border items-center boder-1 border-color5 my-10 flex-wrap mx-6 ">
                        <div class="w-full lg:w-[30%] flex  items-center py-2 lg:border-r-2 lg:border-r-color5 my-5 ps-8 lg:ps-0" >
                                <i class="bi bi-telephone-outbound text-4xl me-4 text-white bg-color1 p-3"></i>
                                <div class="w-full text-white"><p class="font-secondary">Call us</p><p>+234 9042153922</p></div>
                        </div>
                        <div class="w-full lg:w-[35%] flex items-center py-2 lg:border-r-2 lg:border-r-color5 my-5 ps-8" >
                                <i class="bi-envelope-paper text-4xl me-4 text-white bg-color1 p-3"></i>
                                <div class="w-full text-white"><p class="font-secondary">Send us an Email</p><p>info@spicytravelsntour.com</p></div>
                        </div>
                        <div class="w-full lg:w-[30%] flex items-center py-2 my-5 ps-8" >
                                <i class="bi bi-map text-4xl me-4 text-white bg-color1 p-3 "></i>
                                <div class="w-full text-white"><p class="font-secondary">Address</p><p>24, Kakuri Musa Street, Yakowa Estate, NAFDAC, Kaduna </p></div>
                        </div>
                </div>
                <div class="flex  justify-between  my-10 flex-wrap  ">
                        <div class="w-full md:w-[30%] flex flex-col py-2  my-5 px-6 " >
                                <figure class="w-[80%]">
                                        <img src="./img/spicy banner.jpg" alt="" class="w-[50%] text-white  bg-color1 p-3 rounded-[50%]" id="logo4">
                                </figure>
                                <p class="text-color6 my-5">Social</p>
                                <ul class="flex  ">
                                <li class="me-5"><a href="https://www.facebook.com/spicytravelsntour"><i class="bi bi-facebook text-white  bg-color1 p-3 rounded-[50%]"></i></a></li>
                                        <li class="me-5"><a href="https://www.instagram.com/spicytravelsntour"><i class="bi bi-instagram text-white bg-color1 p-3 rounded-[50%]"></i></a></li>
                                        <li class="me-5"><a href=""><i class="bi bi-linkedin text-white  bg-color1 p-3 rounded-[50%]"></i></a></li>
                                </ul>
                        </div>
                        <div class="w-full md:w-[30%] flex flex-col py-2  my-5 md:ps-20 px-6 " >
                              <p class="font-secondary text-white text-xl xl:text-2xl">Quick Links</p>
                              <ul class="mt-7 px-6">
                                <li class="my-2 list-disc marker:text-color1"><a href="https://www.facebook.com/profile.php?id=61559042624426&mibextid=ZbWKwL"  class="text-color6">Blog<i class="bi bi-facebook text-white p-3 rounded-[50%]"></i></a></li>
                                <li class="my-2 list-disc marker:text-color1"><a href="https://wa.me/+2349042153922" class="text-color6">Whatsapp</a></li>
                                <li class="my-2 list-disc marker:text-color1"><a href="https://forms.gle/GGgWXGAKWWcADX9p6" class="text-color6">Consultation</a></li>
                                
                        </ul>
                        </div>
                        <div class="w-full md:w-[28%] flex flex-col  py-2 my-5 px-6 md:px-0 " >
                              <p class="font-secondary text-2xl text-white ">Subscribe</p>
                              <p class="text-color6 mt-5">Sign up for our monthly blogletter to stay informed about travel and tours</p>
                              <form action="processnewsletter.php" method="post" class="mt-5 flex w-full flex-wrap">
                              <input type="email" name="email" placeholder="Email Address" class="px-2 py-5">
                              <button type="submit" a href="" class="text-white bg-color4 py-5 px-3 flex mt-0 md:mt-2 lg:mt-0">Send</button>
                             </form>
                        </div>  
                </div>
                <p style="padding:20px">All Right Reserved 2024 ©Spicy Travels n Tour Ltd RC: 1549808.</p>
        </footer>
    </section>
    </main>
<script src="{{ asset('js/master.js')}}"></script>
  </body>
 </html>