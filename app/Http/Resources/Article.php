<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        // Get rid of 'created at' and 'updated at' keys from the data
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body
        ];
    }

    /**
     * Add aditional information to returned data
     * 
     * @param \Illuminate\Http\Request  $request
     * @return array
     */
    public function with($request) {
        return [
            'author_url' => url('https://imtiazraqib.com')
        ];
    }
}
