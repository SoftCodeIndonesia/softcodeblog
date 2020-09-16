<?php

    class Home extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();
            if(!$this->session->userdata('login')){
                redirect(base_url('Auth'));
            }
        }


        public function index()
        {
            
            echo 'function home';
        }
    }