<?php

$botToken = "1727488391:AAEjM_MSyRlQgPzc6m__adOjQBl3wmY77vw";

$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);

$chatId = $update["message"]["chat"]["id"];
$chatType = $update["message"]["chat"]["type"];

$message = $update["message"]["text"];

$userId = $update["message"]["from"]["id"];

$message_id = $update["message"]["message_id"];

switch ($message) {
    case 'verga':
        $response = "<b>Verga? Comes we🥵</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case 'Verga':
        $response = "<b>Verga? Comes we🥵</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case 'VERGA':
       $response = "<b>Verga? Comes we🥵</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case 'Vrga':
        $response = "<b>Verga? Comes we🥵</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case 'vrga':
        $response = "<b>Verga? Comes we🥵</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case 'xd':
        $response = "<b>Bro... Xd'nt🥱</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case 'xD':
        $response = "<b>Bro... Xd'nt🥱</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case 'Xd':
        $response = "<b>Bro... Xd'nt🥱</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case ':v':
        $response = "<b>:v? vienes del 2016 bro?😐</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case ':V':
        $response = "<b>:V? vienes del 2016 bro?😐</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case 'v:':
        $response = "<b>v:? vienes del 2016 bro?😐</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case 'V:':
        $response = "<b>V:? vienes del 2016 bro?😐</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case 'XD':
        $response = "<b>Bro... Xd'nt🥱</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case 'a':
        $response = "<b>ª</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case 'ª':
        $response = "<b>ª</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case 'A':
        $response = "<b>ª</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case 'puto':
        $response = "<b>eh? con que puto, pues puto tu viejo🤬</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case 'Puto':
        $response = "<b>eh? con que puto, pues puto tu viejo🤬</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case 'PUTO':
        $response = "<b>eh? con que puto, pues puto tu viejo🤬</b>";
        sendMessage($chatId, $response,$message_id);
        break;    
    case '/start':
        $response = "<b>Hola👋🏻, para ver mis comandos escribe !cmds o /cmds</b>
<b>📎Tu UserID:</b><code>$userId</code>
<b>👑Owner:</b> @Ivlopx";

        sendMessage($chatId, $response,$message_id);
        break;  
    case '/cmds':
        $response ="<b>Comandos disponibles:</b>
🛠!tools or /tools - <b>Herramientas [OFF🔴]</b>
▶️!gen or /gen - <b>CCgen [MAINTENANCE⚠]</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case '!cmds':
        $response ="<b>Comandos disponibles:</b>
🛠!tools or /tools - <b>Herramientas [OFF🔴]</b>
▶️!gen or /gen - <b>CCgen [MAINTENANCE⚠]</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case '!tools':
        $response ="<b>Por ahora no hay😥</b>";
        sendMessage($chatId, $response,$message_id);
        break;
    case '/tools':
        $response ="<b>Por ahora no hay😥</b>";
        sendMessage($chatId, $response,$message_id);
        break;
}

