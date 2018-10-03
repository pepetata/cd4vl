<?php

return [
      'welcome.title' => "Sistema Auxiliar ao VoiceLink"
    , 'welcome.subtitle' => "Endereçamento e Dígito de Verificação"
    , 'welcome.instruction.title' => "Instruções"
    , 'welcome.instruction.setup' => "Configurar"
    , 'welcome.instruction.setup.line1' => "Clique no botão [Configurar];"
    , 'welcome.instruction.setup.line2' => "Informe os parâmetros para acessar o banco de dados do VoiceLink;"
    , 'welcome.instruction.setup.line3' => "Grave os parâmetros;"
    , 'welcome.instruction.setup.line4' => "A tabela dos Dígitos de Verificação será gravada no banco de dados do VL;"
    , 'welcome.instruction.setup.line5' => "Se a tabela já existir, ela não será apagada;"
    , 'welcome.instruction.setup.line6' => "Se necessário, apague a tabela ('dv_locations') manualmente."
    , 'welcome.instruction.location' => "Endereço"
    , 'welcome.instruction.location.line1' => "Clique no botão [Endereços];"
    , 'welcome.instruction.location.line2' => "O primeiro a fazer é copiar os endereços do Voicelink;"
    , 'welcome.instruction.location.line3' => "Para isso, clique no botão [Copiar endereços do VoiceLink];"
    , 'welcome.instruction.location.line4' => "Isso pode ser feito a qualquer momento pois o sistema vai copiar apenas os endereços que não existe;"
    , 'welcome.instruction.location.line5' => "As modificações são gravadas automaticamente quando o cursor sair do campo."
    , 'welcome.instruction.location.line6' => "Se os endereços de um corredor forem iguais a outro corredor, use o botão [Copiar do corredor];"
    , 'welcome.instruction.location.line7' => "O ideal é usar apenas os campos corredor e endreço;"
    , 'welcome.instruction.location.line8' => "Se precisar de usar nível, use letras no endereço: 11A, 45C."
    , 'welcome.instruction.cd' => "Dígitos de Verificação"
    , 'welcome.instruction.cd.line1' => "Clique no botão [DV];"
    , 'welcome.instruction.cd.line2' => "O primeiro a fazer é selecionar cada corredor;"
    , 'welcome.instruction.cd.line3' => "Depois selecione todos os endereços do corredor ou apenas alguns;"
    , 'welcome.instruction.cd.line4' => "Clique no botão [Gerar DVs] para a geração dos dígitos de verificação dos endereços selecionados;"
    , 'welcome.instruction.cd.line5' => "Selecione a quantidade de dígitos para o DV. <strong>O ideal seria 2 ou 3 (não importa que o DV será repetido no corredor)</strong>"
    , 'welcome.instruction.cd.line6' => "O sistema vai garantir que o DV não vai se repetir nos endereços:"
    , 'welcome.instruction.cd.line7' => "ao lado se for sem nível, ou seja, o DV do endereço 5 não será igual ao endereço 3, 4, 6 ou 7;"
    , 'welcome.instruction.cd.line8' => "ao lado se for com nível, ou seja, o DV do endereço 5C não será igual ao endereço 5B, 5D, 4C ou 6C;"
    , 'welcome.instruction.cd.line9' => "em outro corredor com endereço igual, ou seja, o DV do endereço 29 não será igual a outro endereço 29 de outros corredores. "
    , 'welcome.instruction.cd.line10' => "É altamente recomendável trocar o DV dos endereços mais visitados."
    , 'welcome.instruction.cd.line11' => "Para isso insira a lista destes endereços, e clique em [Buscar endereços da lista];"
    , 'welcome.instruction.cd.line12' => "Para imprimir as etiquetas:"
    , 'welcome.instruction.cd.line13' => "Selecione o corredor,  selecione os endereços e depois clique em [Imprimir DVs selecionados];"
    , 'welcome.instruction.cd.line14' => "Clique em [Imprimir DVs gerados hoje];"
    , 'welcome.instruction.cd.line15' => "Faça o giro dos DVs com frequencia para evitar a memorização."
    , 'welcome.instruction.cd.line16' => "Para isso, decida qual será usado no dia e clique nos botões do 'Atualizar DVs no VoiceLink'"
    , 'welcome.instruction.cd.line17' => "Não se esqueça de avisar à operação qual é o DV do dia."

    , 'acessandodb.title' => "Sistema Auxiliar ao VoiceLink"
    , 'acessandodb.h1' => "Acessando o bando de dados do VoiceLink"
    , 'acessandodb.h2' => "Aguarde..."

    , 'errordb.title' => "Sistema Auxiliar ao VoiceLink"
    , 'errordb.h1' => "Houve um error para acessar o bando de dados!!!"

    , 'configurar.title' => "Sistema Auxiliar ao VoiceLink - Configurar"
    , 'configurar.h2' => "Configuração do Banco de Dados"
    , 'configurar.save' => "Gravar"
    , 'configurar.cancel' => "Cancelar"
    , 'configurar.saved' => "Parâmetros gravados com sucesso. Tabela já existe!!!"
    , 'configurar.permission' =>"Não foi possível criar a tabela necessária!! Possível problema de permissão."
    , 'configurar.alert1' => 'Aguarde!! Salvando os parâmetros!'
    , 'configurar.alert2' => "Parâmetros salvos e tabela criada com sucesso !!!"

    , 'endereco.title' => "Sistema Auxiliar ao VoiceLink - Endereçamento"
    , 'endereco.selectcd' => "Selecione o CD"
    , 'endereco.cd' => "Centro de Distribuição: "
    , 'endereco.copyVL' => "Copiar endereços do VoiceLink"
    , 'endereco.copying' => "Aguarde!! Copiando endereços do VoiceLink"
    , 'endereco.copyaisle' => "Copiar do corredor: "
    , 'endereco.copyaisleB' => "Copiar do corredor"
    , 'endereco.copyingaisle' => "Aguarde!! Copiando endereços do corredor"
    , 'endereco.filter' => "Filtrar por corredor: "
    , 'endereco.id' => "Código"
    , 'endereco.preaisle' => "Pré-corredor"
    , 'endereco.preaisleH' => "Preencher o pré-corredor com o conteúdo informado"
    , 'endereco.preaisleXH' => "Apagar o conteúdo existente no pré-corredor"
    , 'endereco.aisle' => "Corredor"
    , 'endereco.postaisle' => "Pós-corredor"
    , 'endereco.postaisleH' => "Preencher o pós-corredor com o conteúdo informado"
    , 'endereco.postaisleXH' => "Apagar o conteúdo existente no pós-corredor"
    , 'endereco.slot' => "Endereço"
    , 'endereco.add1' => "+1 Todos"
    , 'endereco.add1H' => "Alterar o conteúdo de todos os endereços iniciando pelo número que vai ser informado"
    , 'endereco.alert1' => "Preencha o campo com o conteúdo que deseja!!!"
    , 'endereco.alert2' => 'Confirma que deseja copiar o seguinte texto em todos os campos Pós-corredor: '
    , 'endereco.alert3' => 'Confirma que deseja apagar o conteúdo em todos os campos Pós-corredor abaixo?'
    , 'endereco.alert4' => 'Confirma que deseja copiar o seguinte texto em todos os campos Pré-corredor: '
    , 'endereco.alert5' => 'Confirma que deseja apagar o conteúdo em todos os campos Pré-corredor abaixo?'
    , 'endereco.alert6' => 'Confirma que deseja numerar todos os endereços abaixo ?'
    , 'endereco.alert7' => 'Número inicial?'
    , 'endereco.alert8' => 'Selecione o Centro de Distribuição antes!!!'
    , 'endereco.alert9' => 'Confirma que deseja copiar os endereços do VL?'
    , 'endereco.alert10' => 'Nada encontrado para copiar'
    , 'endereco.alert11' => 'Copia finalizada!!! Endereços copiados = '
    , 'endereco.alert12' => "Selecione o corredor de origem!!!"
    , 'endereco.alert13' => 'Confirma que deseja copiar os dados corredor '


    , 'dv.title' => "Sistema Auxiliar ao VoiceLink - Dígito de Verificação"
    , 'dv.selectcd' => "Selection o CD"
    , 'dv.dc' => "Centro de Distribuição: "
    , 'dv.updateVL' => "Atualizar DVs no VoiceLink"
    , 'dv.printselected' => "Imprimir DVs selecionados"
    , 'dv.printtoday' => "Imprimir DVs criados hoje"
    , 'dv.updating' => "Aguarde!! Atualizandos os DVs no VoiceLink."
    , 'dv.printing' => "Aguarde!! Imprimindo as etiquetas."
    , 'dv.searchlist' => "Buscar endereços da lista"
    , 'dv.listing' => "Aguarde!! Buscando endereços da lista"
    , 'dv.filter' => "Filtrar por corredor: "
    , 'dv.generate' => "Gerar DVs"
    , 'dv.generating' => "Aguarde!! Gerando DVs para os endereços selecionados"
    , 'dv.id' => "Código"
    , 'dv.preaisle' => "Pré-corredor"
    , 'dv.aisle' => "Corredor"
    , 'dv.postaisle' => "Pós-corredor"
    , 'dv.slot' => "Endereço"
    , 'dv.cd' => "Dígitos de Verificação"
    , 'dv.error.printing' => "Erro durante impressão!"
    , 'dv.alert1' => "Selecione os endereços antes!!!"
    , 'dv.alert2' => 'Confirma que deseja gerar DVs para os endereços selecionados?'
    , 'dv.alert3' => "Quantidade de dígitos no DV?"
    , 'dv.alert4' => "Informe um número entre 2 e 5!!!"
    , 'dv.alert5' => "Preencha o campo com os endereços que deseja mostrar!!!"
    , 'dv.alert6' => 'Confirma que deseja atualizar o DV selecionado no VoiceLink?'
    , 'dv.alert7' => 'Atualização efetuada com sucesso!!'
    , 'dv.alert8' => 'Confirma que deseja imprimir as etiquetas dos endereços selecionados?'
    , 'dv.alert9' => "Qual é o IP da impressora?"
    , 'dv.alert10' => "As etiquetas foram enviadas para a impressora com sucesso!!!"
    , 'dv.alert11' => 'Confirma que deseja imprimir as etiquetas dos DVs gerados hoje?'

    , 'connection.failed.parms' => "Falha na conexão ao banco de dados. Reveja os parametros informados."
    , 'connection.ok.table' => "Parâmetros gravados com sucesso. A tabela já existe e não foi alterada !!!"

    , 'back' => "Voltar"
];