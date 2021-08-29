<?php

namespace App\Models;

use File;
use Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'file',
    ];

    /**
     * Get Photo Url
     *
     * return string
     */
    public function getUrl():string
    {
        return url('storage/' . $this->file);
    }

    /**
     * Get Photo Edit Url
     */
    public function getEditUrl():string
    {
        return route('admin.photos.edit', $this->id);
    }

    /**
     * Upload Photo
     */
    public function uploadPhotoFile()
    {
        if (request()->file) {
            if ($this->file) {
                $this->deletePhotoFile();
            }

            $this->file = Storage::disk('public')->putFile('images', request()->file('file'));
            $this->save();
        }
    }

    /**
     * Delete Photo
     */
    public function deletePhotoFile()
    {
        return File::delete(storage_path('app/public/' . $this->file));
    }
}
