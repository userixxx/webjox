<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'category', 'image', 'visibility'];

    // ...

    /**
     * Save the image and return the path.
     *
     * @param \Illuminate\Http\UploadedFile $image
     * @return string
     */
    public function saveImage($image)
    {
        $path = $image->store('images/posts', 'public');
        $this->update(['image' => $path]);
        return $path;
    }
}

