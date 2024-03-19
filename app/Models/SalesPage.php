<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class SalesPage extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'sales_pages';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'slug',
        'product_id',
        'header_script',
        'footer_script',
        'html_content',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected static function boot()
    {
        parent::boot();
        static::created(function ($salesPage) {
            $salesPage->slug = $salesPage->generateSlug($salesPage->title);
            $salesPage->save();
        });
    }
    private function generateSlug($title)
    {
        if (static::whereSlug($slug = Str::slug($title))->exists()) {
            $max = static::whereName($title)->latest('id')->skip(1)->value('slug');
            if (isset($max[-1]) && is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
