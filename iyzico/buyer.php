<?php

require_once('config.php');

$kullanici_id=$kullanicicek['kullanici_id'];
$kullanici_adsoyad=$kullanicicek['kullanici_adsoyad'];
$kullanici_adsoyadp=explode(" ", $kullanici_adsoyad);

$kullanici_ad=$kullanici_adsoyadp[0];
$kullanici_soyad=$kullanici_adsoyadp[1];
$kullanici_tel=$kullanicicek['kullanici_tel'];
 $kullanici_mail=$kullanicicek['kullanici_mail'];
 $kullanici_zaman=$kullanicicek['kullanici_zaman'];
 $kullanici_unvan=$kullanicicek['kullanici_unvan'];
 $siparis_no=23;
 $sepettoplam=$toplam;


# create request class
$request = new \Iyzipay\Request\CreateCheckoutFormInitializeRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$request->setConversationId("$siparis_no");
$request->setPrice($sepettoplam);
$request->setPaidPrice($sepettoplam);
$request->setCurrency(\Iyzipay\Model\Currency::TL);
$request->setBasketId("$siparis_no");
$request->setPaymentGroup(\Iyzipay\Model\PaymentGroup::PRODUCT);
$request->setCallbackUrl("http://eticaret.neyazilim.com/iyzico/sonuc.php?siparis_no=$siparis_no");
$request->setEnabledInstallments(array(2, 3, 6, 9));


$buyer = new \Iyzipay\Model\Buyer();
$buyer->setId("$kullanici_id");
$buyer->setName("$kullanici_ad");
$buyer->setSurname("$kullanici_soyad");
$buyer->setGsmNumber("$kullanici_tel");
$buyer->setEmail("$kullanici_mail");
$buyer->setIdentityNumber("$kullanici_tel");
$buyer->setLastLoginDate("$kullanici_zaman");
$buyer->setRegistrationDate("$kullanici_zaman");
$buyer->setRegistrationAddress("$kullanici_unvan");
$buyer->setIp("127.0.0.1");
$buyer->setCity("$kullanici_seher");
$buyer->setCountry("Azerbaijan");
$buyer->setZipCode("34732");
$request->setBuyer($buyer);

$shippingAddress = new \Iyzipay\Model\Address();
$shippingAddress->setContactName("$kullanici_ad");
$shippingAddress->setCity("$kullanici_seher");
$shippingAddress->setCountry("Azerbaijan");
$shippingAddress->setAddress("$kullanici_unvan");
$shippingAddress->setZipCode("34732");
$request->setShippingAddress($shippingAddress);

$billingAddress = new \Iyzipay\Model\Address();
$billingAddress->setContactName("$kullanici_ad");
$billingAddress->setCity("$kullanici_seher");
$billingAddress->setCountry("Azerbaijan");
$billingAddress->setAddress("$kullanici_unvan");
$billingAddress->setZipCode("34732");
$request->setBillingAddress($billingAddress);

$basketItems = array();
$firstBasketItem = new \Iyzipay\Model\BasketItem();
$firstBasketItem->setId("$siparis_no");
$firstBasketItem->setName("Binocular");
$firstBasketItem->setCategory1("Collectibles");
$firstBasketItem->setItemType(\Iyzipay\Model\BasketItemType::PHYSICAL);
$firstBasketItem->setPrice($sepettoplam);
$basketItems[0] = $firstBasketItem;
$request->setBasketItems($basketItems);


# make request
$checkoutFormInitialize = \Iyzipay\Model\CheckoutFormInitialize::create($request, Config::options());

# print result
//print_r($checkoutFormInitialize);
//print_r($checkoutFormInitialize->getstatus());
print_r($checkoutFormInitialize->getErrorMessage());
print_r($checkoutFormInitialize->getCheckoutFormContent());



?>

