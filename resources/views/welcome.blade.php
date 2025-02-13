<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/css/app.css'])
    <style>
        li{
            list-style-type: none;
        }
    </style>
</head>
<body>
    <header class="flex justify-between items-center p-4">
        <div class="flex">
{{--            <img src="{{ asset('images/menu.png') }}" width="30px" height="30px" alt="menu">--}}
            <h2 class="ml-2 md:text-lg lg:text-xl">Flipkart Clone</h2>
        </div>
        <div>
            <ul class="flex text-xl space-x-4  lg:space-x-8">
                <input type="text" placeholder="Search for Products, Brands and More" class="rounded-l-md p-2 text-md md:text-sm lg:text-md hidden sm:hidden md:block lg:block md:w-[400px] lg:w-[600px] bg-blue-100">
                <div class="flex">
                    <img width="40px" height="40px" src="{{ asset('images/login img.png') }}" class=" p-2 rounded-lg" alt="loginimg">
                    <p class="flex justify-center items-center">Login</p>
                </div>
                <div class="flex">
                    <img src="{{ asset('images/cart.png') }}" width="40px" height="30px" class="p-2 lg:text-2xl" onclick="location.href='{{route('cart')}}'" alt="cart">
                    <p class="justify-center items-center hidden lg:flex">Cart</p>
                </div>
                <div class="flex">
                    <img src="{{ asset('images/seller.png') }}" width="40px" height="40px" class="p-2 lg:text-2xl" alt="seller">
                    <p class="justify-center items-center hidden lg:flex ">Become a Seller</p>
                </div>
            </ul>
        </div>
    </header>
    {{--    Categories list--}}
    <div class="w-max-full overflow-x-auto scrollbar-hide flex justify-center">
        <div class="grid grid-flow-col auto-cols-min place-items-center gap-2 mt-4 overflow-auto">
            <div class="min-w-[150px]">
                <img width="50px" height="50px" class="block mx-auto" src="{{ asset('images/kilos.png') }}" alt="kilos img">
                <p class="text-center mt-2">Kilos</p>
            </div>
            <div class="min-w-[150px]">
                <img width="50px" height="50px" class="block mx-auto" src="{{ asset('images/mobile.png') }}" alt="mobiles img">
                <p class="text-center mt-2">Mobiles</p>
            </div>
            <div class="min-w-[150px]">
                <img width="50px" height="50px" class="block mx-auto" src="{{ asset('images/fashion.png') }}" alt="fashion img">
                <p class="text-center mt-2">Fashion</p>
            </div>
            <div class="min-w-[150px]">
                <img width="50px" height="50px" class="block mx-auto" src="{{ asset('images/electronics.png') }}" alt="electronics img">
                <p class="text-center mt-2">Electronics</p>
            </div>
            <div class="min-w-[150px]">
                <img width="50px" height="50px" class="block mx-auto" src="{{ asset('images/furniture.png') }}" alt="home and furniture img">
                <p class="text-center mt-2">Home & Furniture</p>
            </div>
            <div class="min-w-[150px]">
                <img width="50px" height="50px" class="block mx-auto" src="{{ asset('images/appliances.png') }}" alt="appliances img">
                <p class="text-center mt-2">Appliances</p>
            </div>
            <div class="min-w-[150px]">
                <img width="50px" height="50px" class="block mx-auto" src="{{ asset('images/flight booking.png') }}" alt="flight Booking img">
                <p class="text-center mt-2">Flight Booking</p>
            </div>
            <div class="min-w-[150px]">
                <img width="50px" height="50px" class="block mx-auto" src="{{ asset('images/toys.png') }}" alt="beauty img">
                <p class="text-center mt-2">Beauty, Toys & More</p>
            </div>
            <div class="min-w-[150px]">
                <img width="50px" height="50px" class="block mx-auto" src="{{ asset('images/two wheeler.png') }}" alt="two wheeler img">
                <p class="text-center mt-2">Two Wheelers</p>
            </div>
        </div>
    </div>
    {{--    Slider for Home page adverthisment--}}
    <div id="carouselExampleAutoplaying" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/img.webp')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/img2.webp')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/img.webp')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{--Best of Electronics section--}}
    <div class="mt-4">
        <h1 class="text-xl font-bold m-2 ml-4">Best of Electronics</h1>
        <div class="block md:flex gap-3 w-full overflow-x-auto">
            <div class="flex w-full md:w-[150px] border-b-2 border-gray rounded-md flex-none md:block">
                <img src="{{asset('images/camera.png')}}" class="w-[70px] md:w-[150px] sm:mx-4 md:mx-auto">
                <div class="block my-auto ml-5 md:ml-0 md:!my-3">
                    <p class="md:text-center md:mx-auto overflow-hidden w-3/4 truncate">Nameeeeeeeeeeeeeeeeeeeeeeeeeeeee</p>
                    <p class="md:text-center"><b>Price</b></p>
                </div>
            </div>
            <div class="flex w-full md:w-[150px] border-b-2 border-gray rounded-md flex-none md:block">
                <img src="{{asset('images/camera.png')}}" class="w-[70px] md:w-[150px] sm:mx-4 md:mx-auto">
                <div class="block my-auto ml-5 md:ml-0 md:!my-3">
                <p class="md:text-center md:mx-auto overflow-hidden w-3/4 truncate">Nameeeeeeeeeeeeeeeeeeeeeeeeeeeee</p>
                    <p class="md:text-center"><b>Price</b></p>
                </div>
            </div>
        </div>
    </div>


    {{--Beauty, Food, Toys and More section--}}
    <div class="mt-4">
        <h1 class="text-xl font-bold m-2 ml-4">Beauty, Food, Toys and More</h1>
        <div class="block md:flex gap-3 w-full overflow-x-auto">
            <div class="flex w-full md:w-[150px] border-b-2 border-gray rounded-md flex-none md:block">
                <img src="{{asset('images/camera.png')}}" class="w-[70px] md:w-[150px] sm:mx-4 md:mx-auto">
                <div class="block my-auto ml-5 md:ml-0 md:!my-3">
                <p class="md:text-center md:mx-auto overflow-hidden w-3/4 truncate">Nameeeeeeeeeeeeeeeeeeeeeeeeeeeee</p>
                    <p class="md:text-center"><b>Price</b></p>
                </div>
            </div>
            <div class="flex w-full md:w-[150px] border-b-2 border-gray rounded-md flex-none md:block">
                <img src="{{asset('images/camera.png')}}" class="w-[70px] md:w-[150px] sm:mx-4 md:mx-auto">
                <div class="block my-auto ml-5 md:ml-0 md:!my-3">

                <p class="md:text-center md:mx-auto overflow-hidden w-3/4 truncate">Nameeeeeeeeeeeeeeeeeeeeeeeeeeeee</p>
                    <p class="md:text-center"><b>Price</b></p>
                </div>
            </div>
        </div>
    </div>
{{--    Home Decor and Furnitures--}}
    <div class="mt-4">
        <h1 class="text-xl font-bold m-2 ml-4">Decor and Furnitures</h1>
        <div class="block md:flex gap-3 w-full overflow-x-auto">
            <div class="flex w-full md:w-[150px] border-b-2 border-gray rounded-md flex-none md:block">
                <img src="{{asset('images/camera.png')}}" class="w-[70px] md:w-[150px] sm:mx-4 md:mx-auto">
                <div class="block my-auto ml-5 md:ml-0 md:!my-3">
                <p class="md:text-center md:mx-auto overflow-hidden w-3/4 truncate">Nameeeeeeeeeeeeeeeeeeeeeeeeeeeee</p>
                    <p class="md:text-center"><b>Price</b></p>
                </div>
            </div>
            <div class="flex w-full md:w-[150px] border-b-2 border-gray rounded-md flex-none md:block">
                <img src="{{asset('images/camera.png')}}" class="w-[70px] md:w-[150px] sm:mx-4 md:mx-auto">
                <div class="block my-auto ml-5 md:ml-0 md:!my-3">
                <p class="md:text-center md:mx-auto overflow-hidden w-3/4 truncate">Nameeeeeeeeeeeeeeeeeeeeeeeeeeeee</p>
                    <p class="md:text-center"><b>Price</b></p>
                </div>
            </div>
        </div>
    </div>
{{--    Fashion Top Deals section--}}
    <div class="mt-4">
        <h1 class="text-xl font-bold m-2 ml-4">Fashion Top Deals</h1>
        <div class="block md:flex gap-3 w-full overflow-x-auto ">
            <div class="flex w-full md:w-[150px] border-b-2 border-gray rounded-md flex-none md:block">
                <img src="{{asset('images/camera.png')}}" class="w-[70px] md:w-[150px] sm:mx-4 md:mx-auto">
                <div class="block my-auto ml-5 md:ml-0 md:!my-3">
                <p class="md:text-center md:mx-auto overflow-hidden w-3/4 truncate">Nameeeeeeeeeeeeeeeeeeeeeeeeeeeee</p>
                    <p class="md:text-center"><b>Price</b></p>
                </div>
            </div>
            <div class="flex w-full md:w-[150px] border-b-2 border-gray rounded-md flex-none md:block">
                <img src="{{asset('images/camera.png')}}" class="w-[70px] md:w-[150px] sm:mx-4 md:mx-auto">
                <div class="block my-auto ml-5 md:ml-0 md:!my-3">
                <p class="md:text-center md:mx-auto overflow-hidden w-3/4 truncate">Nameeeeeeeeeeeeeeeeeeeeeeeeeeeee</p>
                    <p class="md:text-center"><b>Price</b></p>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-black text-white p-4">
        <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-6 ">
            <div class="block">
                <p class="font-bold">ABOUT</p>
                <li><a href="">Contact Us</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Careers</a></li>
                <li><a href="">Flipkart Stories</a></li>
                <li><a href="">Press</a></li>
                <li><a href="">Corporate Information</a></li>
            </div>
            <div>
                <p class="font-bold">GROUP COMPANIES</p>
                <li><a href="">Myntra</a></li>
                <li><a href="">Cleartrip</a></li>
                <li><a href="">Shopsy</a></li>
            </div>
            <div>
                <p class="font-bold">GROUP COMPANIES</p>
                <li><a href="">Payments</a></li>
                <li><a href="">Shipping</a></li>
                <li><a href="">Cancellation & Returns</a></li>
                <li><a href="">FAQ</a></li>

            </div>
            <div>
                <p class="font-bold">HELP</p>
                <li><a href="">Cancellation & Return</a></li>
                <li><a href="">Terms Of Use</a></li>
                <li><a href="">Security</a></li>
                <li><a href="">Privacy</a></li>
                <li><a href="">Sitemap</a></li>
                <li><a href="">Grievance Redressal</a></li>
                <li><a href=""> EPR Compliance</a></li>

            </div>
        </div>
    </footer>
</body>
</html>
