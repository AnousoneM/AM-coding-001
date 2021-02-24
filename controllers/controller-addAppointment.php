<?php

require_once '../models/dataBase.php';
require_once '../models/patients.php';
require_once '../models/appointments.php';

// Heure d'ouverture de l'hopital
$openHour = 8;
$closeHour = 20;
// fermeture exceptionnelle
$specialHour = 12;

$errors = [];

var_dump($_POST);

$patientsObj = new Patients;
$selectPatientsArray = $patientsObj->getAllPatientsForSelect();

if (isset($_POST['addAppointmentBtn'])) {

    // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    // PENSER A FAIRE DES TESTS SUR LES INPUTS RECUPERES
    // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

    if (empty($errors)) {

        $appointmentDetails = [
            'dateHour' => htmlspecialchars($_POST['dateAppointment'] . ' - ' . $_POST['hourAppointment']),
            'idPatients' => htmlspecialchars($_POST['patientId'])
        ];

        $appointmentsObj = new Appointments;

        if ($appointmentsObj->addAppointment($appointmentDetails)) {
            var_dump('OK');
        } else {
            var_dump('KO');
        }
    }
}
