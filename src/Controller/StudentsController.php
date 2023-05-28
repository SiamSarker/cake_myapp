<?php

namespace App\Controller;

class StudentsController extends UsersController{
    public function home()
    {
        $this->viewBuilder()->setLayout('student');
    }

}
