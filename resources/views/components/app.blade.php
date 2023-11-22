<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FleetLink</title>


    <!--Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,400&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')


    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="font-sans text-gray-900 antialiased">

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-900 dark:bg-gray-900">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <header class= "max-w-lg mx-auto">
                <a href="">
                    <h1 class="text-4xl font-bold text-center">Admin Login</h1>
                </a>
            </header>


                <section>
                    <h3 class="mt-[20px] font-bold text-2xl">Welcome to Student System</h3>
                    <p class="text-gray-600 pt-2">Sign up a new Account <a href="/register" class="text-purple-300 font-bold">here</a> </p>
                </section>
                <section class="mt-10">
                    <form action="/login/process" method="POST" class="flex flex-col">
                        @csrf

                        @error('email')
                                <p class="text-red-500 text-xs p-1">
                                    {{$message}}
                                </p>
                        @enderror

                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label for="email" class="block text-gray 600 text-sm font-bold mb-2 ml-3 ">Email</label>
                            <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                        </div>
                        <div class="mb-6 pt-3 rounded bg-gray-200">
                            <label for="password" class="block text-gray 600 text-sm font-bold mb-2 ml-3 ">Password</label>
                            <input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                        </div>
                        <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Sign In</button>
                    </form>
                </section>
        </div>
    </div>

</body>
</html>


