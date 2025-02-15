<header class="flex justify-between items-center p-4">
    <div class="flex">
        {{--            <img src="{{ asset('images/menu.png') }}" width="30px" height="30px" alt="menu">--}}
        <h2 class="ml-2 md:text-lg lg:text-xl">Flipkart Clone</h2>
    </div>
    <div>
        <ul class="flex text-xl space-x-4  lg:space-x-8">
            <input type="text" placeholder="Search for Products, Brands and More" class="rounded-l-md p-2 text-md md:text-sm lg:text-md hidden sm:hidden md:block lg:block md:w-[400px] lg:w-[600px] bg-blue-100">
            <div class="flex cursor-pointer" onclick="location.href='{{route('login')}}'">
                <img width="40px" height="40px" src="{{ asset('images/login img.png') }}" class=" p-2 rounded-lg" alt="loginimg">
                <p class="flex justify-center items-center">Login</p>
            </div>
            <div class="flex cursor-pointer" onclick="location.href='{{route('cart')}}'">
                <img src="{{ asset('images/cart.png') }}" width="40px" height="30px" class="p-2 lg:text-2xl"  alt="cart">
                <p class="justify-center items-center hidden lg:flex">Cart</p>
            </div>
            <div class="flex cursor-pointer">
                <img src="{{ asset('images/seller.png') }}" width="40px" height="40px" class="p-2 lg:text-2xl" alt="seller">
                <p class="justify-center items-center hidden lg:flex ">Become a Seller</p>
            </div>
        </ul>
    </div>
</header>
