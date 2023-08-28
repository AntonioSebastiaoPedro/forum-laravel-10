<?php 

namespace App\Repositories;

use App\DTO\{CreateSupportDTO, UpdateSupportDTO};
use App\Models\Support;
use stdClass;
use App\Repositories\SupportRepositoryInterface;

class SupportEloquentORM implements SupportRepositoryInterface
{
    public function __construct(
        protected Support $model_support,
    ){}
    public function getAll(string $filter = null): array
    {
        return $this->model_support
                ->where(function($query) use ($filter){
                    $query->where('subject', 'like', "%$filter%");
                    $query->orWhere('body', 'like', "%$filter%");
                })->get()->toArray();
    }
    public function getOne(string|int $id): stdClass|null
    {
        $support = $this->model_support->find($id);
        if(!$support){
            return null;
        }
        return (object) $support->toArray();
    }
    public function delete(string|int $id): void
    {
        $this->model_support->findOrFail($id)->delete();
    }
    public function create(CreateSupportDTO $dto): stdClass
    {
        $support = $this->model_support->create(
            (array) $dto
        );
        return (object) $support->toArray();
    }
    public function update(UpdateSupportDTO $dto): stdClass|null
    {
        if(!$support = $this->model_support->find($dto->id)){
            return null;
        }

        $support->update(
            (array) $dto
        );

        return (object) $support->toArray();
    }
}

