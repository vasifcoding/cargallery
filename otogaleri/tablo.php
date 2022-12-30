
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Araclar Tablosu</title>
</head>
<body>
    <div class="container">
       
    <table  class="table  ">
        <tr class="table-dark">
            <th class="p-3">Arac Fotografi</th>
            <th class="p-3">Arac Modeli</th>
            <th class="p-3">Arac Fiyati</th>
            <th> <a href="aracekle.php"> <button style="float: right ;" class="btn btn-warning " type="button">Arac Ekle</button></a></th>
            <th></th>
            <th></th>
        </tr>



<?php
include 'baglanti.php';
$vericek=$db->prepare("SELECT * FROM araclar");
$vericek->execute();
while($veriler=$vericek->fetch(PDO::FETCH_ASSOC)){







?>

        <tr>
            <td ><img style="object-fit: cover; object-position: center; display: flex;" class="img-thumbnail img-fluid" width="150" src="<?php echo $veriler ['fotograf'] ?>" alt="" srcset=""></td>
            <td style="font-size: 25px;" class="pt-4"><?php echo $veriler ['model'] ?> </td>
            <td style="font-size: 25px;"  class="pt-4"><?php echo $veriler ['fiyat'] ?> ₺</td>
            <td class="p-3"><a href="aracduzenle.php?id=<?php echo $veriler ['id'] ?>"> <button  class="btn btn-lg btn-secondary " type="button">Duzenle</button></a></td>
            <td class="p-3"><a href="islem.php?aracsil&id=<?php echo $veriler ['id'] ?>"> <button  class="btn btn-lg btn-danger " type="button">Sil</button></a></td>
        </tr>
        <?php }?>
    </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>