<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>Login</title>
</head>

<body>
<div class="flex min-h-screen">
    <section class="bg-[#141414] dark:bg-[#141414] flex-1">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <img class="w-55 h-30 mr-2" src="/img/logo-green.png" alt="logo">
        <h2 class="text-white text-2xl font-bold">Disease Monitoring System</h2>
            <div class="w-full md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <form class="space-y-4 md:space-y-6" action="#">
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                            <input type="text" name="username" id="username" class="border bg-none border-[#4caf50] text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-none dark:border-[#4caf50] dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="Password" class=" bg-none border-[#4caf50] border text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-none dark:border-[#4caf50] dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <p class="text-[9px] text-white text-center">By logging into this system, you acknowledge the confidentiality of all information and agree to maintain its privacy and security.</p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="w-full h-[50px] text-white bg-[#4caf50] hover:bg-[#357a38] focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-[url(img/agriculture-industry.jpg)] flex-1 bg-cover bg-center flex items-center justify-center relative">
   
</div>

</div>


</body>

</html>