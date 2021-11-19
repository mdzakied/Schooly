<!-- Registration PSB 2021 -->
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
    <title>Schooly | Daftar PSB 2021 </title>
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
                    <a href="registration_psb_2021.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline border-b-2 border-yellow-500">
                    <i class="fas fa-user-plus fa-fw mr-1"></i> <span class="pb-1 md:pb-0 text-sm">Daftar PSB 2021</span>
                    </a>
                </li>
            </ul>
            <div class="relative pull-right">
                <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                    <li class="mr-6 my-2 md:my-0">
                        <a href="contact_center.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline border-b-2 border-white hover:border-yellow-500">
                            <i class="far fa-id-card fa-fw mr-1"></i><span class="pb-1 md:pb-0 text-sm">Contact Center</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

      </div>
    </nav>

    <!-- Registration -->
    <div class="w-full flex flex-wrap">
        
        <!-- Image Section -->
        <div class="w-1/2">
            <img class="object-cover w-full h-screen hidden md:block" src="./src/img/login&registration.png">
        </div>

        <!-- Registration Section -->
        <div class="w-full md:w-1/2 flex flex-col pt-36">

            <div class="flex flex-col justify-center md:justify-start pt-8 md:pt-0 px-8 md:px-20 lg:px-32">

                <div x-data="app()" x-cloak>

		            <div class="max-w-3xl mx-auto">

                        <!-- Registration -->
                        <?php
                            
                            // include database connection file
                            include_once "./src/script/connection.php";

                            // Check If form submitted, insert form data into users table.
                            if (isset($_POST['daftar_psb2021'])) {
                                $foto = $_FILES['foto']['name'];
                                $tmp = $_FILES['foto']['tmp_name'];
                                $nama = $_POST['nama'];
                                $email = $_POST['email'];
                                $password = $_POST['password'];
                                $nisn = $_POST['nisn'];
                                $gender = $_POST['gender'];
                                $place = $_POST['place'];
                                $date = $_POST['date'];
                                $sekolah_asal = $_POST['sekolah_asal'];
                                $sekolah_tujuan = $_POST['sekolah_tujuan'];
                                $jurusan= $_POST['jurusan'];
                                $status = $_POST['status'];

                                // Rename with add date and time upload
                                $fotobaru = date('dmYHis').$foto;
                            
                                // Set path folder for save
                                $path = "img/".$fotobaru;
                                                
                                // Replace from folder tmp to folder website
                                move_uploaded_file($tmp, $path);

                                // Insert user data into table
                                $ambil_id = mysqli_query($konek, "SELECT id FROM psb2021 ORDER BY id DESC LIMIT 1");
                                $row_id = mysqli_fetch_array($ambil_id);
                                $hasil_id = $row_id['id'];
                                $id = $hasil_id + 1;
                                $result = mysqli_query($konek, "INSERT INTO psb2021 VALUES('$id','$fotobaru','$nama','$email','$password','$nisn',2,'$gender','$place','$date','$sekolah_asal','$sekolah_tujuan','$jurusan','$status')");

                                if( $result ) { 
                                    echo '
                                        <div class="bg-white rounded-lg p-10 flex items-center shadow justify-between">
                                            <div>
                                                <svg class="mb-4 h-20 w-20 text-green-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>

                                                <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Pendaftaran Berhasil</h2>

                                                <div class="text-gray-600 mb-8">
                                                    Terimakasih sudah mendaftar. Silahkan cek data anda dengan mencari identitas anda pada halaman PSB 2021.
                                                </div>

                                                <a href="psb_2021_user.php"><button class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">Yuk Cek</button></a>
                                            </div>
                                        </div>
                                    ';
                                }
                            }               
                        ?>
                        
                        <!-- Step Content -->
                        <div class="py-0">
                            <form action="registration_psb_2021.php" method="POST" enctype="multipart/form-data">

                                <div x-show.transition.in="step === 1">

                                    <div class="bg-white rounded-lg p-10 flex items-center shadow justify-between">
                                        <div>
                                            <svg class="mb-4 h-20 w-20 text-yellow-500 mx-auto" viewBox="0 0 20 20" fill="currentColor"> <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>

                                            <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">Peringatan</h2>

                                            <div class="text-gray-600 mb-8">
                                                <div class="text-gray-600 mt-2 mb-4">
                                                    Pastikan Pengisian Data

                                                    <ul class="list-disc text-sm ml-4 mt-2">
                                                        <li>Secara urut sesuai dengan langkah-langkah agar pengisian data tidak di reset ulang</li>
                                                        <li>Lengkap sesuai dengan yang di minta agar pengisian data dapat di submit </li>
                                                        <li>Valid sesuai dengan identitas anda</li>
                                                        <li><i class="fas fa-info-circle text-yellow-500 mx-auto"></i> Gunakan foto formal 3 x 4 background merah </li>
                                                        <li><i class="fas fa-info-circle text-yellow-500 mx-auto"></i> Pendaftaran PSB online 2021 tersinkronisasi otomatis dengan akun anda</li>
                                                    </ul>             
                       
                                                </div>                              
                                            </div>

                                            <div class="flex justify-center">
                                                <div class="w-full text-center">
                                                    <button
                                                        @click="step= 2"
                                                        class="w-32 focus:outline-none py-1 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-yellow-400 font-medium border" 
                                                    >Setuju</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div x-show.transition.in="step === 2">

                                    <div class="mb-5 text-center">

                                        <div class="mx-auto w-32 h-32 mb-2 border rounded-full relative bg-gray-100 mb-4 shadow-inset">
                                            <img id="image" class="object-cover w-full h-32 rounded-full" :src="image" />
                                        </div>

                                        <label 
                                            for="fileInput"
                                            type="button"
                                            class="cursor-pointer inine-flex justify-between items-center focus:outline-none border py-2 px-4 rounded-lg shadow-sm text-left text-gray-600 bg-white hover:bg-gray-100 font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex flex-shrink-0 w-6 h-6 -mt-1 mr-1" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                                <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                                                <circle cx="12" cy="13" r="3" />
                                            </svg>						
                                            Browse Photo
                                        </label>

                                        <input name="foto" id="fileInput" accept="image/*" class="hidden" type="file" @change="let file = document.getElementById('fileInput').files[0]; 
                                            var reader = new FileReader();
                                            reader.onload = (e) => image = e.target.result;
                                            reader.readAsDataURL(file);" required>
                                    </div>

                                    <div class="mb-5">
                                        <label for="Nama" class="font-bold mb-1 text-gray-700 block">Nama</label>
                                        <input type="text"
                                            name="nama"
                                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                            placeholder="Masukan nama anda..." value="<?php echo $_SESSION['nama'];?>" readonly="readonly" required>
                                    </div>

                                    <div class="mb-5">
                                        <label for="email" class="font-bold mb-1 text-gray-700 block">Email</label>
                                        <input type="text"
                                            name="email"
                                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                            placeholder="Masukan email anda..." value="<?php echo $_SESSION['email'];?>" readonly="readonly" required>
                                    </div>

                                </div>

                                <div x-show.transition.in="step === 3">

                                    <!-- Hidden password form -->
                                    <div class="mb-5 hidden">
                                        <label for="password" class="font-bold mb-1 text-gray-700 block">Password</label>
                                        <input type="text"
                                            name="password"
                                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                            placeholder="Masukan password anda..." value="<?php echo $_SESSION['password'];?>" readonly="readonly" required>
                                    </div>

                                    <div class="mb-5">
                                        <label for="nisn" class="font-bold mb-1 text-gray-700 block">NISN</label>
                                        <input type="number"
                                            name="nisn"
                                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                            placeholder="Masukan NISN anda..." value="<?php echo $_SESSION['nisn'];?>" readonly="readonly" required>
                                    </div>

                                    <div class="mb-5">
                                        <label for="gender" class="font-bold mb-1 text-gray-700 block">Jenis Kelamin</label>
                                        <input type="text"
                                            name="gender"
                                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                            placeholder="Masukan Jenis Kelamin anda..." value="<?php echo $_SESSION['gender'];?>" readonly="readonly" required>
                                    </div>

                                    <div class="mb-5">
                                        <label for="place" class="font-bold mb-1 text-gray-700 block">Tempat Lahir</label>
                                        <input type="text"
                                            name="place"
                                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                            placeholder="Masukan tempat lahir anda..." value="<?php echo $_SESSION['place'];?>" readonly="readonly" required>
                                    </div>

                                    <div class="mb-5">
                                        <label for="date" class="font-bold mb-1 text-gray-700 block">Tanggal Lahir</label>
                                        <input type="date"
                                            name="date"
                                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                            value="<?php echo $_SESSION['date'];?>" readonly="readonly" required>
                                    </div>

                                </div>

                                <div x-show.transition.in="step === 4">

                                    <div class="mb-5">
                                        <label for="sekolah_asal" class="font-bold mb-1 text-gray-700 block">Sekolah Asal</label>
                                        <input type="text"
                                            name="sekolah_asal"
                                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                            placeholder="Masukan sekolah asal anda..." required>
                                    </div>

                                    <div class="mb-5">
                                        <label for="sekolah_tujuan" class="font-bold mb-1 text-gray-700 block">Sekolah Tujuan</label>
                                        <input type="text"
                                            name="sekolah_tujuan"
                                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                            placeholder="Masukan sekolah tujuan anda..." required>
                                    </div>

                                    <div class="mb-5">
                                        <label for="jurusan" class="font-bold mb-1 text-gray-700 block">Jurusan</label>
                                        <input type="text"
                                            name="jurusan"
                                            class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                            placeholder="Masukan jurusan yang anda ..." required>
                                    </div>

                                    <div class="mb-5">
                                        <label for="status" class="font-bold mb-1 text-gray-700 block">Status Pendaftaran</label>
                                            
                                        <div class="flex">
                                            <label
                                                class="flex justify-start items-center text-truncate rounded-lg bg-white pl-4 pr-6 py-3 shadow-sm mr-4">
                                                <div class="text-teal-600 mr-3">
                                                    <input type="radio" name="status" x-model="status" value="Tahap 1 : Daftar Online" class="form-radio focus:outline-none focus:shadow-outline">
                                                </div>
                                                <div class="select-none text-gray-700">Tahap 1 : Daftar Online</div>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                
                                <!-- Bottom Navigation -->	
                                <div class="py-1">
                                    
                                    <div class="flex justify-between">
                                        <div class="w-1/2">
                                            <button
                                                x-show="step > 1"
                                                @click="step--"
                                                class="w-32 focus:outline-none py-1 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border" 
                                            >Kembali</button>
                                        </div>

                                        <div class="w-1/2 text-right">
                                            <button
                                                x-show="step < 4 && step > 1"
                                                @click="step++"
                                                class="w-32 focus:outline-none border border-transparent py-1 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium" 
                                            >Lanjut</button>

                                            <button
                                                type="submit"
                                                name="daftar_psb2021"
                                                x-show="step === 4"
                                                class="w-32 focus:outline-none border border-transparent py-1 px-5 rounded-lg shadow-sm text-center text-white bg-green-500 hover:bg-green-600 font-medium" 
                                            >Submit</button>
                                        </div>
                                    </div>

                                </div>
            
                            </form>   
                        </div>

			        </div>

		        </div>
                
            </div>
        
        </div>

    </div>
 
    <!-- Include Script -->
    <?php include './src/script/script.php';?>

    <!-- Script Registration -->
	<script>
		function app() {
			return {
                step: 1,
				image: 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAAAAAAAD/4QBCRXhpZgAATU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAkAAAAMAAAABAAAAAEABAAEAAAABAAAAAAAAAAAAAP/bAEMACwkJBwkJBwkJCQkLCQkJCQkJCwkLCwwLCwsMDRAMEQ4NDgwSGRIlGh0lHRkfHCkpFiU3NTYaKjI+LSkwGTshE//bAEMBBwgICwkLFQsLFSwdGR0sLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLP/AABEIAdoB2gMBIgACEQEDEQH/xAAfAAABBQEBAQEBAQAAAAAAAAAAAQIDBAUGBwgJCgv/xAC1EAACAQMDAgQDBQUEBAAAAX0BAgMABBEFEiExQQYTUWEHInEUMoGRoQgjQrHBFVLR8CQzYnKCCQoWFxgZGiUmJygpKjQ1Njc4OTpDREVGR0hJSlNUVVZXWFlaY2RlZmdoaWpzdHV2d3h5eoOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4eLj5OXm5+jp6vHy8/T19vf4+fr/xAAfAQADAQEBAQEBAQEBAAAAAAAAAQIDBAUGBwgJCgv/xAC1EQACAQIEBAMEBwUEBAABAncAAQIDEQQFITEGEkFRB2FxEyIygQgUQpGhscEJIzNS8BVictEKFiQ04SXxFxgZGiYnKCkqNTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqCg4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2dri4+Tl5ufo6ery8/T19vf4+fr/2gAMAwEAAhEDEQA/APTmZsnmk3N60N1NJTELub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lFAC7m9aNzetJRQAu5vWjc3rSUUALub1o3N60lJQA7c3rSbm9aSigBdzetG4+tJRQAZPrRuPrSUUALub1/lRub1pKSgBdzUbm9aSigBdzetG5vX+VJSUALub1/lUu5qhqXj1oAG6mkpW6mkoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooASiiigAooooAKSiigAooo+lACUZoooAKKKSgAo/rRSUALUlRVJz60AObqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACkoooAKKKKACiikoAKSlooASiiigA+lHpRQaACkoooATmilpPegBP/ANdS5HrUdSfL7UAObqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKSiigAooooAKKKKAEooooASij60UAFFFHpQAUmaKPxoAKSlpPWgA/wAmk/pS/Sk47dqADpUvPvUXrUn4H8qAHt1NJSt1NJQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFISFBJIAHUk4FAC0VTlv4EyEBc+3C/nVSS9uX6MEHonX8zQBrEqvLEAe5A/nUTXVqvWVfwyf5VjFmY5Ykn3JP86SmBrG/tB3c/RTTf7QtvST8hWXRQBqi/te+8f8AAc09by0b/loB/vAiseigDeV43+66t9CDTq5/p04+lTJdXMfSQkej/MP1oA2qKoR6gpwJUK/7Scj8utXEkjkG5GDD2P8AMUgH0UUUAFFFJQAUUUUAFFFJQAtJRRQAUlFFABR2oo+lAB1pKKP60AFFFFACUHjNH/66KAEpaSj/APVQAc0/I9KZUufpQA5uppKVuppKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACimsyopZiAo5JNZlxePLlI8rH0J/ib60AWp72KLKph3/wDHR9TWdLNNMcuxPoOij6Co6KYBRRRQAUUUUAFFFFABRRRQAUUUUAFKruhDIxUjuDikooA0IL/os4/4Gv8AUVfBVgCpBB6Ecg1gVLBcSwH5eUP3lPQ/SgDaoqOKaOZdyH/eB6qfepKQBRRRQAlFFFABSUUUAFFFFABRRSf5NABxR6e1FJQAcUUUnP6UALSf5/GjvRz+FAB06d6KT6UGgA96kyf8mo//ANdP59P1oAlbqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACmu6RqzucKvJNKSACScADJJ7Csi6uDO2BkRqflHr7mgBLi5edu4QH5V/qagoopgFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFACUUUUAPjkkiYOhwR+RHoa14J0nTI4YffX0NYtPileJ1dDyOoPQj0NAG7SUyKVJkDr36juD6U+kAUhoooAKKKKACij/JpKACj/PNFFABScUelFACUdqP8mj+dABn9KMjij60d+tACf5FH5Uf59qOOlACfhUn40zmn4oAlbqaSlbqaSgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKhuJhDEz/xfdQerGgCpfXGT5CHgf6w+/8AdqhQSSSScknJPqTRTAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACkoooAKKKKACiiigCe2nMEnP+rbhx6e9bHoQevT3zXP1p2M+9DE33k5X/AHf/AK1AF2koNFIAoopKAFpKKPSgApPX0pf8mkoAKKTPP1paAE+lFFIT/ntQAelHAoz0oz/hQAd6T155oooAKk2+wqLPt/8AWqTj1P5GgCZuppKVuppKACiiigAooooAKKKKACiiigAooooAKKKKACiiigArJvpd8uwH5Y+P+BHrWnK4jjkc/wAKkj69qwiSSSepJJ+ppgFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABSUUUAFFFFABRRSUAFFFFABT4pDFIkg/hPPuO4plFAG8CGAYchgCD7HmlqpYy74dp6xnH4HkVapALSUUUAH+NFFJQAc0f5+tHFJQAUUUepoAP/r0nP/1sUH1ozQAUnOaPwo9OlAAcd6T60tJQAHn+lSZPotR/55qTJ/yKAJm6mkpW6mkoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAKWoPiNE/vtk/RazKt6g2Zgv9xB+Z5qpTAKKKKACiiigAooooAKKKKA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',
                status: 'Tahap 1 : Daftar Online',
			}
		}
	</script>


  </body>
  </html>

<?php
}
?>

