<?php

use Symfony\Component\HttpFoundation\Request;

class AuthController extends PublicController {
    protected $user;
    protected $request;
    public function __construct() {
        parent::__construct();
        $this->request = Request::createFromGlobals();
        $this->user = new UserModel;
    }

    public function index() {
        // if ($this->session->get('user_id')) {
        //     return header('Location: ' . base_url() . 'home');
        // }
        $data['page_title'] = 'Electrical Network PT BIOFARMA Inventory';
        // echo $this->session->get("message");exit;
        $data['message'] = checkIf($this->session->get("message"));
        $this->session->invalidate();
        // $this->session->set("login", '1');
        $data['session'] = $this->session->all();
        view('login', $data);
    }

    public function login() {
        $post = $this->request->request->all();
        $logged_in = $this->user->login($post['username'], $post['password']);
        if (!empty($logged_in->user_id)) {
            $user_data = ['user_id' => $logged_in->user_id,
                'username' => $logged_in->username,
                'fullname' => $logged_in->fullname,
                'level' => $logged_in->level_id,
                'message' => 'Logged In'];
            $this->session->set("user_data", $user_data);
            // echo $this->session->get("user_data")["username"];
            header('Location: ' . base_url() . 'home');
        } elseif ($this->session->get('user_id')) {
            header('Location: ' . base_url() . 'home');
        } else {
            $this->session->set('message', '<p class="text-danger">Sorry Wrong User / Pass</p>');
            // echo $this->session->get("message");
            header('Location: ' . base_url() . 'auth');
        }
    }

    public function logout() {
        $this->session->invalidate();
        header('Location: ' . base_url() . 'auth');
    }
}
