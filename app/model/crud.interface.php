<?php
    interface ICrud
    {
        public function create();

        public function save();

        public function edit();

        public function delete();

        public function listAll();
    }
