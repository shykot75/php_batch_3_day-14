<?php


namespace App\classes;





class Student
{


    protected $text;
    protected $students;
    protected $result = [];

    public function __construct($post = null){
        if(isset($post['search']) ){
            $this->text = $post['search'];
        }

    }



    public function getAllStudent(){
        return [
            0=> [
                'name'      => 'Shahabuddin',
                'mobile'    => '1234',
                'email'     => 'sahabuddin@gmail.com',
                'address'   => 'Lalbagh'
            ],

            1=> [
                'name'      => 'Tarok',
                'mobile'    => '5678',
                'email'     => 'tarok@gmail.com',
                'address'   => 'Lokkhi Bazar'
            ],

            2=> [
                'name'      => 'Shykot',
                'mobile'    => '04567',
                'email'     => 'shykot@gmail.com',
                'address'   => 'n.gonj'
            ],

            3=> [
                'name'      => 'Shakib',
                'mobile'    => '7575',
                'email'     => 'shykot@gmail.com',
                'address'   => 'Dhaka'
            ],
            5=> [
                'name'      => 'Anika',
                'mobile'    => '2323',
                'email'     => 'anika@gmail.com',
                'address'   => 'panchagar'
            ]
        ];
    }

    public function getStudentBySearchText(){
//        echo "OK";
//        echo $this->text;
        $this->students = $this->getAllStudent();
        foreach($this->students as $student){
            if($this->text == $student['name']){
                $this->result = $student;
                break;
            }
        }
        return $this->result;
    }













}