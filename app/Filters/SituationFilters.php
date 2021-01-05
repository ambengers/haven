<?php

namespace App\Filters;

use Ambengers\QueryFilter\AbstractQueryFilter;

class SituationFilters extends AbstractQueryFilter
{
    /**
     * Relationship loader class.
     *
     * @var string
     */
    protected $loader = '';

    /**
     * Columns that are searchable.
     *
     * @var array
     */
    protected $searchableColumns = [
        'title',
        'type',
        'donation_information',
        'status',
    ];

    /**
     * List of object filters.
     *
     * @var array
     */
    protected $filters = [
        //
    ];
}
