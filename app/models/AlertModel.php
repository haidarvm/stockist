<?php

class AlertModel extends Db {
    public $table;

    protected $primaryKey = 'stock_id';

    public $timestamps = false;

    public function __construct() {
        $this->table = 'stock';
    }

    public function getLessQty($min) {
        return $this->leftJoin('item AS i', 'i.item_id', '=', 'stock.item_id')->where('quantity', '<=', $min)->orderByDesc('quantity')->get();
    }
}
