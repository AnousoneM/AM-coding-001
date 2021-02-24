         <!-- Utilisation du novalidate pour tester les tests en back -->
         <form novalidate action="" method="POST">
             <!-- Choix du patient -->
             <div class="text-left">
                 <label class="label" for="patientId">Veuillez choisir un patient</label>
                 <span class="error"><?= $errors['patientId'] ?? '' ?></span>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <select class="form-select" name="patientId" id="patientId">
                     <option selected disabled>Choix du patient</option>
                     <?php
                        foreach ($selectPatientsArray as $patient) { ?>
                         <option value="<?= $patient['id'] ?>"><?= $patient['lastname'] . ' ' . $patient['firstname']?></option>
                     <?php
                        } ?>
                 </select>
             </div>

             <!-- Date de RDV -->
             <div class="text-left">
                 <label class="label" for="dateAppointment">Date du rendez-vous</label>
                 <span class="error"><?= $errors['dateAppointment'] ?? '' ?></span>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="dateAppointment" name="dateAppointment" type="date" class="form-control" required>
             </div>

             <!-- Heure de RDV  -->
             <div class="text-left">
                 <label class="label" for="hourAppointment">Veuillez-choisir une heure de rendez-vous</label>
                 <span class="error"><?= $errors['hourAppointment'] ?? '' ?></span>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <select class="form-select" name="hourAppointment" id="hourAppointment">
                     <option selected disabled>Choix de l'heure</option>
                     <?php
                        for ($openHour; $openHour <= $closeHour; $openHour++) {
                            // mis en place d'un continue pour ne pas prendre en compte l'heure de dejeuner
                            if ($openHour == $specialHour) {
                                continue;
                            }
                        ?>
                         <option><?= $openHour . ':00' ?></option>
                     <?php
                        } ?>
                 </select>
             </div>

             <button type="submit" class="btn btn-sm btn-primary" name="addAppointmentBtn">Enregistrer</button>
             <a type="button" href="../index.php" class="btn btn-sm btn-outline-danger">Annuler</a>
             <a type="button" href="view-listPatients.php" class="btn btn-sm btn-outline-primary">Liste des rendez-vous</a>

         </form>