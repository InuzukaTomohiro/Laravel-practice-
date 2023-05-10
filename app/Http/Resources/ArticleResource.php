<?php

declare(strict_type=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

use function sprintf;

class ArticleResource extends JsonResource
{
    public static $wrap = '';
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
          'id' => $this->resource['id'],
          'title' => $this->resource['title'],
          '_embedded' => [
            'comments' => new CommentResourceCollection(
              new Collection($this->resource['comments'])
            )
          ],
        ],
        '_links' => [
          'self' => [
            'href' => sprintf(
              'https://example.com/articles/%s',
              $this->resource['id']
            )
          ]
        ];
    }
}
