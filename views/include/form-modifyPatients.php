         <!-- Utilisation du novalidate pour tester les tests en back -->
         <form novalidate action="" method="POST">
             <!-- Nom -->
             <div class="text-left">
                 <label class="label" for="lastname">Nom</label>
                 <span class="error"><?= $errors['lastname'] ?? '' ?></span>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="lastname" name="lastname" type="text" class="form-control" placeholder="ex. DOE" value="<?= $detailsPatientArray['lastname'] ?>" required>
             </div>

             <!-- Prénom -->
             <div class="text-left">
                 <label class="label" for="firstname">Prénom</label>
                 <span class="error"></span>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="firstname" name="firstname" type="text" class="form-control" placeholder="ex. John" value="<?= $detailsPatientArray['firstname'] ?>" required>
             </div>

             <!-- Date de naissance  -->
             <div class="text-left">
                 <label class="label" for="birthdate">Date de naissance</label>
                 <span class="error"></span>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="birthdate" name="birthdate" type="date" class="form-control" value="<?= $detailsPatientArray['birthdate'] ?>" required>
             </div>

             <!-- Numéro de téléphone -->
             <div class="text-left">
                 <label class="label" for="phone">Numéro de téléphone</label>
                 <span class="error"></span>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="phone" name="phone" type="text" class="form-control" placeholder="ex. 0612XXXXXX" value="<?= $detailsPatientArray['phone'] ?>" required>
             </div>

             <!-- Adresse mail -->
             <div class="text-left">
                 <label class="label" for="mail">Adresse mail</label>
                 <span class="error"><?= $errors['mail'] ?? '' ?></span>
             </div>
             <div class="input-group input-group-sm mb-3">
                 <input id="mail" name="mail" type="mail" class="form-control" placeholder="ex. mail@mail.fr" value="<?= $detailsPatientArray['mail'] ?>" required>
             </div>

             <button type="submit" class="btn btn-outline-primary" name="ModifyBtn" value="<?= $detailsPatientArray['id'] ?>">Modifier</button>

         </form>