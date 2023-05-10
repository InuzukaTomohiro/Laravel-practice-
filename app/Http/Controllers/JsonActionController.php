<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class JsonActionController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
      $response = Response::json(['status' => 'success']);

      $response = response()->json(['status' => 'success']);

      dd($request);
      return $response
    }
}
