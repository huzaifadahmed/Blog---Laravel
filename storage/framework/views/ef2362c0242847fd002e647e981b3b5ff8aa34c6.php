<div>
    <button class="text-white bg-blue-600 px-8 py-2 
    rounded-md shadow-xl font-bold hover:shadow-none 
    hover:bg-blue-800" 
    type="button" id="toggleModal" aria-expanded="false"><a href="/signupuser">Sign Up</a></button>
</div>

<div id="modal" class="bg-black bg-opacity-50 absolute top-0 left-0 w-full h-full hidden">

<div class="bg-slate-200 rounded-xl p-8 w-96 mx-auto relative top-32">

    <div id="modalTitle" class="text-2xl pb-4 border-b-2 border-blue-200 text-blue-600 font-bold">Login</div>
    <!-- <div id="error"></div> -->
    <?php $__errorArgs = ['name','email','password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="text-red-500 text-sm"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <form name="form" method="POST" action="/login">
        <?php echo csrf_field(); ?>
        <p class="mt-4 mb-2">Name</p>
        <input name="name" id="name" type="text" placeholder="Name" class="h-8 w-full text-lg p-1 border-solid border-2 rounded-md border-blue-500 hover:border-blue-400"></input>
        <p class="mt-4 mb-2">Email Address</p>
        <input name="email" id="email" type="text" placeholder="E-mail" class="h-8 w-full text-lg p-1 border-solid border-2 rounded-md border-blue-500 hover:border-blue-400"></input>
        <p class="mt-4 mb-2">Password</p>
        <input name="password" id="password" type="password" placeholder="Password" class="h-8 w-full text-lg p-1 border-solid border-2 rounded-md border-blue-500 hover:border-blue-400"></input>
        <button type="button" id="loginActive" value="1" class="text-blue-600 mt-4 p-2 border-b-2 w-24 border-blue-600 font-bold hover:text-blue-400">Sign Up</button>
        <button type="submit" id="enterBtn" class="text-white bg-blue-600 p-2 px-4 rounded-md shadow-xl w-24 font-bold hover:shadow-none hover:bg-blue-400 transition-colors ml-8">Login</button>
        <button id="closeModal" class="text-white bg-neutral-600 ml-3 p-2 px-4 rounded-md shadow-xl font-bold hover:shadow-none hover:bg-neutral-400 transition-colors">Close</button>
    </form>

</div>

<?php /**PATH C:\Users\hdahmed\Desktop\Software Portfolio\Laravel\Practice\resources\views/components/loginmodal.blade.php ENDPATH**/ ?>