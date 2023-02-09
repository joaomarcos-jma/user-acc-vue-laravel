<?php

namespace App\Services;

use App\Repositories\ClientRepository;

class ClientService extends AbstractService
{

    /**
     * @var ClientRepository
     */
    protected $repository;

    /**
     * @param ClientRepository $repository
     */
    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

}
