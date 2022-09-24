<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>

    <title>Practice Blog</title>
</head>
<body>
    <nav class="bg-neutral-800 h-24 px-8 py-8 ">
        <div class="flex justify-between">
            <div class="text-lg flex items-center space-x-16 text-white font-semibold ">
                <a href="/" class="mr-18 hover:opacity-50"><img src="/images/logo.png" width="165" height="16"></a>
                <a href="/" class="hover:text-neutral-600">Home</a>
                <!-- <a href="#" class="hover:text-neutral-600">About</a>
                <a href="#" class="hover:text-neutral-600">Contact</a> -->
            </div>

            @guest
            <div class="flex">  
                <div class="mr-8">
                <button class="text-white bg-blue-600 px-8 py-2 
                rounded-md shadow-xl font-bold hover:shadow-none 
                hover:bg-blue-800" 
                type="button" ><a href="/signupuser">Sign Up</a></button>
                </div>
                
                <button class="text-white bg-blue-600 px-8 py-2 
                rounded-md shadow-xl font-bold hover:shadow-none 
                hover:bg-blue-800" 
                type="button" ><a href="/loginuser">Log In</a></button>
                </div>
            </div>
            @endguest
        
            @auth
            <div class="flex items-center">
                <div class="text-white text-sm mr-4">
                    <x-menudropdown/>
                </div>

            </div>
            @endauth
        </div>
    </nav>

    {{$slot}}

    <footer class="bg-neutral-200 ">
        <div class="text-center">
            <p class="text-xl font-semibold pt-8 mb-4">Subscribe to stay in touch!</p>
            <form>
                <label for="email" class="text-lg mr-4 font-semibold">Email</label>
                <input type="text" name="email" class="p-2 rounded-lg border hover:border hover:border-black" placeholder="Your Email Address">
            </form>
            <button type="submit" class="bg-blue-500 p-2 rounded-lg my-4 hover:bg-blue-400">Subscribe</button>
        </div>

        <div class="h-48 text-center">
            <p class="pt-16">Contact us at hdahmed@ryerson.ca!</p>
        </div>
    </footer>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

    @if (session()->has('success'))
        <div x-data="{show:true}" 
        x-init="setTimeout(()=>show=false,6000)"
        x-show="show"
        class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
            <p>{{session('success')}}</p>
        </div>
    @endif
</body>
</html>