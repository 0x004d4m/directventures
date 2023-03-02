<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class Why extends Model
{
    use CrudTrait;
    use HasFactory;
    use HasTranslations;
    use SoftDeletes;

    protected $table = 'whies';
    protected $guarded = ['id'];
    protected $fillable = [
        "name",
        "title",
        "image",
        "why1_title",
        "why1_description",
        "why1_icon",
        "why2_title",
        "why2_description",
        "why2_icon",
        "why3_title",
        "why3_description",
        "why3_icon",
        "why4_title",
        "why4_description",
        "why4_icon",
    ];
    protected $translatable = [
        "name",
        "title",
        "why1_title",
        "why1_description",
        "why2_title",
        "why2_description",
        "why3_title",
        "why3_description",
        "why4_title",
        "why4_description",
    ];

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $destination_path = "public/uploads";

        if ($value==null) {
            $this->attributes[$attribute_name] = '/template/assets/img/default.png';
        }

        if (Str::startsWith($value, 'data:image'))
        {
            $image = Image::make($value)->encode('png', 90);
            $filename = md5($value.time()).'.png';
            Storage::put($destination_path.'/'.$filename, $image->stream());
            $public_destination_path = Str::replaceFirst('public/', 'storage/', $destination_path);
            $this->attributes[$attribute_name] = $public_destination_path.'/'.$filename;
        }
    }
}
