<?php

// J'appelle mes 2 modèls
require_once '../models/dataBase.php';
require_once '../models/appointments.php';

$appointmentsObj = new Appointments;


if (isset($_GET['idAppointment'])) {

    $detailsAppointmentArray = $appointmentsObj->getAppointmentDetails($_GET['idAppointment']);

    var_dump($detailsAppointmentArray);

} else {

    $detailsAppointmentArray = false;
    
}
