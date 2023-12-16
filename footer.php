   <!-- Footers -->
   <!-- Footer 1 -->
   <section class="footer footer-one footer-distributed">
       <div class="footer-left">

           <h3><span>Cyci</span></h3>
           <p class="footer-links">
               <a href="Home.php" class="hover-color link-1">Home</a>
               <a href="About.php" class="hover-color">About</a>
               <a href="Product.php" class="hover-color">Product</a>
               <?php
                if (isset($_SESSION["username"])) {
                ?>
                   <a href="Services.php" class="hover-color">Services</a>
                   <a href="Description.php" class="hover-color">Description</a>
               <?php
                }
                ?>
               <a href="Contact.php" class="hover-color">Contact</a>
           </p>

       </div>

       <div class="footer-center">
           <div>
               <i class="bi bi-geo-alt-fill"></i>
               <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
           </div>

           <div>
               <i class="bi bi-telephone-fill"></i>
               <p>+1.555.555.5555</p>
           </div>

           <div>
               <i class="bi bi-envelope-fill"></i>
               <p><a href="mailto:support@company.com">support@company.com</a></p>
           </div>
       </div>

       <div class="footer-right">

           <p class="footer-company-about">
               <span>About the company</span>
               "Cyci Innovating with excellence. Our passionate team pioneers
               solutions, rooted in integrity."<br> Join us for more on:
           </p>

           <div class="footer-icons">

               <a href="#" class="hover-color"><span class="socialPlatform-icon"><i class="bi bi-facebook"></i></span></a>

               <a href="#" class="hover-color"><span class="socialPlatform-icon"><i class="bi bi-youtube"></i></span></a>

               <a href="#" class="hover-color"><span class="socialPlatform-icon"><i class="bi bi-twitter"></i></span></a>

               <a href="#" class="hover-color"><span class="socialPlatform-icon"><i class="bi bi-instagram"></i></span></a>

           </div>

       </div>
   </section>
   <!-- Footer 2 -->
   <section class="footer footer-two">
       <div class="footer-line">
           <p>© Cyci-2023.<span class="policies">All rights reserved</span></p>
       </div>

   </section>