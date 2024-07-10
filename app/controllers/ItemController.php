<?php
use Symfony\Component\HttpFoundation\Request;

class ItemController extends Admin {
    protected $item;

    public function __construct() {
        parent::__construct();
        $this->item = new ItemModel();
        $this->category = new CategoryModel();
        $this->request =  Request::createFromGlobals();
    }

    public function index() {
        $data['page_title'] = "List All item";
        $data['item'] =  $this->item->getAll();
        view('item_list', $data);
    }

    public function edit() {
        $this->admin_only();
        $data['page_title'] = "Edit item";
        $data['action'] = "update";
        $data['category'] = $this->category->getAll();
        $data['item'] =  $this->item->getItem(uri(3));
        // print_r($data);exit;
        view('item_form', $data);
    }

    public function add() {
        $this->admin_only();
        $data['page_title'] = "Add item";
        $data['action'] = "insert";
        $data['category'] = $this->category->getAll();
        view('item_form', $data);
    }

    public function save() {
        $this->admin_only();
        $action = uri(3);
        $post = $this->request->request->all();
        // print_r($post);exit;
        $action == "insert" ? $this->item->insertGetId($post) : $this->item->where("item_id", $post['item_id'])->update($post);
        header('Location: ' . base_url() . 'item');
    }
}