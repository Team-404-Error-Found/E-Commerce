<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/css/app.css'])

</head>
<body>
    <x-layouts.header/>
    {{--    Categories list--}}
    <div class="w-max-full overflow-x-auto hide-scrollbar flex justify-center">
        <div class="grid grid-flow-col auto-cols-min place-items-center gap-2 mt-4 overflow-auto">
            <div class="min-w-[150px] cursor-pointer">
                <img width="50px" height="50px" class="block mx-auto" src="{{ asset('images/kilos.png') }}" alt="kilos img">
                <p class="text-center mt-2">Kilos</p>
            </div>
            <div class="min-w-[150px] cursor-pointer">
                <img width="50px" height="50px" class="block mx-auto" src="{{ asset('images/mobile.png') }}" alt="mobiles img">
                <p class="text-center mt-2">Mobiles</p>
            </div>
            <div class="min-w-[150px] cursor-pointer">
                <img width="50px" height="50px" class="block mx-auto" src="{{ asset('images/fashion.png') }}" alt="fashion img">
                <p class="text-center mt-2">Fashion</p>
            </div>
            <div class="min-w-[150px] cursor-pointer">
                <img width="50px" height="50px" class="block mx-auto" src="{{ asset('images/electronics.png') }}" alt="electronics img">
                <p class="text-center mt-2">Electronics</p>
            </div>
            <div class="min-w-[150px] cursor-pointer">
                <img width="50px" height="50px" class="block mx-auto" src="{{ asset('images/furniture.png') }}" alt="home and furniture img">
                <p class="text-center mt-2">Home & Furniture</p>
            </div>
            <div class="min-w-[150px] cursor-pointer">
                <img width="50px" height="50px" class="block mx-auto" src="{{ asset('images/appliances.png') }}" alt="appliances img">
                <p class="text-center mt-2">Appliances</p>
            </div>
            <div class="min-w-[150px] cursor-pointer">
                <img width="50px" height="50px" class="block mx-auto" src="{{ asset('images/flight booking.png') }}" alt="flight Booking img">
                <p class="text-center mt-2">Flight Booking</p>
            </div>
            <div class="min-w-[150px] cursor-pointer">
                <img width="50px" height="50px" class="block mx-auto" src="{{ asset('images/toys.png') }}" alt="beauty img">
                <p class="text-center mt-2">Beauty, Toys & More</p>
            </div>
            <div class="min-w-[150px] cursor-pointer">
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
            <div class="flex w-full md:w-[200px] border-b-2 border-gray rounded-md flex-none md:block cursor-pointer">
                <img src="{{asset('images/camera.png')}}" class="w-[70px] md:w-[150px] lg:w-[200px] sm:mx-4 md:mx-auto" alt="electronics">
                <div class="block my-auto ml-5 md:ml-0 md:!my-3">
                    <p class="md:text-center md:mx-auto overflow-hidden w-3/4 truncate">Product Name</p>
                    <p class="md:text-center"><b>Price</b></p>
                </div>
            </div>

        </div>
    </div>
    {{--Beauty, Food, Toys and More section--}}
    <div class="mt-4">
        <h1 class="text-xl font-bold m-2 ml-4">Beauty, Food, Toys and More</h1>
        <div class="block md:flex gap-3 w-full overflow-x-auto">
            <div class="flex w-full md:w-[200px] border-b-2 border-gray rounded-md flex-none md:block cursor-pointer">
                <img src="{{asset('images/camera.png')}}" class="w-[70px] md:w-[150px] lg:w-[200px] sm:mx-4 md:mx-auto" alt="electronics">
                <div class="block my-auto ml-5 md:ml-0 md:!my-3">
                    <p class="md:text-center md:mx-auto overflow-hidden w-3/4 truncate">Product Name</p>
                    <p class="md:text-center"><b>Price</b></p>
                </div>
            </div>

        </div>
    </div>
{{--    Home Decor and Furnitures--}}
    <div class="mt-4">
        <h1 class="text-xl font-bold m-2 ml-4">Decor and Furnitures</h1>
        <div class="block md:flex gap-3 w-full overflow-x-auto">
            <div class="flex w-full md:w-[200px] border-b-2 border-gray rounded-md flex-none md:block cursor-pointer">
                <img src="{{asset('images/camera.png')}}" class="w-[70px] md:w-[150px] lg:w-[200px] sm:mx-4 md:mx-auto" alt="electronics">
                <div class="block my-auto ml-5 md:ml-0 md:!my-3">
                    <p class="md:text-center md:mx-auto overflow-hidden w-3/4 truncate">Product Name</p>
                    <p class="md:text-center"><b>Price</b></p>
                </div>
            </div>
        </div>
    </div>
{{--    Fashion Top Deals section--}}
    <div class="mt-4">
        <h1 class="text-xl font-bold m-2 ml-4">Fashion Top Deals</h1>
        <div class="block md:flex gap-3 w-full overflow-x-auto ">
            <div class="flex w-full md:w-[200px] border-b-2 border-gray rounded-md flex-none md:block cursor-pointer">
                <img src="{{asset('images/camera.png')}}" class="w-[70px] md:w-[150px] lg:w-[200px] sm:mx-4 md:mx-auto" alt="electronics">
                <div class="block my-auto ml-5 md:ml-0 md:!my-3">
                    <p class="md:text-center md:mx-auto overflow-hidden w-3/4 truncate">Product Name</p>
                    <p class="md:text-center"><b>Price</b></p>
                </div>
            </div>
        </div>
    </div>
    <!--footer-->
    <x-layouts.footer />
</body>
</html>
