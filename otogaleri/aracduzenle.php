<?php
include 'baglanti.php';

$vericek=$db->prepare("SELECT * FROM araclar where id=:id");
$vericek->execute(array(
    'id'=>$_GET['id']
));
$veriler=$vericek->fetch(PDO::FETCH_ASSOC)





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Arac Duzenle</title>
</head>
<body>
<H1 class="h1 m-3 text-warning">Arac Duzenle</H1>
<form action="islem.php" method="post">
<div style="border-radius: 10px;" class="row bg-secondary p-3  g-1 m-5">

  <div class="col-sm-3">
    <input type="text" value="<?php echo $veriler ['fotograf'] ?>" id="fotograf"  name="fotograf"  class="form-control" placeholder="Arac Fotografi" >
  </div>
  <div class="col-sm-5">
    <input type="text" value="<?php echo $veriler ['model'] ?>"  id="model"   name="model"  class="form-control" placeholder="Arac Modeli">
  </div>
  <div class="col-sm">
    <input type="number"  value="<?php echo $veriler ['fiyat'] ?>" id="fiyat"   name="fiyat"   class="form-control" placeholder="Arac Fiyati" >
  </div>
  <div class="col-sm">
    <input value="<?php echo $veriler ['id'] ?>" name="id" type="hidden">
    <button name="duzenle" id="urun-kaydet" type="submit" class="btn btn-primary ">Duzenle </button>
  </div>
</div>
</form>
















    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>