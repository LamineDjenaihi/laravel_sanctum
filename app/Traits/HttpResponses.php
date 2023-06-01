<?php

namespace App\Traits;

trait HttpResponses {
protected function success ($data,$message = null, $code = 200) {


return response()->json([
        'status'=>'Request was useful',
        'message' => $message,
        'data' => $data, 
    ], $code); 
}

protected function fail ($data,$message = null, $code = 404) {


    return response()->json([
            'status'=>'Error has occured...',
            'message' => $message,
            'data' => $data, 
        ], $code); 
    }
}




?>