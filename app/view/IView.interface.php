<?php 

    interface IView
    {
        public function createForm();

        public function editForm();

        public function deleteForm();

        public function showResults();
    }
