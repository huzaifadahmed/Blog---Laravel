<x-template>

    <div class="bg-slate-200 rounded-xl p-8 w-96 mx-auto my-24">

        <div id="modalTitle" class="text-2xl pb-4 border-b-2 border-blue-200 text-blue-600 font-bold">Log In</div>
    


        <form name="form" method="POST" action="/login">
            @csrf

            <label for="email" class="mt-4 mb-2">Email Address</label>
            <input name="email" id="email" type="text" placeholder="E-mail" class="h-8 w-full text-lg p-1 border-solid border-2 rounded-md border-blue-500 hover:border-blue-400" value="{{old('email')}}"></input>
            @error('email')
            <p class="text-red-500 text-sm">{{$message}}</p>
            @enderror
            <label for="password" class="mt-4 mb-2">Password</label>
            <input name="password" id="password" type="password" placeholder="Password" class="h-8 w-full text-lg p-1 border-solid border-2 rounded-md border-blue-500 hover:border-blue-400"></input>
            @error('password')
            <p class="text-red-500 text-sm">{{$message}}</p>
            @enderror
            <button type="button" id="loginActive" value="1" class="text-blue-600 mt-4 p-2 border-b-2 w-24 border-blue-600 font-bold hover:text-blue-400"><a href="signupuser">Sign Up</a></button>
            <button type="submit" id="enterBtn" class="text-white bg-blue-600 p-2 px-4 rounded-md shadow-xl w-24 font-bold hover:shadow-none hover:bg-blue-400 transition-colors ml-8">Login</button>
        </form>

    </div>

</x-template>
