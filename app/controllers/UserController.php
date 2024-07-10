<?php
use Symfony\Component\HttpFoundation\Request;

class UserController extends Admin{
    protected $user;

    public function __construct() {
        parent::__construct();
        $this->user = new UserModel();
        $this->request =  Request::createFromGlobals();
    }

    public function index() {
        $data['page_title'] = "List All User";
        $data['user'] =  $this->user->getAll();
        view('user_list', $data);
    }

    public function edit() {
        $this->admin_only();
        $data['page_title'] = "Edit User";
        $data['action'] = "update";
        $data['user'] =  $this->user->getUser(uri(3));
        view('user_form', $data);
    }

    public function add() {
        $this->admin_only();
        $data['page_title'] = "Add User";
        $data['action'] = "insert";
        view('user_form', $data);
    }

    public function save() {
        $action = uri(3);
        $post = $this->request->request->all();
        if($action == 'update' && empty($post['password'])) {
            unset($post['password']);
        } else {
            $post['password'] = sha1($post['password']);
        }
        // print_r($post);exit;
        $action == "insert" ? $this->user->insertGetId($post) : $this->user->where("user_id", $post['user_id'])->update($post);
        header('Location: ' . base_url() . 'user');
    }
}