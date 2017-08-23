<?php

namespace App\Http;

use Illuminate\Database\Eloquent\Model;

class CatalogModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'catalog';
    public function detail_catalog()
    {
        return $this->belongsTo('App\Http\ProjectModel');
    }
}