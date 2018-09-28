@extends('layouts.app')
@section('title', '')


@section('main')
@parent
<section>
   <div class="text-center">
      <h1>Sistema Auxiliar ao VoiceLink</h1>
      <h2>Endereçamento e Dígito de Verificação</h2>
      <br>
   </div>
</section>
<section>
   <div class="row text-center">
      <div class="col">
         <a href="configurar">
            <img class="border" src="images/configurar.png" class="img-fluid" alt="Configurar">
         </a>
      </div>
      <div class="col">
         <a href="acessandodb?p=endereco">
            <img class="border" src="images/enderecos.png" class="img-fluid" alt="Endereço">
         </a>
      </div>
      <div class="col">
         <a href="acessandodb?p=dv">
            <img class="border" src="images/dv.png" class="img-fluid" alt="Dígito de Verificação">
         </a>
      </div>
   </div>
</section>
<section>
   <br>
   <hr>
   <header>
      <h3>Instruções</h3>
   </header>
   <ol>
      <li><strong>Configurar</strong></li>
      <ul>
         <li>Clique no botão [Configurar];</li>
         <li>Informe os parâmetros para acessar o banco de dados do VoiceLink;</li>
         <li>Grave os parâmetros;</li>
         <li>A tabela dos Dígitos de Verificação será gravada no banco de dados do VL;</li>
         <li>Se a tabela já existir, ela não será apagada;</li>
         <li>Se necessário, apague a tabela manualmente.</li>
      </ul>
      <li><strong>Endereços</strong></li>
      <ul>
         <li>Clique no botão [Endereços];</li>
         <li>O primeiro a fazer é copiar os endereços do Voicelink;</li>
         <li>Para isso, clique no botão [Copiar endereços do VoiceLink];</li>
         <li>Isso pode ser feito a qualquer momento pois o sistema vai copiar apenas os endereços que não existe;</li>
         <li>As modificações são gravadas automaticamente quando o cursor sair do campo.</li>
         <li>Se os endereços de um corredor forem iguais a outro corredor, use o botão [Copiar do corredor];</li>
         <li><strong>O ideal é usar apenas os campos corredor e endreço;</strong></li>
         <img alt='endreços' src='images/addresses.png'>
         <li><strong>Se precisar de usar nível, use letras no endereço: 11A, 45C.</strong></li>
      </ul>
      <li><strong>Dígitos de Verificação</strong></li>
      <ul>
         <li>Clique no botão [DV];</li>
         <li>O primeiro a fazer é selecionar cada corredor;</li>
         <li>Depois selecione todos os endereços do corredor ou apenas alguns;</li>
         <li>Clique no botão [Gerar DVs] para a geração dos dígitos de verificação dos endereços selecionados;</li>
         <li>Seleciones a quantidade de dígitos para o DV. <strong>O ideal seria 2 ou 3 (não importa que o DV será repetido no corredor)</strong>;</li>
         <li>O sistema vai garantir que o DV não vai se repetir nos endereços:</li>
         <ul>
            <li>ao lado se for sem nível, ou seja, o DV do endereço 5 não será igual ao endereço 3, 4, 6 ou 7;</li>
            <li>ao lado se for com nível, ou seja, o DV do endereço 5C não será igual ao endereço 5B, 5D, 4C ou 6C;</li>
            <li>em outro corredor com endereço igual, ou seja, o DV do endereço 29 não será igual a outro endereço 29 de outros corredores. </li>
         </ul>
         <li class='text-danger'><strong>É altamente recomendável trocar o DV dos endereços mais visitados.</strong></li>
         <li>Para isso insira a lista destes endereços, e clique em [Buscar endereços da lista];</li>
         <li>Para imprimir as etiquetas:</li>
         <ul>
            <li>Selecione o corredor,  selecione os endereços e depois clique em [Imprimir DVs selecionados];</li>
            <li>Clique em [Imprimir DVs gerados hoje];</li>
         </ul>
         <li class='text-danger'><strong>Faça o giro dos DVs com frequencia para evitar a memorização.</strong></li>
         <li>Para isso, decida qual será usado no dia e clique nos botões do "Atualizar DVs no VoiceLink"</li>
         <li>Não se esqueça de avisar à operação qual é o DV do dia.</li>
      </ul>
   </ol>
</section>
@endsection
