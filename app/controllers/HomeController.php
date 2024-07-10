<?php

class HomeController extends Admin {
    protected $stock;
    protected $item;
    public $table;

    public function __construct() {
        parent::__construct();
        $this->stockc = new StockAllController('stock');
        $this->stock = new StockModel;
        $this->table = "stock";
        $this->stock->table = "stock";
        $this->item = new ItemModel;
    }

    public function index() {
        $data['page_title'] = 'home';
        view('home', $data);
    }

}
