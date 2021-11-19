<!-- Contact Center -->
<?php
session_start();
include './src/script/connection.php';
if ($_SESSION['foto'] == '' || $_SESSION['nama'] == '' || $_SESSION['email'] == '' || $_SESSION['password'] == '' || $_SESSION['level'] != '2' || $_SESSION['nisn'] == '' || $_SESSION['gender'] == '' || $_SESSION['place'] == '' || $_SESSION['date'] == '') {
  ?>
  <script language="JavaScript">
    document.location = 'login.php';
  </script>
<?php
} else {
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Schooly | Contact Center </title>
        <meta name="description" content="">
            
        <!-- Include Link -->
        <?php include './src/script/link.php';?>

    </head>

    <body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

        <!-- Navbar -->
        <nav id="header" class="bg-white fixed w-full z-10 top-0 shadow">
            <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">

                <div class="w-1/2 pl-2">
                    <img src="./src/img/logo-home.png" alt="" style="height:50px">
                </div>

                <div class="w-1/2 pr-0">
                    <div class="flex relative inline-block float-right">
                        <div class="relative text-sm">
                            
                            <button id="userButton" class="flex items-center focus:outline-none mr-3">
                                <img class="w-8 h-8 rounded-full lg:mr-4 md:mr-3 sm:mr-0 " src="img/<?php echo $_SESSION['foto'];?>" alt="Avatar of User"><span class="hidden md:inline-block">Hi, <?php echo $_SESSION['email'];?></span><i class="fas fa-chevron-down fa-sm ml-2"></i>
                            </button>

                            <div id="userMenu" class="bg-white rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                                <ul class="list-reset">
                                    <li>
                                        <hr class="border-t mx-2 border-gray-400">
                                    </li>
                                    <li><a href="logout.php" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline"><i class="fas fa-sign-out-alt fa-fw mr-2"></i>Logout</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="block lg:hidden pr-4">
                            <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none">
                                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <title>Menu</title>
                                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white z-20" id="nav-content">
                    <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                        <li class="mr-6 my-2 md:my-0">
                            <a href="psb_2021_user.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline border-b-2 border-white hover:border-yellow-500">
                            <i class="fas fa-table fa-fw mr-1"></i> <span class="pb-1 md:pb-0 text-sm">PSB 2021</span>
                            </a>
                        </li>
                        <li class="mr-6 my-2 md:my-0">
                            <a href="registration_psb_2021.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline border-b-2 border-white hover:border-yellow-500">
                                <i class="fas fa-user-plus fa-fw mr-1"></i> <span class="pb-1 md:pb-0 text-sm">Daftar PSB 2021</span>
                            </a>
                        </li>
                    </ul>
                    <div class="relative pull-right">
                        <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                            <li class="mr-6 my-2 md:my-0">
                                <a href="contact_center.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline border-b-2 border-yellow-500">
                                    <i class="far fa-id-card fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-sm">Contact Center</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

        <!-- Contact Center -->
        <div class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover pt-16" style="background-image:url('https://image.freepik.com/free-photo/hand-painted-watercolor-background-with-sky-clouds-shape_24972-1095.jpg');">
            <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
                
                <!--Main Col-->
                <div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
            
                    <div class="p-4 md:p-12 text-center lg:text-left">
                    
                    <!-- Image for mobile view-->
                    <div class="img-mobile block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('./src/img/contact.png')"></div>
                    <h1 class="text-3xl font-bold pt-8 lg:pt-0">Contact Center Schooly</h1>
                    <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-yellow-500 opacity-25"></div>
                    <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start "><i class="fas fa-briefcase text-yellow-600 mr-1 lg:mr-2"></i>Senin - Jumat</p>
                    <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start "><i class="far fa-clock text-yellow-600 mr-1 lg:mr-2"></i>09:00 - 18:00</p>
                    <p class="pt-8 text-sm">Halo! Terima kasih sudah mampir dihalaman contact center schooly, Mohon menghubungi pada jam operasional kami. Kami akan berusaha untuk membalas chat kamu secepatnya, mohon kesabarannya ya. </p>

                        <div class="mt-8 pb-16 lg:pb-0 w-4/5 lg:w-full mx-auto flex flex-wrap items-center justify-between">
                            <a class="link h-6 fill-current text-gray-600 hover:text-yellow-600 cursor-pointer" href="#"><i class="fab fa-facebook-square fa-lg"></i></a>
                            <a class="link h-6 fill-current text-gray-600 hover:text-yellow-600 cursor-pointer" href="#"><i class="fab fa-twitter fa-lg"></i></a>
                            <a class="link h-6 fill-current text-gray-600 hover:text-yellow-600 cursor-pointer" href="#"><i class="fab fa-whatsapp-square fa-lg"></i></a>
                            <a class="link h-6 fill-current text-gray-600 hover:text-yellow-600 cursor-pointer" href="#"><i class="fas fa-envelope fa-lg"></i></a>
                            <a class="link h-6 fill-current text-gray-600 hover:text-yellow-600 cursor-pointer" href="#"><i class="fas fa-paper-plane fa-lg"></i></a>
                            
                        </div>

                    </div>

                </div>
                
                <!--Img Col-->
                <div class="w-full lg:w-2/5">
                    <!-- Big profile image for side bar (desktop) -->
                    <img src="./src/img/contact.png" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
                    <!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->
                    
                </div>
                

            </div>
        </div>
        
    
        <!-- Include Script -->
        <?php include './src/script/script.php';?>

    </body>
    </html>

<?php
}
?>

