<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Relations\HasMany as RelationsHasMany;

class HasMany extends RelationsHasMany
{
    /**
     * Get the plain foreign key.
     *
     * @return string
     */
    public function getForeignKeyName()
    {
        $segments = explode('::', parent::getForeignKeyName());

        return reset($segments);
    }
}
