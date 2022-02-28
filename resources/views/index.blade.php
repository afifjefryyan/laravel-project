<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>

  <div class="header">
    <img src="/gambar/header.jpg" width="100%" height="40%">
  </div>

  <div class="menu">
    <b>
      <a href="/" class="active">Home</a>
      <a href="guru">Guru</a>
      <a href="home">home</a>
    </b>
  </div>

  <div class="kiri">
    <fieldset>
      <legend></legend>
      <center>
        <button onclick="tampilkan_login_siswa()" class="button button1">Siswa</button>
        <button onclick="tampilkan_login_guru()" class="button button-info">Guru</button>
        <button onclick="tampilkan_login_admin()" class="button button-danger">Admin</button>
      </center>

      <br>
      Pilih login yang sesuai dengan anda
      <hr>

      <div id="login_siswa" style="display: none">
        <strong>Login Siswa</strong>
        <br>
        <form action="/login_siswa" method="POST">
          @csrf
          <table>
            <tr>
              <td width="25%"><strong>NIS</strong></td>
              <td width="25%"><input type="text" name="nis" maxlength="10" required></td>
            </tr>
            <tr>
              <td width="25%"><strong>Password</strong></td>
              <td width="25%"><input type="password" name="password" required></td>
            </tr>
          </table>
          <center>
            <button class="button button-success" type="submit" name="button">Login</button>
          </center>
        </form>
      </div>

      <div id="login_guru" style="display: none">
        <strong>Login Guru</strong>
        <br>
        <form action="/login_guru" method="POST">
          @csrf
          <table>
            <tr>
              <td width="25%"><strong>NIP</strong></td>
              <td width="25%"><input type="text" name="nip" maxlength="10" required></td>
            </tr>
            <tr>
              <td width="25%"><strong>Password</strong></td>
              <td width="25%"><input type="password" name="password" required></td>
            </tr>
          </table>
          <center>
            <button class="button button-success" type="submit" name="button">Login</button>
          </center>
        </form>
      </div>

      <div id="login_admin" style="display: none">
        <strong>Login Admin</strong>
        <br>
        <form action="/login_admin" method="POST">
          @csrf
          <table>
            <tr>
              <td width="25%"><strong>Kode Admin</strong></td>
              <td width="25%"><input type="text" name="kode_admin" maxlength="10" required></td>
            </tr>
            <tr>
              <td width="25%"><strong>Password</strong></td>
              <td width="25%"><input type="password" name="password" required></td>
            </tr>
          </table>
          <center>
            <button class="button button-success" type="submit" name="button">Login</button>
          </center>
        </form>
      </div>
    </fieldset>
  </div>


  <script type="text/javascript">
        login_siswa = document.getElementById('login_siswa');
        login_guru  = document.getElementById('login_guru');
        login_admin = document.getElementById('login_admin');
        title_login = document.getElementById('title_login');

        function tampilkan_login_siswa() {
            login_siswa.style.display = 'block';
            login_guru.style.display = 'none';
            login_admin.style.display = 'none';
            title_login.style.display = 'none';
        }

        function tampilkan_login_guru() {
            login_siswa.style.display = 'none';
            login_guru.style.display = 'block';
            login_admin.style.display = 'none';
            title_login.style.display = 'none';
        }

        function tampilkan_login_admin() {
            login_siswa.style.display = 'none';
            login_guru.style.display = 'none';
            login_admin.style.display = 'block';
            title_login.style.display = 'none';
        }
    </script>


  <div class="kanan">
    <center>
      <h1>
        SELAMAT DATANG
        <br>
        Di Website Penilaian SMK Negeri 1 Cibinong
      </h1>
    </center>
  </div>

  <div class="kiri2">
    <center>
      <p class="mar">
        <strong>Gallery</strong>
      </p>
    </center>
    <div class="gallery">
      <img src="/gambar/g2.jpg">
      <div class="deskripsi">SMK BISA 2022</div>
    </div>
  </div>

  <div class="footer">
  <center><p>&copy; <strong>2022 By Afif Jefryyan</strong></p></center>
  </div>

</body>

</html>
<script src="/js/script.js"></script>
