<?php

namespace Tir\Metadata\Entities;

use Tir\Crud\Support\Eloquent\TranslationModel;


class MetadataTranslation extends TranslationModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['meta_title','meta_keywords', 'meta_description','meta_other','meta_custom'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'meta_keywords' => 'array',
        'meta_other' => 'array',
    ];
}
