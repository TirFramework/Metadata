<?php

namespace Tir\Metadata\Entities;

use Astrotomic\Translatable\Translatable;
use Tir\Crud\Support\Eloquent\CrudModel;
use Tir\Crud\Support\Facades\Crud;

class Metadata extends CrudModel
{
    use Translatable;

    /**
     * The attribute show route name
     * and we use in fieldTypes and controllers
     *
     * @var string
     */
    public static $routeName = 'metadata';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['entity_id', 'entity_type'];

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    public $translatedAttributes = ['meta_title','meta_keyword', 'meta_description','other_meta'];


    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['translations'];


    //Additional methods //////////////////////////////////////////////////////////////////////////////////////////////

    public function getMetaKeywordsAttribute($keywords)
    {
        return is_array($keywords) ? $keywords : [];
    }


    //Relations methods ///////////////////////////////////////////////////////////////////////////////////////////////



}
