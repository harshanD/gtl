<?php

namespace App\Http\Resources;

use App\FormLasrRunrs;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class LastRunsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        if (is_null($this->resource) || empty($this->resource) || is_null($this->collection)) {
            return [];
        }

        $this->collection->transform(function ($data) {
            return (new FormLastRunsResource($data));
        });

        return parent::toArray($request);
    }
}
