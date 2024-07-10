<?php
use Symfony\Component\HttpFoundation\Request;

class ConfigController extends Admin{
    protected $config;

    public function __construct() {
        parent::__construct();
        $this->config = new ConfigModel();
        $this->request =  Request::createFromGlobals();
    }

    public function index() {
        $data['page_title'] = "List All config";
        $data['config'] =  $this->config->getAll();
        view('config_list', $data);
    }

    public function edit() {
        $data['page_title'] = "Edit config";
        $data['action'] = "update";
        $data['config'] =  $this->config->getconfig(uri(3));
        // print_r($data);exit;
        view('config_form', $data);
    }

    // public function add() {
    //     $data['page_title'] = "Add config";
    //     $data['action'] = "insert";
    //     $data['category'] = $this->category->getAll();
    //     view('config_form', $data);
    // }

    public function save() {
        $action = uri(3);
        $post = $this->request->request->all();
        // print_r($post);exit;
        $action == "insert" ? $this->config->insertGetId($post) : $this->config->where("config_id", $post['config_id'])->update($post);
        header('Location: ' . base_url() . 'stock');
    }
}