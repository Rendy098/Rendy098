<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Websiteku</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  </head>
</head>
<body>

 <!-- Header -->
 <div class="medsos" id="medsos">
      <div class="container">
        <ul>
          <li>
            <a href="https://www.facebook.com/profile.php?id=100074393503457"><i class="fab fa-facebook"></i></a>
          </li>
          <li>
            <a href="https://www.youtube.com/channel/UCj_VqV7PRRTEVSMU1v4uieQ"><i class="fab fa-youtube"></i></a>
          </li>
          <li>
            <a href="https://www.instagram.com/rendy._.s/"><i class="fab fa-instagram"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <header>
      <div class="container">
        <h1><a href="">Websiteku</a></h1>
        <ul>
          <li><a href="index.html">HOME</a></li>
          <li><a href="profile.html">ABOUT</a></li>
          <li><a href="content.html">CONTENT</a></li>
          <li class="active"><a href="post_get.php">BUKU TAMU</a></li>
          <li><a href="https://websiteku-2.netlify.app/">BOOTSTRAP</a></li>
        </ul>
      </div>
    </header>

    <form method= "POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="container">
        <h3>Buku Tamu</h3>
        <h4>Mohon Isikan Data yang Sesuai Di Bawah Ini</h4>
        <div id="frame">

            <div class="form-group">
                 <input type="text" name="name" required>
                <label for="name">Nama</label>
            </div>

             <div class="form-group">
                 <input type="text" name="email" required>
                <label for="email">Email</label>
              </div>

            <div class="form-group">
                    <input type="text" name="alamat" required>
                     <label for="alamat">Alamat</label>
             </div>

            <div class="form-group">
                <input type="text" name="prodi" required>
                  <label for="name">Prodi</label>
            </div>

            <div class="form-group">
                <input type="text" name="kritiksaran" required>
                 <label for="name">Kritik & Saran</label>
            </div>

        </div>
    </div>

    <button class="tombol-aktif animasi warna" type="submit" value="submit" name="submit">Kirim Data</button>
    </form>

    <div class="container">
        <?php

        ?>
    </div>
    <div class="container">
        <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
            $prodi = $_POST['prodi'];
            $kritiksaran = $_POST['kritiksaran'];

            echo"<div class='tampilan'> 
            Nama Lengkap : $name <br>
            Email Anda   : $email <br>
            Alamat  : $alamat <br>
            Prodi   : $prodi <br>
            Kritit & Saran : $kritiksaran <br>
            
            </div>";
        }
        ?>

    </div>
        <style>
            body{
                background: lavender;
                font-family: 'Roboto', sans-serif;
            }
            .container{
                width: 800px;
                text-align: center;
                margin: 40px auto;
            }
            h3{
                color: #742D76;
                font-size: 34px;
                letter-spacing: 0.1em;
                margin-top: 0px;
                margin-bottom: 8px;
            }
            h4{
                font-size: 18px;
                margin-top: 0px;
                margin-bottom: 40px;
                text-transform: uppercase;
            }
            #frame {
                width: 300px;
                margin:0px auto;
                text-align: left;
                box-sizing: border-box;
            }
            .form-group{
                position: relative;
                margin-bottom: 15px;
            }
            .form-group input{
                width: 100%;
                font-size: 1em;
                color: grey;
                padding: 10px 10px;
                background: yellow;
                border: 1px solid grey;
                z-index: 9;
                box-sizing: border-box;
                display: block;
            } 
            .form-group label {
                position: absolute;
                top: -2px;
                padding: 11px 10px;
                transition: all 20ms;
                opacity: 0.5;
                font-size: 1em;
                z-index: -1; 
            }
            .form-group input:focus+label,
            .form-group input:valid+label{
                top: 7px !important;
                left : 5px;
                font-size: 0.8em;
                transform: translate3d(0, -100%, 0);
                opacity: 1;
                padding: 0px 10px;
                background: #f9f9f9;
                z-index: 1;
            }
            .animasi{
                transition: all 0.1s;
                -webkit-transition: all 0.1s;
            }
            
            .tombol-aktif{
                padding: 8px 20px;
                font-family: 'Libre Baskerville',serif;
                border-radius: 10px;
                font-size: 12px;
                color: #f9f9f9;
                text-decoration: none;
                margin-left: 900px;
            }
            .warna{
                background-color: blueviolet;
                border-bottom: 5px solid #298089;
                text-shadow: 0px -2px #298089;
            }

        </style>

         <!-- footer -->
    <footer>
        <small style="background-color: yellow;" >Copyright &copy; 2022 - Rendy Risqi Pradana</small>
    </footer>

</body>
</html>