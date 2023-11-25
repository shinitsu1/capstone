@include('partials.header')

<x-topnav />

    <!--middle container-->
    <main class="bg-white max-w-sm mx-auto p-4 my-20 rounded-3xl shadow-2xl">

        <!--Logo-->
        <div class="flex justify-center">
            <img src="{{ asset('images/FleetLink_Logo.png') }}" alt="Logo" class="ml-[10px] h-auto w-[200px]">
          </div>

          {{-- Header text --}}
        <section class=" flex justify-center items-center">
            <h3 class="mt-[20px] font-bold text-2xl text-gray-900">Login</h3>
        </section>

        <!--Textbox-->
        <section class="mt-5">
            <form action="/login/process" method="POST" class="flex flex-col">
                @csrf

                @error('email')
                        <p class="text-red-500 text-xs p-1">
                            {{$message}}
                        </p>
                @enderror

                <label for="email" class="block text-gray-600 text-sm font-bold mb-2 ml-5 ">Email</label>
                <div class="mb-2 py-2 px-[30px] rounded-[40px] bg-gray-200">
                    <input type="email" name="email" class="bg-gray-200 w-full text-gray-700 focus:outline-none "placeholder-gray-900 placeholder="Example@sample.com">
                </div>


                <label for="password" class="block text-gray-600 text-sm font-bold mb-2 ml-5 ">Password</label>
                <div class="mb-6 py-2 px-[30px] rounded-[40px] bg-gray-200">
                    <input type="password" name="password" class="bg-gray-200 w-full text-gray-700 focus:outline-none "placeholder-gray-900 placeholder="Password">
                </div>

                <button type="submit" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Sign In</button>

            </form>
        </section>
    </main>


@include('partials.footer')
