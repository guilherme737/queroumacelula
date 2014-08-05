<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery.slider.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/fileinput.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <title>Quero uma C&eacute;lula | Adicionar uma c&eacute;</title>

</head>

<body class="page-sub-page page-submit" id="page-top">
<!-- Wrapper -->
<div class="wrapper">
    <?php include('menu.php'); ?>
    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Adicionar uma c&eacute;lula</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <header><h1>Adicionar uma c&eacute;lula</h1></header>
            
            <form role="form" id="form-submit" class="form-submit" action="thank-you.html">
                <div class="row">
                    <div class="block">
                        <div class="col-md-12 col-sm-12">
                            <section id="submit-form">
                                <section id="basic-information">
                                    <header><h2>Informa&ccedil;&otilde;es da C&eacute;lula</h2></header>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="submit-title">Nome da c&eacute;lula</label>
                                                <input type="text" class="form-control" id="submit-title" name="title" required>
                                            </div><!-- /.form-group -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="submit-dia">Dia da Reuni&atilde;o</label>
                                                <select name="type" id="submit-dia">
                                                    <option value="1">Domingo</option>
                                                    <option value="2">Segunda</option>
                                                    <option value="3">Ter&ccedil;a</option>
                                                    <option value="4">Quarta</option>
                                                    <option value="5">Quinta</option>
                                                    <option value="6">Sexta</option>
                                                    <option value="7">S&aacute;bado</option>
                                                </select>
                                            </div><!-- /.form-group -->
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="submit-horario">Hor&aacute;rio de in&iacute;cio</label>
                                                <input type="number" min="0" max="23" step="1" value="19"/>
                                            </div>
                                        </div> 
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="submit-description">Breve descri&ccedil;&atilde;o sobre a sua c&eacute;lula</label>
                                        <textarea class="form-control" id="submit-description" rows="8" name="submit-description" required></textarea>
                                    </div><!-- /.form-group -->
                                </section><!-- /#basic-information -->
                                <section>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="submit-nome-lider">Nome do L&iacute;der</label>
                                                <input type="text" class="form-control" id="submit-nome-lider" name="nomeLider" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="submit-telefone-lider">Telefone do L&iacute;der</label>
                                                <input type="text" class="form-control" id="submit-telefone-lider" name="telefoneLider" required>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="submit-email-lider">Telefone do L&iacute;der</label>
                                                <input type="text" class="form-control" id="submit-email-lider" name="emailLider" required>
                                            </div>
                                        </div>
                                    </div>
                                </section> 
                                <section>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="submit-nome-Anfitriao">Nome do Anfitri&atilde;o</label>
                                                <input type="text" class="form-control" id="submit-nome-Anfitriao" name="nomeAnfitriao" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="submit-telefone-Anfitriao">Telefone do Anfitri&atilde;o</label>
                                                <input type="text" class="form-control" id="submit-telefone-Anfitriao" name="telefoneAnfitriao" required>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="submit-email-Anfitriao">Telefone do Anfitri&atilde;o</label>
                                                <input type="text" class="form-control" id="submit-email-Anfitriao" name="emailAnfitriao" required>
                                            </div>
                                        </div>
                                    </div>
                                </section> 

                                <section>
                                    <div class="row">
                                        <div class="block clearfix">
                                            <div class="col-md-5 col-sm-5">
                                                <section id="summary">                                                    
                                                    <header><h2>Localiza&ccedil;&atilde;o</h2></header>
                                                    <div class="form-group">
                                                        <label for="submit-endereco">Endere&ccedil;o</label>
                                                        <input type="text" class="form-control" id="submit-endereco" name="endereco" required>
                                                    </div><!-- /.form-group -->
                                                    <div class="form-group">
                                                        <label for="submit-bairro">Bairro</label>
                                                        <input type="text" class="form-control" id="submit-bairro" name="bairro" required>
                                                    </div><!-- /.form-group -->
                                                    <div class="form-group">
                                                        <label for="submit-Complemento">Complemento</label>
                                                        <input type="text" class="form-control" id="submit-Complemento" name="complemento" required>
                                                    </div><!-- /.form-group -->
                                                    
                                                    <div class="form-group">
                                                        <label for="submit-location">Estado (Prov&iacute;ncia)</label>
                                                        <select name="type" id="submit-location">
                                                            <option value="1">Goi&aacute;s</option>
                                                            <option value="2">S&atilde;o Paulo</option>
                                                            <option value="3">Rio de Janeiro</option>
                                                            <option value="4">Palmas</option>
                                                            <option value="5">Rio Grande do Sul</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="submit-location">Cidade</label>
                                                        <select name="type" id="submit-location">
                                                            <option value="1">Goi&acirc;nia</option>
                                                            <option value="2">Anapolis</option>
                                                            <option value="3">Aparecida de Goiânia</option>
                                                            <option value="4">Senador Canedo</option>
                                                            <option value="5">Trindade</option>
                                                        </select>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-cep">CEP(ZIP)</label>
                                                                <input type="text" class="form-control" id="submit-cep" name="cep" pattern="\d*" required>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-status">Status</label>
                                                                <select name="type" id="submit-status">
                                                                    <option value="1">Sale</option>
                                                                    <option value="2">Rent</option>
                                                                </select>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                    </div><!-- /.row -->                                                                                                                                                        
                                                </section><!-- /#summary -->
                                            </div><!-- /.col-md-6 -->
                                            <div class="col-md-7 col-sm-7">
                                                <section id="place-on-map">
                                                    <header class="section-title">
                                                        <h2>Local no Mapa</h2>
                                                        <span class="link-arrow geo-location">Obter Minha Localização</span>
                                                    </header>
                                                    <div id="submit-map"></div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="latitude" name="latitude" readonly>
                                                            </div><!-- /.form-group -->
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="longitude" name="longitude" readonly>
                                                            </div><!-- /.form-group -->
                                                        </div>
                                                    </div>
                                                </section><!-- /#place-on-map -->
                                            </div><!-- /.col-md-6 -->
                                        </div><!-- /.block -->
                                    </div><!-- /.row -->
                                </section>

                                <section class="block" id="gallery">
                                    <header><h2>Imagens da C&eacute;lula</h2></header>
                                    <div class="center">
                                        <div class="form-group">
                                            <input id="file-upload" type="file" class="file" multiple="true" data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-default" data-browse-label="Procurar Imagens">
                                            <figure class="note"><strong>Hint:</strong> Voce pode carregar v&aacute;rias imagens de uma s&oacute; vez!</figure>
                                        </div>
                                    </div>
                                </section>                                
                                <hr>
                            </section>
                        </div><!-- /.col-md-9 -->                        
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="block">
                        <div class="col-md-12 col-sm-12">
                            <div class="center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default large">Adicionar</button>
                                </div><!-- /.form-group -->                                
                            </div>
                        </div>                        
                    </div>
                </div>
            </form><!-- /#form-submit -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
    <!-- Page Footer -->
    <?php include('footer.php'); ?>
    <!-- end Page Footer -->
