<?php
error_reporting(0);
ob_start();
session_start();

include 'baglan.php';
include '../production/fonksiyon.php';

//------------------------------------------------------------------------------------------------------------------------


if (isset($_POST['kullanicikaydet'])) {

	 $kullanici_adsoyad=htmlspecialchars($_POST['kullanici_adsoyad']); 
	  $kullanici_tel=htmlspecialchars($_POST['kullanici_tel']); 
	 $kullanici_mail=htmlspecialchars($_POST['kullanici_mail']);  
	
	 $kullanici_passwordone=htmlspecialchars($_POST['kullanici_passwordone']);  
	
     $kullanici_passwordtwo=htmlspecialchars($_POST['kullanici_passwordtwo']);   



	 if ($kullanici_passwordone==$kullanici_passwordtwo) {

if (strlen($kullanici_passwordone)>=6) {
	
$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
$kullanicisor->execute(array(

'mail' => $kullanici_mail

));

$say = $kullanicisor->rowCount();

if ($say==0) {


$password=md5($kullanici_passwordone);

$kullanici_yetki = 1;


$kullanicikaydet=$db->prepare("INSERT into kullanici SET
kullanici_adsoyad=:kullanici_adsoyad,
kullanici_tel=:kullanici_tel,
kullanici_mail=:kullanici_mail,
kullanici_password=:kullanici_password,
kullanici_yetki=:kullanici_yetki
");


$insert=$kullanicikaydet->execute(array(

'kullanici_adsoyad' => $kullanici_adsoyad,
'kullanici_tel' => $kullanici_tel,
'kullanici_mail' => $kullanici_mail,
'kullanici_password' => $password,
'kullanici_yetki' => $kullanici_yetki
));


if ($insert) {
	//echo "basarili";

	header("location:../../register.php?durum=basarili");

} else{
	//echo "alinmadi";

	header("location:../../register.php?durum=basarisiz");

}




	
} else{
	//echo "eyni adam";

header("location:../../register.php?durum=eynikayit");
}


} else {

//echo "azdi parol";

	header("Location:../../register.php?durum=eksisifre");



}






	 	
	 } else {

//echo "ferqli shifr";
	 	header("Location:../../register.php?durum=farklisifre");


	 }






}



//========================================================================================================================

if (isset($_POST['logoduzenle'])) {


$uploads_dir= '../../dimg';

@$tmp_name= $_FILES['ayar_logo']["tmp_name"];
@$name= $_FILES['ayar_logo']["name"];

$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);

	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
$refimgyol= substr($uploads_dir, 6)."/".$benzersizad.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");



$duzenle=$db->prepare("UPDATE ayar SET
	
ayar_logo=:logo

WHERE ayar_id=0");


$update=$duzenle->execute(array(

'logo' => $refimgyol
));


if ($update) {

	header("location:../production/genel-ayar.php?durum=ok");


} else{


	header("location:../production/genel-ayar.php?durum=no");


}


}

//---------------------------------------------------------------------------------------------------------------------------------------------


if (isset($_POST['kullanicigiris'])) {




$kullanici_mail=$_POST['kullanici_mail'];
$kullanici_password=md5($_POST['kullanici_password']);



$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail AND kullanici_password=:password and kullanici_yetki=:yetki and kullanici_durum=:durum");
$kullanicisor->execute(array(

'mail'=> $kullanici_mail,
'password'=> $kullanici_password,
'yetki' => 1,
'durum' => 1
));

echo $say=$kullanicisor->rowCount(); 


if ($say==1) {
	
	 $_SESSION['userkullanici_mail']=$kullanici_mail;


header("location:../../index.php");



}  else{


header("location:../../index.php?durum=no");

}

}








//-------------------------------------------------------------------------------------------------------------------------------------------

if (isset($_POST['admingiris'])) {

$kullanici_mail=$_POST['kullanici_mail'];
$kullanici_password=md5($_POST['kullanici_password']);



$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail AND kullanici_password=:password and kullanici_yetki=:yetki");
$kullanicisor->execute(array(

'mail'=> $kullanici_mail,
'password'=> $kullanici_password,
'yetki' => 5

));

echo $say=$kullanicisor->rowCount();


if ($say==1) {
	
$_SESSION['kullanici_mail']=$kullanici_mail;


header("location:../production/index.php");

exit;

}  else{


header("location:../production/login.php?durum=no");
exit;
}

}


//--------------------------------------------------------------------------------------------------------------------------------------


if (isset($_POST['kullanicisifreduzenle'])) {


	 
 $kullanici_passwordeski=trim($_POST['kullanici_passwordeski']); 
	
	 $kullanici_passwordone=trim($_POST['kullanici_passwordone']);  
	
     $kullanici_passwordtwo=trim($_POST['kullanici_passwordtwo']);   

$kullanici_password=md5($_POST['kullanici_passwordeski']);

$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_password=:password");
$kullanicisor->execute(array(

'password' => $kullanici_password

));

$say = $kullanicisor->rowCount();

if($say=="0")

{

header("location:../../sifreguncelle.php?durum=eskisifreyanlis");

}
else {
	


 if ($kullanici_passwordone==$kullanici_passwordtwo) {

if (strlen($kullanici_passwordone)>=6) {
	

$password=md5($kullanici_passwordone);




$kullanicikaydet=$db->prepare("UPDATE kullanici SET

kullanici_password=:kullanici_password

WHERE kullanici_id={$_POST['kullanici_id']}
");


$insert=$kullanicikaydet->execute(array(

'kullanici_password' => $password

));


if ($insert) {
	//echo "basarili";

	header("location:../../sifreguncelle.php?durum=basarili");

} else{
	//echo "alinmadi";

	header("location:../../sifreguncelle.php?durum=basarisiz");

}




	
} else{
	//echo "azdi parol";

	header("Location:../../sifreguncelle.php?durum=eksisifre");

}


} else {

//echo "ferqli shifr";
	 	header("Location:../../sifreguncelle.php?durum=farklisifre");




}






	 	
	 }



}





//-------------------------------------------------------------------------------------------------------------------------------------------


if (isset($_POST['genelayarkaydet'])) {


$ayarkaydet=$db->prepare("UPDATE ayar SET
ayar_title=:ayar_title,
ayar_description=:ayar_description,
ayar_keywords=:ayar_keywords,
ayar_author=:ayar_author
WHERE ayar_id=0");


$update=$ayarkaydet->execute(array(

'ayar_title' => $_POST['ayar_title'],
'ayar_description' => $_POST['ayar_description'],
'ayar_keywords' => $_POST['ayar_keywords'],
'ayar_author' => $_POST['ayar_author']
));


if ($update) {

	header("location:../production/genel-ayar.php?durum=ok");

} else{


	header("location:../production/genel-ayar.php?durum=no");

}


}

//--------------------------------------------------------------------------------------------------------------------------------------------


if (isset($_POST['iletisimayarkaydet'])) {


$ayarkaydet=$db->prepare("UPDATE ayar SET
ayar_tel=:ayar_tel,
ayar_gsm=:ayar_gsm,
ayar_faks=:ayar_faks,
ayar_mail=:ayar_mail,
ayar_seher=:ayar_seher,
ayar_adress=:ayar_adress,
ayar_mesai=:ayar_mesai
WHERE ayar_id=0");


$update=$ayarkaydet->execute(array(

'ayar_tel' => $_POST['ayar_tel'],
'ayar_gsm' => $_POST['ayar_gsm'],
'ayar_faks' => $_POST['ayar_faks'],
'ayar_mail' => $_POST['ayar_mail'],
'ayar_seher' => $_POST['ayar_seher'],
'ayar_adress' => $_POST['ayar_adress'],
'ayar_mesai' => $_POST['ayar_mesai']

));


if ($update) {

	header("location:../production/iletisim-ayar.php?durum=ok");

} else{


	header("location:../production/iletisim-ayar.php?durum=no");




}


}

//-----------------------------------------------------------------------------------------------------------------------


if (isset($_POST['apiayarkaydet'])) {


$ayarkaydet=$db->prepare("UPDATE ayar SET
ayar_maps=:ayar_maps,
ayar_analiystic=:ayar_analiystic,
ayar_zopim=:ayar_zopim
WHERE ayar_id=0");


$update=$ayarkaydet->execute(array(

'ayar_maps' => $_POST['ayar_maps'],
'ayar_analiystic' => $_POST['ayar_analiystic'],
'ayar_zopim' => $_POST['ayar_zopim']
));


if ($update) {

	header("location:../production/api-ayar.php?durum=ok");


} else{


	header("location:../production/api-ayar.php?durum=no");


}


}

//----------------------------------------------------------------------------------------------------------------------------------


if (isset($_POST['sosyalayarkaydet'])) {


$ayarkaydet=$db->prepare("UPDATE ayar SET
ayar_facebook=:ayar_facebook,
ayar_twitter=:ayar_twitter,
ayar_youtube=:ayar_youtube,
ayar_google=:ayar_google
WHERE ayar_id=0");


$update=$ayarkaydet->execute(array(

'ayar_facebook' => $_POST['ayar_facebook'],
'ayar_twitter' => $_POST['ayar_twitter'],
'ayar_youtube' => $_POST['ayar_youtube'],
'ayar_google' => $_POST['ayar_google']
));


if ($update) {

	header("location:../production/sosyal-ayar.php?durum=ok");

} else{


	header("location:../production/sosyal-ayar.php?durum=no");
	
}


}

//-----------------------------------------------------------------------------------------------------------------------------------


if (isset($_POST['mailayarkaydet'])) {


$ayarkaydet=$db->prepare("UPDATE ayar SET
ayar_smtphost=:ayar_smtphost,
ayar_smtpuser=:ayar_smtpuser,
ayar_smtppassword=:ayar_smtppassword,
ayar_smtpport=:ayar_smtpport
WHERE ayar_id=0");


$update=$ayarkaydet->execute(array(

'ayar_smtphost' => $_POST['ayar_smtphost'],
'ayar_smtpuser' => $_POST['ayar_smtpuser'],
'ayar_smtppassword' => $_POST['ayar_smtppassword'],
'ayar_smtpport' => $_POST['ayar_smtpport']
));


if ($update) {

	header("location:../production/mail-ayar.php?durum=ok");


} else{


	header("location:../production/mail-ayar.php?durum=no");

}


}

//---------------------------------------------------------------------------------------------------------------------------------------

if (isset($_POST['hakkimizdakaydet'])) {


$hakkimizdakaydet=$db->prepare("UPDATE hakkimizda SET
hakkimizda_basliq=:hakkimizda_basliq,
hakkimizda_icerik=:hakkimizda_icerik,
hakkimizda_video=:hakkimizda_video,
hakkimizda_vizyon=:hakkimizda_vizyon,
hakkimizda_misyon=:hakkimizda_misyon
WHERE hakkimizda_id=0");


$update=$hakkimizdakaydet->execute(array(

'hakkimizda_basliq' => $_POST['hakkimizda_basliq'],
'hakkimizda_icerik' => $_POST['hakkimizda_icerik'],
'hakkimizda_video' => $_POST['hakkimizda_video'],
'hakkimizda_vizyon' => $_POST['hakkimizda_vizyon'],
'hakkimizda_misyon'=> $_POST['hakkimizda_misyon']
));


if ($update) {

	header("location:../production/hakkimizda.php?durum=ok");
	
} else{


	header("location:../production/hakkimizda.php?durum=no");

}


}

//----------------------------------------------------------------------------------------------------------------------

if (isset($_POST['kullaniciduzenle'])) {

$kullanici_id=$_POST['kullanici_id'];

$kullanicikaydet=$db->prepare("UPDATE kullanici SET
kullanici_tc=:kullanici_tc,
kullanici_adsoyad=:kullanici_adsoyad,
kullanici_durum=:kullanici_durum
WHERE kullanici_id={$_POST['kullanici_id']}");


$update=$kullanicikaydet->execute(array(

'kullanici_tc' => $_POST['kullanici_tc'],
'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
'kullanici_durum' => $_POST['kullanici_durum']
));


if ($update) {

	header("location:../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=ok");

} else{

	header("location:../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=no");

}


}

//-------------------------------------------------------------------------------------------------------------------------------------

if (isset($_POST['kullanicibilgiduzenle'])) {

$kullanici_id=$_POST['kullanici_id'];

$kullanicikaydet=$db->prepare("UPDATE kullanici SET

kullanici_adsoyad=:kullanici_adsoyad

WHERE kullanici_id={$_POST['kullanici_id']}");


$update=$kullanicikaydet->execute(array(


'kullanici_adsoyad' => $_POST['kullanici_adsoyad']

));


if ($update) {

	header("location:../../hesabim.php?durum=ok");

} else{

	header("location:../../hesabim.php?durum=no");

}


}


//==================================================================================================================================


if ($_GET['kullanicisil']=="ok") {

	kontrol();


$sil=$db->prepare("DELETE FROM kullanici WHERE kullanici_id=:id");


$kontrol=$sil->execute(array(

'id' => $_GET['kullanici_id']

));


if ($kontrol) {

	header("location:../production/kullanici.php?sil=ok");

} else{

	header("location:../production/kullanici.php?sil=no");

}


}


//======================================================================================================================================


if (isset($_POST['menuduzenle'])) {

$menu_id=$_POST['menu_id'];

$menukaydet=$db->prepare("UPDATE menu SET
menu_ad=:menu_ad,
menu_detay=:menu_detay,
menu_sira=:menu_sira,
menu_durum=:menu_durum
WHERE menu_id={$_POST['menu_id']}");


$update=$menukaydet->execute(array(

'menu_ad' => $_POST['menu_ad'],
'menu_detay' => $_POST['menu_detay'],
'menu_sira' => $_POST['menu_sira'],
'menu_durum' => $_POST['menu_durum']
));


if ($update) {

	header("location:../production/menu-duzenle.php?menu_id=$menu_id&durum=ok");

} else{

	header("location:../production/menu-duzenle.php?menu_id=$menu_id&durum=no");

}


}

//================================================================================================================================

if ($_GET['menusil']=="ok") {

	kontrol();


$sil=$db->prepare("DELETE FROM menu WHERE menu_id=:id");


$kontrol=$sil->execute(array(

'id' => $_GET['menu_id']

));


if ($kontrol) {

	header("location:../production/menu.php?sil=ok");

} else{

	header("location:../production/menu.php?sil=no");

}


}



if (isset($_POST['menukaydet'])) {

$menu_id=$_POST['menu_id'];

$menukaydet=$db->prepare("INSERT into menu SET
menu_ad=:menu_ad,
menu_detay=:menu_detay,
menu_url=:menu_url,
menu_sira=:menu_sira,
menu_durum=:menu_durum
");


$insert=$menukaydet->execute(array(

'menu_ad' => $_POST['menu_ad'],
'menu_detay' => $_POST['menu_detay'],
'menu_url' => $_POST['menu_url'],
'menu_sira' => $_POST['menu_sira'],
'menu_durum' => $_POST['menu_durum']
));


if ($insert) {

	header("location:../production/menu.php?durum=ok");

} else{

	header("location:../production/menu-duzenle.php?menu_id=$menu_id&durum=no");

}


}


//==========================================================================================================================================




if (isset($_POST['kategoriduzenle'])) {

$kategori_id=$_POST['kategori_id'];
	$kategori_seourl=seo($_POST['kategori_ad']);

$kategorikaydet=$db->prepare("UPDATE kategori SET

kategori_ad=:kategori_ad,
kategori_sira=:kategori_sira,
kategori_durum=:kategori_durum,
kategori_seourl=:kategori_seourl
where kategori_id={$_POST['kategori_id']}
	");

$update=$kategorikaydet->execute(array(

'kategori_ad' => $_POST['kategori_ad'],
'kategori_sira' => $_POST['kategori_sira'],
'kategori_durum' => $_POST['kategori_durum'],
'kategori_seourl' => $kategori_seourl

));

if ($update) {

header("location:../production/kategori-duzenle.php?kategori_id=$kategori_id&durum=ok");

} else{

	header("location:../production/kategori-duzenle.php?kategori_id=$kategori_id&durum=no");

}


}

//============================================================================================================================================

if ($_GET['kategorisil']=="ok") {

kontrol();

$sil=$db->prepare("DELETE FROM kategori WHERE kategori_id=:id");


$kontrol=$sil->execute(array(

'id' => $_GET['kategori_id']

));


if ($kontrol) {

	header("location:../production/kategori.php?sil=ok");

} else{

	header("location:../production/kategori.php?sil=no");

}


}


//=================================================================================================================================


if (isset($_POST['kategorikaydet'])) {

$kategori_id=$_POST['kategori_id'];
	$kategori_seourl=seo($_POST['kategori_ad']);

$kategorikaydet=$db->prepare("INSERT into kategori SET
kategori_ad=:kategori_ad,
kategori_sira=:kategori_sira,
kategori_durum=:kategori_durum,
kategori_seourl=:kategori_seourl
");


$insert=$kategorikaydet->execute(array(

'kategori_ad' => $_POST['kategori_ad'],
'kategori_sira' => $_POST['kategori_sira'],
'kategori_durum' => $_POST['kategori_durum'],
'kategori_seourl' => $kategori_seourl
));


if ($insert) {

	header("location:../production/kategori-ekle.php?kategori_id=$kategori_id&durum=ok");

} else{

	header("location:../production/kategori-ekle.php?kategori_id=$kategori_id&durum=no");

}

}

//=========================================================================================================================================


if ($_GET['urunsil']=="ok") {

kontrol();

$sil=$db->prepare("DELETE FROM urun WHERE urun_id=:id");


$kontrol=$sil->execute(array(

'id' => $_GET['urun_id']

));


if ($kontrol) {

	header("location:../production/urun.php?sil=ok");

} else{

	header("location:../production/urun.php?sil=no");

}


}


//--------------------------------------------------------------------------------------------------------------------------


if (isset($_POST['urunekle'])) {

$urun_id=$_POST['urun_id'];

$urun_seourl=seo($_POST['urun_ad']);


$urunkaydet=$db->prepare("INSERT into urun SET
kategori_id=:kategori_id,
urun_ad=:urun_ad,
urun_detay=:urun_detay,
urun_fiyat=:urun_fiyat,
urun_video=:urun_video,
urun_keywords=:urun_keywords,
urun_durum=:urun_durum,
urun_stok=:urun_stok,
urun_seourl=:urun_seourl
");


$insert=$urunkaydet->execute(array(
'kategori_id' => $_POST['kategori_id'],
'urun_ad' => $_POST['urun_ad'],
'urun_detay' => $_POST['urun_detay'],
'urun_fiyat' => $_POST['urun_fiyat'],
'urun_video' => $_POST['urun_video'],
'urun_keywords' => $_POST['urun_keywords'],
'urun_durum' => $_POST['urun_durum'],
'urun_stok' => $_POST['urun_stok'],
'urun_seourl' => $urun_seourl));


if ($insert) {

	header("location:../production/urun-ekle.php?urun_id=$urun_id&durum=ok");

} else{

	header("location:../production/urun-ekle.php?urun_id=$urun_id&durum=no");

}

}



//=====================================================================----------------------------------------------------------------------



if (isset($_POST['urunduzenle'])) {

$urun_id=$_POST['urun_id'];
$urun_seourl=seo($_POST['urun_ad']);


$urunkaydet=$db->prepare("UPDATE urun SET
kategori_id=:kategori_id,
urun_ad=:urun_ad,
urun_detay=:urun_detay,
urun_fiyat=:urun_fiyat,
urun_video=:urun_video,
urun_keywords=:urun_keywords,
urun_durum=:urun_durum,
urun_stok=:urun_stok,
urun_seourl=:urun_seourl


WHERE urun_id={$_POST['urun_id']}");



$update=$urunkaydet->execute(array(
'kategori_id' => $_POST['kategori_id'],
'urun_ad' => $_POST['urun_ad'],
'urun_detay' => $_POST['urun_detay'],
'urun_fiyat' => $_POST['urun_fiyat'],
'urun_video' => $_POST['urun_video'],
'urun_keywords' => $_POST['urun_keywords'],
'urun_durum' => $_POST['urun_durum'],
'urun_stok' => $_POST['urun_stok'],
'urun_seourl' => $urun_seourl



));


if ($update) {

	header("location:../production/urun-duzenle.php?urun_id=$urun_id&durum=ok");

} else{

	header("location:../production/urun-duzenle.php?urun_id=$urun_id&durum=no");

}

}


//======================================================================================================================================


if (isset($_POST['yorumkaydet'])) {

$gelen_url=$_POST['gelen_url'];


$yorumkaydet=$db->prepare("INSERT into yorum SET

kullanici_id=:kullanici_id,
urun_id=:urun_id,

yorum_detay=:yorum_detay

");


$insert=$yorumkaydet->execute(array(
'kullanici_id' => $_POST['kullanici_id'],
'urun_id' => $_POST['urun_id'],
'yorum_detay' => $_POST['yorum_detay']));



if ($insert) {

	header("location:$gelen_url?durum=ok");

} else{

	header("location:$gelen_url?durum=no");

}

}


//=============================================================================================================================================

if ($_GET['yorumsil']=="ok") {
kontrol();


$sil=$db->prepare("DELETE FROM yorum WHERE yorum_id=:id");


$kontrol=$sil->execute(array(

'id' => $_GET['yorum_id']

));


if ($kontrol) {

	header("location:../production/yorum.php?sil=ok");

} else{

	header("location:../production/yorum.php?sil=no");

}


}

//==========================================================================================================================================




if (isset($_POST['yorumduzenle'])) {


$yorum_id=$_POST['yorum_id'];

$yorumkaydet=$db->prepare("UPDATE yorum SET
yorum_detay=:yorum_detay,
yorum_durum=:yorum_durum


WHERE yorum_id={$_POST['yorum_id']}");



$update=$yorumkaydet->execute(array(
'yorum_detay' => $_POST['yorum_detay'],
'yorum_durum' => $_POST['yorum_durum']

));


if ($update) {

	header("location:../production/yorum.php?durum=ok");

} else{

	header("location:../production/yorum.php?durum=no");

}

}

//============================================================================================================================================


if (isset($_POST['sepetekle'])) {


$sepetkaydet=$db->prepare("INSERT into sepet SET

kullanici_id=:kullanici_id,
urun_id=:urun_id,
urun_adet=:urun_adet

");


$insert=$sepetkaydet->execute(array(
'kullanici_id' => $_POST['kullanici_id'],
'urun_id' => $_POST['urun_id'],
'urun_adet' => $_POST['urun_adet']
));



if ($insert) {

	header("location:../../sepet.php?durum=ok");

} else{

	header("location:../../sepet.php?durum=no");

}

}

//==========================================================================================================================================

if ($_GET['malsil']=="ok") {

kontrol();

$sil=$db->prepare("DELETE FROM sepet WHERE urun_id=:id");


$kontrol=$sil->execute(array(

'id' => $_GET['urun_id']

));


if ($kontrol) {

	header("location:../../sepet.php?sil=ok");

} else{

	header("location:../../sepet.php?sil=no");

}


}

//======================================================================================================================================


if ($_GET['urun_o']=="ok") {


$urunkaydet=$db->prepare("UPDATE urun SET

urun_on=:urun_on


WHERE urun_id={$_GET['urun_id']}");



$update=$urunkaydet->execute(array(

'urun_on'=> $_GET['urun_on']


));


if ($update) {

	header("location:../production/urun.php?durum=ok");

} else{

	header("location:../production/urun.php?durum=no");

}

}

//=====================================================================================================================================

if ($_GET['yorum_duru']=="ok") {


$yorumkaydet=$db->prepare("UPDATE yorum SET

yorum_durum=:yorum_durum


WHERE yorum_id={$_GET['yorum_id']}");



$update=$yorumkaydet->execute(array(

'yorum_durum'=> $_GET['yorum_durum']


));


if ($update) {

	header("location:../production/yorum.php?durum=ok");

} else{

	header("location:../production/yorum.php?durum=no");

}

}

//=========================================================================================================================================


if (isset($_POST['bankakaydet'])) {

$banka_id=$_POST['banka_id'];


$bankakaydet=$db->prepare("INSERT into banka SET
banka_ad=:banka_ad,
banka_iban=:banka_iban,
banka_durum=:banka_durum,
banka_hesapadsoyad=:banka_hesapadsoyad
");


$insert=$bankakaydet->execute(array(

'banka_ad' => $_POST['banka_ad'],
'banka_iban' => $_POST['banka_iban'],
'banka_durum' => $_POST['banka_durum'],
'banka_hesapadsoyad' => $_POST['banka_hesapadsoyad']
));


if ($insert) {

	header("location:../production/banka-ekle.php?banka_id=$banka_id&durum=ok");

} else{

	header("location:../production/banka-ekle.php?banka_id=$banka_id&durum=no");

}

}

//=============================================================================================================================================


if (isset($_POST['bankaduzenle'])) {

$banka_id=$_POST['banka_id'];


$bankaduzenle=$db->prepare("UPDATE banka SET
banka_ad=:banka_ad,
banka_iban=:banka_iban,
banka_durum=:banka_durum,
banka_hesapadsoyad=:banka_hesapadsoyad
where  banka_id={$_POST['banka_id']}
");


$update=$bankaduzenle->execute(array(

'banka_ad' => $_POST['banka_ad'],
'banka_iban' => $_POST['banka_iban'],
'banka_durum' => $_POST['banka_durum'],
'banka_hesapadsoyad' => $_POST['banka_hesapadsoyad']
));


if ($update) {

	header("location:../production/banka-duzenle.php?banka_id=$banka_id&durum=ok");

} else{

	header("location:../production/banka-duzenle.php?banka_id=$banka_id&durum=no");

}

}

//===========================================================================================================================================


if ($_GET['bankasil']=="ok") {
kontrol();


$sil=$db->prepare("DELETE FROM banka WHERE banka_id=:id");


$kontrol=$sil->execute(array(

'id' => $_GET['banka_id']

));


if ($kontrol) {

	header("location:../production/banka.php?sil=ok");

} else{

	header("location:../production/banka.php?sil=no");

}


}

//-----------------------------------------------------------------------------------------------------------------------------------------


if (isset($_POST['bankasiparisekle'])) {

$bank=$_POST['banka_id'];
$siparis_tip="Bank vasitəsilə";

$sipariskaydet=$db->prepare("INSERT INTO siparisler SET

kullanici_id=:kullanici_id,
siparis_banka=:siparis_banka,
siparis_toplam=:siparis_toplam,
siparis_tip=:siparis_tip

");


$insert=$sipariskaydet->execute(array(

'kullanici_id' => $_POST['kullanici_id'],
'siparis_banka' => $_POST['banka_id'],
'siparis_toplam' => $_POST['siparis_toplam'],
'siparis_tip' => $siparis_tip

));


if ($insert) {

$siparis_id= $db->lastInsertId();

$kullanici_id=$_POST['kullanici_id'];

$sepetsor=$db->prepare("SELECT * FROM sepet where kullanici_id=:id");
$sepetsor->execute(array(

'id'  => $kullanici_id


));

while ($sepetcek=$sepetsor->fetch(PDO::FETCH_ASSOC)) {

	$urun_id=$sepetcek['urun_id'];
	$urun_adet=$sepetcek['urun_adet'];
	
$urunsor=$db->prepare("SELECT * FROM urun where urun_id=:urun_id ");
$urunsor->execute(array(

'urun_id'=> $urun_id

));


$uruncek=$urunsor->fetch(PDO::FETCH_ASSOC);

$urun_fiyat=$uruncek['urun_fiyat'];


$sipariskaydet=$db->prepare("INSERT INTO siparis_detay SET

siparis_id=:siparis_id,
urun_id=:urun_id,
urun_adet=:urun_adet,
urun_fiyat=:urun_fiyat

");


$insert=$sipariskaydet->execute(array(

'siparis_id' => $siparis_id,
'urun_id' => $urun_id,
'urun_adet' => $urun_adet,
'urun_fiyat' => $urun_fiyat

));

}

if ($insert) {
	kontrol();

$sil=$db->prepare("DELETE FROM sepet WHERE kullanici_id=:id");


$kontrol=$sil->execute(array(

'id' => $kullanici_id

));
header("location:../../siparislerim.php?durum=ok");

}

	

} else{

	header("location:../../siparislerim.php?durum=no");

}
 

}

//------------------------------------------------------------------------------------------------------------------------------------


if ($_GET['siparissil']=="ok") {

	kontrol();

$sil=$db->prepare("DELETE FROM siparisler WHERE siparis_id=:id");


$kontrol=$sil->execute(array(

'id' => $_GET['siparis_id']

));


if ($kontrol) {

	header("location:../production/siparis.php?sil=ok");

} else{

	header("location:../production/siparis.php?sil=no");

}


}

//=======================================================================================================================================


if(isset($_POST['urunfotosil'])) {
	kontrol();
	$urun_id=$_POST['urun_id'];


	echo $checklist = $_POST['urunfotosec'];

	
	foreach($checklist as $list) {

		$sil=$db->prepare("DELETE from urun_foto where urunfoto_id=:urunfoto_id");
		$kontrol=$sil->execute(array(
			'urunfoto_id' => $list
			));
	}

	if ($kontrol) {

		Header("Location:../production/urun-galeri.php?urun_id=$urun_id&durum=ok");

	} else {

		Header("Location:../production/urun-galeri.php?urun_id=$urun_id&durum=no");
	}


} 



?>