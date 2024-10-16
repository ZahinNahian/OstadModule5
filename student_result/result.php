<?php
function result($a,$b,$c,$d,$e) {
    // Calculate total and average marks
    $tmark=$a+$b+$c+$d+$e;
    $gormark=$tmark/5;

    // Function to show total and average marks
    function showkoro($tmark, $gormark) {
        echo "Total mark: $tmark<br>";
        echo "\n";
        echo "Average Mark: $gormark<br>";
        echo "\n";
    }

    switch (true) {

        // Check if any marks are invalid
        case ($a<0 || $a>100 || $b<0 || $b>100 || $c<0 || $c>100 || $d<0 || $d>100 || $e<0 || $e>100):
            echo 'Mark range is invalid';
            break;

        // Check if the student failed any subject
        case ($a<33 || $b<33 || $c<33 || $d<33 || $e<33):
            echo 'Student failed to get pass mark';
            break;

        // Grading logic based on average marks
        case ($gormark>=33 && $gormark<=39):
            showkoro($tmark, $gormark);
            echo 'Grade: D';
            break;
        case ($gormark>=40 && $gormark<=49):
            showkoro($tmark, $gormark);
            echo 'Grade: C';
            break;
        case ($gormark>=50 && $gormark<=59):
            showkoro($tmark, $gormark);
            echo 'Grade: B';
            break;
        case ($gormark>=60 && $gormark<=69):
            showkoro($tmark, $gormark);
            echo 'Grade: -A';
            break;
        case ($gormark>=70 && $gormark<=79):
            showkoro($tmark, $gormark);
            echo 'Grade: A';
            break;
        case ($gormark>=80 && $gormark<=100):
            showkoro($tmark, $gormark);
            echo 'Grade: A+';
            break;    
        default:
            echo 'Something went wrong, check your input';
            break;
    }
};

// Add your scores of 5 subjects.
result(80,85,79,75,90);
