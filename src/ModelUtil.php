<?php

trait ModelUtil {

    /**
     * whereArr 
     *
     * Upgrade the WHERE method
     * 
     * @param  Array  $conditions Array of arrays
     * @return Model
     */
    public static function whereArr(Array $conditions)
    {

        $model = static::class;
        $obj = new $model();

        foreach ($conditions as $condition) {
            if (count($condition) == 2) {
                $obj = $obj->where($condition[0],$condition[1]);
            } elseif (count($condition) == 3) {
                $obj = $obj->where($condition[0], $condition[1], $condition[2]);
            } elseif (count($condition) == 4) {
                $obj = $obj->where($condition[0], $condition[1], $condition[2], $condition[3]);
            } else {
                throw new \Exception("Invalid Condition", 1);
            }
        }

        return $obj;
    }
}