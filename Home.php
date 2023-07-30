<?php

session_start();

$fnumber = $_POST["finput"];
$fCurrency = $_POST["fcurrency"];
$sCurrency = $_POST["scurrency"];
$newValue = $fnumber; 


  if ($fCurrency === "USD" && $sCurrency === "USD") { 
    $newValue = $fnumber;
  }
  //for usd to eur
  if ($fCurrency === "USD" && $sCurrency === "EUR") { 
    $newValue = $fnumber * 0.91;
  } 
  //for usd to gbp
  if ($fCurrency === "USD" && $sCurrency === "GBP") { 
    $newValue = $fnumber*0.78;
  } 

  //for usd to jpy
  if ($fCurrency === "USD" && $sCurrency === "JPY") { 
    $newValue = $fnumber*141.15;
  }
  // for eur to usd
  if ($fCurrency === "EUR" && $sCurrency === "USD") { 
    $newValue = $fnumber*1.1;
  }
  //for eur to eur
  if ($fCurrency === "EUR" && $sCurrency === "EUR") { 
    $newValue = $fnumber;
  } 
  //for eur to gbp
  if ($fCurrency === "EUR" && $sCurrency === "GBP") { 
    $newValue = $fnumber*0.86;
  } 
  //for eur to jpy
  if ($fCurrency === "EUR" && $sCurrency === "JPY") { 
    $newValue = $fnumber* 155.76;
  }
      //for GBP to usd
      if ($fCurrency === "GBP" && $sCurrency === "USD") { 
        $newValue = $fnumber*1.28;
      }
      //for gbp to eur
      if ($fCurrency === "GBP" && $sCurrency === "EUR") { 
        $newValue = $fnumber*1.16;
      } 
      //for gbp to gbp
      if ($fCurrency === "GBP" && $sCurrency === "GBP") { 
        $newValue = $fnumber;
      } 
      //for GBP to jpy
      if ($fCurrency === "GBP" && $sCurrency === "JPY") { 
        $newValue = $fnumber*181.23;
      }
      // for JPY to usd
      if ($fCurrency === "JPY" && $sCurrency === "USD") { 
        $newValue = $fnumber*0.0071;
      }
      //for jpy to eur
      if ($fCurrency === "JPY" && $sCurrency === "EUR") { 
        $newValue = $fnumber*0.0077;
      } 
      //for jpy to gbp
      if ($fCurrency === "JPY" && $sCurrency === "GBP") { 
        $newValue = $fnumber* 0.0055;
      } 
      //for JPY to jpy
      if ($fCurrency === "JPY" && $sCurrency === "JPY") { 
        $newValue = $fnumber;
      }

$_SESSION['yourVariable'] = $newValue;

// Return  as JSON response
echo json_encode(['newValue' => $newValue]);




?>
