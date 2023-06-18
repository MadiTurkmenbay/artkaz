<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'products';
    protected $guarded = false;
    public $translatable = ['title','artist','material','description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
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
