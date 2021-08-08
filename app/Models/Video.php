<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    /**
     * Get Youtube Video
     * Thumbnail (Default Thumbnail)
     */
    public function getThumbnailPath():string
    {
        return "https://img.youtube.com/vi/".$this->youtube_code."/hqdefault.jpg";
    }

    /**
     * Get Youtube Video Link
     *
     * @return string
     */
    public function getVideoLink():string
    {
        return "https://www.youtube.com/watch?v=" . $this->youtube_code;
    }
}
