<?php

namespace App\Http\Traits;

trait Responsable {
    protected function resourceCreated($id)
    {
        return response()->json(['ok' => true, 'id' => $id], 201);
    }

    protected function responseSuccess()
    {
        return response()->json(['ok' => true], 200);
    }

    protected function responseFailed($message = '')
    {
        $data = ['ok' => false];
        
        if ($message) {
            $data[$message] = $message;
        }

        return response()->json($data, 404);
    }
}