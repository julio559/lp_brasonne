<?php
if(isset($_GET['td'])){
    echo '
<div id="mensagemSucesso">Email enviado com sucesso!</div>
    ';

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Brasonne - energia solar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Somos a brasonne sua referencia em energia solar" name="keywords">
    <meta content="Somos a brasonne sua referencia em energia solar" name="description">

    <!-- Favicon -->
  
    <link rel="icon" href="img/Imagem do WhatsApp de 2024-02-22 à(s) 16.50.40_df2a02ad.jpg" type="image/png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    <style>

        *{

color: white !important;

        }


.color{

    background-color: #0074B3


}

body{

    background-color: #0876f1

}

        .whatsapp-float {
          position: fixed;
          width: 60px;
          height: 60px;
          bottom: 40px;
          right: 40px;
          background-color: #25d366;
          color: #FFF;
          border-radius: 50px;
          text-align: center;
          font-size: 30px;
          box-shadow: 2px 2px 3px #999;
          z-index: 100;
        }
        
        .whatsapp-icon {
          margin-top: 16px;
        }
        
        /* Adiciona animação de 'hover' */
        .whatsapp-float:hover {
          background-color: #128c7e;
          transition: 1s;
          color: white;
        }

        .preto{

color: black !important;

        }
        .white{

color: white !important;

        }


        .dife{
color: black !important;

            
        }

        .h2{

color: white !important;
font-size: 19px;

        }


        #mensagemSucesso {
            position: fixed;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: green;
            color: white;
            padding: 20px;
            z-index: 1000;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
            transition: opacity 1s ease-out;
            opacity: 1;
        }


</style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
   
    <!-- Navbar End -->
    <a href="https://wa.me/5527998785430?text=Olá,%20Gostaria%20de%20fazer%20um%20orçamento%20para%20minha%20residência/empresa%20e%20obter%20mais%20informações%20sobre%20sistema%20Solar.

" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp whatsapp-icon"></i>
      </a>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Energia solar</h4>
                            <h3 class="display-2 font-secondary text-white mb-4">Deixe o sol pagar a sua conta de energia</h3>
                            <a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll  dife" href="#about">Veja mais</a>
                        </div>
                    </div>
                </div>
               
    
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid mb-4 mb-lg-0" src="img/Imagem do WhatsApp de 2024-02-22 à(s) 16.50.40_df2a02ad.jpg" alt="">
                </div>
         <div class="col-lg-7">
    <h6 class="text-uppercase text-primary mb-3 h2" id="about" style="letter-spacing: 3px;">Como Funciona</h6>
    <h1 class="display-4 mb-3">Deixe o <span class="text-primary">Sol</span> pagando a sua conta?</h1>
    <p class="white">Produza sua própia energia e reduza em até 95% na sua conta de energia</p>
    <a class="btn btn-primary font-weight-bold py-3 px-5 mt-2" type="button" data-toggle="modal" data-target="#exampleModalLong">Descubra Mais</a>
</div>

                
            </div>
        </div>
    </div>
    <!-- About End -->


    
    <!-- Service End -->


    <!-- Gallery Start -->
   
    <!-- Gallery End -->


    <!-- Team Start -->
    <div class="container-fluid py-5" id="team">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px; color: white !important;">Brasonne</h6>
                <h1 class="font-secondary display-4">Sua referencia em energia solar</h1>
            </div>
            <div class="row justify-content-lg-start m-0 mb-4 pb-2 mb-sm-0 pb-sm-0">
                <div class="col-lg-6 p-0">
                    <div class="row m-0">
                        <div class="col-sm-6 p-0 text-center">
                            <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                                <h5 class="mb-2 preto" >Residencial</h5>
                                <p class="text-muted font-italic mb-2">Economia de até 95%</p>
                                <p class="preto">Implementação de sistemas geradores solares fotovoltaicos proporcionando uma economia de até 95% em sua fatura de energia elétrica.</p>
                               
                            </div>
                        </div>
                        <div class="col-sm-6 p-0" style="min-height: 300px;">
                            <img class="position-absolute w-100 h-100" src="img/gallery-1.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-lg-end m-0 mb-4 pb-2 mb-sm-0 pb-sm-0">
                <div class="col-lg-6 p-0">
                    <div class="row m-0">
                        <div class="col-sm-6 p-0" style="min-height: 300px;">
                            <img class="position-absolute w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                        </div>
                        <div class="col-sm-6 p-0 text-center">
                            <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                                <h5 class="mb-2 preto">Comercial</h5>
                                <p class="text-muted font-italic mb-2">Esqueça a conta e gere sua energia</p>

                                <p class="preto">Implantação de um sistema de geração de energia solar fotovoltaica em sua empresa, impulsionando a lucratividade de seu empreendimento.</p>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-lg-start m-0 mb-4 pb-2 mb-sm-0 pb-sm-0">
                <div class="col-lg-6 p-0">
                    <div class="row m-0">
                        <div class="col-sm-6 p-0 text-center">
                            <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4">
                                <h5 class="mb-2 preto">Industrial</h5>
                                <p class="text-muted font-italic mb-2">Energia solar na sua Industria</p>
                                <p class="preto">Implementação de sistemas de energia solar fotovoltaica em indústrias, promovendo a autossuficiência energética de maneira sustentável.</p>
                               
                            </div>
                        </div>
                        <div class="col-sm-6 p-0" style="min-height: 300px;">
                            <img class="position-absolute w-100 h-100" src="img/product-3.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
                   </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- FAQs Start -->
  
    <!-- FAQs End -->


    <!-- Testimonial Start -->
 
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contact">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px; color: white !important;">Orçamento</h6>
                <h1 class="font-secondary display-4">Faça um orçamento gratuito, rapido e facil</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form method="POST" action="email.php" id="contactForm" >
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text"  style="color: black !important;" class="form-control bg-secondary border-0 py-4 px-3" name="nome" id="name" placeholder="Seu nome" required="required" data-validation-required-message="Porfavor entre com seu nome" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" style="color: black !important;" class="form-control bg-secondary border-0 py-4 px-3" name="email" id="email" placeholder="Seu Email" required="required" data-validation-required-message="Insira seu email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" style="color: black !important;" class="form-control bg-secondary border-0 py-4 px-3"  name="motivo" id="subject" placeholder="Motivo de contato" required="required" data-validation-required-message="Motivo de contato" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea style="color: black !important;" class="form-control bg-secondary border-0 py-2 px-3" rows="6" name="mensagem" id="message" placeholder="Sua mensagem" required="required" data-validation-required-message="Envie sua mensagem"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>

                           
                            <div class="control-group">
    <label for="como_chegou">Através de qual meio você chegou nesta página?</label>
    <select style="color: black !important;" class="form-control bg-secondary border-0 py-2 px-3" id="como_chegou" name="como_chegou" required="required" data-validation-required-message="Por favor, selecione uma opção.">
        <option style="color: black !important;" value="">Selecione uma opção</option>
        <option style="color: black !important;" value="pesquisa_google">Pesquisa no Google</option>
        <option style="color: black !important;" value="indicacao">Indicação</option>
        <option style="color: black !important;" value="anuncio_patrocinado">Anúncio patrocinado</option>
        <option  style="color: black !important;"value="instagram">Instagram</option>
        <option style="color: black !important;" value="facebook">Facebook</option>
    </select>
    <p class="help-block text-danger"></p>
