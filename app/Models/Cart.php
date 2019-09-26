<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Cart extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'carts';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['session_id'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function total()
    {
        // $this->line_items
        $total_price = 0;
        foreach ($this->line_items as $key => $value) {
            $total_price = $total_price + $value->product->price_amount;
        }
        // dd();
        return $total_price;
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function line_items()
    {
        return $this->hasMany('App\Models\LineItem');
    }


    // public static function boot()
    // {
    //     parent::boot();

    //     self::creating(function($model){
    //         // ... code here
    //     });

    //     self::created(function($model){
    //         // ... code here
    //     });

    //     self::updating(function($model){
    //         // ... code here
    //         // dd($model);
    //         // $model->price
    //     });

    //     self::updated(function($model){
    //         // ... code here
    //     });

    //     self::deleting(function($model){
    //         // ... code here
    //     });

    //     self::deleted(function($model){
    //         // ... code here
    //     });
    // }
    // public function products()
    // {
    //   return $this->belongsToMany(\App\Product::class);
    // }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
