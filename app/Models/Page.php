<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    // Upload Cover Photo
    public function uploadCoverPhoto()
    {
        if (request('cover_file')) {
            $this->cover_file = request()->cover_file->store('images');
        }
    }
}
