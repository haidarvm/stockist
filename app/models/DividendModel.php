<?php

class DevidendModel extends Db  {
    protected $table = 'devidend';

    protected $primaryKey = 'devidend_id';
    protected $mcat;

    public $timestamps = false;

    public function getAll($search = null) {
        $data = $this->select('devidend_id', 'devidend_name as devidendname', 'price', 'selling_price', 'devidend_code', $this->raw("CONCAT(devidend_name, ' - ',devidend_id) as devidend_name" ), 'category_name', 'location' , 'devidend.created_at' ) ;
        $data = $data->leftJoin('category AS c', 'c.category_id', '=', 'devidend.category_id');
        $data = !empty($search) ?  $data->where('devidend_name', 'like', '%' . $search . '%')->orWhere('devidend_code', 'like', '%' . $search . '%') : $data;
        return $data->get();
    }

    public function getdevidend($devidend_id) {
        return $this->where("devidend_id", $devidend_id)->first();
    }

    public function insertLatest($data) {
        $this->insertGetId($data);
    }
  
}