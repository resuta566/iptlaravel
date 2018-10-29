<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Student extends JsonResource
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
        
        return [
            'id' => $this->id,
            'lname' =>$this->lname,
            'fname' => $this->fname,
            'address' => $this->address,
            'gender' => $this->gender,
            'course' => $this->course,
            'year' => $this->year

        ];
        
    }

    
}
