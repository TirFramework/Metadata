<?php

namespace Tir\Metadata\Eloquent;

use Illuminate\Support\Arr;
use Tir\Crud\Support\Facades\Crud;
use Tir\Metadata\Entities\Metadata;

trait HasMetaData
{
    /**
     * The "booting" method of the trait.
     *
     * @return void
     */
    public static function bootHasMetaData()
    {
        static::saved(function ($entity) {
            $entity->saveMetaData(request('meta', []));
        });
    }

    /**
     * Get the meta for the entity.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function meta()
    {
        return $this->morphOne(MetaData::class, 'entity')->withDefault();
    }

    /**
     * Save meta data for the entity.
     *
     * @param array $data
     * @return void
     */
    public function saveMetaData($data = [])
    {
        $data['meta_keywords'] = Arr::get($data, 'meta_keywords', []);
        $data['meta_other'] = Arr::get($data, 'meta_other', []);
        $this->meta->fill([Crud::locale() => $data])->save();
    }
}
