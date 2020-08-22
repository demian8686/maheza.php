<?php
date_default_timezone_set('Asia/Jakarta');
include "func.php";
system('clear');
ulang:
// function change(){
echo "\e[32;1m∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞\e[93m≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠\e[31;1m≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈\n";
echo "\e[1;37m   || DAY'S  =>\e[1;33m".date('[d-m-Y] [H:i:s]')."\e[1;37m<=   TIME'S ||\n";
echo "\e[32;1m∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞\e[93m≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠\e[31;1m≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈\n";
echo "\e[32;1m|        \e[37;1m 1. \e[93m MANTAN CIHUY =\e[37;1m CLAIM Gofood 20k     \e[31;1m          |\n";
echo "\e[32;1m————————————————\e[93m—————————————————————\e[31;1m—————————————————\n";
echo "\e[32;1m|         \e[37;1m2. \e[93m MANTAN MANIS =\e[37;1m CLAIM ALFA CB 5k\e[31;1m        |\n";
echo "\e[32;1m————————————————\e[93m—————————————————————\e[31;1m—————————————————\n";
echo "\e[32;1m|     \e[37;1m    3. \e[93m MANTAN SEMOK = \e[37;1mCLAIM GOFOOD 60%\e[31;1m        |\n";
echo "\e[32;1m————————————————\e[93m—————————————————————\e[31;1m—————————————————\n";
echo "\e[32;1m|       \e[37;1m  4. \e[93m MANTAN FREAK = \e[37;1mCLAIM AXE\e[31;1m               |\n";
echo "\e[32;1m————————————————\e[93m—————————————————————\e[31;1m—————————————————\n";
echo "\e[32;1m|        \e[37;1m 5. \e[93m MANTAN MANJA = \e[37;1mCLAIM FOOD 15k\e[31;1m          |\n";
echo "\e[32;1m∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞\e[93m≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠\e[31;1m≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈\n";
echo "\e[1;34m               THANKS  \e[93m  TO MY  \e[31;1m  TEAM   \n";
echo "\e[1;32m               SCRIPT \e[1;35m  GOFOOD \e[37;1m    NYA  \n";
echo "\e[1;36m                      DZA\e[93mINV\e[37;1mINA\n";
echo "\e[32;1m∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞\e[93m≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠\e[31;1m≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈\n";
echo "\e[32;1m∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞∞\e[93m≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠≠\e[31;1m≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈\n";
echo "\e[31;1m*•*•*•*•*•*•*•*•*•*•\e[93mBandar lampung\e[31;1m•*•*•*•*•*•*•*•*•*•*\n";
echo color("yellow","▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");
echo "\e[1;35m   ≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈\e[93m MERZA SAPUTRA \e[1;35m≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈\n";
echo color("yellow","▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        echo color("blue","📲 nomor▶️: ");
        // $no = trim(fgets(STDIN));
        $nohp = trim(fgets(STDIN));
        $nohp = str_replace("(","",$nohp);
        $nohp = str_replace(")","",$nohp);
        $nohp = str_replace("-","",$nohp);
        $nohp = str_replace(" ","",$nohp);

        if (!preg_match('/[^+0-9]/', trim($nohp))) {
            if (substr(trim($nohp),0,3)=='62') {
                $hp = trim($nohp);
            }
            else if (substr(trim($nohp),0,1)=='0') {
                $hp = '62'.substr(trim($nohp),1);
        }
         elseif(substr(trim($nohp), 0, 2)=='62'){
            $hp = '6'.substr(trim($nohp), 1);
        }
        else{
            $hp = '1'.substr(trim($nohp),0,13);
        }
    }
        $data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$hp.'","signed_up_country":"ID"}';
        $register = request("/v5/customers", null, $data);
        if(strpos($register, '"otp_token"')){
        $otptoken = getStr('"otp_token":"','"',$register);
        $uuid = getStr('"resource_owner_id":',',',$register);
        echo color("white"," 🚅 otw cuk .!!!!")."\n";
        otp:
        echo color("white","💬kode SMS-nya cuk..!!▶️ : ");
        $otp = trim(fgets(STDIN));
        $data1 = '{"client_name":"gojek:consumer:app","client_secret":"pGwQ7oi8bKqqwvid09UrjqpkMEHklb","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"}}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        echo color("green","️✔️ Berhasil mendaftar\n");
        $uuid = getStr('"resource_owner_id":',',',$verif);
        $token = getStr('"refresh_token":"','"',$verif);
        $data2 = '{"client_id":"gojek:consumer:app","client_secret":"pGwQ7oi8bKqqwvid09UrjqpkMEHklb","data":{"refresh_token":"' . $token . '"},"grant_type":"refresh_token","scopes":[]}';
        $verif1 = request1("/goid/token", null, $data2);
        $uuid = getStr('"resource_owner_id":',',',$verif1);
        $authtoken = getStr('"access_token":"','"',$verif1);
        echo color("blue"," 📂token access : \e[32;1m".$authtoken."\n");
        $live = "token.txt";
        $fopen = fopen($live, "a+");
        $fwrite = fwrite($fopen,"\n".$authtoken."\n");
        sleep(1);
        echo color("yellow","? Mau croot Voucher?: y/n ");
        $pilihan = trim(fgets(STDIN));
        if($pilihan == "y" || $pilihan == ""){
        claim:
        echo "\e[32;1m▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\e[31;1m ( sang bumi ruwai juwai $input)\e[32;1m ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n";
     echo "\n".color("blue"," Searching koordinat     ");
        for($a=1;$a<=3;$a++)
{
        echo color("green","🔎  ");
        sleep(3);
        }
        reff:
        $data = '{"referral_code":"G-L649V58"}';    
        $code= request3("/customer_referrals/v1/campaign/enrolment", $authtoken,$data);
        $message = fetch_value($code,'"message":"','"');
        if(strpos($code, 'croot dah..')){
        echo "\n".color("blue","🔐▶ Message: ".$message);
        goto gofood;
        }else{
        echo "\n".color("green","🔓▶ Message: ".$message);
        }
        sleep(3);
       echo "\n".color("yellow"," 👩‍✈️ MANTAN CIHUY");
        echo "\n".color("green"," 👉jangan ganggu");
        for($a=1;$a<=3;$a++){
        echo color("white"," 💦");
        sleep(25);
        }
        $code = request2('/go-promotions/v1/promotions/enrollments', $authtoken, '{"promo_code":"COBAGOFOOD1908"}');
        $message = fetch_value($code,'"message":"','"');
        if(strpos($code, 'croot dah..')){
        echo "\n".color("blue"," 🔓🙋 SUKSES..: ".$message);
        goto gofood;
        }else{
        echo "\n".color("blue"," croot..: ".$message);
        gofood:
        echo "\n".color("yellow"," 👩‍⚕️MANTAN MANIS");
        echo "\n".color("green","  jangan reseh.");
        for($a=1;$a<=3;$a++){
        echo color("white"," 💦");
        sleep(5);
        }
        $code1 = request2('/go-promotions/v1/promotions/enrollments', $authtoken, '{"promo_code":"ALFAMERDEKA17"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'croot dah..')){
        echo "\n".color("blue"," 🔓🙋 SUKSES..: ".$message);
        goto gosend;
        }else{
        echo "\n".color("blue","  croot..: ".$message);
        gosend:
        echo "\n".color("yellow"," 👩‍💼 MANTAN SEMOK");
        echo "\n".color("green"," jangan ngintip ");
        for($a=1;$a<=3;$a++){
        echo color("white"," 💦");
        sleep(25);
        }
        $code2 = request2('/go-promotions/v1/promotions/enrollments', $authtoken, '{"promo_code":"MAUGOFOOD1908"}');
        $message = fetch_value($code2,'"message":"','"');
        if(strpos($code2, 'croot dah..')){
        echo "\n".color("blue"," 🔓🙋 SUKSES..: ".$message);
        goto gocar;
        }else{
        echo "\n".color("blue"," croot..: ".$message);
        gocar:
        echo "\n".color("yellow"," 👩‍🎤MANTAN FREAK");
        echo "\n".color("green"," jangan gupek");
        for($a=1;$a<=3;$a++){
        echo color("white"," 💦");
        sleep(5);
        }
        $code3 = request2('/go-promotions/v1/promotions/enrollments', $authtoken, '{"promo_code":"AXEHARUMKANINDONESIA"}');
        $message = fetch_value($code3,'"message":"','"');
        if(strpos($code3, 'croot dah..')){
        echo "\n".color("blue"," 🔓🙋SUKSES..: ".$message);
        goto goride;
        }else{
        echo "\n".color("blue"," croot..: ".$message);
        goride:
        echo "\n".color("yellow"," 👩‍💻 MANTAN MANJA");
        echo "\n".color("green"," jangan mimpi ");
        for($a=1;$a<=3;$a++){
        echo color("white"," 💦");
        sleep(15);
        }
        $code4 = request3('/go-promotions/v1/promotions/enrollments', $authtoken, '{"promo_code":"PESANGOFOOD1908"}');
        $message = fetch_value($code4,'"message":"','"');
        if(strpos($code4, 'croot dah..')){
        echo "\n".color("blue","🔓🙋 SUKSES..: ".$message);
        goto goshop;
        }else{
        echo "\n".color("blue"," croot.: ".$message);
        goshop:
        sleep(3);
        $cekvoucher = request2('/gopoints/v3/wallet/vouchers?limit=13&page=1', $authtoken);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
        $voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
        $voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
        $voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
        $voucher10 = getStr1('"title":"','",',$cekvoucher,"10");
        $voucher11 = getStr1('"title":"','",',$cekvoucher,"11");
        $voucher12 = getStr1('"title":"','",',$cekvoucher,"12");
        $voucher13 = getStr1('"title":"','",',$cekvoucher,"13");
        echo "\n".color("yellow","👉👌💦 hasil croot dapet ".$total." : ");
        echo "\n".color("blue","       mantan ke 1. ".$voucher1);
        echo "\n".color("red","         mantan ke 2. ".$voucher2);
        echo "\n".color("purple","         mantan ke 3. ".$voucher3);
        echo "\n".color("white","         mantan ke 4. ".$voucher4);
        echo "\n".color("nevy","         mantan ke 5. ".$voucher5);
        echo "\n".color("blue","         mantan ke 6. ".$voucher6);
        echo "\n".color("red","         mantan ke 7. ".$voucher7);
        echo "\n".color("purple","         mantan ke 8. ".$voucher8);
        echo "\n".color("white","         mantan ke 9. ".$voucher9);
        echo "\n".color("nevy","         mantan ke 10. ".$voucher10);
      	echo "\n".color("blue","         mantan ke 11. ".$voucher11);
        echo "\n".color("green","         mantan ke 12. ".$voucher12);
        echo "\n".color("red","         mantan ke 13. ".$voucher13);
        echo"\n";
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
        $expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
        $expired7 = getStr1('"expiry_date":"','"',$cekvoucher,'7');
        $expired8 = getStr1('"expiry_date":"','"',$cekvoucher,'8');
        $expired9 = getStr1('"expiry_date":"','"',$cekvoucher,'9');
        $expired10 = getStr1('"expiry_date":"','"',$cekvoucher,'10');
        $expired11 = getStr1('"expiry_date":"','"',$cekvoucher,'11');
        $expired12 = getStr1('"expiry_date":"','"',$cekvoucher,'12');
        $expired13 = getStr1('"expiry_date":"','"',$cekvoucher,'13');
         setpin:
           echo "\n".color("white","🔧▶️ buat kunci pin? !!!: Y/N ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == ""){
         //if($pilih1 == "y" && strpos($no, "628")){
         echo color("Blue","▬▬▬▬▬▬▬▬▬▬▬▬▬▬🔧 aktivasi pin gopay = 121212 🔧▬▬▬▬▬▬▬▬▬▬▬▬")."\n";
         $data3 = '{"pin":"121212"}';
         $getotpsetpin = request2("/wallet/pin", $authtoken, $data3, null, null, $uuid, $proxy);
         echo "\e[93mOtp pin: ";
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request2("/wallet/pin", $authtoken, $data3, null, $otpsetpin, $uuid, $proxy);
         echo $verifotpsetpin;
         echo "\n".color("green","(* Kalo gagal pilih y cuk: y/n ");
        $pilihan2 = trim(fgets(STDIN));
        if($pilihan2 == "y" || $pilihan2 == "1"){
         goto claim;
         }else if($pilihan2 == "g" || $pilihan2 == "G"){
         die();
         }else if($pilih1 == "g" || $pilih1 == "G"){
         die();
         }else{
         echo color("red","✖️ Gagal cuk..\n");
         }
         }
         }
         }
         }
         }
         }
         }else{
         goto setpin;
         }
         }else{
         echo color("red","-] Otp nya salah cuk\n");
         echo "\e[32;1m*~*~*~*~*~*~*~*~*(Otp ulang)*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*\n";
         echo color("white","!] input ulang\n");
         goto otp;
         }
         }else{
         echo color("green","NOMOR SUDAH NGGAK PERAWAN !!!");
         echo"\n \e[93 mulang lagi? (y/n):";
         $pilih = trim(fgets(STDIN));
         if($pilih == "y" || $pilih == "Y"){
         echo "\e[1;35m   ≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈\e[31;1m REGISTER \e[1;35m≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈\n";
         goto ulang;
         }else{
        echo "\e[0;37m   ≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈\e[31;1m DAFTAR ULANG \e[0;37m≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈≈\n";
         goto ulang;
        }
        }
//     echo change()."\n";