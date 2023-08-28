<?php

namespace App\Services;

use App\DTO\{CreateSupportDTO, UpdateSupportDTO};
use App\Repositories\{SupportRepositoryInterface};
use stdClass;

class SupportService
{   
    public function __construct(
        protected SupportRepositoryInterface $repository
    ){}

    public function getAll(string $filter = null): array
    {
        return $this->repository->getAll($filter);
    }
    public function getOne(string|int $id): stdClass|null
    {
        return $this->repository->getOne($id);
    }
    public function delete(string|int $id): void
    {
        $this->repository->delete($id);
    }
    public function create(CreateSupportDTO $dto): stdClass
    {
        return $this->repository->create($dto);
    }
    public function update(UpdateSupportDTO $dto): stdClass|null
    {
        return $this->repository->update($dto);
    }
}