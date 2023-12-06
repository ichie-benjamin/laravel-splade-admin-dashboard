<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function successResponse($message, $data = [], $code = 200):JsonResponse
    {
        $response = [
            'status' => 'success',
            'message' => $message,
        ];

        if(!empty($data)){
            $response['data'] = $data;
        }else{
            $response['data'] = [];
        }

        return response()->json($response, $code);
    }

    public function errorResponse($error, $code = 404): JsonResponse
    {
        return response()->json([
            'status' => 'failed',
            'error' => $error,
            'message' => $error,
        ], $code);
    }

}
