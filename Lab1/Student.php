<?php

/*
 * To change this license he
 */

/**
 * Stanley Chu
 * A00871993
 * COMP 4711 Lab 1
 *
 * @author a00871993
 * Class student that has functions to add emails and grades, calculates the students average and 
 * displays it to the webpage
 */
class Student {
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    } 
    
    // Adds email for the student
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    // Add grades for the student
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    // Calculates the students average
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
      
        return $total / count($this->grades);
    }
    
    // Displays students
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what) {
            $result .= $which . ': '. $what. "\n";
        }
        
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
