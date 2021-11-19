<!-- PSB 2021 User -->
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
    <title>Schooly | PSB 2021 Admin </title>
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

    <!-- PSB 2021 -->

        <!--Container-->
        <div class="container mx-auto p-6 font-mono pt-40">
            
            <!--Card-->
            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                   
                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">

                    <thead>
                        <tr>
                            <th data-priority="1">Name</th>
                            <th data-priority="2">NISN</th>
                            <th data-priority="3">Sekolah</th>
                            <th data-priority="4">Jurusan</th>
                            <th data-priority="5">Status</th>
                            <th data-priority="6">Action</th>
                        </tr>
                    </thead>

                     <tbody>

                        <!-- Datatables -->
                        <?php
                            $result = mysqli_query($konek, "SELECT * FROM psb2021 order by id ASC");
                            $total = $result->num_rows;
                            while ($user_data = mysqli_fetch_array($result)) {
                        ?>

                            <tr>
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                           <img class="object-cover w-full h-full rounded-full" src="img/<?=$user_data['foto']?>" alt="" loading="lazy" />
                                           <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-black"><?= $user_data['nama']; ?></p>
                                            <p class="text-xs text-gray-600"><?= $user_data['email']; ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td><?= $user_data['nisn']; ?></td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p class="font-semibold text-black"><?= $user_data['sekolah_tujuan']; ?></p>
                                            <p class="text-xs text-gray-600"><?= $user_data['sekolah_asal']; ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td><?= $user_data['jurusan']; ?></td>
                                <td><?= $user_data['status']; ?></td>
                                <td>
                                    <a href='profile.php?id=<?= $user_data['id']; ?>'><i class="fas fa-user hover:text-yellow-500"></i></a>
                                    <a href='edit.php?id=<?= $user_data['id']; ?>'><i class="fas fa-user-edit hover:text-yellow-500"></i></a>
                                    <a href='delete.php?id=<?= $user_data['id']; ?>'><i class="fas fa-user-alt-slash hover:text-yellow-500"></i></a>
                                </td>
                             
                            </tr>
                           
                        <?php
                        }
                        ?>

                    </tbody>

                </table>
                  
            </div>
       
        </div>
   
    <!-- Include Script -->
    <?php include './src/script/script.php';?>
    
    <!-- Script Datatables -->
    <script>
        $(document).ready(function() {
                
            var table = $('#example').DataTable( {
                responsive: true
            } )
            .columns.adjust()
            .responsive.recalc();
        } );
        
    </script>

  </body>
  </html>

<?php
}
?>

