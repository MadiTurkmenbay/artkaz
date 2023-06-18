<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasTranslations;

    protected $table = 'categories';
    protected $guarded = false;
    public $translatable = ['title'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public static function uploadImage(Request $request, $image = null)
    {
        if ($request->hasFile('poster')) {
            if ($image) {
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            $file = $request->file('poster');
            $name = $file->hashName(); // Generate a unique, random name...

            $file->store("public/{$folder}");

            return "{$folder}/$name";
        }
        return null;
    }

    public function getImage()
    {
        if (!$this->poster) {
            return asset("uploads/no-image.png");
        }
        return asset('storage/'.$this->poster);
    }
}
