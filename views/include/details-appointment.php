             
             <!-- Date du RDV -->
             <div class="text-left">
                 <label class="label" for="dateAppointment">Date</label>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="dateAppointment" name="dateAppointment" type="text" class="form-control" value="<?= $detailsAppointmentArray['date'] ?? '' ?>" disabled>
             </div>

             <!-- Heure du RDV  -->
             <div class="text-left">
                 <label class="label" for="hourAppointment">Heure</label>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="hourAppointment" name="hourAppointment" type="textF" class="form-control" value="<?= $detailsAppointmentArray['hour'] ?? '' ?>" disabled>
             </div>

             <!-- Nom du patient -->
             <div class="text-left">
                 <label class="label" for="patientId">Nom du patient</label>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="patient" name="patient" type="text" class="form-control" value="<?= $detailsAppointmentArray['patient'] ?? '' ?>" disabled>
             </div>

             <!-- Date de naissance -->
             <div class="text-left">
                 <label class="label" for="patientId">Date de naissance</label>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="patient" name="patient" type="text" class="form-control" value="<?= $detailsAppointmentArray['birthdate'] ?? '' ?>" disabled>
             </div>

             <!-- Adresse Mail -->
             <div class="text-left">
                 <label class="label" for="patientId">Adresse e-Mail</label>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="patient" name="patient" type="text" class="form-control" value="<?= $detailsAppointmentArray['mail'] ?? '' ?>" disabled>
             </div>

             <!-- Num de teléphone -->
             <div class="text-left">
                 <label class="label" for="patientId">Numéro de téléphone</label>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="patient" name="patient" type="text" class="form-control" value="<?= $detailsAppointmentArray['phone'] ?? '' ?>" disabled>
             </div>

             <form action="view-modifyAppointments.php" method="POST">
                 <button type="submit" class="btn btn-sm btn-dark" name="modifyAppointment" value="<?= $detailsAppointmentArray['id'] ?>">Modifier le rendez-vous</button>
                 <a type="button" href="view-listAppointments.php" class="btn btn-sm btn-outline-dark">Liste des rendez-vous</a>
             </form>