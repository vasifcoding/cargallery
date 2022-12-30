<?php
include 'baglanti.php';
if(isset($_POST['aracekle'])){
    $ekle=$db->prepare("INSERT INTO araclar set
    
    fotograf=:fotograf,
    model=:model,
    fiyat=:fiyat
    
    
    
    ");
    $kaydet=$ekle->execute(array(
        'fotograf'=>$_POST['fotograf'],
        'model'=>$_POST['model'],
        'fiyat'=>$_POST['fiyat']
    ));
    if($kaydet){
       Header("Location:tablo.php?aracekle=true");
    }
    else{
        Header("Location:tablo.php?aracekle=false");
    }
}


if(isset($_POST['duzenle'])){
    $update=$db->prepare("UPDATE araclar set
    fotograf=:fotograf,
    model=:model,
    fiyat=:fiyat
    WHERE id={$_POST['id']}
    
    ");
    $guncelle=$update->execute(array(
        'fotograf'=>$_POST['fotograf'],
        'model'=>$_POST['model'],
        'fiyat'=>$_POST['fiyat']
    ));
    if($guncelle){
        Header("Location:tablo.php?duzenlendi=true");
    }
    else{
        Header("Location:tablo.php?duzenlendi=false");
    }

}
if(isset($_GET['aracsil'])){
    $aracsil=$db->prepare("DELETE FROM araclar WHERE id=:id");
    $aracsil->execute(array(
      'id'=>$_GET['id']
    ));
    if($aracsil){
    Header("Location:tablo.php?aracsil=true");
    }
    else{
      Header("Location:tablo.php?aracsil=false");
    }
  }

?>