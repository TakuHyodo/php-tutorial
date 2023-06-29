<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Company extends Model
{
    use HasFactory;
    /**
     * テーブルに関連付ける主キー
     *
     * @var string
     */

    protected $fillable = [
        'company_name',
        'prefecture_id',
        'memo',
        'image_url',
    ];
    //追加
    public function cars():HasMany
    {
        return $this->hasMany(Car::class);
    }
//ここまで

}
