<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script> function Mudarestado(el) {
  var display = document.getElementById(el).style.display;
  
  if (display == "none")
    document.getElementById(el).style.display = 'block';

} 
</script>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>Saude</title>

  <!-- Custom fonts for this theme -->
  <link href="user/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="user/css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav" +                                                                                                                                                                                                                                                                                                                                                                                                                                                ---------------------------------------------------------\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\>
    <div class="container">
        <img class="rounded float-left" src="user/img/logo-rede.png" alt="">
   
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
          <h6><small><a class="nav-link py-0 px-0 px-lg-2 rounded js-scroll-trigger" href="{{ route('welcome')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a></small></h6>
            
        </ul>

      </div>
   
    </div>
  </nav>
 <br><br><br><br><br><br/>

  <!-- Masthead -->
  <header>
      
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
 
  </header>

<div style="width:800px; margin:0 auto;">
<br><br>
<h3>Listagem do Directório</h3>
<br>
	<form action="/search" method="POST" role="search" >
			{{ csrf_field() }}
    <input type="hidden" name="dosrch" "1" />
    <input type="hidden" name="q"  />

        <input type="hidden" name="wpbdp_view" "search" />
  
    <!--This is a comment. Comments are not displayed in the browser
    <div class="wpbdp-search-filter select wpbdp-form-field wpbdp-form-field-id-2 wpbdp-form-field-type-select wpbdp-form-field-label-especialidade wpbdp-form-field-association-category wpbdp-form-field-validate-required wpbdp-form-field-in-search" ><div class="wpbdp-search-field-label"><label for="wpbdp-field-2">Especialidade</label></div><div class="field inner">
	<select  name='especialidade' >
	<option '-1'>&#8212; Choose One &#8212;</option>
	<option class="level-0" >Aconselhamento a Pais</option>
	<option class="level-0" >Aconselhamento Genético</option>
	<option class="level-0" >Actividade de Vida Diária</option>
	<option class="level-0" >Acufenometria</option>
	<option class="level-0" >Acunpunctura</option>
	<option class="level-0" >Acupunctura Estética</option>
	<option class="level-0" >Acupuntura</option>
	<option class="level-0" >Adaptação de lentes de contacto</option>
	<option class="level-0" >Adaptação de Próteses Oculares</option>
	<option class="level-0" >Adaptometria</option>
	<option class="level-0" >Administração de Fármacos</option>
	<option class="level-0" >Administração de Vacinas</option>
	<option class="level-0" >Adulticia, Anciania, Psicossomática, Estados Terminais</option>
	<option class="level-0" >Aerosol</option>
	<option class="level-0" >Aeróssois Ultrasónicos</option>
	<option class="level-0" >Alergologia</option>
	<option class="level-0" >Algaliação</option>
	<option class="level-0" >Aluguer do Aparelho de Anestesia</option>
	<option class="level-0" >Aluguer Domiciliário de Material</option>
	<option class="level-0" >Aluguer Domiciliário de Material Enfermagem</option>
	<option class="level-0" >Amniocentese</option>
	<option class="level-0" >Análise Biopsia por Tubo</option>
	<option class="level-0" >Analise de Variabilidade RR</option>
	<option class="level-0">Análise do Paciente em Marcha e Sedestação</option>
	<option class="level-0" >Análises Clínicas</option>
	<option class="level-0" >Análises Clínicas e Exames Complementares Diagnóstico</option>
	<option class="level-0" >Anatomia Patológica</option>
	<option class="level-0">Andrologia</option>
	<option class="level-0" >Anestesia actos de Gastroenterologia</option>
	<option class="level-0" >Anestesia para Colonoscopia</option>
	<option class="level-0" >Anestesia para Endoscopia</option>
	<option class="level-0" >Anestesiologia</option>
	<option class="level-0" >Angiodinografia</option>
	<option class="level-0" >Angiografia</option>
	<option class="level-0" >Angiografia Scan Laser Oftalmológico</option>
	<option class="level-0" >Angiologia</option>
	<option class="level-0" >Angioscopia Fluoresceínica</option>
	<option class="level-0" >Ano de Vigilância de Saúde de Crianças</option>
	<option class="level-0" >Anomaloscopia com Nagel</option>
	<option class="level-0" >Anuscopia</option>
	<option class="level-0" >Aplicação de Aparelhos Gessados ou Ortopédicos</option>
	<option class="level-0">Aplicação de Flúor com Moldeiras</option>
	<option class="level-0" >Aplicação de Selantes por dente</option>
	<option class="level-0" >Aplicação de Selantes por quadrante</option>
	<option class="level-0" >Apoio Domiciliário</option>
	<option class="level-0" >Apoio Pedagógico</option>
	<option class="level-0" >Aquatox</option>
	<option class="level-0" >Armações e lentes</option>
	<option class="level-0" >Aspiração de secreções</option>
	<option class="level-0" >Atendimento no Luto</option>
	<option class="level-0" >Audiograma</option>
	<option class="level-0" >Audiograma + Timpanograma</option>
	<option class="level-0" >Audiograma + Timpanograma + reflexos</option>
	<option class="level-0" >Audiograma Beckesy</option>
	<option class="level-0" >Audiograma Infantil</option>
	<option class="level-0" >Audiograma Tonal</option>
	<option class="level-0" ">Audiograma Tonal Simples</option>
	<option class="level-0" >Audiograma Vocal</option>
	<option class="level-0" >Audiologia</option>
	<option class="level-0" >Audiometria</option>
	<option class="level-0" >Aulas de Relaxamento e Bem Estar</option>
	<option class="level-0" >Av. da visão binocular de perto e longe com testes subjetivos de fixação</option>
	<option class="level-0" >Av. de campos visuais, exame limitado (estímulos simples/equivalentes)</option>
	<option class="level-0" >Avaliação AV. Visual por técnicas diferenciadas</option>
	<option class="level-0" ">Avaliação da Glicémia</option>
	<option class="level-0" >Avaliação da Linguagem</option>
	<option class="level-0" ">Avaliação da TA</option>
	<option class="level-0" ">Avaliação de competências pré-escolares</option>
	<option class="level-0" >Avaliação de Dano Corporal</option>
	<option class="level-0" >Avaliação do Desenvolvimento e Orientação Escolar</option>
	<option class="level-0" >Avaliação dos Campos Visuais, Exame Extenso</option>
	<option class="level-0" >Avaliação dos Campos Visuais, Exame Intermédio</option>
	<option class="level-0" >Avaliação Neuropsicológica</option>
	<option class="level-0" >Avaliação Psicológica</option>
	<option class="level-0">Avaliação Psicológica condutores profissionais</option>
	<option class="level-0" >Avaliação sensoriomotora &#8211; sinoptofaro</option>
	<option class="level-0" >Banda Gástrica Não Invasiva</option>
	<option class="level-0" >Bateria de Testes Psicológicos, com relatório</option>
	<option class="level-0" >Beleza e bem estar</option>
	<option class="level-0" >Bio-Oss</option>
	<option class="level-0" >Biometria Oftalmológica</option>
	<option class="level-0" >Biomicroscopia com lente de Goldman</option>
	<option class="level-0" >Biomicroscopia especular</option>
	<option class="level-0" >Biópsia á Próstata</option>
	<option class="level-0" >Biópsia das Vilosidades Coriónicas</option>
	<option class="level-0" >Biópsia Endoscopica</option>
	<option class="level-0" >Biopsia Mamária</option>
	<option class="level-0" >Biópsia Transendoscópicas</option>
	<option class="level-0" >Biópsia Zona Transf. B-E-Z.T.</option>
	<option class="level-0" >Biopsias &#8211; Várias</option>
	<option class="level-0" >Bloco Operatório</option>
	<option class="level-0" >Branqueamento</option>
	<option class="level-0" >Branqueamento Laser</option>
	<option class="level-0" >Cabeleireiro</option>
	<option class="level-0" >Calibração e Dilatação da Uretra</option>
	<option class="level-0" >Calor Húmido</option>
	<option class="level-0" >Campos Visuais</option>
	<option class="level-0" >Candle Massage</option>
	<option class="level-0" >Cápsula Endoscopica</option>
	<option class="level-0" >Cardiologia</option>
	<option class="level-0" >Cardiologia Pediátrica</option>
	<option class="level-0" >Cardiovascular</option>
	<option class="level-0" >Cateterismos &#8211; Exame Complementar de Cardiologia</option>
	<option class="level-0" >Cauterização</option>
	<option class="level-0" >Cavernosometria</option>
	<option class="level-0" >Cavernosometria dinâmica</option>
	<option class="level-0" >Cavitação + Pressoterapia</option>
	<option class="level-0" >Cavitação / Radiofrequência</option>
	<option class="level-0" >Cefalometria</option>
	<option class="level-0" >Chair Massage</option>
	<option class="level-0" >Check-up</option>
	<option class="level-0" >Cinesioterapia</option>
	<option class="level-0" >Cinesiterapia Correctiva Postural</option>
	<option class="level-0" >Cinesiterapia Pré e Pós Parto</option>
	<option class="level-0" >Cinesiterapia Respiratória</option>
	<option class="level-0" >Cinesiterapia Vertebral</option>
	<option class="level-0" >Cinevideoangiografia</option>
	<option class="level-0" >Cirurgia</option>
	<option class="level-0" >Cirurgia a unha encravada</option>
	<option class="level-0" >Cirurgia Ambulatória</option>
	<option class="level-0" >Cirurgia Cardíaca e Torácica</option>
	<option class="level-0" >Cirurgia Geral</option>
	<option class="level-0" >Cirurgia Geral Digestiva</option>
	<option class="level-0" >Cirurgia Maxilo-facial</option>
	<option class="level-0" >Cirurgia oral</option>
	<option class="level-0" >Cirurgia para colocação de um implante</option>
	<option class="level-0" >Cirurgia Pediátrica</option>
	<option class="level-0" >Cirurgia pelo Método de Mohs</option>
	<option class="level-0" >Cirurgia Plástica</option>
	<option class="level-0" >Cirurgia Plástica e Reconstrutiva</option>
	<option class="level-0" >Cirurgia vascular</option>
	<option class="level-0" >Cistografia (água ou gás)</option>
	<option class="level-0" >Cistoscopias</option>
	<option class="level-0" >Citologia da tiróide por controle ecográfico</option>
	<option class="level-0" >Citologia Ginecológica</option>
	<option class="level-0" >Classes</option>
	<option class="level-0" >Clinica Geral</option>
	<option class="level-0" >Colheita Material para Biopsia Endoscopica</option>
	<option class="level-0" >Colocação D.I.U</option>
	<option class="level-0" >Colocação Implante</option>
	<option class="level-0" >Colocação PEG</option>
	<option class="level-0" >Colonoscopia</option>
	<option class="level-0" >Colpocitologia Lamina</option>
	<option class="level-0" >Colpocitologia Líquida</option>
	<option class="level-0" >Colposcopia</option>
	<option class="level-0" >Confecção de Ligadura Funcional</option>
	<option class="level-0" >Conferência Médica Interdisciplinar ou Inter-Serviços 20</option>
	<option class="level-0" >Conização com Ansa Diatérmica</option>
	<option class="level-0" >Conização Lazer CO2</option>
	<option class="level-0" >Consulta C/ Biopsia</option>
	<option class="level-0" >Consulta C/ NST</option>
	<option class="level-0" >Consulta com oftalmoscopia indirecta</option>
	<option class="level-0" >Consulta de aparelho fixo</option>
	<option class="level-0" >Consulta de Avaliação Final em MFR</option>
	<option class="level-0" >Consulta de Controle</option>
	<option class="level-0" >Consulta de Desabituação Tabágica</option>
	<option class="level-0" >Consulta de Desenvolvimento Infantil</option>
	<option class="level-0" >Consulta de Hipertensão</option>
	<option class="level-0" >Consulta de Reabilitação Auditiva</option>
	<option class="level-0" >Consulta de Reavaliação</option>
	<option class="level-0" >Consulta de Saúde Mental Integrada</option>
	<option class="level-0" >Consulta de Urgência</option>
	<option class="level-0" >Consulta do Sono</option>
	<option class="level-0" >Consulta do Viajante</option>
	<option class="level-0" >Consulta Médico Assistente</option>
	<option class="level-0" >Consulta não Programada</option>
	<option class="level-0" >Consulta para apresentação e discussão do plano de tratamento</option>
	<option class="level-0" >Consulta Pé de Diabético</option>
	<option class="level-0" >Consulta Pré Natal Após 34 Semanas</option>
	<option class="level-0" >Consultas de medicina dentária</option>
	<option class="level-0" >Consultas para Exames, Relatórios ou Atestados</option>
	<option class="level-0" >Controle de Peso</option>
	<option class="level-0" "936">Controlo lentes contacto</option>
	<option class="level-0" >Coroa Cerâmica Pura</option>
	<option class="level-0" >Coroa metalo- cerâmica</option>
	<option class="level-0" >Corrente Contínua</option>
	<option class="level-0" >Correntes Alta Frequência</option>
	<option class="level-0" >Correntes Baixa Frequência</option>
	<option class="level-0" >Correntes Lontofereses</option>
	<option class="level-0" >Correntes Média Frequência</option>
	<option class="level-0" >Crescimento</option>
	<option class="level-0" >Criocirurgia</option>
	<option class="level-0" >Criocoagulação</option>
	<option class="level-0" >Crioterapia</option>
	<option class="level-0" >Crioterapia com Azoto Liquido</option>
	<option class="level-0" >Crioterapia com azoto liquido de lesões malignas</option>
	<option class="level-0" >Crioterapia com neve carbónica</option>
	<option class="level-0" >Criterapia com azoto liquido de lesões benignas</option>
	<option class="level-0" >Cromoscopia</option>
	<option class="level-0" >Cuidados com o Bebé</option>
	<option class="level-0" >Cuidados de Higiene</option>
	<option class="level-0" >Curetagem de verrugas</option>
	<option class="level-0" >Curso de preparação para o Parto no domícilio</option>
	<option class="level-0" >Curso de Preparação para Parto</option>
	<option class="level-0" >Curso Preparação Pós-Parto</option>
	<option class="level-0" >Curva Tonométrica de 24 h</option>
	<option class="level-0" >Defecação</option>
	<option class="level-0" >Densitometria</option>
	<option class="level-0" >Dentisteria &#8211; Restaurações em Amálgama</option>
	<option class="level-0" >Dentisteria &#8211; Restaurações em Cimento de Ionómetro de Vidro</option>
	<option class="level-0" >Dentisteria &#8211; Restaurações em Óxido de Zinco</option>
	<option class="level-0" >Dentisteria &#8211; Restaurações em Resina</option>
	<option class="level-0" >Dentisteria &#8211; Vários Tratamentos</option>
	<option class="level-0" >Dentisteria e Estética Dentária</option>
	<option class="level-0" >Dentisteria Operatória</option>
	<option class="level-0" >Dentisteria- Restaurações em Compósito</option>
	<option class="level-0" >Depilação a Laser</option>
	<option class="level-0" >Depilação a Laser Homem</option>
	<option class="level-0" >Depilação Luz Pulsada</option>
	<option class="level-0" >Dermato &#8211; Funcional</option>
	<option class="level-0" >Dermato-venereologia</option>
	<option class="level-0" >Dermatologia</option>
	<option class="level-0" >Dermatoscopia Digital Computorizada</option>
	<option class="level-0" >Dermoabrasão Química da Face</option>
	<option class="level-0" >Dermoestetica</option>
	<option class="level-0" >Dermossução</option>
	<option class="level-0" >Destartarização</option>
	<option class="level-0" >Diabetologia</option>
	<option class="level-0" >Diagnóstico</option>
	<option class="level-0" >Diagnóstico pela Luz de Wood</option>
	<option class="level-0" >Diatermia</option>
	<option class="level-0" >Difusão</option>
	<option class="level-0" >Difusão pelo CO</option>
	<option class="level-0" >Dilatação e Curetagem</option>
	<option class="level-0" >Dilatação Esofágica &#8211; Por Endoscopia</option>
	<option class="level-0" >Doppler</option>
	<option class="level-0" >Doppler Cardíaco</option>
	<option class="level-0" >Doppler Cardíaco Pediátrico</option>
	<option class="level-0" >Doppler Peniano</option>
	<option class="level-0" >Drenagem Linfática : Método de Leduc</option>
	<option class="level-0" >Drenagem Linfática Manual</option>
	<option class="level-0" >ECG com Prova de Esforço</option>
	<option class="level-0" >ECG com Prova de Esforço Pediátrico Tapete 1</option>
	<option class="level-0" >ECG com Prova de Esforço Pediátrico Tapete 2</option>
	<option class="level-0" >ECG com Prova de Esforço Tapete 1</option>
	<option class="level-0" >ECG com Prova de Esforço Tapete 2</option>
	<option class="level-0" "0">ECG em repouso</option>
	<option class="level-0" "2">Eco Doppler ( Duplex Scan ) Carótideo ou Oftalmológico</option>
	<option class="level-0" "3">Eco Doppler ( Eco mod.M + bidimensional+doppler)</option>
	<option class="level-0" "1">Eco Doppler &#8211; Vários</option>
	<option class="level-0" "4">Eco Doppler Arterial + Venoso Membros Inferiores ( 2 Membros )</option>
	<option class="level-0" "5">Eco Doppler Arterial + Venoso Membros Superiores ( 2 Membros )</option>
	<option class="level-0" "6">Eco Doppler Arterial Membros Inferiores ( 2 Membros )</option>
	<option class="level-0" "7">Eco Doppler Arterial Membros Superiores ( 2 Membros )</option>
	<option class="level-0" "8">Eco Doppler Carotídeo e Vertebral</option>
	<option class="level-0" "9">Eco Doppler e Anglodinografias: Cérebro &#8211; vascular(carotídeo e vertebral)</option>
	<option class="level-0" >Eco Doppler Escrotal</option>
	<option class="level-0" "11">Eco Doppler Ginecológico</option>
	<option class="level-0" "12">Eco Doppler Outra Área Anatómica</option>
	<option class="level-0" "13">Eco Doppler Renal</option>
	<option class="level-0" "14">Eco Doppler Venoso Membros Inferiores ( 2 Membros )</option>
	<option class="level-0" "15">Eco Doppler Venoso Membros Superiores ( 2 Membros )</option>
	<option class="level-0" "16">Eco DopplerTranscraniano</option>
	<option class="level-0" "17">ECO Transesofagico</option>
	<option class="level-0" "18">Ecocardiografia</option>
	<option class="level-0" "19">Ecocardiografia de contraste</option>
	<option class="level-0" "20">Ecocardiografia Fetal</option>
	<option class="level-0" "21">Ecocardiografia Fetal Gemeos</option>
	<option class="level-0" "22">Ecocardiograma</option>
	<option class="level-0" "23">Ecocardiograma associado a Doppler</option>
	<option class="level-0" "24">Ecocardiograma associado a Doppler Pediátrico</option>
	<option class="level-0" "25">Ecocardiograma de Sobrecarga</option>
	<option class="level-0" "26">Ecocardiograma Fetal e Doppler Cardiaco Fetal</option>
	<option class="level-0" "27">Ecocardiograma MOD. M + Bidimensional</option>
	<option class="level-0" "28">ECOCG MM + 2D</option>
	<option class="level-0" "29">ECOCG MM + 2D Pediátrico</option>
	<option class="level-0" "30">ECOCG MM + 2M</option>
	<option class="level-0" "32">ECOCG MM + 2M + Doppler</option>
	<option class="level-0" "33">ECOCG MM + 2M + Doppler &#8211; Pediátrico</option>
	<option class="level-0" "31">ECOCG MM + 2M &#8211; Pediátrico</option>
	<option class="level-0" "34">Ecodoppler Colorido Peniano</option>
	<option class="level-0" "35">Ecografia / Biometria Oftalmológica</option>
	<option class="level-0" "36">Ecografia Mamária</option>
	<option class="level-0" "37">Ecografia Oftalmológica</option>
	<option class="level-0" "38">Ecografias</option>
	<option class="level-0" "39">Ecotomografias</option>
	<option class="level-0" "40">Educação Alimentar</option>
	<option class="level-0" "41">EEG com Prova de sono</option>
	<option class="level-0" "42">EEG de Rotina</option>
	<option class="level-0" "43">EEG de Vigilia e Sono Diurno</option>
	<option class="level-0" "44">EEG de Vigilia e Sono Diurno Pediátrico</option>
	<option class="level-0" "45">EEG Monotorização Prolongada de 24H</option>
	<option class="level-0" "46">Elaboração de Relatório Médico</option>
	<option class="level-0" "47">Electro Body</option>
	<option class="level-0" "57">Electro-Lipólise</option>
	<option class="level-0" "61">Electro-Musculação</option>
	<option class="level-0" "63">Electro-oculomiografia</option>
	<option class="level-0" "48">Electrocardiograma</option>
	<option class="level-0" "49">Electrocardiograma com relatório</option>
	<option class="level-0" "50">Electrocardiograma de 12 derivações Pediátrico</option>
	<option class="level-0" "51">Electrocirurgia</option>
	<option class="level-0" "52">Electrocoagulação de lesões cutâneas</option>
	<option class="level-0" "53">Electrocoagulação ou Electrólise de Pêlos</option>
	<option class="level-0" "54">Electroencefalografia</option>
	<option class="level-0" "55">Electroencefalograma</option>
	<option class="level-0" "56">Electroestimulação</option>
	<option class="level-0" "58">Electromiografia</option>
	<option class="level-0" "59">Electromiografia da Fibra Muscular do Corpo Cavernoso</option>
	<option class="level-0" "60">Electromiografia Esfincteriana</option>
	<option class="level-0" "62">Electronistagmografia ou electro-oculograma</option>
	<option class="level-0" "64">Eletrocoagulaçao ou criocogulação (EE)</option>
	<option class="level-0" "65">Emagrecimento</option>
	<option class="level-0" "66">Endocrinologia</option>
	<option class="level-0" "67">Endodontia</option>
	<option class="level-0" "68">Endondontia</option>
	<option class="level-0" "69">Endondontia &#8211; Desobturação canalar</option>
	<option class="level-0" "70">Endondontia &#8211; Obturação canalar</option>
	<option class="level-0" "71">Endondontia &#8211; Preparação químico-mecânica</option>
	<option class="level-0" "72">Endondontia &#8211; Pulpectomia</option>
	<option class="level-0" "73">Endondontia &#8211; Pulpotomia</option>
	<option class="level-0" "74">Endondontia &#8211; Vários tratamentos</option>
	<option class="level-0" "75">Endoscopia</option>
	<option class="level-0" "76">Endoscopia Digestiva Alta Colonoscopia Total</option>
	<option class="level-0" "77">Enfermagem</option>
	<option class="level-0" "78">ENG Computorizada &#8211; Video Estenografia</option>
	<option class="level-0" "79">Ensaio e adaptação de lentes de contacto</option>
	<option class="level-0" "80">Ensaio Lentes de contacto</option>
	<option class="level-0" "81">Ensinos</option>
	<option class="level-0" "82">Envolvimento Algas</option>
	<option class="level-0" "83">Envolvimento Argila</option>
	<option class="level-0" "84">Envolvimento Profilo</option>
	<option class="level-0" "85">Enxerto de cabelo</option>
	<option class="level-0" "86">EOG com relatório</option>
	<option class="level-0" "87">Epilação a Cera</option>
	<option class="level-0" "88">Epilação a Cera Homem</option>
	<option class="level-0" "89">Eq. Oculomotor / sinoptóforo</option>
	<option class="level-0" "90">ERA &#8211; Audiometria Respostas Eléctricas Evocadas</option>
	<option class="level-0" "91">ERG com relatório</option>
	<option class="level-0" "92">Escleroterapia de Varizes</option>
	<option class="level-0" "93">Esfoliações / Envolvimentos</option>
	<option class="level-0" "94">Especialidades Médicas</option>
	<option class="level-0" "95">Especialidades não Convencionais</option>
	<option class="level-0" "96">Espirometria</option>
	<option class="level-0" "97">Espirometria + Prova de Broncodilatação</option>
	<option class="level-0" "98">Espirometria + Prova de Provocação</option>
	<option class="level-0" "99">Estética</option>
	<option class="level-0" "1">Estimulação eléctrica</option>
	<option class="level-0" "11">Estimulação Transcutânea</option>
	<option class="level-0" "12">Estomatologia</option>
	<option class="level-0" "13">Estudo Auditivo Completo</option>
	<option class="level-0" "14">Estudo da Função Vestibular</option>
	<option class="level-0" "15">Estudo desenvolvimento visual</option>
	<option class="level-0" "16">Estudo despistagem</option>
	<option class="level-0" "17">Estudo do Nervo Facial</option>
	<option class="level-0" "18">Estudo do Sono</option>
	<option class="level-0" "19">Estudo Doppler Cardíaco Fetal</option>
	<option class="level-0" "11">Estudo dos potenciais occipitais evocados e relatório</option>
	<option class="level-0" "1">Estudo elaborado da visão cromática</option>
	<option class="level-0" "2">Estudo Moto-Sensorial Efetuado ao Sinoptóforo</option>
	<option class="level-0" "3">Estudo Timpanometrico</option>
	<option class="level-0" "4">Estudo Zumbido ou Acufeno</option>
	<option class="level-0" "5">Exame Biomecânico Computorizado/ ( Exame em Consulta)</option>
	<option class="level-0" "6">Exame de Composição Corporal por Bioimpedância</option>
	<option class="level-0" "7">Exame de Rastreio Visual</option>
	<option class="level-0" "8">Exame em Situação Especial</option>
	<option class="level-0" "9">Exame Histológico &#8211; Biópsia</option>
	<option class="level-0" "1">Exame Oftalmológico</option>
	<option class="level-0" "1">Exame Oftalmológico para fins médico legais com Relatório 20</option>
	<option class="level-0" "1">Exame optométrico de controlo</option>
	<option class="level-0" "1">Exame ou Avaliação Neuropsicológica, com relatório</option>
	<option class="level-0" "1">Exame ou Avaliação Psicológica, com relatório</option>
	<option class="level-0" "1">Exame psicológico a condutores</option>
	<option class="level-0" "1">Exame Urodinâmico do Aparelho Urinário alto-estudo de Perfusão Renal (excluí Nefrostomia)</option>
	<option class="level-0" "1">Exame Urodinâmico do Aparelho Urinário Baixo</option>
	<option class="level-0" "1">Exame Vestibular Sumário ( Provas Térmicas)</option>
	<option class="level-0" "1">Exame visual completo</option>
	<option class="level-0" "1130">Exames</option>
	<option class="level-0" "1131">Exames Auxiliares de Oftalmologia</option>
	<option class="level-0" "1132">Exames Complementares de Diagnóstico / Tratamentos</option>
	<option class="level-0" "1133">Exames Desportivos</option>
	<option class="level-0" "1134">Excisão de Lesões Benignas de Região Frontal da Face e Mão</option>
	<option class="level-0" "1135">Excisão Pequenos Tumores Benignos ou Quistos Subcutâneos Excepto Região Frontal e Face</option>
	<option class="level-0" "1136">Excisões</option>
	<option class="level-0" "1137">Exerese de Glândula de Bartolin</option>
	<option class="level-0" "1138">Exodontia &#8211; Extração</option>
	<option class="level-0" "1139">Extração do DIU</option>
	<option class="level-0" "1140">Extracção de Chalázio</option>
	<option class="level-0" "1141">Extracção de Pterígio</option>
	<option class="level-0" "1142">Facoemulsificação com coloração de LIO</option>
	<option class="level-0" "1634">Farmácia</option>
	<option class="level-0" "1143">FDP / Harrington Flocks / Amster</option>
	<option class="level-0" "1144">Feridas</option>
	<option class="level-0" "1145">Fibrossigmoidoscopia</option>
	<option class="level-0" "1146">Fisiatria</option>
	<option class="level-0" "1147">Fisioterapia</option>
	<option class="level-0" "1148">Fisioterapia Respiratória</option>
	<option class="level-0" "1149">Flebografias</option>
	<option class="level-0" "1150">Flebologia</option>
	<option class="level-0" "1151">Fluofotometria do segmento anterior</option>
	<option class="level-0" "1">Fluofotometria do segmento posterior</option>
	<option class="level-0" "1153">Fluxometria</option>
	<option class="level-0" "1154">Foot Massage</option>
	<option class="level-0" "1155">Formação em Métodos e Hábitos de Estudo ( Crianças e Jovens)</option>
	<option class="level-0" "1156">Fortalecimento Muscular</option>
	<option class="level-0" "1157">Fortalecimento Muscular / Mobilização Articular</option>
	<option class="level-0" "1158">Fotodepilação</option>
	<option class="level-0" "1159">Fotografia de Aspetos Oculares Externos</option>
	<option class="level-0" "0">Fotografia do segmento anterior com angiografia fluoresceínica</option>
	<option class="level-0" "1">Fotografia Especial do Segmento anterior, com ou sem microscopia ocular</option>
	<option class="level-0" "2">Fulguração e Cauterização nos Genitais Externos</option>
	<option class="level-0" "3">Galactografia</option>
	<option class="level-0" "4">Gastroenterologia</option>
	<option class="level-0" "5">Gengivoplastia</option>
	<option class="level-0" "6">Geriatria</option>
	<option class="level-0" "7">Gessoterapia</option>
	<option class="level-0" "8">Ginásios</option>
	<option class="level-0" "9">Ginástica &#8211; Mensalidade 2x/semana</option>
	<option class="level-0" "0">Ginástica &#8211; Mensalidade 3x/semana</option>
	<option class="level-0" "1">Ginástica Correctiva Post.</option>
	<option class="level-0" "2">Ginástica Respiratória</option>
	<option class="level-0" "3">Ginástica Vertebral</option>
	<option class="level-0" "4">Ginecologia</option>
	<option class="level-0" "5">Ginecologia e Obstetrícia</option>
	<option class="level-0" "6">Gonioscopia / Goldman</option>
	<option class="level-0" "7">Gráfico Hess</option>
	<option class="level-0" "8">Gráfico Sinoptométrico</option>
	<option class="level-0" "9">Head &amp; Shoulder</option>
	<option class="level-0" "0">Hematologia Clínica</option>
	<option class="level-0" "1">Hidrocinesioterapia</option>
	<option class="level-0" "2">Hidromassagem</option>
	<option class="level-0" "3">Higiene Oral</option>
	<option class="level-0" "4">Hipnoterapia</option>
	<option class="level-0" "5">Hipnoterapia Clinica</option>
	<option class="level-0" "6">Histeroscopia</option>
	<option class="level-0" "7">Histerossalpingografia por Ecografia</option>
	<option class="level-0" "8">Histerossonografia</option>
	<option class="level-0" "9">Holter</option>
	<option class="level-0" "0">Holter 24h</option>
	<option class="level-0" "1">Holter 24h Pediátrico</option>
	<option class="level-0" "2">Holter 48h</option>
	<option class="level-0" "3">Homeopatia</option>
	<option class="level-0" "4">Ileoscopia</option>
	<option class="level-0" "5">Imagiologia</option>
	<option class="level-0" "6">Imobilizações</option>
	<option class="level-0" "7">Impedância</option>
	<option class="level-0" "8">Implantologia Dentária</option>
	<option class="level-0" "9">Imunoalergologia</option>
	<option class="level-0" "">Imunoalergologia Pediátrica</option>
	<option class="level-0" "1">Infiltração</option>
	<option class="level-0" "2">Infiltrações peri e intra-articulares de corticoides</option>
	<option class="level-0" "3">Injecção ( Triamcinolona )</option>
	<option class="level-0" "4">Injecção Avastin</option>
	<option class="level-0" "5">Injecção Endoscópica de Farmacos</option>
	<option class="level-0" "6">Injectáveis</option>
	<option class="level-0" "7">Instilação Intravesical</option>
	<option class="level-0" "8">Instilação Nasal</option>
	<option class="level-0" "9">Instilação Ocular</option>
	<option class="level-0" "12">Integração Sensorial</option>
	<option class="level-0" "1">Internamento</option>
	<option class="level-0" "2">Internamento diária em quarto privado</option>
	<option class="level-0" "3">Introdução / Extração de Implanon</option>
	<option class="level-0" "4">Introdução / Remoção de Implante sub- cutâneo</option>
	<option class="level-0" "5">Introdução de Pessário</option>
	<option class="level-0" "6">Iontoforese (Ionização)</option>
	<option class="level-0" "7">Iridologia</option>
	<option class="level-0" "8">Laringoscopia</option>
	<option class="level-0" "9">Lasek</option>
	<option class="level-0" "0">Laser</option>
	<option class="level-0" "1">Laser 400</option>
	<option class="level-0" "2">Laser 550</option>
	<option class="level-0" "3">Laser 590</option>
	<option class="level-0" "4">Laser Argon azul verde</option>
	<option class="level-0" "5">Laser CO2</option>
	<option class="level-0" "6">Laser da Vulva/ Vagina/ Colo</option>
	<option class="level-0" "7">Laser Erbio Zona</option>
	<option class="level-0" "8">Laser Iris e Ângulo / Proc. Ciliares</option>
	<option class="level-0" "9">Laser Monocromático</option>
	<option class="level-0" "0">Laser Pulsado de Contraste</option>
	<option class="level-0" "1">Laser Yag</option>
	<option class="level-0" "2">Laserterapia cirúrgica por laser de CO2 de lesões cutâneas</option>
	<option class="level-0" "3">Laserterapia de Raios Infravermelhos</option>
	<option class="level-0" "4">Laserterapia de Varizes</option>
	<option class="level-0" "5">Lasik</option>
	<option class="level-0" "6">Lavagem Auricular</option>
	<option class="level-0" "7">Lentes de Contacto</option>
	<option class="level-0" "8">Lentes de contacto convencionais</option>
	<option class="level-0" "9">Lentes de contacto descartáveis</option>
	<option class="level-0" "0">Life Coaching c/ PNL</option>
	<option class="level-0" "1">Limiar de reflexos</option>
	<option class="level-0" "2">Limpeza e regeneração de lentes de contacto</option>
	<option class="level-0" "3">Limpeza Pele</option>
	<option class="level-0" "4">Lipo Laser</option>
	<option class="level-0" "5">Lipoaspiração não Invasiva</option>
	<option class="level-0" "6">Localização radiológica de corpo estranho da região orbitária</option>
	<option class="level-0" "7">Logopedia</option>
	<option class="level-0" "8">Ludoterapia</option>
	<option class="level-0" "9">M.A.P.A.</option>
	<option class="level-0" "0">M.A.P.A. Pediátrico</option>
	<option class="level-0" "1">Magnetoterapia</option>
	<option class="level-0" "2">Mamografia</option>
	<option class="level-0" "3">Mamografia + Ecografia Mamária</option>
	<option class="level-0" "4">Manicure</option>
	<option class="level-0" "5">Manta de Sudação</option>
	<option class="level-0" "6">Maquilhagem</option>
	<option class="level-0" "7">Marsupialização da Glândula de Bartolin</option>
	<option class="level-0" "8">Massagem Ayurvédica</option>
	<option class="level-0" "9">Massagem com Bambus</option>
	<option class="level-0" "0">Massagem das Pedras Vulcânicas</option>
	<option class="level-0" "1">Massagem das Pindas</option>
	<option class="level-0" "2">Massagem das Velas</option>
	<option class="level-0" "3">Massagem de Som com Taças Tibetanas</option>
	<option class="level-0" "4">Massagem Desportiva</option>
	<option class="level-0" "5">Massagem Estética com Ventosa</option>
	<option class="level-0" "6">Massagem Geotermal</option>
	<option class="level-0" "7">Massagem Hot Stone</option>
	<option class="level-0" "8">Massagem Local</option>
	<option class="level-0" "9">Massagem Manual Local</option>
	<option class="level-0" "0">Massagem Manual Várias Regiões</option>
	<option class="level-0" "1">Massagem para Bebes</option>
	<option class="level-0" "2">Massagem Relaxamento</option>
	<option class="level-0" "3">Massagem Relaxamento Coluna</option>
	<option class="level-0" "4">Massagem Terapêutica e Relaxamento</option>
	<option class="level-0" "5">Massagens</option>
	<option class="level-0" "6">Massagens de Relaxamento Terapêutico e Desportiva</option>
	<option class="level-0" "7">Material Geriático, Médico e Ortopédico</option>
	<option class="level-0" "8">Material Óptico</option>
	<option class="level-0" "9">Medicamentos</option>
	<option class="level-0" "0">Medição de Temperatura</option>
	<option class="level-0" "">Medicina</option>
	<option class="level-0" "1">Medicina Ayurvedica</option>
	<option class="level-0" "2">Medicina de Reprodução Assistida</option>
	<option class="level-0" "3">Medicina Dentária</option>
	<option class="level-0" "4">Medicina Dentária Preventiva</option>
	<option class="level-0" "5">Medicina Desportiva</option>
	<option class="level-0" "6">Medicina do Trabalho</option>
	<option class="level-0" "7">Medicina Estética</option>
	<option class="level-0" "8">Medicina Física e de Reabilitação ou Fisiatria</option>
	<option class="level-0" "9">Medicina Geral e Familiar</option>
	<option class="level-0" "0">Medicina Interna</option>
	<option class="level-0" "1">Medicina Interna e Nutrição</option>
	<option class="level-0" "2">Medicina Ortomolecular</option>
	<option class="level-0" "3">Medicina Quântica</option>
	<option class="level-0" "4">Medicina Tradicional Chinesa</option>
	<option class="level-0" "5">Mesoterapia</option>
	<option class="level-0" "6">microscopia especular</option>
	<option class="level-0" "7">Mobilização Articular Manual</option>
	<option class="level-0" "8">Mobilizações Activas/Resistivas</option>
	<option class="level-0" "9">Mobilizações Passivas</option>
	<option class="level-0" "1300">Monitorização da Ovulação</option>
	<option class="level-0" "1301">Monitorização Electrocardiográfica Holter</option>
	<option class="level-0" "1302">Monitorização Fetal Externa</option>
	<option class="level-0" "1303">Monotorização Fetal Externa ( CTG)</option>
	<option class="level-0" "1304">Musicoterapia</option>
	<option class="level-0" "1305">Naturopatia</option>
	<option class="level-0" "1306">Nefrologia</option>
	<option class="level-0" "1307">Neurocirurgia</option>
	<option class="level-0" "1308">Neurofisiologia</option>
	<option class="level-0" "1309">Neuroftalmologia</option>
	<option class="level-0" "13">Neurologia</option>
	<option class="level-0" "1311">Neuropsicologia</option>
	<option class="level-0" "1312">Neuropsicologia &#8211; exames neuropsicólogos</option>
	<option class="level-0" "1313">Neuropsicologia &#8211; reabilitação cognitiva</option>
	<option class="level-0" "1314">Nutrição</option>
	<option class="level-0" "1315">Nutrição e Dietética</option>
	<option class="level-0" "1316">Nutrição na Obesidade</option>
	<option class="level-0" "1317">Observação e Tratamento Sob Microscopia</option>
	<option class="level-0" "1318">Observação fundo ocular</option>
	<option class="level-0" "1319">Obstetrícia</option>
	<option class="level-0" "1320">Oclusão (ATM)</option>
	<option class="level-0" "1321">OCT</option>
	<option class="level-0" "1322">Óculos de Sol</option>
	<option class="level-0" "1323">Óculos de Sol e outro Material Óptico</option>
	<option class="level-0" "1324">Óculos graduados</option>
	<option class="level-0" "1325">Óculos graduados, Armações e Lentes</option>
	<option class="level-0" "1326">Odontopediatria</option>
	<option class="level-0" "1327">Oftalmodinamometria</option>
	<option class="level-0" "1328">Oftalmologia</option>
	<option class="level-0" "1329">Oftalmologia Pediátrica</option>
	<option class="level-0" "1330">Oftalmoscopia indireta completa</option>
	<option class="level-0" "1331">Oncologia Médica</option>
	<option class="level-0" "1332">Optometria e Contactologia</option>
	<option class="level-0" "1333">Orientação Escolar e Profissional</option>
	<option class="level-0" "1334">Orientaçao Vocacional</option>
	<option class="level-0" "1335">Orientaçao Vocacional / Profissional</option>
	<option class="level-0" "1336">Ortesiologia</option>
	<option class="level-0" "1337">Ortodontia</option>
	<option class="level-0" "1338">Ortodontia &#8211; Aparelhos Ortodônticos</option>
	<option class="level-0" "1339">Ortopantomografia</option>
	<option class="level-0" "1340">Ortopantomografia + Cefalometria</option>
	<option class="level-0" "1341">Ortopantomografia Panorâmica</option>
	<option class="level-0" "1342">Ortopedia</option>
	<option class="level-0" "1343">Ortopedia Infantil</option>
	<option class="level-0" "1344">Ortoptica</option>
	<option class="level-0" "1345">Ortoteses silicone</option>
	<option class="level-0" "1346">Osteo-densitometria</option>
	<option class="level-0" "1352">Osteodensitometria -Qualquer Osso</option>
	<option class="level-0" "1347">Osteodensitometria Coluna Frente ou Perfil</option>
	<option class="level-0" "1348">Osteodensitometria do Colo do Femur</option>
	<option class="level-0" "1349">Osteodensitometria do Colo do Femur mais Coluna</option>
	<option class="level-0" "1350">Osteodensitometria do Punho</option>
	<option class="level-0" "1351">Osteodensitometria Parcial</option>
	<option class="level-0" "1353">Osteodensitometria Total</option>
	<option class="level-0" "1354">Osteopatia</option>
	<option class="level-0" "1355">Otoemissões</option>
	<option class="level-0" "1356">Otorrinolaringologia</option>
	<option class="level-0" "1357">Outros Produtos</option>
	<option class="level-0" "1358">Outros Serviços de Oftalmologia</option>
	<option class="level-0" "1359">Outros Tratamentos</option>
	<option class="level-0" "1360">Outros Tratamentos Dentários</option>
	<option class="level-0" "1361">Oximetria de Pulso</option>
	<option class="level-0" "1362">Oximetria Transcutânea</option>
	<option class="level-0" "1363">P.E.C</option>
	<option class="level-0" "1364">P.U.V.A banho prévio com psolareno</option>
	<option class="level-0" "1365">P.U.V.A Terapêutica Oral ou Tópica com psolareno</option>
	<option class="level-0" "1366">Pack- Anti-Estrias</option>
	<option class="level-0" "1367">Pack- Anti-Rugas</option>
	<option class="level-0" "1368">Pack- Avançado</option>
	<option class="level-0" "1369">Pack- Básico</option>
	<option class="level-0" "1370">Pack- Intermédio</option>
	<option class="level-0" "1371">Pack- Reafirmação Mamária</option>
	<option class="level-0" "1372">Pack- Reafirmação Mamária + Anti-Estrias</option>
	<option class="level-0" "1373">Pansigmoidoscopia</option>
	<option class="level-0" "1374">Paquimetria</option>
	<option class="level-0" "1375">Parafango</option>
	<option class="level-0" "1376">Parafina</option>
	<option class="level-0" "1377">Patologia Clínica</option>
	<option class="level-0" "1378">patologia Vascular</option>
	<option class="level-0" "1379">Pediatria</option>
	<option class="level-0" "1380">Pédicure</option>
	<option class="level-0" "1381">Pedopsicologia</option>
	<option class="level-0" "1382">Pedopsiquiatria</option>
	<option class="level-0" "1383">Peniscopia</option>
	<option class="level-0" "1384">Pensos</option>
	<option class="level-0" "1385">Pensos Cirúrgicos</option>
	<option class="level-0" "1386">Pequenas Cirurgias</option>
	<option class="level-0" "1387">Perfil Uretral</option>
	<option class="level-0" "1388">Perimetria Computorizada</option>
	<option class="level-0" "1389">Perimetria Estática Computorizada</option>
	<option class="level-0" "1390">Periodontologia</option>
	<option class="level-0" "1391">Pesquisa de Reflexos Acústicos</option>
	<option class="level-0" "1392">Pesquisa de Reflexos Acústicos a partir dos  anos ( inclui adultos )</option>
	<option class="level-0" "1393">Pesquisa de Reflexos Estapédicos</option>
	<option class="level-0" "1394">Pesquisa de Reflexos não Acústicos</option>
	<option class="level-0" "1395">Pesquisa do DECAY do Refelexo Bilateral</option>
	<option class="level-0" "1396">PEV com relatório</option>
	<option class="level-0" "1397">Pilates</option>
	<option class="level-0" "1398">Pilatos Clínico</option>
	<option class="level-0" "1399">Pletismografia</option>
	<option class="level-0" "1400">Pletismografia + Broncodilatação</option>
	<option class="level-0" "1401">Pletismografia + Difusão</option>
	<option class="level-0" "1402">Pletismografia + Prova de Provocação</option>
	<option class="level-0" "1403">PLR &#8211; Reflexo pupilar a luz</option>
	<option class="level-0" "1404">Pneumologia</option>
	<option class="level-0" "1405">Podologia</option>
	<option class="level-0" "1406">Poligrafia de Sono Cardiorespiratória</option>
	<option class="level-0" "1407">Polipctomia cervical</option>
	<option class="level-0" "1408">Polipectomia</option>
	<option class="level-0" "1409">Polissonografia</option>
	<option class="level-0" "14">Potênciais Evocados Auditivos</option>
	<option class="level-0" "1412">Potenciais Evocados Somato-Sensitivos do Nervo Pudendo</option>
	<option class="level-0" "1411">Potênciais Evocados Somatosensitivos ( PESS)</option>
	<option class="level-0" "1413">Preparação Psicológica para o Parto</option>
	<option class="level-0" "1414">Pressões Alternas Positivas</option>
	<option class="level-0" "1415">Pressões Alternativas Intermitentes</option>
	<option class="level-0" "1416">Pressoterapia</option>
	<option class="level-0" "1417">Pressurometria Arterial ( Mapa )</option>
	<option class="level-0" "1418">PRK</option>
	<option class="level-0" "1419">Proctologia</option>
	<option class="level-0" "1420">Produtos de contactologia</option>
	<option class="level-0" "1421">Programa de Recuperação Pós-Parto</option>
	<option class="level-0" "1422">Prostodontia</option>
	<option class="level-0" "1423">Próteses Dentárias</option>
	<option class="level-0" "1424">Próteses Fixas</option>
	<option class="level-0" "1425">Próteses Removíveis</option>
	<option class="level-0" "1426">Prova de esforço</option>
	<option class="level-0" "1427">Prova de Função Tubária</option>
	<option class="level-0" "1428">Provas de Sensibilidade Cutânea</option>
	<option class="level-0" "1429">Provas de Sensibilidade Cutânea Intradermicas</option>
	<option class="level-0" "1430">Provas de Sensibilidade cutânea por Contacto</option>
	<option class="level-0" "1431">Provas Epicutâneas</option>
	<option class="level-0" "1432">Provas Funcionais Respiratórias</option>
	<option class="level-0" "1433">Psicogerontologia</option>
	<option class="level-0" "1434">Psicologia</option>
	<option class="level-0" "1435">Psicologia ( Terapia EMDR)</option>
	<option class="level-0" "1436">Psicologia à distância</option>
	<option class="level-0" "1437">Psicologia Clínica</option>
	<option class="level-0" "1438">Psicologia do Desenvolvimento</option>
	<option class="level-0" "1439">Psicologia Forense</option>
	<option class="level-0" "1440">Psicologia Idosos Domicílio</option>
	<option class="level-0" "1441">Psicologia Infantil</option>
	<option class="level-0" "1442">Psicomotricidade</option>
	<option class="level-0" "1443">Psicopedagogia</option>
	<option class="level-0" "1444">Psicoterapia</option>
	<option class="level-0" "1445">Psicoterapia a Adolescentes e Adultos</option>
	<option class="level-0" "1446">Psicoterapia Infantil</option>
	<option class="level-0" "1447">Psiquiatria</option>
	<option class="level-0" "1448">Puericultura</option>
	<option class="level-0" "1449">Punção para Citologia guiada por Ecografia</option>
	<option class="level-0" "1450">Queratometria e biometria</option>
	<option class="level-0" "1451">Queratoscopia computorizada</option>
	<option class="level-0" "1452">Queratoscopia fotográfica</option>
	<option class="level-0" "1453">Quimio cirurgia com pasta de zinco</option>
	<option class="level-0" "1454">Radiodiagnóstico</option>
	<option class="level-0" "1455">Radiofrequência Corporal + Pressoterapia</option>
	<option class="level-0" "1456">Radiofrequência Rosto</option>
	<option class="level-0" "1457">Radiologia</option>
	<option class="level-0" "1458">Radiologia dentária</option>
	<option class="level-0" "1460">Raio-X</option>
	<option class="level-0" "1459">Raios Infravermelhos</option>
	<option class="level-0" "1461">Rastreio Auditivo</option>
	<option class="level-0" "1462">Rastreio de Surdez</option>
	<option class="level-0" "1463">Rastreio do Cancro do Cólon e Reto .</option>
	<option class="level-0" "1464">Rastreio Visual</option>
	<option class="level-0" "1465">Reabilitação Neuropsicológica</option>
	<option class="level-0" "1466">Rectosigmoidoscopia</option>
	<option class="level-0" "1467">Redução Manual Parafimose</option>
	<option class="level-0" "1468">Reeducação do Equilíbrio e/ou Marcha</option>
	<option class="level-0" "1469">Reeducação Funcional</option>
	<option class="level-0" "1470">Reeducação Pavimento Pélvico</option>
	<option class="level-0" "1471">Reeducação Postura Global (RPG)</option>
	<option class="level-0" "1472">Reflexo Piscatório ( Blink Reflex)</option>
	<option class="level-0" "1473">Reflexograma de Metz</option>
	<option class="level-0" "1474">Reflexologia</option>
	<option class="level-0" "1475">Reflexologia Podal</option>
	<option class="level-0" "1476">Reflexos Ipsi e Contra Laterais</option>
	<option class="level-0" "1477">Registo de Eventos Cardíacos</option>
	<option class="level-0" "1478">Registo eletrocardiográfico</option>
	<option class="level-0" "1479">Registo Poligráfico do Sono</option>
	<option class="level-0" "1480">Reiki</option>
	<option class="level-0" "1481">Remodelação Corporal</option>
	<option class="level-0" "1482">Ressonância Magnética</option>
	<option class="level-0" "1483">Restantes Tratamentos Estéticos</option>
	<option class="level-0" "1484">Retinografia</option>
	<option class="level-0" "1485">Reumatologia</option>
	<option class="level-0" "1486">Rigiscan</option>
	<option class="level-0" "1487">Rinoscopia</option>
	<option class="level-0" "1488">Ritual Pernas Cansadas</option>
	<option class="level-0" "1489">RX Digital Periapical</option>
	<option class="level-0" "1490">RX interproximal</option>
	<option class="level-0" "1491">RX Panorâmico</option>
	<option class="level-0" "1492">RX periapapical</option>
	<option class="level-0" "1493">Saúde Materna e Infantil</option>
	<option class="level-0" "1494">Saúde Materna e Planeamento Familiar</option>
	<option class="level-0" "1495">Saúde Pública</option>
	<option class="level-0" "1496">Senologia / Patologia da Mama</option>
	<option class="level-0" "1497">Serviços de análises de águas e alimentos (BIOGERM)</option>
	<option class="level-0" "1498">Sessão de Tratamentos de Incontinência Urinária</option>
	<option class="level-0" "1499">Sexologia</option>
	<option class="level-0" "1500">Shapemaster</option>
	<option class="level-0" "1501">Shiatsu</option>
	<option class="level-0" "1502">Sinuscopia</option>
	<option class="level-0" "1503">Sistema Gastroentestinal</option>
	<option class="level-0" "1504">Sistema Urinário</option>
	<option class="level-0" "1505">Sondagem Lacrimo-Nasal</option>
	<option class="level-0" "1506">Soros</option>
	<option class="level-0" "1507">Substituição Não Cirúrgica de Sondas Cateteres ou Tubos de Drenagem</option>
	<option class="level-0" "1508">Suportes plantares</option>
	<option class="level-0" "1509">TAC</option>
	<option class="level-0" "15">Tai Chi</option>
	<option class="level-0" "1511">Técnicas Especiais de Cinesiterapia</option>
	<option class="level-0" "1512">Telerradiografia</option>
	<option class="level-0" "1513">Terapêutica Fotodinâmica</option>
	<option class="level-0" "1514">Terapêutica Intralesional</option>
	<option class="level-0" "1515">Terapêutica por Raio Laser Argon Plasma</option>
	<option class="level-0" "1516">Terapia Bioenergética</option>
	<option class="level-0" "1517">Terapia da Dor</option>
	<option class="level-0" "1518">Terapia da Fala</option>
	<option class="level-0" "1519">Terapia de Casal</option>
	<option class="level-0" "0">Terapia de Libertação Emocional -EFT</option>
	<option class="level-0" "1">Terapia Familiar</option>
	<option class="level-0" "2">Terapia Ocupacional</option>
	<option class="level-0" "3">Terapia pela Arte</option>
	<option class="level-0" "4">Termolopolise</option>
	<option class="level-0" "5">Termoterapia</option>
	<option class="level-0" "6">Teste de Criptotetania</option>
	<option class="level-0" "7">Teste de Estimulação Repetitiva ( Teste de Miastenia Gravis,Teste de decremento)</option>
	<option class="level-0" "8">Teste de Gravidez</option>
	<option class="level-0" >Teste de Hunher</option>
	<option class="level-0" >Teste de Intolerâncias Alimentares</option>
	<option class="level-0" >Teste de Latência Multipla do Sono</option>
	<option class="level-0" >Teste PGE com Papaverino ou Prostaglandino</option>
	<option class="level-0" >Testes Cutâneos e Estudo Alergológico</option>
	<option class="level-0" >Testes de Alergia</option>
	<option class="level-0" >Testes de Contacto</option>
	<option class="level-0" >Testes de Griffiths</option>
	<option class="level-0" >Testes de Provocação</option>
	<option class="level-0" >Testes de Visão</option>
	<option class="level-0" >Testes Suplementares de Audiometria</option>
	<option class="level-0" >Timpanograma</option>
	<option class="level-0" >Tomografia Computorizada</option>
	<option class="level-0" ">Tomografia Corneana (Galilei)</option>
	<option class="level-0" >Tomografia Óptica Coerente ( OCT)</option>
	<option class="level-0" >Tonografia</option>
	<option class="level-0" >Topografia Corneana</option>
	<option class="level-0" >Topografia Ocular</option>
	<option class="level-0" >Traçado de Sono em Ambulatório</option>
	<option class="level-0" >Traçado diurno com provas de activação</option>
	<option class="level-0" >Tracção Vertebral</option>
	<option class="level-0" >Tratamento Básico Rosto</option>
	<option class="level-0" >Tratamento com Plasma Rico em Plaquetas</option>
	<option class="level-0" >Tratamento corporal</option>
	<option class="level-0" >Tratamento de Condilomas do Pénis</option>
	<option class="level-0" >Tratamento de Condilomas Vulvares</option>
	<option class="level-0" >Tratamento de DTM e DOF</option>
	<option class="level-0" >Tratamento Facial</option>
	<option class="level-0" >Tratamento Gengival</option>
	<option class="level-0" >Tratamento Hemorróidas</option>
	<option class="level-0" >Tratamento ortóptico</option>
	<option class="level-0" >Tratamento Ortóptico ou Pleóptico</option>
	<option class="level-0" >Tratamento Pernas Cansadas com Lama ou Bandagem</option>
	<option class="level-0" >Tratamento Rosto Deluxe</option>
	<option class="level-0" >Tratamentos</option>
	<option class="level-0" >Tratamentos Dentários</option>
	<option class="level-0" >Tratamentos e Pensos</option>
	<option class="level-0" >Tratamentos Estéticos Redutores</option>
	<option class="level-0" >Tratamentos Fisioterapia &#8211; 1 Sessão</option>
	<option class="level-0" >Tratamentos Fisioterapia &#8211;  Sessões</option>
	<option class="level-0" >Tratamentos Fisioterapia &#8211; 15 Sessões</option>
	<option class="level-0" >Tratamentos Fisioterapia &#8211; 20 Sessões</option>
	<option class="level-0" >Tratamentos Fisioterapia &#8211; 3 Sessões</option>
	<option class="level-0" >Tratamentos Fisioterapia &#8211; 5 Sessões</option>
	<option class="level-0" >Tratamentos Hiperqueratoses</option>
	<option class="level-0" >Tratamentos Infantis</option>
	<option class="level-0" >Tratamentos Oncológicos</option>
	<option class="level-0" >Tratamentos Ortopodologia</option>
	<option class="level-0" >Tratamentos Papilomas Viricos</option>
	<option class="level-0" >Tratamentos Quiropodologia</option>
	<option class="level-0" >Tratamentos Termais</option>
	<option class="level-0" >Traumatologia</option>
	<option class="level-0" >Treino de Actividade Vida Diária</option>
	<option class="level-0" >Treino equilíbrio/marcha</option>
	<option class="level-0" >Ultra-Sons</option>
	<option class="level-0" >Ultrasonoterapia</option>
	<option class="level-0" >Unidade de Convalescença/Cuidados Continuados</option>
	<option class="level-0" >Urgência</option>
	<option class="level-0" >Urofluxometria</option>
	<option class="level-0" >Urologia</option>
	<option class="level-0" >Venereologia</option>
	<option class="level-0" >Verniz Gel ou Gel</option>
	<option class="level-0" >Vibromassagem</option>
	<option class="level-0" >Videocolonoscopia Esquerda</option>
	<option class="level-0" >Videocolonoscopia Total</option>
	<option class="level-0" >Visão Binocular- Testes Subjectivos</option>
	<option class="level-0" >Visão Cromática</option>
	<option class="level-0" >Visão de Contraste</option>
	<option class="level-0" >Viscossuplementação</option>
	<option class="level-0" >VOP &#8211; Velocidade de onda de pulso</option>
	<option class="level-0" >Workshop</option>
	<option class="level-0" >Yoga</option>
	<option class="level-0" >Zyoptix</option>
