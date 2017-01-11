<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');
        
        $students = array();
        
        $first = new Student();
        $first->surname = "job";
        $first->first_name = "do";
        $first->add_email('home', 'dojob@gmail.com');
        $first->add_email('work', 'dojobs1@hotmail.com');
        $first->add_grade(78);
        $first->add_grade(89);
        $first->add_grade(60);
        $students['d555'] = $first;
        
        $second = new Student();
        $second->surname = "Birds";
        $second->first_name = "Dodo";
        $second->add_email('home', 'dodo@gmail.com');
        $second->add_email('work', 'dodobirds@hotmail.com');
        $second->add_grade(100);
        $second->add_grade(90);
        $second->add_grade(89);
        $students['d580'] = $second;
        
        foreach($students as $student) {
            echo $student->toString();
        }
        ?>
    </body>
</html>
