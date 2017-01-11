<!DOCTYPE html>
<!--
    Name: Stanley Chu
    Student ID: A00871993
    COMP 4711 Lab1
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
        $first->surname = "Job";
        $first->first_name = "Do";
        $first->add_email('home', 'dojob@gmail.com');
        $first->add_email('work', 'dojobs1@hotmail.com');
        $first->add_grade(78);
        $first->add_grade(89);
        $first->add_grade(60);
        $students['D1234'] = $first;
        
        $second = new Student();
        $second->surname = "Birds";
        $second->first_name = "Alpha";
        $second->add_email('home', 'dodo@gmail.com');
        $second->add_email('work', 'dodobirds@hotmail.com');
        $second->add_grade(100);
        $second->add_grade(90);
        $second->add_grade(89);
        $students['A1234'] = $second;
        
        ksort($students);

        foreach($students as $student) {
            echo $student->toString();
        }
        ?>
    </body>
</html>