if(strpos($message,"!gen")===0){
    //EVITAR QUE EL CAMPO VENGA VACIO
 
 $content = substr($message, 5);
     if(empty($content)){
         $message = substr($message, 1, 7);
         $MSG = "<b>FORMATO CORRECTO [✅]</b>\n";
         $MSG .= "<b>!gen or /gen</b> <CODE>cc|mm|yy|cvv</CODE>";
         sendMessage($chatId, $MSG, $message_id);
         exit;
     }        


function checkString($myString) {
   $validChars = "0123456789";
   for ($i = 0; $i < strlen($myString); $i++){
        if (strpos($validChars, substr($myString,$i,1)) === false) {
            return false; // Caracteres no validos
        }
   }
   return true; // Caracteres validos.
}


     
 //LISTA Y EXPLODE
 
 $data = substr($message, 5);
 $i     = explode("|", $data);
 $cc = $i[0];
 if((strpos($cc, "0") === 0)||(strpos($cc, "1") === 0)||(strpos($cc, "7") === 0)||(strpos($cc, "3") === 0)||(strpos($cc, "8") === 0)||(strpos($cc, "9") === 0)){
    $MSG = "<b>BIN INVALIDO O NO SOPORTADO</b>";
    sendMessage($chatId,$MSG,$message_id);
    exit;
}
$mes = $i[1];


//CC//
$reulsta = str_replace("x","X"," ",$cc);
$reat = intval($reulsta);


if(checkString($reat)
){
  $very = true;
}else{
sendMessage($chatId,"ERROR VERIFIQUE DE NUEVO",$message_id);
         exit;
}

if(checkString($mes)
){
  $very = true;
}else{
sendMessage($chatId,"ERROR VERIFIQUE DE NUEVO",$message_id);
         exit;
}



//CVV//


//////
$cortado1 = substr($cc, 0, 6);
if (is_numeric($cortado1)) {
    $lleno = "$card1 es numerico\n\n";
} else {
    $MSG = "<b>BIN INVALIDO </b>";
    sendMessage($chatId,$MSG,$message_id);
    exit;
}

 if($mes >= 13){
    $MSG = "<b>ALGUN DATO ES INVALIDO</b>";
    sendMessage($chatId,$MSG,$message_id);
    exit;
 }
 $ano = $i[2];
if(checkString($ano)
){
  $very = true;
}else{
sendMessage($chatId,"ERROR VERIFIQUE DE NUEVO",$message_id);
         exit;
}




 if(strlen($ano) >= 2){
     
     if(strlen($ano) >= 4){
     if($ano <=2020 || $ano >= 2030){
        $MSG = "<b>AÑO INVALIDO</b>";
        sendMessage($chatId,$MSG,$message_id);
        exit;
     }
 }   
 
 elseif(strlen($ano) >= 2){
     if($ano <= 20 || $ano >= 30){
        $MSG = "<b>AÑO INVALIDO</b>";
        sendMessage($chatId,$MSG,$message_id);
        exit;
     }
 }
 }
 $cvv = $i[3];
if(checkString($cvv)
){
  $very = true;
}else{
sendMessage($chatId,"ERROR VERIFIQUE DE NUEVO",$message_id);
         exit;
}



 if(strlen($cvv) ==2 || strlen($cvv) >= 4 || strlen($cvv) ==1 ){
    $MSG = "<b>CVV INVALIDO</b>";
    sendMessage($chatId,$MSG,$message_id);
    exit;
 }

 
 
 //RANDOM CVV
 
 function cvv()
 {
     global $cvv;
     if(strlen($cvv) == 3){
         return $cvv;
     }elseif(strlen($cvv) == 0){
         $fg = rand(010,999);
         $fg < 100 ? $fg = "0" . $fg : $fg = $fg;
         return $fg;
     }
 }
 
 
 //RANDOM AÑO
 
 function year()
 {
     global $ano;
 
     if(strlen($ano) == 4 || strlen($ano) == 2){
         if(strlen($ano) == 4){
             return $ano;
         }elseif(strlen($ano)==2){
             $po = 20;
             $pq = $ano;
             return $po.$pq;
         }
     }elseif(strlen($ano)==0){
         $year = rand(21,29);
         $sd = 20;
         return $sd.$year;
     }
 
 }
 
 
 
       function completedNumber($prefix, $length)
     {
         $ccnumber = $prefix;
     while ( strlen($ccnumber) < ($length - 1) ) {
         $ccnumber .= rand(0,9);
     }
 
     # Calculate sum
     $sum = 0;
     $pos = 0;
     $reversedCCnumber = strrev( $ccnumber );
 
     while ( $pos < $length - 1 ) {
         $odd = $reversedCCnumber[ $pos ] * 2;
         if( $odd > 9 ) {
             $odd -= 9;
         }
         $sum += $odd;
 
         if( $pos != ($length - 2) ) {
 
             $sum += $reversedCCnumber[ $pos +1 ];
         }
         $pos += 2;
     }
 
 
     # Calculate check digit
     $checkdigit = (( floor($sum/10) + 1) * 10 - $sum) % 10;
     $ccnumber .= $checkdigit;
    return $ccnumber."|".mew()."|".year()."|".cvv();
 
 
 }
 
 
 //RANDOM MES
 
 function mew(){
     global $mes;
 if(strlen($mes) == 1 || strlen($mes)== 2 )

 {
    if(strlen($mes) == 2){
        $er = $mes;
        return $mes;
    }elseif(strlen($mes) == 1){
        $eh = 0;
        $er = $mes;
        return $eh.$er;
    }
}



elseif(strlen($mes) == 0){
$rand = rand(1,12);

if(strlen($rand) == 2){
return $rand;
}else{
    $r = 0;
    return $r.$rand;
}
}
}
//EN DADO CASO QUE QUIERAS DARLE GEN A 10 CC LLAMAS A TU FUNCION DE ENVIAR MENSAJE Y AHI LLAMAS 10 VECES A LA FUNCION completedNumber Y LE PASAS DE PARAMATRO $cc y la longitud tu ponle 16 y ya todas las validaciones las hara sola asi mira


sendMessage($chatId,completedNumber($reat,16)."\n".completedNumber($reat,16)."\n".completedNumber($reat,16)."\n".completedNumber($reat,16)."\n".completedNumber($reat,16)."\n".completedNumber($reat,16)."\n".completedNumber($reat,16)."\n".completedNumber($reat,16)."\n".completedNumber($reat,16)."\n".completedNumber($reat,16),$message_id);

//Y ASI CONCATENAS 10 VESES PORQUE NO SE PUEDE OPTIMIZAR MAS 
}

function sendMessage($chatId, $response,$message_id){
    $url = $GLOBALS["website"].'/sendMessage?chat_id='.$chatId.'&parse_mode=HTML&text='.urlencode($response).'&reply_to_message_id='.$message_id;
    file_get_contents($url);
}

?>
