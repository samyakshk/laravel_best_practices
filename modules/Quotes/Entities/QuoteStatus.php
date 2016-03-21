<?php namespace Modules\Quotes\Entities;
   
use Illuminate\Database\Eloquent\Model;

class QuoteStatus extends Model {
protected $table="quote_statuses";
    protected $fillable = [
'status_code',
'status_name',
'remarks'



    ];
 public function itemshistory()
    {
        return $this->hasMany('Modules\Quotes\Entities\QuoteItemStatusHIstory');
    }
}