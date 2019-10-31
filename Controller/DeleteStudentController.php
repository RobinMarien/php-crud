<?php


class DeleteStudentController
{
    function render()
    {
        $studentLoader = new StudentLoader();
        $student = base64_decode(unserialize($_POST["editStudent"]));
    }
}