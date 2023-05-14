<?php 

    interface IView
    {
        public function createForm();

        public function editForm($users);

        public function deleteForm();

        public function showResults();
    }
