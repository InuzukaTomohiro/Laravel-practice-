<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ArticleResource;

final class ArticlePayloadActionController extends Controller
{
    public function __invoke(Request $request)
    {
      $resource = new ArticleResource([
        'id' => 1,
        'title' => 'Laravel REST API',
        'comment' => [
          [
            'id' => 2134,
            'body' => 'awesome!',
            'user_id' => 133345,
            'user_name' => 'Application Developer!',
          ]
        ],
        'user_id' => 13255,
        'user_name' => 'User1',
      ]);
      return $response->response($request)
        ->header('content-type', 'application/hal+json');
    }
}
