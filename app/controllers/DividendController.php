<?php
use Symfony\Component\HttpFoundation\Request;


// Create Pembagian persentase dari setiap pemasukan ke 15845
class DividendController extends Admin {
    protected $stock;
    protected $item;
    public $table;

    public function __construct() {
        parent::__construct();
        $this->stock = new StockAllController('stock');
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
