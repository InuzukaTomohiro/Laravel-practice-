<?php

declare(strict_type=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use function sprintf;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
          'id' => $this->resource['user_id'],
          'name' => $this->resource['user_name'],
          '_links' => [
            'self' => [
              'href' => sprintf(
                'http://example.com/users/%s',
                $this->resource['user_id']
              )
            ]
          ]
        ];
    }
}