</div>

<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="assets/js/markerwithlabel_packed.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="assets/js/fileinput.min.js"></script>
<script type="text/javascript" src="assets/js/custom-map.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="assets/js/ie.js"></script>
<![endif]-->

<script>
    var _latitude = 48.87;
    var _longitude = 2.29;
    google.maps.event.addDomListener(window, 'load', initSubmitMap(_latitude,_longitude));
    function initSubmitMap(_latitude,_longitude){
        var mapCenter = new google.maps.LatLng(_latitude,_longitude);
        var mapOptions = {
            zoom: 15,
            center: mapCenter,
            disableDefaultUI: false,
            //scrollwheel: false,
            styles: mapStyles
        };
        var mapElement = document.getElementById('submit-map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new MarkerWithLabel({
            position: mapCenter,
            map: map,
            icon: 'assets/img/marker.png',
            labelAnchor: new google.maps.Point(50, 0),
            draggable: true
        });
        $('#submit-map').removeClass('fade-map');
        google.maps.event.addListener(marker, "mouseup", function (event) {
            var latitude = this.position.lat();
            var longitude = this.position.lng();
            $('#latitude').val( this.position.lat() );
            $('#longitude').val( this.position.lng() );
        });
    }

    function success(position) {
        initSubmitMap(position.coords.latitude, position.coords.longitude);
    }

    $('.geo-location').on("click", function() {
        if (navigator.geolocation) {
            $('#submit-map').addClass('fade-map');
            navigator.geolocation.getCurrentPosition(success);
        } else {
            error('Geo Localização não é suportada.');
        }
    });
</script>

</body>
</html>