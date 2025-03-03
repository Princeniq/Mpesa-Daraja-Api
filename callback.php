<?php
header("Content-Type: application/json");

$stkCallBackResponse = file_get_contents('php://input');
$logFile = "Mpesastkresponse.json";
$log = fopen($logFile, "a");
fwrite ($log, $stkCallBackResponse);
fclose($log);

$data = json_decode($stkCallBackResponse);

$MerchantRequestID = $data->Body->stkCallBack-> MerchantRequestID;
$CheckoutRequestID = $data->Body->stkCallBack-> CheckoutRequestID;
$ResultCode = $data->Body->stkCallBack-> ResultCode;
$ResultDesc = $data->Body->stkCallBack-> ResultDesc;
$Amount = $data->Body->stkCallBack-> CallbackMetadata->Item[0]->Value;
$TransactionID = $data->Body->stkCallBack-> CallbackMetadata->Item[1]->Value;
$UserPhoneNumber = $data->Body->stkCallBack-> CallbackMetadata->Item[4]->Value;

if ($ResultCode == 0){
    
}