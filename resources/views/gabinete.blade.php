
@extends('layouts.index')

@section('title_page')

 <!-- Content Header (Page header) -->
        <section class="content-header">
           <h1>
              Montar Relatório
             <small></small>
            </h1>
             <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                 <li class="active">Here</li>
            </ol>
        </section>
       
@endsection


@section('content_page')
<div class="form-row">
  <div class="form-group col-md-4">
    <a href="https://agendamento.policiacivil.pa.gov.br/public/" target="_blank"><button type="button" class="btn botao btn-lg btn-block ">Agendamento-RG</button></a>
  </div>
  <div class="form-group col-md-4">
    <a href="http://www.estacaocidadania.pa.gov.br/agendamento-ctps" target="_blank"><button type="button" class="btn botao btn-lg btn-block ">Agendamento-CTPS</button></a>
  </div>
  <div class="form-group col-md-4 col-xs-4" >
  <a href="http://www.pf.gov.br/servicos-pf/antecedentes-criminais" target="_blank"><button type="button" class="btn botao btn-lg btn-block ">Antecedentes Criminais Federal</button></a>
 </div>
</div>

<div class="form-row">
  <div class="form-group col-md-4 col-xs-4">
    <a href="https://antecedentes.policiacivil.pa.gov.br/" target="_blank"><button type="button" class="btn botao btn-lg btn-block">Antecedentes Criminais Estadual</button></a>
  </div>
  <div class="form-group col-md-4 col-xs-4">
    <a href="https://consultas.tjpa.jus.br/certidao/pages/pesquisaGeralCentralCertidao.action" target="_blank"><button type="button" class="btn botao btn-lg btn-block ">Antecedentes Criminais-TJ/PA</button></a>
  </div>
  <div class="form-group col-md-4 ">
    <a href="https://portaldocidadao.saude.gov.br/portalcidadao/areaCadastro.htm" target="_blank"><button type="button" class="btn botao btn-lg btn-block">Cartão SUS</button></a>
  </div>
</div>

  <div class="form-row"> 
    <div class="form-group col-md-4 col-xs-4">
      <a href="http://portal.trf1.jus.br/Servicos/Certidao/" target="_blank"><button type="button" class="btn botao btn-lg btn-block">Certidões Negativas-TRF-1</button></a>
    </div>
    <div class="form-group col-md-4 col-xs-4">
      <a href="http://www.celpa.com.br/home" target="_blank"><button type="button" class="btn botao btn-lg btn-block ">Celpa</button></a>
    </div>
    <div class="form-group col-md-4 ">
      <a href="http://www.detran.pa.gov.br/renach/renach-web/servicos/boletoSegundaViaCNH/indexBoletoSegundaViaCNH.jsf" target="_blank"><button type="button" class="btn botao btn-lg btn-block ">CNH-2ªVia</button></a>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4 ">
      <a href="http://www.cosanpa.pa.gov.br/" target="_blank"><button type="button" class="btn botao btn-lg btn-block ">Cosanpa</button></a>
    </div>
    <div class="form-group form-group col-md-4 ">
      <a href="http://idg.receita.fazenda.gov.br/orientacao/tributaria/cadastros/cadastro-de-pessoas-fisicas-cpf" target="_blank"><button type="button" class="btn botao btn-lg btn-block">CPF</button></a>
    </div>
    <div class="form-group form-group col-md-4">
      <a href="http://www.caixa.gov.br/beneficios-trabalhador/fgts/Paginas/default.aspx" target="_blank"><button type="button" class="btn botao btn-lg btn-block ">FGTS</button></a>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4 col-xs-4">
      <a href="http://www.portaldoempreendedor.gov.br/" target="_blank"><button type="button" class="btn botao btn-lg btn-block">MEI</button></a>
    </div>
    <div class="form-group form-group col-md-4">
      <a href="https://www.sine.com.br/vagas-empregos-em-ananindeua-pa" target="_blank"><button type="button" class="btn botao btn-lg btn-block ">SINE</button></a>
    </div>
  </div>
@endsection
