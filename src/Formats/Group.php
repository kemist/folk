<?php

namespace Folk\Formats;

use FormManager\Fields;
use FormManager\Builder;

class Group extends Fields\Group implements FormatInterface
{
    use Traits\LabelTrait;
    use Traits\CollectionValueTrait;
    use Traits\RenderContainerTrait;

    public function __construct(Builder $builder, array $children = null)
    {
        parent::__construct($children);

        $this->set('list', false);
        $this->class('format is-responsive is-group is-large');
    }
}
