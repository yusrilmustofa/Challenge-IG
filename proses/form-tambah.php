<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form Siswa</title>
  </head>
  <style>
    *{
      box-sizing: border-box;
    }
    [class*="col-"]{
      padding: 15px; float: left; width: 100%
    }
    .container{
      width:80%;
      margin: 0 auto;
    }
    .label{
      font-size:15px;
    }
    .form-control {
      padding:20px;
      font-size:15px;
      width:100%;
      height:30px;
      border:1px solid grey;
      border-radius:10px;
    }
    .button{
      float:right;
      background: darkblue; color :#fff;
      padding:10px;
      border:1px solid darkblue;
      border-radius:10px;
      font-wight:bolder; letter-spasing:1px;
    }
    fieldset{
      border-radius:10px
    }
    fieldset{
      font-weight:bolder;
    }
    .gradient1{ Background:Linear-gradient(to right, blue, black,blue );}
    div{
      font-style: italic;
      color: white;
    }
  </style>
  <body class="gradient1">
    <div class="container">
      <form class="" action="proses-tambah.php" method="post">
        <fieldset>
          <legend>Form Siswa</legend>
          <div class="col-3 label">
          NIS:
          <input type="text" class="form-control" name="nis">
          </div>
          <div class="col-3 label">
            Nama:
            <input type="text" class="form-control" name="nama">
          </div>
          <div class="col-3 label">
            <label for="kelas">Kelas</label>
              <select name="Kelas" class="form-control">
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
                <option value="XIII">XIII</option>
              </select>
          </div>
          <div class="col-3 label">
            <label for="Jurusan">Jurusan</label>
             <select name="Jurusan" class="form-control">
               <option value="RPL">RPL</option>
               <option value="TKJ">TKJ</option>
               <option value="MM">MM</option>
             </select>
          </div>
          <div class="col-3 label">
            Alamat:
            <input type="text" name="alamat" value="" class="form-control">
          </div>
          <div class="col-3 label">
            Matpel PBO:
            <input type="text" name="PBO" value="" class="form-control">
          </div>
          <div class="col-3 label">
            Matpel WEB:
            <input type="text" name="WEB" value="" class="form-control">
          </div>
          <div class="col-3 label">
            Matpel Basdat:
            <input type="text" name="Basdat" value="" class="form-control">
          </div>
          <div class="col-3 label">
            Matpel Desain:
            <input type="text" name="Desain" value="" class="form-control">
          </div>
          <div class="col-3 label">
            Matpel Progdas:
            <input type="text" name="Progdas" value="" class="form-control">
          </div>
          <button type="submit" name="BtnSimpan">Register</button>
          <a href="#"> <button type="submit" name="button"> Kembali</button> </a>
          </button>
        </fieldset>
      </form>
    </div>
  </body>
</html>
