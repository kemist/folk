<?php

namespace Folk\Entities;

use Folk\Admin;
use Folk\SearchQuery;
use FormManager\Builder;

/**
 * Interface used by all entities.
 */
interface EntitiesInterface
{
    /**
     * Set the Admin instance for this entity.
     *
     * @param string $name
     * @param Admin  $admin
     */
    public function setAdmin($name, Admin $admin);

    /**
     * List the entity rows.
     *
     * @param SearchQuery|null $search
     */
    public function search(SearchQuery $search = null);

    /**
     * Creates a new entity row.
     *
     * @param array $data The entity data
     *
     * @return mixed The entity id
     */
    public function create(array $data);

    /**
     * Read the data of an entity row.
     *
     * @param mixed $id The entity id
     *
     * @return array The entity data
     */
    public function read($id);

    /**
     * Update the data of an entity row.
     *
     * @param mixed $id   The entity id
     * @param array $data The entity data
     *
     * @return array The entity data
     */
    public function update($id, array $data);

    /**
     * Delete an entity row.
     *
     * @param mixed $id The entity id
     */
    public function delete($id);

    /**
     * Returns the data scheme used by this entity.
     *
     * @return Folk\Client\Formats\Group
     */
    public function getScheme(Builder $builder);

    /**
     * Returns the label of a row.
     *
     * @param mixed $id   The entity id
     * @param array $data The entity data
     *
     * @return string
     */
    public function getLabel($id, array $data);
}