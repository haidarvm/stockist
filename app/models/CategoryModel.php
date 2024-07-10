<?php

class CategoryModel extends Db {
    protected $table = 'category';

    protected $primaryKey = 'category_id';
    protected $mcat;

    public $timestamps = false;

    public function getAll($search = null) {
        $data = $this->select('category_id', 'category_name', 'category_code', 'category_id as list_id', 'category_name as list_name' );
        return $data->get();
    }
}