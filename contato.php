<!DOCTYPE html>
<html lang="pt-br">

<?php
include_once "./base/header.php";
?>

<!-- Main Header-->
<header class="main-header style-two">

<?php
include_once "./base/top.php";
?>

<?php
include_once "./base/nav.php";
?>       

</header>
<!--End Main Header -->
<?php
include_once "./base/banner.php";
?>

<style>

#map {
  height: 600px;


}
/* Optional: Makes the sample page fill the window. */
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}
</style>

    <!-- Contact Section Two -->
    <section class="">
        <div class="auto-container">
            <div class="sec-title">
                <h2>Contato</h2>
                <div class="text">No mundo</div>
            </div>
            <div class="row clearfix">
                <div class="carousel-column col-md-7 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="branches-carousel owl-carousel owl-theme">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="">
            <div class="row">
                <div id="map" class=" col-md-12 col-sm-12 col-xs-12"></div>
            </div>
        </div>
    </section>
    <!--End Contact Section Two -->


<?php
include_once "./base/bootom.php";
?>
<?php
include_once "./base/footer.php";
?>
 <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUkoTXt1bL6oLyPUFFdVQXVlJpxbW-jWQ&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <script>
let map;
let locais = {
       "kdb":
        {
            "lat":"-19.9397803",
            "long":"-44.0745951",
            "content":"Kuttner do Brasil",
            "rua":"Rua Santiago Ballesteros",
            "numero":"610",
            "bairro":"CINCO",
            "complemento":"",
            "cep":"32010-050",
            "cidade":"Contagem ",
            "pais":"",
            "uf":"MG",
            "tel1":"+55 31 3399 7200",
            "tel2":"",
            "site":"www.kuttner.com.br",
            "email":"kuttner@kuttner.com.br",
            "obs":""
        },
       "knbs":
        {
            "lat":"-22.6645475",
            "long":"-47.6060642",
            "content":"Kuttner No-Bake Solutions",
            "contato":"Jorg Hagedorn",
            "rua":"Rua Abelardo Benedicto Libório",
            "numero":"951",
            "bairro":"Libéria",
            "complemento":"",
            "cep":"13413-075",
            "cidade":"Piracicaba",
            "pais":"",
            "uf":"SP",
            "tel1":"+55 (19) 3302 4770",
            "tel2":"",
            "site":"www.kuttner-nbs.com.br",
            "email":"s.pedrozo@kuttner-nbs.com.br",
            "obs":""
        },
       "cerp":
        {
            "lat":"-23.6215043",
            "long":"-46.689112",
            "content":"CERP Representações Ltda",
            "contato":"Sergio Predrozo",
            "rua":"Rua Álvaro Rodrigues",
            "numero":"182",
            "bairro":"",
            "complemento":"sl 95/96",
            "cep":"04582-000",
            "cidade":"São Paulo",
            "pais":"",
            "uf":"SP",
            "tel1":"+55 11 5543 5700",
            "tel2":"",
            "site":"www.cerp.com.br/",
            "email":"renato.pierri@cerp.com.br",
            "obs":""
        },
       "gebe":
        {
            "lat":"-25.42020919390166",
            "long":"-49.26958337333966",
            "content":"Gebe Máquinas e Metais",
            "contato":"Gerd Brauer",
            "rua":"Av. Cândido de Abreu",
            "numero":"427",
            "bairro":"",
            "complemento":"13º andar/Cj. 1306",
            "cep":"80530-000",
            "cidade":"Curitiba",
            "pais":"",
            "uf":"PR",
            "tel1":"+55 41 3254 8471",
            "tel2":"",
            "site":"",
            "email":"gebe@gebemaquinas.com.br",
            "obs":""
        },
       "paulofurtado":
        {
            "lat":"-1.378671403111711",
            "long":"-48.43687870236897",
            "content":"Paulo Furtado",
            "contato":"Paulo Furtado",
            "rua":"Rua 17 de Agosto",
            "numero":"162",
            "bairro":"Mangueirão",
            "complemento":"Quadra 25, Residencial Carmelândia",
            "cep":"66640-415",
            "cidade":"Belém",
            "pais":"",
            "uf":"PA",
            "tel1":"+55 91 99225-4673",
            "tel2":"+55 91 98864-2301",
            "site":"",
            "email":"p.furtado@kuttner.com.br",
            "obs":""
        },
       "etrc":
        {
            "lat":"-22.517641931910347",
            "long":"-44.105436676605045",
            "content":"ETR Consultoria técnica e comercial Ltda",
            "contato":"Everardo T. dos Reis Filho",
            "rua":"Rua 16",
            "numero":"109",
            "bairro":"Vila Santa Cecilia",
            "complemento":"sala 309",
            "cep":"27260-090",
            "cidade":"Volta Redonda",
            "pais":"",
            "uf":"RJ",
            "tel1":"+55 24 3342 5477",
            "tel2":"+55 24 3348 3483",
            "site":"",
            "email":"etr_consultoria@uol.com.br",
            "obs":""
        },
       "proteco":
        {
            "lat":"-33.449842915060856",
            "long":"-70.63968740592527",
            "content":"Proteco Ltda",
            "contato":"Herbert Ramdohr",
            "rua":"M.A. Tocornal",
            "numero":"566",
            "bairro":"",
            "complemento":"P.O. Box 10430",
            "cep":"",
            "cidade":"Santiago",
            "pais":"Chile",
            "uf":"",
            "tel1":"+56 (2) 222 4526",
            "tel2":"+56 (2) 222 4725",
            "site":"www.proteco.cl",
            "email":"info@proteco.cl",
            "obs":""
        },
       "bramund":
        {
            "lat":"20.57099149147154",
            "long":"-100.30892006756788",
            "content":"Bramund",
            "contato":"Alexandre Bortolini",
            "rua":"Carretera Federal",
            "numero":"57",
            "bairro":" El Marqués",
            "complemento":"Carretera Federal 57, El Marqués, Lateral Norte Km 201+100, Nave 57",
            "cep":"",
            "cidade":"Querétaro",
            "pais":"México",
            "uf":"",
            "tel1":"+52 1 81 1385 1908",
            "tel2":"",
            "site":"www.bramund4.com/",
            "email":"alexandre@bramund.com",
            "obs":""
        },
       "essen":
        {
            "lat":"51.43929697848423",
            "long":"7.002837849544674",
            "content":"Essen Küttner GmbH & Co. KG",
            "contato":"",
            "rua":"Alfredstr",
            "numero":"28",
            "bairro":"",
            "complemento":"",
            "cep":"45130",
            "cidade":"Essen",
            "pais":"Alemanha",
            "uf":"",
            "tel1":"+49 201 7293 0",
            "tel2":"+49 201 77 66 88",
            "site":"www.kuettner.com/",
            "email":"info@kuettner.de",
            "obs":""
        },
       "automation":
        {
            "lat":"49.72789801701881",
            "long":"6.61245802728426",
            "content":"Otto-Brenner-Straße",
            "contato":"",
            "rua":"",
            "numero":"3",
            "bairro":"",
            "complemento":"",
            "cep":"54294",
            "cidade":"Trier",
            "pais":"Alemanha",
            "uf":"",
            "tel1":"+49 651 8251 0",
            "tel2":"+49 651 8251 100",
            "site":"www.kuettner-automation.com/",
            "email":"info@kuettner-automation.de",
            "obs":""
        },
       "wurz":
        {
            "lat":"51.27710521315324",
            "long":"6.518378352077565",
            "content":"WÜRZ GmbH",
            "contato":"",
            "rua":"Hanns-Martin-Schleyer-Str.",
            "numero":"20a",
            "bairro":"",
            "complemento":"",
            "cep":"47877 ",
            "cidade":"Willich-Münchheide",
            "pais":"Alemanha",
           "uf":"",
            "tel1":"+49 2154 4811-0",
            "tel2":"+49 2154 4811-77",
            "site":"www.wuerzreku.de/",
            "email":"info@wuerzreku.de",
            "obs":""
        },
       "sarl":
        {
            "lat":"48.40668627066248",
            "long":"7.451483809777289",
            "content":"Kuttner S.a.r.l.",
            "contato":"",
            "rua":"Rue du Jardins Barr",
            "numero":"5",
            "bairro":"",
            "complemento":"",
            "cep":"67140 ",
            "cidade":"",
            "pais":"França",
           "uf":"",
            "tel1":"+33 388 585500",
            "tel2":"+33 388 084478",
            "site":"",
            "email":"kuttner@kuttner.fr",
            "obs":""
        },
    //    "XXXX":
    //     {
    //         "lat":"XXXX",
    //         "long":"XXXX",
    //         "content":"XXXX",
    //         "contato":"XXXX",
    //         "rua":"XXXX",
    //         "numero":"XXXX",
    //         "bairro":"XXXX",
    //         "complemento":"XXXX",
    //         "cep":"XXXX",
    //         "cidade":"XXXX",
    //         "pais":"XXXX",
    //        "uf":"XXXX",
    //         "tel1":"XXXX",
    //         "tel2":"XXXX",
    //         "site":"XXXX",
    //         "email":"XXXX",
    //         "obs":"XXXX"
    //     },
    
    
}
function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 15.284146, lng: 9.6844468 },
    zoom: 3,
  });

for(l in locais){

    const infowindow = new google.maps.InfoWindow({
        content: locais[l].content,
    });
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(locais[l].lat,locais[l].long), // variável com as coordenadas Lat e Lng
        map: map
    }); 
    marker.addListener("click", () => {
        infowindow.open(map, marker);
    });
}

}
</script>
<!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyDTPlX-43R1TpcQUyWjFgiSfL_BiGxslZU"></script> -->
<script src="js/map-script.js">
    var element = document.getElementById("myDIV");
    element.classList.remove("contact-section-two");
</script>
</html>