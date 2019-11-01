<?php
declare(strict_types=1);

class StudentController
{
    public function render()
    {
        // we maken een nieuw object studentloader om met onze student database te verbinden
        $studentLoader = new StudentLoader();
        // we kijken aan de hand van enkele if methode n of er nieuwe, te bewerken of te verwijderen studenten zijn
        // 1 voor het creëeren van nieuwe studenten
        // 2 voor het bewerken van bestaande student
        // 3 voor het verwijderen van een student
        // de eerste keer dat we student controller laden gebeurt gaan we geen enkele if statement uitvoeren
        if (isset($_POST["createName"]) && $_POST["createEmail"] && $_POST["createClass"]) {
            // in de POST zitten alle variabelen die we gaan aanmaken
            $student = new Student(0, $_POST["createName"], $_POST["createEmail"], (int)$_POST["createClass"] );
            $studentLoader->createStudent($student);
        }
        else if(isset($_POST["editName"]) && isset($_POST["editEmail"]) && isset($_POST["editClass"])){
            // in the $_POST["students"] zit de id van de student die wordt bewerkt
            // zie de button tag helemaal onderaan in de edit_student.php file
            $student = new Student((int)$_POST["students"], $_POST["editName"], $_POST["editEmail"], (int)$_POST["editClass"]);
            $studentLoader->editStudent($student);
        }
        else if(unserialize(base64_decode($_POST["students"]))){
            // bij delete wordt het object student weer gecreëerd en aan de studentloader gegeven die een functie heeft om een
            // object student te deleten
            $student = unserialize(base64_decode($_POST["students"]));
            $studentLoader->deleteStudent($student);
        }

        // De student loader laadt nu alle studenten, dit gebeurt na de if statement zodat er altijd een recente lijst
        // wordt opgehaald met alle veranderingen die mochten zijn gebeurt
        // $allstudents bestaat nu uit een array of Studenten (objecten)
        // Bekijk de getStudents() functie om te zien hoe de studenten worden opgehaald
        $allstudents = $studentLoader->getStudents();

        // laad de php pagina met alle studenten
        require 'View/all_students.php';

    }
}