<?php

namespace App\Repositories;


use App\Models\Client;

class ClientRepository extends AbstractRepository
{
    /**
     * Relationships
     *
     * @return string
     */
    public $relationships = [];

    /**
     * FieldSearchable
     *
     * @return string
     */
    protected $fieldSearchable = [
        'client_id',
        'client_name' => 'like',
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Client::class;
    }

}
