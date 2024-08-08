<?php

namespace App\Traits;

trait ApiResponses{
    protected function success($message, $statusCode = 200){
        return response()->json([
            'massage' => $message,
        ], $statusCode);
    }
}
