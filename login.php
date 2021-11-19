<!-- Login -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schooly | Login </title>

    <!-- Include Link -->
    <?php include './src/script/link.php';?>
    
</head>

<body class="bg-white h-screen">
    <div class="w-full flex flex-wrap">

        <!-- Image Section -->
        <div class="w-1/2">
            <img class="object-cover w-full h-screen hidden md:block" src="./src/img/login&registration.png">
        </div>

        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col">

            <div class="flex justify-center pt-12">
                <img src="./src/img/logo.png" alt="">
            </div>

            <div class="flex flex-col justify-center md:justify-start pt-8 md:pt-0 px-8 md:px-24 lg:px-32">

                <p class="text-center font-semibold text-2xl pt-4">Halo, selamat datang kembali !!!</p>

                <div class="text-center text-1xl">
                    <p class="text-gray-500">Belum punya akun ? <a href="registration.php" class="font-bold text-yellow-500">Yuk buat dulu !</a></p>
                </div>

                <form class="flex flex-col pt-3 md:pt-8" id="login-form" class="form" method="post" action="./src/script/entery.php">
                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg font-semibold">Email</label>
                        <input type="email" id="email" name="email" autocomplete="off" placeholder="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
    
                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg font-semibold">Password</label>
                        <input type="password" id="password" name="password" autocomplete="off" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>

                    <button class="login flex items-center justify-center rounded-md bg-yellow-500 text-white hover:bg-yellow-400 p-2 mt-12" type="submit">Login</button>
 
                </form>

            </div>

        </div>

    </div>

    <!-- Include Script -->
    <?php include './src/script/script.php';?>
    
</body>
</html>