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
.tecnologiaskuttner:hover .content-box h4 a {
    color: #444;
}
.image-box {
    margin-bottom:10px;
    border-bottom: 1px solid;
    border-top: 1px solid;
}

.automacaoeletrica:hover .content-box h4 span {
    color: #444;
}
.siderurgia:hover .content-box h4 span {
    color: #0e3264;
}
.meioambiente:hover .content-box h4 span {
    color: #42a62a;
}
.fundicao:hover .content-box h4 span {
    color: #f05000;
}
.mineracao:hover .content-box h4 span {
    color: #d2191e;
}
.project-block-two .image-box .overlay-box:before {
    background-color:#FFF;
}
</style>



<section class="projects-section-two">
        <div class="auto-container">

             <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <div class="inner-container clearfix">
                    <!--Filter-->
                    <div class="filters text-center clearfix">                     
                        <ul class="filter-tabs filter-btns clearfix">
                            <!-- <li class="filter active" data-role="button" data-filter="all">Todos</li> -->
                            <h1>KUTTNER NEWS</h1>
                        </ul>
                    </div>
                </div>

                <div class="filter-list row clearfix" id="list-news">
                    
                   


                </div>
            </div>

        </div>
    </section>

    <script>
    var news = [
            {
              "tag":"Kuttner News",  
              "numero":"Nº 17",  
              "arquivo":"docs/news/KUTTNERNEWS 17.pdf",  
              "imagem":"imgs/catalogos/catalogo.png",  
            },
            {
              "tag":"Kuttner News",  
              "numero":"Nº 16",  
              "arquivo":"docs/news/KUTTNERNEWS 16.pdf",  
              "imagem":"imgs/catalogos/catalogo.png",  
            },
            {
              "tag":"Kuttner News",  
              "numero":"Nº 15",  
              "arquivo":"docs/news/KUTTNERNEWS 15.pdf",  
              "imagem":"imgs/catalogos/catalogo.png",  
            },
            {
              "tag":"Kuttner News",  
              "numero":"Nº 14",  
              "arquivo":"docs/news/KUTTNERNEWS 14.pdf",  
              "imagem":"imgs/catalogos/catalogo.png",  
            },
            {
              "tag":"Kuttner News",  
              "numero":"Nº 13",  
              "arquivo":"docs/news/KUTTNERNEWS 13.pdf",  
              "imagem":"imgs/catalogos/catalogo.png",  
            },
            {
              "tag":"Kuttner News",  
              "numero":"Nº 12",  
              "arquivo":"docs/news/KUTTNERNEWS 12.pdf",  
              "imagem":"imgs/catalogos/catalogo.png",  
            },
            {
              "tag":"Kuttner News",  
              "numero":"Nº 11",  
              "arquivo":"docs/news/KUTTNERNEWS 11.pdf",  
              "imagem":"imgs/catalogos/catalogo.png",  
            },
            {
              "tag":"Kuttner News",  
              "numero":"Nº 10",  
              "arquivo":"docs/news/KUTTNERNEWS 10.pdf",  
              "imagem":"imgs/catalogos/catalogo.png",  
            },
            {
              "tag":"Kuttner News",  
              "numero":"Nº 09",  
              "arquivo":"docs/news/KUTTNERNEWS 09.pdf",  
              "imagem":"imgs/catalogos/catalogo.png",  
            },
            {
              "tag":"Kuttner News",  
              "numero":"Nº 08",  
              "arquivo":"docs/news/KUTTNERNEWS 08.pdf",  
              "imagem":"imgs/catalogos/catalogo.png",  
            },
            {
              "tag":"Kuttner News",  
              "numero":"Nº 07",  
              "arquivo":"docs/news/KUTTNERNEWS 07.pdf",  
              "imagem":"imgs/catalogos/catalogo.png",  
            },
            {
              "tag":"Kuttner News",  
              "numero":"Nº 06",  
              "arquivo":"docs/news/KUTTNERNEWS 06.pdf",  
              "imagem":"imgs/catalogos/catalogo.png",  
            },
            {
              "tag":"Kuttner News",  
              "numero":"Nº 05",  
              "arquivo":"docs/news/KUTTNERNEWS 05.pdf",  
              "imagem":"imgs/catalogos/catalogo.png",  
            },
            {
              "tag":"Kuttner News",  
              "numero":"Nº 04",  
              "arquivo":"docs/news/KUTTNERNEWS 04.pdf",  
              "imagem":"imgs/catalogos/catalogo.png",  
            },
            {
              "tag":"Kuttner News",  
              "numero":"Nº 03",  
              "arquivo":"docs/news/KUTTNERNEWS 03.pdf",  
              "imagem":"imgs/catalogos/catalogo.png",  
            },
            {
              "tag":"Kuttner News",  
              "numero":"Nº 02",  
              "arquivo":"docs/news/KUTTNERNEWS 02.pdf",  
              "imagem":"imgs/catalogos/catalogo.png",  
            },
            {
              "tag":"Kuttner News",  
              "numero":"Nº 01",  
              "arquivo":"docs/news/KUTTNERNEWS 01.pdf",  
              "imagem":"imgs/catalogos/catalogo.png",  
            },
        ]
            
            novidades = ""
            for(i in news){
                novidades += `<div class="project-block-two mix all power tecnologiaskuttner col-md-3 col-sm-6 col-xs-12">
                        <div class="image-box">
                            <figure><img src="${news[i].imagem}" alt=""></figure>
                            <div class="overlay-box">
                                <a href="${news[i].arquivo}" class="lightbox-image" data-fancybox="Gallery"><span class="fa fa-search-plus"></span></a>
                            </div>
                        </div>
                        <div class="content-box">
                            <h4><span>${news[i].numero}<br/>&nbsp;</span><br>
                            <span class="tag">${news[i].tag}</span>
                        </div>
                    </div>`
            }

            document.querySelector("#list-news").innerHTML = novidades
    
    </script>
<?php
include_once "./base/bootom.php";
?>
<?php
include_once "./base/footer.php";
?>
</html>