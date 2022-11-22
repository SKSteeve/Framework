<?php

namespace App\Providers\Interfaces;

interface IModel {

    /**
     * @param $id
     * @return mixed
     */
    public function find(int $id);

    /**
     * @param array $values
     * @return bool
     */
    public function create(array $values): bool;

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool;

    /**
     * @param int $id
     * @param array $args
     * @return bool
     */
    public function update(int $id, array $args): bool;
}