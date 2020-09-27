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
    protected $fillable = ['meta_title','meta_keyword', 'meta_description','other_meta'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'meta_keywords' => 'array',
        'other_meta' => 'array',
    ];
}
