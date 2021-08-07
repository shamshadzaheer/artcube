<?php

namespace App\Models;

use File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    /**
     * Upload Cover File Photo
     *
     * @return void
     */
    public function uploadCoverPhoto():void
    {
        if (request('cover_file')) {

            if ($this->cover_file) {
                $this->deleteCoverFile();
            }

            $this->cover_file = request()->cover_file->store('images');
        }
    }

    /**
     * Delete Cover File Photo
     */
    public function deleteCoverFile():void
    {
        if ($this->cover_file) {
            File::delete(storage_path('app/public/' . $this->cover_file));
        }
    }
}
