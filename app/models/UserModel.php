<?php

class UserModel extends Db {
    protected $table = 'user';

    protected $primaryKey = 'user_id';
    protected $mcat;

    public $timestamps = false;

    public function __construct() {
        $this->ini = parse_ini_file(CONF);
    }

    public function login($username, $pass) {
        $pwd_peppered = preppered($pass, $this->ini["PR"]);
        $login =  $this->where(['username' => $username])->first();
        // echo $pwd_peppered . ' test '.$pass . $login->password;
        // if ($pwd_peppered == $login->password) {
        // if (password_verify($pass, $pwd_peppered)) {
        //     echo  'match';
        // } else {
        //     echo ' salah';
        // }
        // exit;
        if (!empty($login->user_id)) {
            if ($pwd_peppered == $login->password) {
            // if (password_verify($pwd_peppered, $login->password)) {
                return $login;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function getAll($search = null) {
        return $this->get();
    }

    public function getUser($user_id) {
        return $this->where('user_id', $user_id)->first();
    }
}
