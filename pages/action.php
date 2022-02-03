<?php
    require_once ('../vendor/autoload.php');

    use App\classes\StringWordCount;
    use App\classes\Student;

    if( isset($_POST['btn']) ){
        $stringWordCount = new StringWordCount($_POST);

        $result = $stringWordCount->getWordString();

        include 'index.php';
    }

    elseif(isset($_GET['status'])){

        if($_GET['status'] == 'search'){
            $student = new Student();
            $std = $student->getAllStudent();
            include 'search.php';
        }
    }

    elseif(isset( $_POST['search_btn'] )){
        $search = new Student($_POST);
        $result = $search->getStudentBySearchText();
        include 'search_result.php';
    }

    else {
        header('Location: index.php');
    }


