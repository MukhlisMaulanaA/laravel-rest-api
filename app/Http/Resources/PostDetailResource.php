<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostDetailResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @return array<string, mixed>
   */
  public function toArray(Request $request): array
  {
    return [
      'id' => $this->id,
      'title' => $this->title,
      'image' => $this->image,
      'news_content' => $this->news_content,
      'created_at' => date('Y-m-D', strtotime($this->created_at)),
      'author' => $this->author,
      'writer' => $this->whenLoaded('writer'), // use eagerLoad
      'comments' => $this->whenLoaded('comments', function () {
        return collect($this->comments)->each(function ($comment) {
          $comment->commentator;
          return $comment;
        });
      }),
      'comment_total' => $this->whenLoaded('comments', function () {
        return $this->comments->count();
      })
    ];
  }
}
