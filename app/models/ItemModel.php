<?php

class ItemModel extends Db  {
    protected $table = 'item';

    protected $primaryKey = 'item_id';
    protected $mcat;

    public $timestamps = false;

    public function getAll($search = null) {
        $data = $this->select('item_id', 'item_name as itemname', 'price', 'selling_price', 'item_code', $this->raw("CONCAT(item_name, ' - ',item_id) as item_name" ), 'category_name', 'location' , 'item.created_at' ) ;
        $data = $data->leftJoin('category AS c', 'c.category_id', '=', 'item.category_id');
        $data = !empty($search) ?  $data->where('item_name', 'like', '%' . $search . '%')->orWhere('item_code', 'like', '%' . $search . '%') : $data;
        return $data->get();
    }

    public function getItem($item_id) {
        return $this->where("item_id", $item_id)->first();
    }

    public function insertLatest($data) {
        $this->insertGetId($data);
    }
  
}