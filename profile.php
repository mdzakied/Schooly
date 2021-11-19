<!-- Profile -->
<?php
session_start();
include './src/script/connection.php';
if ($_SESSION['foto'] == '' || $_SESSION['nama'] == '' || $_SESSION['email'] == '' || $_SESSION['password'] == '' || $_SESSION['level'] != '1' || $_SESSION['nisn'] == '' || $_SESSION['gender'] == '' || $_SESSION['place'] == '' || $_SESSION['date'] == '') {
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
        <title>Schooly | Profile </title>
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
                                <img class="w-8 h-8 rounded-full lg:mr-4 md:mr-3 sm:mr-0 " src="./img/<?php echo $_SESSION['foto'];?>" alt="Avatar of User"><span class="hidden md:inline-block">Hi, <?php echo $_SESSION['email'];?></span><i class="fas fa-chevron-down fa-sm ml-2"></i>
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
                            <a href="home_admin.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline border-b-2 border-white hover:border-yellow-500">
                                <i class="fas fa-home fa-fw mr-1"></i> <span class="pb-1 md:pb-0 text-sm">Home</span>
                            </a>
                        </li>
                        <li class="mr-6 my-2 md:my-0">
                            <a href="psb_2021_admin.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline border-b-2 border-yellow-500">
                            <i class="fas fa-table fa-fw mr-1"></i> <span class="pb-1 md:pb-0 text-sm">PSB 2021</span>
                            </a>
                        </li>
                    </ul>
                    <div class="relative pull-right">
                        <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                            <li class="mr-6 my-2 md:my-0">
                                <a href="registration_admin.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline border-b-2 border-white hover:border-yellow-500">
                                <i class="fas fa-user-plus fa-fw mr-1"></i> <span class="pb-1 md:pb-0 text-sm">Tambah Admin</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

        <!-- Profile Datatables -->
        <?php

            // include database connection file
            include_once("./src/script/connection.php");

            $id = $_GET['id'];

            $result = mysqli_query($konek, "SELECT * FROM psb2021 WHERE id=$id");

            while ($user_data = mysqli_fetch_array($result)) {
            $fotobaru = $user_data['foto'];
            $nama = $user_data['nama'];
            $email = $user_data['email'];
            $password = $user_data['password'];
            $nisn = $user_data['nisn'];
            $gender = $user_data['gender'];
            $place = $user_data['place'];
            $date = $user_data['date'];
            $sekolah_asal = $user_data['sekolah_asal'];
            $sekolah_tujuan = $user_data['sekolah_tujuan'];
            $jurusan = $user_data['jurusan'];
            $status = $user_data['status'];

            }
        ?>

        <!-- Pofile -->
        <div id="content" class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover pt-16" style="background-image:url('https://image.freepik.com/free-photo/hand-painted-watercolor-background-with-sky-clouds-shape_24972-1095.jpg');">
            <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
                
                <!--Main Col-->
                <div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
                
                    <div class="p-4 md:p-12 text-center lg:text-left">
                        <!-- Image for mobile view-->
                        <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('img/<?=$fotobaru;?>')"></div>
                        <h1 class="text-3xl font-bold pt-8 lg:pt-0"><?=$nama;?></h1>
                        <div class="mx-auto lg:mx-0 w-4/5 pt-6 border-b-2 border-yellow-500 opacity-25"></div>

                        <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-yellow-500 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z"/></svg><?=$email;?></p>
                        <p class="text-base font-bold flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-yellow-500 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z"/></svg><?=$password;?></p>
                        <div class="mx-auto lg:mx-0 w-4/5 pt-4 border-b-2 border-yellow-500 opacity-25"></div>

                        <p class="pt-4 text-base font-bold text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-yellow-500 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z"/></svg><?=$nisn;?></p>
                        <p class="pt-2 text-base font-bold text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-yellow-500 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/></svg><?=$gender;?></p>
                        <p class="pt-2 text-base font-bold text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-yellow-500 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"/></svg><?=$place;?>, <?=$date;?></p>
                        <div class="mx-auto lg:mx-0 w-4/5 pt-4 border-b-2 border-yellow-500 opacity-25"></div>

                        <p class="pt-4 text-base font-bold text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-yellow-500 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/></svg><?=$sekolah_asal;?> - <?=$sekolah_tujuan;?></p>
                        <p class="pt-2 text-base font-bold text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-yellow-500 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z"/></svg><?=$jurusan;?></p>
                        <p class="pt-2 text-base font-bold text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-yellow-500 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"/></svg><?=$status;?></p>

                        <div class="mt-6 pb-16 lg:pb-0 w-4/5 lg:w-full mx-auto flex flex-wrap items-center justify-between">
                            <a href="psb_2021_admin.php" class="link h-6 fill-current text-gray-600 hover:text-yellow-500 cursor-pointer"><i class="fas fa-undo-alt fa-lg"></i></a>
                            <a href="javascript:demoFromHTML()" class="link h-6 fill-current text-gray-600 hover:text-yellow-500 cursor-pointer"><i class="fas fa-external-link-alt fa-lg"></i></a>
                        </div>

                    </div>

                </div>
                
                <!--Img Col-->
                <div class="w-full lg:w-2/5">
                    <!-- Big profile image for side bar (desktop) -->
                    <img src="img/<?=$fotobaru;?>" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">      
                </div>

            </div>
        </div>

        <!-- Include Script -->
        <?php include './src/script/script.php';?>

         <!-- JSPDF Script -->
        <script>
            function demoFromHTML() {
                var pdf = new jsPDF('p', 'pt', 'letter');
                // source can be HTML-formatted string, or a reference
                // to an actual DOM element from which the text will be scraped.
                source = $('#content')[0];

                // we support special element handlers. Register them with jQuery-style 
                // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
                // There is no support for any other type of selectors 
                // (class, of compound) at this time.
                specialElementHandlers = {
                    // element with id of "bypass" - jQuery style selector
                    '#bypassme': function (element, renderer) {
                        // true = "handled elsewhere, bypass text extraction"
                        return true
                    }
                };
                margins = {
                    top: 10,
                    bottom: 60,
                    left: 40,
                    width: 522
                };
                // all coords and widths are in jsPDF instance's declared units
                // 'inches' in this case
                pdf.fromHTML(
                    source, // HTML string or DOM elem ref.
                    margins.left, // x coord
                    margins.top, { // y coord
                        'width': margins.width, // max width of content on PDF
                        'elementHandlers': specialElementHandlers
                    },

                    function (dispose) {
                        // dispose: object with X, Y of the last line add to the PDF 
                        // this allow the insertion of new lines after html
                        pdf.save('Bukti_PSB_ONLINE_2021.pdf');
                    }, margins
                );
            }
        </script>

    </body>
    </html>

<?php
}
?>

