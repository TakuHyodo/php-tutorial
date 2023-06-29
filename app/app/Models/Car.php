<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_id', // 追加
        'cc',
        'sale_date',
        'memo',
        'image_url',
    ];

    public function company():BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

}
