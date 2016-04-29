<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/***
 * Class StaticModel
 * This Class binds static arrays to Eloquent readonly models
 * By Pooya Parsa <pooya@pi0.ir>
 * @package App
 *
 */
class StaticModel extends Model
{
    public static $data = [];

    /**
     * Get an attribute from the model.
     *
     * @param  string $key
     * @return mixed
     */
    public function getAttribute($key)
    {
        if (array_key_exists($key, $this->attributes) || $this->hasGetMutator($key)) {
            return $this->getAttributeValue($key);
        }

        //TODO
        return $this->getRelationValue($key);
    }


    public function newEloquentBuilder($query)
    {
        return new StaticModelBuilder($query);
    }


}

/***
 * Class StaticModelBuilder
 * This Class binds static arrays to Eloquent readonly models
 * By Pooya Parsa <pooya@pi0.ir>
 * @package App
 *
 */
class StaticModelBuilder extends Builder
{

    /**
     * Get the hydrated models without eager loading.
     *
     * @param  array $columns
     * @return \Illuminate\Database\Eloquent\Model[]
     */
    public function getModels($columns = ['*'])
    {
        //$results = $this->query->get($columns);
        $class = get_class($this->model);
        $results = $class::$data;

        $connection = $this->model->getConnectionName();

        return $this->model->hydrate($results, $connection)->all();
    }

}