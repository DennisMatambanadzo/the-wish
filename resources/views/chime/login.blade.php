<x-layout-secondary>
    <div class="mx-auto flex justify-center mt-10 rounded-md p-6 font-cormorant ">
        <form method="post" action="/chime/authenticate" class="bg-green-100 border-2 w- p-7 grid gap-8 rounded-2xl">
            @csrf
            <div class="flex flex-col">
                <label class="text-sm text-brightRed" for="firstname">First Name</label>
                <input class="text-brightRed border-black border-solid border-2 rounded-md" name="firstname" type="text">
            </div>
            <div class="flex flex-col">
                <label class="text-sm text-darkGrayishBlue" for="password">Password</label>
                <input class="text-brightRed border-black border-solid border-2 rounded-md" name="password" type="password">
            </div>
            <div class=" flex gap-8 text-center">
                <button type="submit" class="text-sm bg-brightRed border-2 border-green-950 p-1 rounded-md hover:bg-amber-400">Login</button>
                <a class="" href="/chime/register">Register</a>
            </div>
        </form>
    </div>
</x-layout-secondary>