</div>


                            <div class="text-center">
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit" name="submit">Envie sua mensagem</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px; ">
        <div class="row pt-5">
            <div class="col-12 mb-4 px-4">
                <div class="row mb-5 p-4" style="background: rgba(256, 256, 256, .05);">
                    <div class="col-md-4">
                        <div class="text-md-center">
                            <h5 class="text-primary text-uppercase mb-2" style="letter-spacing: 5px;">Onde ficamos</h5>
                            <p class="mb-4 m-md-0">Canal Office Tower
                                Rua 7 de Junho, 33 - Coqueiral de Itaparica, Vila Velha - ES, 29102-310
                            </p>
                            <br> 
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.5877422456524!2d-40.30066188848284!3d-20.35864275172212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb816086e4af017%3A0x9120808af9e90d00!2sCanal%20Office%20Tower!5e0!3m2!1spt-BR!2sbr!4v1708721462931!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-md-center">
                            <h5 class="text-primary text-uppercase mb-2" style="letter-spacing: 5px;">Email de contato</h5>
                            <p class="mb-4 m-md-0">contato@brasonne.com.br
</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-md-center">
                            <h5 class="text-primary text-uppercase mb-2" style="letter-spacing: 5px;">Envie uma mensagem</h5>
                            
<p class="m-0">5527998785430</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5">
                    
                        <div class="d-flex justify-content-start mt-4">
                        
                            <a class="btn btn-lg btn-outline-light btn-lg-square" href="https://www.instagram.com/brasonne_energia_solar/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                   
         
    
    <!-- Footer End -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content color">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Sistema de Energia Solar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <img class="img-fluid mb-4" src="img/carousel-1.jpg" alt="">
                <p class="white">A energia solar representa uma fonte inesgotável de potencial, utilizando a luz solar para gerar eletricidade de forma limpa e sustentável. Com a tecnologia atual, é possível captar essa energia e converter em eletricidade, promovendo uma alternativa viável e ecologicamente correta às fontes tradicionais de energia.</p>
                <p class="white">Adotar um sistema de energia solar não apenas reduz a dependência de combustíveis fósseis, mas também contribui significativamente para a diminuição da emissão de gases poluentes na atmosfera. Além disso, a energia solar pode proporcionar uma redução considerável nos custos de energia elétrica a longo prazo.</p>
                <p class="white">Instalar painéis solares é um investimento no futuro, tanto em termos ambientais quanto econômicos. Com avanços contínuos na tecnologia solar, a eficiência desses sistemas tem aumentado, tornando-os cada vez mais acessíveis a residências e empresas.</p>
                <p class="white">Escolher a energia solar é uma decisão inteligente para quem busca autossuficiência energética, sustentabilidade e economia. É uma forma de contribuir para um futuro mais limpo e verde, aproveitando uma das fontes de energia mais abundantes e renováveis do nosso planeta.</p>
                <p class="white">Nosso compromisso com a sustentabilidade nos impulsiona a oferecer soluções em energia solar que não apenas atendem às necessidades atuais, mas também preservam o ambiente para as futuras gerações. A energia solar é mais do que uma alternativa; é o caminho para um mundo mais sustentável.</p>
                <p class="white">Convidamos você a fazer parte dessa mudança. Explore o potencial da energia solar e descubra como ela pode transformar o seu dia a dia, reduzindo custos e impacto ambiental. Junte-se a nós nessa jornada rumo à sustentabilidade.</p>
            </div>
            </div>
        </div>
    </div>
    
    <!-- Modal -->


    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <script>
        setTimeout(function() {
            var mensagem = document.getElementById('mensagemSucesso');
            mensagem.style.opacity = '0';
            setTimeout(function() {
                mensagem.style.display = 'none';
            }, 1000); // Espera a transição de opacidade terminar
        }, 5000); // Mensagem desaparece após 5 segundos
    </script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
  

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>