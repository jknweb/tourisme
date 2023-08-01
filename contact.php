<?php 
include "includes/head.php";
?>
  
    <div class="membre">
        <div class="contact">
            <h2>Nous Contacter</h2>
            <p>Remplir ce formulaire pour nous laisser un message</p>
            <form class="ctc-form">
                
               <div class="txt"> 
                   <input type="text" class="input" name="votreNom" placeholder=" "/>
                   <label class="placeholder">Votre Nom ici</label>
                </div>

               <div class="txt"> 
                    <select class="input">
                        <option>RDCongo</option>
                        <option>Cameroun</option>
                        <option>Togo</option>
                        <option>Mali</option>
                     </select>
                </div>
               
                <div class="txt"> 
                    <input type="mail" name="objectif" class="input" placeholder=" ">
                    <label class="placeholder">Votre Adresse mail</label>
                 </div>
               <div class="txt"> 
                   <input type="text" name="objectif" class="input" placeholder=" ">
                   <label class="placeholder">Votre Objectif</label>
                </div>
               <div class="txt"> 
                   <textarea rows="20" cols="56" class="input" placeholder=" "></textarea>
                   <label class="placeholder">Votre Message</label>
                </div>
                <div class="txt">
                    <button type="submit" name="inscription" class="form-dsg btn bg-rose" value="Envoyer votre message">Envoyez votre message</button></div>
            </form>
         </div>

         
    </div>

    <div class="hero">
        <div class="heroText"> <h2>Abonnez-vous à la boite <br>aux lettres</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus deserunt delectus,
                 molestias dignissimos asperiores, cumque neque debitis amet aliquid dolor, 
                 ipsum repudiandae distinctio necessitatibus quae placeat quaerat explicabo omnis minus.
            </p>
             
        </div>
        <div class="contact form-footer">
           <form class="ctc-form">
              <div class="txt"> 
                  <input type="mail" name="email" class="input" placeholder=" ">
                  <label class="placeholder">Incrivez-vous</label>
                </div>
               <div class="txt"><button type="submit" name="inscription" class="form-dsg btn bg-rose">S'inscrire</button></div>
           </form>
        </div>
    </div>
    <?php
include_once "includes/footer.php";
?>
