
<div class="bg-gray-100 min-h-screen p-6">

    <!-- Cart Container -->
    <div class="max-w-6xl mx-auto grid grid-cols-3 gap-6">

        <!-- Left Side: Cart Items -->
        <div class="col-span-2 bg-white shadow-md rounded-lg p-4">

            <h2 class="text-xl font-semibold border-b pb-3">Flipkart</h2>

            <!-- Address -->
            <div class="flex justify-between items-center p-3 bg-gray-100 mt-4 rounded-md">
                <p class="text-gray-700 font-medium">Deliver to: <span class="font-bold">$address</span></p>
                <button class="text-blue-600 font-semibold" onclick="">Change</button>
            </div>

            <!-- Cart Item -->
            <div class="flex border-b py-4">
                <img src="#" class="w-20 h-20 object-cover rounded-md" alt="Product">
                <div class="ml-4 flex-1">
                    <h3 class="text-lg font-semibold">$product_name</h3>
                    <p class="text-gray-500 text-sm">$product_description</p>
                    <p class="text-green-600 font-bold">$product_price</p>
                </div>
                <button class="text-red-500 font-semibold">Remove</button>
            </div>

            <!-- Screen Care Plan -->
            <div class="bg-blue-100 p-3 rounded-lg mt-4">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="font-semibold">$addition_product_recommendation</p>
                        <p class="text-sm text-gray-600">$month - $amount</p>
                    </div>
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded-md">Add Item</button>
                </div>
            </div>

        </div>

        <!-- Right Side: Price Details -->
        <div class="bg-white shadow-md rounded-lg p-4">
            <h2 class="text-xl font-semibold border-b pb-3">PRICE DETAILS</h2>
            <div class="mt-3 space-y-2 text-gray-700">
                <p class="flex justify-between"><span>Price</span> <span>$amount</span></p>
                <p class="flex justify-between text-green-600"><span>Discount</span> <span>$dis_amount</span></p>
                <p class="flex justify-between text-green-600"><span>Coupons for you</span> <span>$coup_v</span></p>
                <p class="flex justify-between"><span>Delivery Charges</span> <span class="line-through">₹110</span> <span class="text-green-600">Free</span></p>
                <p class="flex justify-between"><span>Secured Packaging Fee</span> <span>$package_fee</span></p>
                <hr>
                <p class="flex justify-between font-bold text-lg"><span>Total Amount</span> <span>$total_amnt</span></p>
                <p class="text-green-600 font-medium">You will save $amount on this order</p>
            </div>
            <button class="bg-orange-500 text-white font-semibold w-full py-3 mt-4 rounded-md">PLACE ORDER</button>
        </div>

    </div>

</div>

