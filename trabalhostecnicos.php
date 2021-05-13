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
                            <h1>TRABALHOS TÉCNICOS</h1>
                        </ul>
                    </div>
                </div>

                <div class="filter-list row clearfix" id="lista-trabalhos-tecnicos">

                </div>
    </section>

    
<script>

var trabalhostecnicos = [
    {
        "titulo":"LIMPEZA DE GASES NA FUNDIÇÃO",
        "imagem":"imgs/tecnicos/tecnicos.png",
        "arquivo":"docs/tecnicos/limpeza gases.pdf",
    },
    {
        "titulo":"UTILIZATION OF BY-PRODUCTS BY KÜTTNER’S",
        "imagem":"imgs/tecnicos/tecnicos.png",
        "arquivo":"docs/tecnicos/OxyCup ByProduct operation.pdf",
    },
    {
        "titulo":"Drying and Grinding plants",
        "imagem":"imgs/tecnicos/tecnicos.png",
        "arquivo":"docs/tecnicos/PCI FR 072016.pdf",
    },
    {
        "titulo":"RECUPERAÇÃO DE CALOR NA SINTERIZAÇÃO",
        "imagem":"imgs/tecnicos/tecnicos.png",
        "arquivo":"docs/tecnicos/Recuperação de Calor na Sinterização.pdf",
    },
    {
        "titulo":"ROTEIRO ORIENTATIVO",
        "imagem":"imgs/tecnicos/tecnicos.png",
        "arquivo":"docs/tecnicos/Roteiro - Estudo Básico Sistema de Recuperação de Calor.pdf",
    },
    {
        "titulo":"1º Simpósio Sobre Competitividade na Fundição",
        "imagem":"imgs/tecnicos/tecnicos.png",
        "arquivo":"docs/tecnicos/simposio fundição.pdf",
    },
    {
        "titulo":"SISTEMA DE LIMPEZA DE GASES COM FILTRO DE MANGAS HORIZONTAIS",
        "imagem":"imgs/tecnicos/tecnicos.png",
        "arquivo":"docs/tecnicos/Sistema de Limpeza de Gases com Filtro de Mangas Horizontais JL.pdf",
    },
    {
        "titulo":"SISTEMA DE LIMPEZA DE GASES COM FILTRO DE MANGAS HORIZONTAIS",
        "imagem":"imgs/tecnicos/tecnicos.png",
        "arquivo":"docs/tecnicos/Sistema de Limpeza de Gases com Filtro de Mangas Horizontais.pdf",
    },
    {
        "titulo":"SISTEMAS DE RECUPERAÇÃO DE ENERGIA TÉRMICA COM A TECNOLOGIA HEAT PIPE",
        "imagem":"imgs/tecnicos/tecnicos.png",
        "arquivo":"docs/tecnicos/Sistemas de Recuperacao de Energia Termica com a Tecnologia Heat Pipe - Uma Solucão Tecnica, Segura e Eficiente_.pdf.pdf",
    },
    {
        "titulo":"Recuperação de Calor",
        "imagem":"imgs/tecnicos/tecnicos.png",
        "arquivo":"docs/tecnicos/Trab  Técnico - Recuperação de Calor - Aumento da Eficiência do Processo.pdf",
    },
    {
        "titulo":"AUMENTO DA EFICIÊNCIA ENERGÉTICA COM O PRÉAQUECIMENTO DO AR",
        "imagem":"imgs/tecnicos/tecnicos.png",
        "arquivo":"docs/tecnicos/Trab Técnico- Aumento Eficiência AF- Recuperação de Calor - Cowper.pdf",
    },
    {
        "titulo":"HEAT PIPE",
        "imagem":"imgs/tecnicos/tecnicos.png",
        "arquivo":"docs/tecnicos/Trabalho Técnico - Heat Pip.pdf",
    },
    {
        "titulo":"Sistema de Limpeza De Gases",
        "imagem":"imgs/tecnicos/tecnicos.png",
        "arquivo":"docs/tecnicos/Trabalho Técnico - Sistema de Limpeza de Gases.pdf",
    },
    {
        "titulo":"TURBINA DE RECUPERAÇÃO DE GÁS DE TOPO",
        "imagem":"imgs/tecnicos/tecnicos.png",
        "arquivo":"docs/tecnicos/Turbina de Recuperação de Gás de Topo - TRT.pdf",
    },
    {
        "titulo":"AUMENTO DA EFICIÊNCIA ENERGÉTICA",
        "imagem":"imgs/tecnicos/tecnicos.png",
        "arquivo":"docs/tecnicos/WHRS Energia - ABM WEEK 2015.pdf",
    },
]
var trabalhos = ""
for(i in trabalhostecnicos){
    let titulo = (trabalhostecnicos[i].titulo.length < 33)?trabalhostecnicos[i].titulo+"<br>\xa0":trabalhostecnicos[i].titulo
    let imagem = trabalhostecnicos[i].imagem
    let arquivo = trabalhostecnicos[i].arquivo

    trabalhos += `<div class="project-block-two mix all power tecnologiaskuttner col-md-4 col-sm-4 col-xs-12">
                        <div class="image-box">
                            <figure><img src="${imagem}" alt=""></figure>
                            <div class="overlay-box">
                                <a href="${arquivo}" class="lightbox-image" data-fancybox="Gallery"><span class="fa fa-search-plus"></span></a>
                            </div>
                        </div>
                        <div class="content-box">
                            <h4><span>${titulo.toUpperCase()}</span></h4>
                        </div>
                    </div>
                </div>
            </div>`
}

document.querySelector("#lista-trabalhos-tecnicos").innerHTML = trabalhos

</script>
<?php
include_once "./base/bootom.php";
?>
<?php
include_once "./base/footer.php";
?>
</html>