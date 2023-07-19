<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected static function boot(): void
    {
        parent::boot();

        static::creating(function (Model $model) {
            if (!$model->getAttribute($model->getKeyName())) {
                $model->setAttribute($model->getKeyName(), Helpers::sqlServNewId());
            }
            $model->setAttribute('Created_User_ID', Auth::user()->id);
            $model->setAttribute('Created_dt', DB::raw('GETDATE()'));
        });

        static::created(function (Model $model) {
            $model->logData($model);
        });

        static::updating(function (Model $model) {
            $model->setAttribute('Modified_User_ID', Auth::user()->id);
            $model->setAttribute('Modified_dt', DB::raw('GETDATE()'));

            $model->logData($model);
        });
    }
}
