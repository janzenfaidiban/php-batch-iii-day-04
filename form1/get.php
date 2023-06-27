<?php 

    // echo $_GET['username'];
    // echo '<br>';

    // echo $_GET['password'];
    // echo '<br>';

// ========================================

    // // simpan data ke dalam variabel 
    // $username = $_GET['username'];
    // $password = $_GET['password'];

    // // tampilkan value dari variabel
    // echo $username . '<br>';
    // echo $password . '<br>';

// =========================================

    if(isset($_GET['submit']) && $_GET['submit'] == 'send') {
        
        echo "Good work! <br>";

        // jika field input username kosong
        if($_GET['username'] == '') {
            echo "Please input your username! <br>";
        } else {
            // buat variabel $username
            $username = $_GET['username'];

            // menampilkan value dari variabel $username
            echo $username . '<br>';
        }

        // jika filed input password kosong
        if($_GET['password'] == '') {
            echo "Please input your password! <br>";
        } else {
            // buat variabel $password
            $password = $_GET['password'];

            // tambahkan fungsi md5() untuk enkripsi password
            $passwordMD5 = md5($password);

            // menampilkan value dari variabel $password
            echo $password . '<br>';

            // menampilkan value dari variabel $passwordMD5
            echo $passwordMD5 . '<br>';
        }



    } else {
        echo "Something wrong!";
    }

// =========================================
    
    echo '<a href="index.php">Back</a>';
?>