<x-layout-secondary>
    <div class="mx-auto flex justify-center mt-10 rounded-md p-6 font-cormorant ">
        <form method="post" action="/chime/users" class="bg-green-100 border-2 p-7 grid gap-8 rounded-2xl">
            @csrf
            <div class="flex flex-col">
                <label class="text-sm text-brightRed" for="name">First Name</label>
                <input class="text-brightRed border-black border-solid border-2 rounded-md" name="name"  required {{old('name')}} type="text">
            </div>
           {{-- <div class="flex flex-col">
                <label class="text-sm text-brightRed" for="firstname">Last Name</label>
                <input class="text-brightRed border-black border-solid border-2 rounded-md" name="lastname" type="text" required {{old('lastname')}}>
            </div>--}}
             <div class="flex flex-col">
                <label class="text-sm text-brightRed" for="email">Email</label>
                <input class="text-brightRed border-black border-solid border-2 rounded-md" name="email" type="email" required {{old('email')}} >
            </div>

            <div class="flex flex-col">
                <label class="text-sm text-darkGrayishBlue" for="password">Password</label>
                <input class="text-brightRed border-black border-solid border-2 rounded-md" name="password" type="password" required {{old('password')}}>
            </div>
            <div class="flex flex-col">
                <label class="text-sm text-darkGrayishBlue" for="password_confirmation">Confirm Password</label>
                <input class="text-brightRed border-black border-solid border-2 rounded-md" name="password_confirmation" type="password" required {{old('password_confirmation')}} >
            </div>
            <div class=" flex gap-8 text-center">
                <button type="submit" class="text-sm bg-brightRed border-2 border-green-950 p-1 rounded-md hover:bg-amber-400">Register</button>
                <a class=" p-1 " href="/chime/login">Login</a>
            </div>
        </form>
    </div>
</x-layout-secondary>