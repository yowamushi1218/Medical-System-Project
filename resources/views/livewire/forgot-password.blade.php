<div class="py-16">
    <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
        <div class="hidden lg:block lg:w-1/2 bg-cover w-full"
            style="background-image:url('images/logo-bg-white.png');">
        </div>
        <div class="w-full p-12 lg:w-1/2">
            <h2 class="text-lg font-semibold text-gray-700 text-center">Forgot Password</h2>
            <p class="text-lg text-gray-600 text-center">Oh! no you forgot your password.</p>
            <div class="mt-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                <input class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="email" placeholder="name.sample@email.com" />
            </div>
            <div class="mt-5">
                <button class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Submit</button>
            </div>
            <div class="mt-4 flex items-center justify-between">
                <span class="border-b w-1/5 md:w-1/4"></span>
                <a href="{{ route('login') }}" class="text-xs text-gray-500 uppercase">Back to login</a>
                <span class="border-b w-1/5 md:w-1/4"></span>
            </div>
        </div>
    </div>
</div>
