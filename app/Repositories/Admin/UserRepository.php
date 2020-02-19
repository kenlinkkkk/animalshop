<?php


namespace App\Repositories\Admin;


use App\Models\User;
use App\Repositories\EloquentRepository;

class UserRepository extends EloquentRepository
{

    /**
     * @inheritDoc
     */
    public function getModel()
    {
        return User::class;
    }
}