</select>
</div></div>-->
<br>

<div class="card">
  <div class="card-header">
  Search
  </div>
  <div class="card-body">
    <h5 class="card-title">O que anda procura?</h5>
    <p class="card-text"><input type="text" class="form-control" name='especialidade' placeholder="Especialidade" />
	<p class="card-text"><input type="text"  class="form-control"  name='nome' placeholder="Nome" />
	<p class="card-text"><input type="text" class="form-control" name='localidade' placeholder="Localidade" />
	<p class="card-text"><input type="text" class="form-control" name='concelho' placeholder="Concelho" />
	<p class="card-text"><input type="text" class="form-control" name='distrito' placeholder="Distrito" />
	
	
	</p>
	<button type="submit" class="btn btn-primary" >Buscar</button>
  </div>
</div>

</form>



</div>

<br><br><br><br>

		<div class="container" id="minhaDiv" >
			@if(isset($details))
			<p> </b></p>
			<h2>Sample details</h2>
			<table class="table table-striped">
				<thead>
					<tr>
					    <th>Especilaidade</th>
						<th>Nome</th>
						<th>Localidade</th>
						<th>Concelho</th>
						<th>Distrito</th>
					
					</tr>
				</thead>
				<tbody>
					@foreach($details as $user)
					<tr>
						<td>{{$user->especialidade}}</td>
						<td>{{$user->nome}}</td>
						<td>{{$user->localidade}}</td>
						<td>{{$user->concelho}}</td>
						<td>{{$user->distrito}}</td>
									
					</tr>
					@endforeach
				</tbody>
			</table>
			@elseif(isset($message))
			<p>{{ $message }}</p>
			@endif
		</div>


		

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>












