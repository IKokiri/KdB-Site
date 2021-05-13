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
                            <h1>TECNOLOGIAS</h1>
                        </ul>
                    </div>
                </div>

                <div class="filter-list row clearfix" id="lista-tecnologias">

                </div>
    </section>

    
<script>

var tecnologias = [
    {
        "titulo":"Siderurgia e Mineração",
        "imagem":"imgs/tecnologia/siderurgia mineracao.png",
        "arquivo":"docs/tecnologias/siderurgia mineracao.pdf",
        "link":null,
    },
    {
        "titulo":"Fundição",
        "imagem":"imgs/tecnologia/fundicao.png",
        "arquivo":"http://www.kuttner-nbs.com.br/produtos",
        "link":"http://www.kuttner-nbs.com.br/produtos",
    },
    {
        "titulo":"Meio Ambiente",
        "imagem":"imgs/tecnologia/meio ambiente.png",
        "arquivo":"docs/tecnologias/meio ambiente.pdf",
        "link":null,
    },
    
]
var tec = ""
for(i in tecnologias){

    let titulo = (tecnologias[i].titulo.length < 33)?tecnologias[i].titulo+"<br>\xa0":tecnologias[i].titulo
    let imagem = tecnologias[i].imagem
    let arquivo = tecnologias[i].arquivo
    let arqLink = (tecnologias[i].link == null)?`<a href="${arquivo}" class="lightbox-image" data-fancybox="Gallery"><span class="fa fa-search-plus"></span></a>`:`<a href="${arquivo}" target="_blank"><span class="fa fa-search-plus"></span></a>`


    tec += `<div class="project-block-two mix all power tecnologiaskuttner col-md-4 col-sm-4 col-xs-12">
                        <div class="image-box">
                            <figure><img src="${imagem}" alt=""></figure>
                            <div class="overlay-box">
                            ${arqLink}
                            </div>
                        </div>
                        <div class="content-box">
                            <h4><span>${titulo.toUpperCase()}</span></h4>
                        </div>
                    </div>
                </div>
            </div>`
}

document.querySelector("#lista-tecnologias").innerHTML = tec

</script>
<?php
include_once "./base/bootom.php";
?>
<?php
include_once "./base/footer.php";
?>
</html>