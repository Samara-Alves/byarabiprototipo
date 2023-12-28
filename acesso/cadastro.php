<?php

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>KHAPH - Agencia de publicidade</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Carregando...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary">Khalph</h3>
                            </a>
                            <h3>Cadastro usuario</h3>
                        </div>
						
						<?php 
						if(isset($_SESSION['email_cadastrado'])):
						?>
						<p>Email já cadastrado</p>
						<?php
						endif;
						unset($_SESSION['email_cadastrado']);
						?>
					<form action="cadastrar.php" method="POST">
                        <div class="form-floating mb-3">
                            <input  class="form-control" name="nome" placeholder="Nome" required>
                            <label for="floatingInput">Nome</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input class="form-control" name="telefone" placeholder="Telefone" required>
                            <label for="floatingPassword">Telefone</label>
                        </div>
						 <div class="form-floating mb-4">
                            <input class="form-control" name="email" placeholder="Email" required>
                            <label for="floatingPassword">Email</label>
                        </div>
						 <div class="form-floating mb-4">
                            <input class="form-control" name="cep" placeholder="CEP" required>
                            <label for="floatingPassword">CEP</label>
                        </div>
						 <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                   name="ambientes" align="left" style="height: 150px;" required></textarea>
                                <label for="floatingTextarea">Quais ambientes deseja efetuar?</label>
                        </div>
						<br>

						 <select class="form-select form-select-lg mb-4" name="valor" aria-label=".form-select-lg example" >
                                <option selected>Pretensão de investimento nos móveis</option>
                                <option value="De R$8.000,00 a R$15.000,00">De R$8.000,00 a R$15.000,00</option>
                                <option value="De R$15.000,00 a R$30.000,00">De R$15.000,00 a R$30.000,00</option>
                                <option value="De R$30.000,00 a R$60.000,00">De R$30.000,00 a R$60.000,00</option>
								<option value="De R$60.000,00 a R$90.000,00">De R$60.000,00 a R$90.000,00</option>
								<option value="Acima De R$100.000,00">Acima De R$100.000,00</option>
                         </select>
						  <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                   name="observacao" style="height: 150px;" required></textarea>
                                <label for="floatingTextarea">Observação</label>
                          </div>	<br>					
                 
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Cadastrar</button>
                      <!--  <p class="text-center mb-0">Don't have an Account? <a href="">Sign Up</a></p> -->
						
					</form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>