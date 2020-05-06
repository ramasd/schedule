<?php

namespace App\Services;

use App\Repositories\Interfaces\ClientRepositoryInterface;
use App\Services\Interfaces\ClientServiceInterface;

class ClientService implements ClientServiceInterface
{
    /**
     * @var ClientRepositoryInterface
     */
    protected $clientRepository;

    /**
     * ClientService constructor.
     * @param ClientRepositoryInterface $clientRepositoryInterface
     */
    public function __construct(ClientRepositoryInterface $clientRepositoryInterface)
    {
        $this->clientRepository = $clientRepositoryInterface;
    }
}
