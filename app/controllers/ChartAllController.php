<?php
use Symfony\Component\HttpFoundation\Request;

class ChartAllController extends Admin{
    protected $stock;
    protected $item;
    protected $request;
    public $table;

    public function __construct($table) {
        parent::__construct();
        $this->stock = new StockModel;
        $this->table = $table;
        $this->stock->table = $table;
        $this->item = new ItemModel;
        $this->request =  Request::createFromGlobals();
    }

    public function index() {
        $get = $this->request->query->all();
        $item_id = checkValAr($get,'item_id');
        $data['current_url'] = getLastUrl($this->request->getRequestUri());
        // echo ($data['current_url']);exit;
        // print_r($get);exit; //[date_start] => Array ( [0] => 17-03-2022 ) [date_end] => Array ( [0] => 30-03-2022 )
        if (!empty($get['date_start'])) {
            $date_start = $get['date_start'];
            $date_end = checkValAr($get,'date_end');
            $item_id = checkValAr($get,'item_id');
            $data['date_start'] = $date_start;
            $data['date_end'] = $date_end;
            // $data['stock'] = $this->stock->getAll('', '', toSqlDate($date_start), toSqlDate($date_end));
        } else {
            // $data['stock'] = $this->stock->getAll();
        }
        $data['item_id'] = $item_id;
        $data['item'] = checkIf($this->item->getItem($item_id));
        $data['page_title'] = strtoupper($this->table);
        $data['table'] = $this->table;
        view('chart', $data);
    }


    public function list_all() {
        $get = $this->request->query->all();
        if (!empty($get['date_start'])) {
            $date_start = $get['date_start'][0];
            $date_end = $get['date_end'][0];
            $data['date_start'] = $date_start;
            $data['date_end'] = $date_end;
            $data['stock'] = $this->stock->getAllTrxu(uri(3), '', toSqlDate($date_start), toSqlDate($date_end));
        } else {
            $data['stock'] = $this->stock->getAllTrxu(uri(3));
        }
        $data['page_title'] = "STOCK ALL";
        $data['table'] = $this->table;
        $data['item'] = 'all';
        view('chart_list', $data);
    }
    
    public function table() {
        echo $this->stock->table;
    }
}
