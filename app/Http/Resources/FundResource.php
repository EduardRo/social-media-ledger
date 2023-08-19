<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FundResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'code' => $this->generateCode(),
        ];
    }

    private function generateCode()
    {
        $firstTwoLetters = substr($this->name, 0, 2);
        return "{$this->id}-{$firstTwoLetters}";
    }
}
