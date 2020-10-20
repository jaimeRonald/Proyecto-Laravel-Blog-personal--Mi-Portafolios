<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		*{

    margin:0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: sans-serif;
}


footer{
    background: #202020;
    color: white;
    width: 100%;
}

.pie{
    color: white;
} 
 


	</style>
	
</head>
<body>

	<footer   style="background-color:#7F8C8D  "  style="bottom: 0;">
   @yield('footer')
  <div style="background-color: #6351ce;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">MundoWebTec</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>aqui enontraras variada informacion sobre el apasionante mundo de la programacion en diferentes lenguajes de programacion C# Java,PHP, SQL y mas </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Productos</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="pie" href="#!">Desarrollo web</a>
        </p>
        <p>
          <a class="pie" href="#!">Sistemas inteligentes</a>
        </p>
        <p>
          <a class="pie" href="#!">backend y frontend</a>
        </p>
        

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
         <p >
         <img style="height: 40px;"  src="../images/linkedin.png">
          <a class="pie" href="https://www.linkedin.com/in/jaime-visitacion-024731137">Linkedin</a>
        </p>
        <p >
            <img  style="height: 40px;" src="../images/whatsapp.png">
          <a class="pie"  href="https://wa.link/42ok32">Whatsapp</a>
        </p>
       
         <p class="pie"><img  src="../images/facebook48.png">
          <a class="pie"  href="#!">Facebook</a>
        </p>
         <p>
          <img  src="../images/twitter.png">
          <a class="pie"   href="#!">Twitter</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contactos</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i>Trujillo, La Libertad, Perú</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> jaimeronald90@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +51 933492512</p>
         

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MundoWebTec.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
       
        

</body>
</html>