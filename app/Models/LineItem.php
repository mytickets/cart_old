<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class LineItem extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'line_items';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = ['cart_id', 'product_id', 'qty'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
  // belongs_to :product
  // belongs_to :cart
  // belongs_to :order
  
  // def total_price
  //   product.price * quantity
  // end 

    // public function total_price()
    // {
    //     return $this->product_id;
    // }
    public function cart()
    {
        return $this->belongsTo('App\Models\Cart');
    }
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }

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
