<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class RunnerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'avatar' => $this->avatar,
            'dob' => $this->dob ? Carbon::parse($this->dob)->format('M-d-Y') : '',
            'sex' => $this->sex,
            'color' => $this->color,
            'weight' => $this->weight,
            'sire' => $this->sire,
            'dam' => $this->dam,
            'last_runs' => new LastRunsCollection($this->form_last_runrs),
        ];
    }
}
