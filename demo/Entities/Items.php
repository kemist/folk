<?php

namespace Demo\Entities;

use Folk\Entities\JsonEntity;
use FormManager\Builder;

class Items extends JsonEntity
{
    protected function getBasePath()
    {
        return __DIR__.'/json';
    }

    public function getScheme(Builder $builder)
    {
        return $builder->group([
            'name' => $builder->text()->label('Name'),
            'text' => $builder->html()->label('Text'),
        ]);
    }

    public function getId(array $data)
    {
        return $data['name'];
    }
}