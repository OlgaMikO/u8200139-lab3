<?php

namespace App\Http\ApiV1\Modules\Links\Resources;

use App\Domain\Links\Models\Link;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Link */
class LinkResource extends JsonResource
{

    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'chat_id' => $this->chat_id,
            'url' => $this->url
        ];
    }

}
