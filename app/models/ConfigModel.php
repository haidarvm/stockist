<?php

class ConfigModel extends Db  {
    protected $table = 'config';

    protected $primaryKey = 'config_id';
    protected $mcat;

    public $timestamps = false;

    public function getAll($search = null) {
        return $this->get();
    }

    public function getConfig($config_id) {
        return $this->where("config_id", $config_id)->first();
    }

    public function insertLatest($data) {
        $this->insertGetId($data);
    }
  
}