<?php

namespace App\Responses;

class ApiResponse
{
	public static function sucess(?string $message = null, mixed $data = null)
	{
		return response()->json([
			"message" => "$message", 
			"data" => [], 
			"status" => "sucess"
		], 200);
	}

	public static function ok(string $message, mixed $data = null)
	{
		return self::sucess($message);
	}

    public static function error(mixed $errors, string $message)
    {
        return response()->json([
            "errors" => $errors,
            "message" => $message,
            "data" => [],
            "status" => "fail"
        ],400);
    }
}
