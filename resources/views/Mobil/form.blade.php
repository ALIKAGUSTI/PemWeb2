<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @csrf
   <div class="card">
    <h2>Form Tambah Mobil</h2>
    <form action="/Mobil/simpanData" method="POST">
    <div class="form-group">
        <label for="">Nama Mobil</label> <br>
        <input type="text" name="nama_mobil" required> <br>
    </div>
    <div class="form-group">
        <label for="">Merk Mobil</label> <br>
        <input type="text" name="Merk_mobil" required ><br>
    </div>
    <div class="form-group">
        <label for="">cc</label> <br>
        <input type="text" name="cc" required><br>
    </div>
    <div class="form-group">
        <button type="submit">Tambah Data</button>
    </div>
   </div>
</form>
</body>
</html>