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
                            <li class="filter active" data-role="button" data-filter="all">Todos</li>
                            <li class="filter" data-role="button" data-filter=".tecnologiaskuttner">Tecnologias Kuttner</li>
                            <li class="filter" data-role="button" data-filter=".siderurgia">Siderurgia</li>
                            <li class="filter" data-role="button" data-filter=".meioambiente">Meio Ambiente</li>
                            <li class="filter" data-role="button" data-filter=".fundicao">Fundição</li>
                            <li class="filter" data-role="button" data-filter=".mineracao">Mineração</li>
                            <li class="filter" data-role="button" data-filter=".automacaoeletrica">Automação e Elétrica</li>
                        </ul>
                    </div>
                </div>

                <div class="filter-list row clearfix" id="list-catalogos">
                   
                    
                    

                </div>
            </div>

        </div>
    </section>

    <script>
        var list_catalogos =[
            {
                "classe":"automacaoeletrica",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/Kuettner_Automation.pdf",
                "titulo":"Automação e engenharia elétrica: soluções para plantas industriais",
                "tag":"Automação e Elétrica",
            },
            {
                "classe":"mineracao",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/Kuttner_cat_en_peneiramento.pdf",
                "titulo":"Sistemas de peneiramento",
                "tag":"Mineração",
            },
            {
                "classe":"mineracao",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/kuttner_cat_en_separadores_magneticos.pdf",
                "titulo":"Separadores magnéticos",
                "tag":"Mineração",
            },
            {
                "classe":"mineracao",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/kuttner_cat_en_alimentadores_vibratorios.pdf",
                "titulo":"Alimentadores vibratórios",
                "tag":"Mineração",
            },
            {
                "classe":"mineracao",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/allair.pdf",
                "titulo":"ALLAIR®",
                "tag":"Mineração",
            },
            {
                "classe":"mineracao",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/allflux.pdf",
                "titulo":"ALLFLUX®",
                "tag":"Mineração",
            },
            {
                "classe":"mineracao",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/ccc.pdf",
                "titulo":"xxx",
                "tag":"Mineração",
            },
            {
                "classe":"mineracao",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/alljig.pdf",
                "titulo":"ALLJIG®",
                "tag":"Mineração",
            },
            {
                "classe":"fundicao",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/kuttner_cat_pt_cubilo.pdf",
                "titulo":"Tecnologia para fusão com cubilô",
                "tag":"Fundição",
            },
            {
                "classe":"fundicao",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/kuttner_cat_pt_resfriador.pdf",
                "titulo":"Resfriador de leito fluidizado",
                "tag":"Fundição",
            },
            {
                "classe":"fundicao",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/kuttner_cat_pt_misturador.pdf",
                "titulo":"Misturador de areia Speedmullor",
                "tag":"Fundição",
            },
            {
                "classe":"fundicao",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/catalogo knbs.pdf",
                "titulo":"Kuttner No-Bake Solutions",
                "tag":"Fundição",
            },
            {
                "classe":"fundicao",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/kuttner_cat_pt_fundicao.pdf",
                "titulo":"Tecnologias para fundição",
                "tag":"Fundição",
            },
            {
                "classe":"meioambiente",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/kuttner_cat_pt_luehr_filter_geral.pdf",
                "titulo":"Sistemas para o controle da qualidade do ar da LUEHR FILTER",
                "tag":"Meio Ambiente",
            },
            {
                "classe":"meioambiente",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/kuttner_cat_pt_despoeiramento.pdf",
                "titulo":"Sistemas de despoeiramento para alto-forno, aciaria e fundição",
                "tag":"Meio Ambiente",
            },
            {
                "classe":"siderurgia",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/Kuettner_shaft.pdf",
                "titulo":"Tecnologias OXYCUP® para reciclagem de resíduos siderúrgicos",
                "tag":"Siderurgia",
            },
            {
                "classe":"siderurgia",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/Kuettner_Cokemaking.pdf",
                "titulo":"Equipamentos para coqueria",
                "tag":"Siderurgia",
            },
            {
                "classe":"siderurgia",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/kuttner_cat_pt_recuperacao_calor.pdf",
                "titulo":"Recuperação de calor em processos industriais",
                "tag":"Siderurgia",
            },
            {
                "classe":"siderurgia",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/Kuettner_PCI.pdf",
                "titulo":"PCI - Injeção de finos de carvão no alto-fornos",
                "tag":"Siderurgia",
            },
            {
                "classe":"siderurgia",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/kuttner_cat_pt_despoeiramento.pdf",
                "titulo":"Sistemas de despoeiramento para alto-forno, aciaria e fundição",
                "tag":"Siderurgia",
            },
            {
                "classe":"siderurgia",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/kuttner_cat_pt_trat_ferro_aco.pdf",
                "titulo":"Tratamento de ferro e aço",
                "tag":"Siderurgia",
            },
            {
                "classe":"siderurgia",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/kuttner_cat_pt_beneficiamento_mat_prima.pdf",
                "titulo":"Beneficiamento de matérias-primas na indústria siderúrgica",
                "tag":"Siderurgia",
            },
            {
                "classe":"tecnologiaskuttner",
                "imagem":"imgs/catalogos/catalogo.png",
                "arquivo":"docs/catalogos/kuttner_catalogo_geral.pdf",
                "titulo":"Catálogo Geral",
                "tag":"Tecnologias Kuttner",
            },
        ]

        let catalogos = ""
        for(i in list_catalogos)
        {
            

        let classe = list_catalogos[i].classe
        let imagem = list_catalogos[i].imagem
        let arquivo = list_catalogos[i].arquivo
        let titulo = list_catalogos[i].titulo
        let tag = list_catalogos[i].tag

        catalogos += `<div class="project-block-two mix all power ${classe} col-md-4 col-sm-6 col-xs-12">
                    <div class="image-box">
                        <figure><img src="${imagem}" alt=""></figure>
                        <div class="overlay-box">
                            <a href="${arquivo}" class="lightbox-image" data-fancybox="Gallery"><span class="fa fa-search-plus"></span></a>
                        </div>
                    </div>
                    <div class="content-box">
                        <h4><span>${titulo}</span><br>
                        <span class="tag">${tag}</span>
                    </div>
                </div>`
        }

        document.querySelector("#list-catalogos").innerHTML = catalogos

    </script>

    
<?php
include_once "./base/bootom.php";
?>
<?php
include_once "./base/footer.php";
?>
</html>