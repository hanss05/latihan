<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
   <div class="container mt-3">
      <form action="">
         <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Kode</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" id="inputPassword">
            </div>
         </div>
         <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" id="inputPassword">
            </div>
         </div>
         <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Satuan</label>
            <div class="col-sm-10">
               <select name="" class="form-select" id="">
                  <option value="">PILIH</option>
                  <option value="Pcs">Pcs</option>
                  <option value="Box">Box</option>
                  <option value="Paket">Paket</option>
               </select>
            </div>
         </div>
         <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Harga Jual</label>
            <div class="col-sm-10">
               <input type="number" class="form-control" id="inputPassword">
            </div>
         </div>

         <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
               <button class="btn btn-primary">Simpan</button>
               <a href="index.php">
                  <button type="button" class="btn btn-light">Kembali</button>
               </a>
            </div>
         </div>


      </form>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>