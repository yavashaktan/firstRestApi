<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        if (is_null(parent::toArray($request)))
        {
            return null;
        }else
        {
            return parent::toArray($request);
        }

    }
}
