<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function RespuestaJson($result, $message, $code = 200){
        $response = [
            'success' => true,
            'dato' => $result,
            'message' => $message,
            'code' => $code
        ];

        return response()->json($response, 200);
    }

    public function RespuestaError($error, $errorMsj = [], $code = 404){
        $response = [
            'success' => false,
            'message' => $error,
            'code' => $code
        ];

        if(!empty($errorMsj)){
            $response['data'] = $errorMsj;
        }
        return response()->json($response, $code);
    }
}
