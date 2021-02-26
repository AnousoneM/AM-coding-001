<?php

require_once '../models/dataBase.php';
require_once '../models/appointments.php';

$appointmentsObj = new Appointments;
$allAppointmentsArray = $appointmentsObj->getAllAppointments();
