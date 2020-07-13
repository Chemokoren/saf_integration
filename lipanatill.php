<?php
    $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
    
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer QqGmYgOe8uCgdh2YNZYGFE9X4ci0')); //setting custom header
    
    $curl_post_data = array(
      //Fill in the request parameters with valid values
      'BusinessShortCode' => '174379',
      'Password' => 'MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMjAwNzAyMTEwMDAw',
      'Timestamp' => '20200702110000',//yyyymmddhhiiss
      'TransactionType' => 'CustomerBuyGoodsOnline',
      'Amount' => '10',
      'PartyA' => '254713058775',
      'PartyB' => '174379',
      'PhoneNumber' => '254713058775',
      'CallBackURL' => 'https://zenu.co.ke:80/mpesa',
      'AccountReference' => 'test_lipa_mpesa',
      'TransactionDesc' => 'Lipa Na M-Pesa Payment'
    );
    
    $data_string = json_encode($curl_post_data);
    
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    
    $curl_response = curl_exec($curl);
    //print_r($curl_response);
    echo $curl_response;
    

    // $pass_key = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
    // $timestamp = "20200702110000";
    // $shortcode = "174379";
    // $appKeySecret = $shortcode.$pass_key.$timestamp;
    // //MSISDN 254708374149
    // print_r(base64_encode($appKeySecret));

    //
?>
