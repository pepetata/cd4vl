<?php

return [
      'welcome.title' => "Sistema Auxiliar ao VoiceLink"
    , 'welcome.subtitle' => "Endereçamento e Dígito de Verificação"
    , 'welcome.instruction.title' => "Instruções"
    
    , 'welcome.instruction.cd4vl' => "CD4VL"
    , 'welcome.instruction.cd4vl.nlines' => "16"
    , 'welcome.instruction.cd4vl.line1' => "<p><strong>Dígito de Verificação para Honeywell Vocollect VoiceLink.</strong></p>"
    , 'welcome.instruction.cd4vl.line2' => "<p>Este aplicativo tem como objetivo simplificar os endereços dos produtos e criar cinco dígitos de verificação para cada local:</p>"
    , 'welcome.instruction.cd4vl.line3' => "<li>Importa os endereços da VL de 3 maneiras diferentes;</li>"
    , 'welcome.instruction.cd4vl.line4' => "<li>Permitir editar esses locais para ter apenas informações de corredor e posição (pode ter outras, mas não é recomendado);</li>"
    , 'welcome.instruction.cd4vl.line5' => "<li>Gerar dígitos de verificação;</li>"
    , 'welcome.instruction.cd4vl.line6' => "<li>Imprimir etiquetas para os locais.</li>"
    , 'welcome.instruction.cd4vl.line7' => "<li>Exportar os dígitos de verificação para o VoiceLink de várias maneiras.</li>"
    , 'welcome.instruction.cd4vl.line8' => "<p>Vem com o seu próprio Apache v2.4 para Windows. Puede ejecutarlo en cualquier computadora con acceso al servidor VoiceLink.</p>"
    , 'welcome.instruction.cd4vl.line9' => "<p><strong><code>*** Somente para SQL Server ***</code></strong></p>"
    , 'welcome.instruction.cd4vl.line10' => "<p>Para usá-lo, execute o arquivo start.bat e abra o navegador com o URL http://localhost:9080</p>"
    , 'welcome.instruction.cd4vl.line11' => "<p>NOTA:</p>"
    , 'welcome.instruction.cd4vl.line12' => "<li>este aplicativo ainda não foi testado na produção. Certifique-se de ter um backup do banco de dados do VoiceLink antes de testá-lo.</li>"
    , 'welcome.instruction.cd4vl.line13' => "<li>o layout da etiqueta não foi feito. Modifique o arquivo <code>cd4vl\Apache24\htdocs\cd4vl\public\labels\etiqueta.txt</code>.</li>"
    , 'welcome.instruction.cd4vl.line14' => "<li>a etiqueta foi feita usando ZPL.</li>"
    , 'welcome.instruction.cd4vl.line15' => "<li>por favor desenvolva sua própria etiqueta e torne-a disponível para outras pessoas: etiquetaXXmmLLL.txt -> XX - largura da etiqueta, LLL - Linguagem da impressora (ZPL).</li>"
    , 'welcome.instruction.cd4vl.line16' => "<li>testado em Windowns 8 e Windows 10.</li>"

    , 'welcome.instruction.instalation' => "Instalação"
    , 'welcome.instruction.instalation.nlines' => "6"
    , 'welcome.instruction.instalation.line1' => '<li>Acesse: <a href="https://github.com/pepetata/cd4vl" target="_blank">https://github.com/pepetata/cd4vl</a>.</li>'
    , 'welcome.instruction.instalation.line2' => "<li>Baixe o aplicativo (clique em <strong> <code> [Clone or Download] </code> </strong>.</li>"
    , 'welcome.instruction.instalation.line3' => "<li>Copie o conteúdo do arquivo zip em sua máquina. Pode ser qualquer computador com acesso ao servidor VoiceLink.</li>"
    , 'welcome.instruction.instalation.line4' => "<li>Execute o arquivo <code> start.bat </code> que está na pasta raiz do aplicativo.</li>"
    , 'welcome.instruction.instalation.line5' => '<li>Acesse o aplicativo em <a href="http://localhost:9080" target="_blank">http://localhost:9080</a></li>'
    , 'welcome.instruction.instalation.line6' => '<li></li>'

    , 'welcome.instruction.bplocation' => "Melhores Práticas - Endereços"
    , 'welcome.instruction.bplocation.nlines' => "5"
    , 'welcome.instruction.bplocation.line1' => '<p>Seguindo o conceito de, <strong><code>quanto menos o operador escutar, melhor; quanto menos o operador falar, melhor </code> </strong>, devemos tentar reduzir a identificação da posição ao usar o sistema de voz.</p>'
    , 'welcome.instruction.bplocation.line2' => '<p>Quando possível, recomenda-se a utilização de apenas duas informações para identificação: corredor e posição. Algo como:</p>'
    , 'welcome.instruction.bplocation.line3' => "<div class='text-center'><img alt='endreços' src='images/locations.png'></div>"
    , 'welcome.instruction.bplocation.line4' => '<p>Para identificar o nível, você pode usar caracteres alfabéticos como A, B, C, etc:</p>'
    , 'welcome.instruction.bplocation.line5' => '<p>Evite usar informações pré-corredor e pós-corredor quando possível.</p>'

    , 'welcome.instruction.bpcd' => "Melhores práticas - Dígito de Verificação - DV"
    , 'welcome.instruction.bpcd.nlines' => "21"
    , 'welcome.instruction.bpcd.line1' => '<p>O DV é um instrumento importante da solução de voz, pois permite o aumento da precisão das operações realizadas com o sistema de voz. Dessa forma, é essencial ter o devido cuidado com este instrumento.</p>'
    , 'welcome.instruction.bpcd.line2' => '<p></p>'
    , 'welcome.instruction.bpcd.line3' => '<p>Recomenda-se usar apenas dois ou três dígitos nos dígitos de verificação para torná-lo mais curto para que o operador os diga e reduza a possibilidade de erro de reconhecimento de voz.</p>'
    , 'welcome.instruction.bpcd.line4' => '<p></p>'
    , 'welcome.instruction.bpcd.line5' => '<p>Não há problema em repetir o mesmo dígito de verificação no mesmo corredor, mas é importante que a repetição não seja próxima uma da outra. Também é importante que a repetição não esteja na mesma posição em diferentes corredores. Ou seja, cada posição 10 de cada corredor deve ter um dígito de verificação diferente para evitar que o operador confunda o corredor, mas vai no slot correto.</p>'
    , 'welcome.instruction.bpcd.line6' => '<p></p>'
    , 'welcome.instruction.bpcd.line7' => '<p>Isso também é muito importante:</p>'
    , 'welcome.instruction.bpcd.line8' => '<li style="color:red"><strong>Nunca use o número do local (ou parte dele).</strong></li>'
    , 'welcome.instruction.bpcd.line9' => '<li style="color:blue"><strong>Nunca use o código do produto ou EAN (ou parte dele).</strong></li>'
    , 'welcome.instruction.bpcd.line10' => '<li><strong>Não use caracteres especiais ou alfabéticos.</strong></li>'
    , 'welcome.instruction.bpcd.line11' => '<p></p>'
    , 'welcome.instruction.bpcd.line12' => '<p>Uma característica do dígito de verificação é que os operadores memorizam com o tempo, porque eles visitam as posições milhares de vezes. E isso não é bom, pois pode afetar a precisão do picking, já que o operador pode dizer o dígito antes de chegar ao local e pegar o produto do local errado.</p>'
    , 'welcome.instruction.bpcd.line13' => '<p></p>'
    , 'welcome.instruction.bpcd.line14' => '<p>Para <strong> evitar a memorização </strong>, recomenda-se usar três ou mais DVs (lado a lado) com cores diferentes. Cada etiqueta contém um dígito de verificação diferente e deve ser usado alternadamente ao longo do tempo. Por exemplo, na primeira semana o DV amarelo é usado, a segunda semana o DV vermelho, etc .:</p>'
    , 'welcome.instruction.bpcd.line15' => "<div class='text-center'><img  style='width:60%' alt='Check digit style' src='images/dv-2.png'></div>"
    , 'welcome.instruction.bpcd.line16' => '<p></p><p>Outro exemplo de etiqueta para evitar a memorização é usar os dígitos de verificação dentro de uma figura (círculo, quadrado, triângulo, etc).</p>'
    , 'welcome.instruction.bpcd.line17' => "<div class='text-center'><img  style='width:60%' alt='Check digit style' src='images/dv-1.png'></div>"
    , 'welcome.instruction.bpcd.line18' => '<p></p>'
    , 'welcome.instruction.bpcd.line19' => '<p>Mesmo com este processo, você tem que <strong> alterar os dígitos de verificação de tempos em tempos nas posições mais visitadas</strong>.</p>'
    , 'welcome.instruction.bpcd.line20' => '<p></p>'
    , 'welcome.instruction.bpcd.line21' => '<p>A fonte de texto para o dígito de verificação deve ser pequena o suficiente para forçar os operadores a ficarem na frente do local para poder lê-los. Se a fonte do texto for muito grande, o operador poderá ler de longe, dizer o DV antes de chegar ao local e pegar o produto no local errado.</p>'

    , 'welcome.instruction.setup' => "Configurar"
    , 'welcome.instruction.setup.nlines' => "7"
    , 'welcome.instruction.setup.line1' => "<li>Clique no botão <strong><code>[Configurar]</code></strong>;</li>"
    , 'welcome.instruction.setup.line2' => "<li>Informe os parâmetros para acessar o banco de dados do VoiceLink;</li>"
    , 'welcome.instruction.setup.line3' => "<li>Insira os parâmetros para acessar a API do VoiceLink (somente se você estiver usando o VoiceLink 5 ou posterior);</li>"
    , 'welcome.instruction.setup.line4' => "<li>Grave os parâmetros;</li>"
    , 'welcome.instruction.setup.line5' => "<li>A tabela dos Dígitos de Verificação será gravada no banco de dados do VL;</li>"
    , 'welcome.instruction.setup.line6' => "<li>Se a tabela já existir, ela não será apagada;</li>"
    , 'welcome.instruction.setup.line7' => "<li>Se necessário, apague a tabela ('dv_locations') manualmente.</li>"
    
    , 'welcome.instruction.location' => "Endereço"
    , 'welcome.instruction.location.nlines' => "11"
    , 'welcome.instruction.location.line1' => "<li>Clique no botão <strong><code>[Endereços]</code></strong>;</li>"
    , 'welcome.instruction.location.line2' => "<li>O primeiro a fazer é copiar os endereços do Voicelink;</li>"
    , 'welcome.instruction.location.line3' => "<li>Para fazer isso, você tem 3 opções:</li>"
    , 'welcome.instruction.location.line4' => "<ul><li><strong style='color:red'>Acesso direto à tabela do VoiceLink</strong>: clique no botão <strong>[Importar endereços do VoiceLink]</strong> -> este método não é recomendado pela Honeywell Vocollect, pois pode interferir na operação adequada do VoiceLink;</li>"
    , 'welcome.instruction.location.line5' => "<li><strong style='color:red'>Importar endereços de arquivo texto</strong>: selecione o arquivo texto a ser importado e clique no botão <strong>[Importar]</strong> apropriado. O arquivo texto deve ter o mesmo layout descrito no VoiceLink Implementatio Guide;</li>"
    , 'welcome.instruction.location.line6' => "<li><strong style='color:red'>Importar endereços de um arquivo .CSV</strong>: selecione o arquivo .csv para importar e clique no botão <strong>[Importar]</strong> apropriado. O arquivo .csv deve ter os seguintes campos nesta ordem: scannedVerification, preAisle, aisle, postAisle, slot, spokenVerification;</li></ul>"
    , 'welcome.instruction.location.line7' => "<li>Isso pode ser feito a qualquer momento pois o sistema vai copiar apenas os endereços que não existe;</li>"
    , 'welcome.instruction.location.line8' => "<li>As modificações são gravadas automaticamente quando o cursor sair do campo.</li>"
    , 'welcome.instruction.location.line9' => "<li>Se os endereços de um corredor forem iguais a outro corredor, use o botão <strong><code>[Copiar do corredor]</code></strong>;</li>"
    , 'welcome.instruction.location.line10' => "<li><strong>O ideal é usar apenas os campos corredor e endereço;</strong></li>"
    , 'welcome.instruction.location.line11' => "<li><strong>Se precisar de usar nível, use letras no endereço: 11A, 45C.</strong></li>"
    
    , 'welcome.instruction.cd' => "Dígitos de Verificação"
    , 'welcome.instruction.cd.nlines' => "24"
    , 'welcome.instruction.cd.line1' => "<li>Clique no botão <strong><code>[DV]</code></strong>;</li>"
    , 'welcome.instruction.cd.line2' => "<li>Selecione o Centro de Distribuição.</li>"
    , 'welcome.instruction.cd.line3' => "<li>A primeira vez que você usar o sistema, você deve gerar CDs para todos os locais.</li>"
    , 'welcome.instruction.cd.line4' => "<li>Portanto, apenas na primeira vez, clique no botão <strong> <código> [Gerar CDs para todos os locais] </code> </strong>.</li>"
    , 'welcome.instruction.cd.line5' => "<li>Caso contrário, você deve selecionar o corredor que você deseja.</li>"
    , 'welcome.instruction.cd.line6' => "<li>Em seguida, selecione todos os locais no corredor ou apenas alguns;</li>"
    , 'welcome.instruction.cd.line7' => "<li>Clique no botão <strong><code>[Gerar DVs]</code></strong> para a geração dos dígitos de verificação dos endereços selecionados;</li>"
    , 'welcome.instruction.cd.line8' => "<li>Selecione a quantidade de dígitos para o DV. <strong>O ideal seria 2 ou 3 (não importa que o DV será repetido no corredor)</strong></li>"
    , 'welcome.instruction.cd.line9' => "<p></p><p>O sistema vai garantir que o DV não vai se repetir nos endereços:</p>"
    , 'welcome.instruction.cd.line0' => "<li>ao lado se for sem nível, ou seja, o DV do endereço 5 não será igual ao endereço 3, 4, 6 ou 7;</li>"
    , 'welcome.instruction.cd.line11' => "<li>ao lado se for com nível, ou seja, o DV do endereço 5C não será igual ao endereço 5B, 5D, 4C ou 6C;</li>"
    , 'welcome.instruction.cd.line12' => "<li>em outro corredor com endereço igual, ou seja, o DV do endereço 29 não será igual a outro endereço 29 de outros corredores.</li>"
    , 'welcome.instruction.cd.line13' => "<p></p><p style='color:red'><strong>É altamente recomendável trocar o DV dos endereços mais visitados.</strong></p>"
    , 'welcome.instruction.cd.line14' => "<p>Para isso insira a lista destes endereços, e clique em <strong><code>[Buscar endereços da lista]</code></strong>;</p>"
    , 'welcome.instruction.cd.line15' => "<p></p><p>Para imprimir as etiquetas:</p>"
    , 'welcome.instruction.cd.line16' => "<li>Selecione o corredor,  selecione os endereços e depois clique em <strong><code>[Imprimir DVs selecionados]</code></strong>;</li>"
    , 'welcome.instruction.cd.line17' => "<li>Clique em <strong><code>[Imprimir DVs gerados hoje]</code></strong>;</li>"
    , 'welcome.instruction.cd.line18' => "<p></p><p><strong>Faça o giro dos DVs com frequencia para evitar a memorização</strong>.</p>"
    , 'welcome.instruction.cd.line19' => "<p>Para fazer isso, você deve decidir qual DV será usado no dia e escolher o método de exportação apropriado:</p>"
    , 'welcome.instruction.cd.line20' => "<li><strong style='color:red'>Exportar DV para o VoiceLink</strong>: esse método acessará uma tabela do VoiceLink diretamente por este aplicativo e isso não é recomendado pela Honeywell Vocollect. Esse acesso de fora pode provocar uma bloqueio na tabela e interferir na operação normal do VoiceLink. Utilize este método por sua conta e risco e somente se ninguém estiver conectado à VL via browser ou através de um dispositivo talkman.</li>"
    , 'welcome.instruction.cd.line21' => "<li><strong style='color:red'>Exportar DVs para arquivo texto</strong>: use este método somente se o seu VoiceLink estiver configurado para importar via arquivos texto. Esse método gerará um arquivo texto coreloc*.dat (na pasta raiz deste aplicativo) a ser usado para importar no VoiceLink. Você terá que mover este arquivo para a pasta correta do servidor VoiceLink manualmente. Geralmente é: C:\\Arquivos de Programas\\Vocollect\\Import\{nome do site} --- onde {nome do site} é o nome do Centro de Distribuição. Mas poderia ter sido alterado durante a instalação do VL.</li>"
    , 'welcome.instruction.cd.line22' => "<li><strong style='color:red'>Exportar DVs para Tabela Temporária</strong>: use-a somente se o seu VoiceLink estiver configurado para importar via tabela. Esse processo exportará todos os locais com o DV selecionado para uma tabela temporária no banco de dados do VoiceLink e será importado para o VoiceLink automaticamente.</li>"
    , 'welcome.instruction.cd.line23' => "<li> <strong style = 'color: red'>Exportar DVs via Web Services </strong>: use somente se você estiver usando o VoiLink versão 5 ou posterior. Este processo exportará todos os locais com o DV selecionado via Web Services e será importado automaticamente ao Voicelink.</li>"
    , 'welcome.instruction.cd.line24' => "<p></p><p>Não se esqueça de avisar à operação qual é o DV do dia.</p>"

    , 'acessandodb.title' => "Sistema Auxiliar ao VoiceLink"
    , 'acessandodb.h1' => "Acessando o bando de dados do VoiceLink"
    , 'acessandodb.h2' => "Aguarde..."

    , 'errordb.title' => "Sistema Auxiliar ao VoiceLink"
    , 'errordb.h1' => "Houve um error para acessar o bando de dados!!!"

    , 'configurar.title' => "Sistema Auxiliar ao VoiceLink - Configurar"
    , 'configurar.dbparam' => "Configuração do Banco de Dados"
    , 'configurar.vlparam' => "Parâmetros da API do VoiceLink"
    , 'configurar.save' => "Gravar"
    , 'configurar.cancel' => "Cancelar"
    , 'configurar.saved' => "Parâmetros gravados com sucesso. Tabela já existe!!!"
    , 'configurar.permission' =>"Não foi possível criar a tabela necessária!! Possível problema de permissão."
    , 'configurar.alert1' => 'Aguarde!! Salvando os parâmetros!'
    , 'configurar.alert2' => "Parâmetros salvos e tabela criada com sucesso !!!"

    , 'endereco.title' => "Sistema Auxiliar ao VoiceLink - Endereçamento"
    , 'endereco.selectcd' => "Selecione o CD"
    , 'endereco.cd' => "Centro de Distribuição: "
    , 'endereco.importVL' => "Importar endereços do VoiceLink"
    , 'endereco.importFix' => "Importar endereços de arq. texto"
    , 'endereco.importCSV' => "Importar endereços de arq. .csv"
    , 'endereco.import' => "Importar"
    , 'endereco.copying' => "Aguarde!! Importando endereços..."
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
    , 'endereco.alert14' => 'Esse processo importará apenas novos endereços do arquivo texto selecionado.\n\nConfirma se você deseja importar endereços?'
    , 'endereco.alert15' => 'Selecione o arquivo !!'
    , 'endereco.alert16' => 'Importação finalizada !!! Endereços importados/lidos = '
    , 'endereco.alert17' => 'Esse processo importará apenas novos endreços do arquivo .csv selecionado.\n\nO arquivo .csv deve ter os seguintes campos nesta ordem: scannedVerification, preAisle, aisle, postAisle, slot.\n\nConfirma que você deseja importar endereços ?'
    , 'endereco.alert18' => ''

    , 'dv.title' => "Sistema Auxiliar ao VoiceLink - Dígito de Verificação"
    , 'dv.selectcd' => "Selecione o CD"
    , 'dv.dc' => "Centro de Distribuição: "
    , 'dv.updateVL' => "Exportar DVs ao VoiceLink"
    , 'dv.exportFix' => "Exportar DVs para Arq. Texto"
    , 'dv.exportTable' => "Exportar DVs para Tabela Temporária"
    , 'dv.exportRest' => "Exportar DVs via Web Services"
    , 'dv.printselected' => "Imprimir DVs selecionados"
    , 'dv.printtoday' => "Imprimir DVs criados hoje"
    , 'dv.genDVAllLocs' => "Gerar DVs para todos os endereços"
    , 'dv.generatingAll' => "Espere !! Criando DVs para todos os endereços."
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
    , 'dv.alert6' => 'Este método acessará uma tabela do VoiceLink diretamente por este aplicativo e isso não é recomendado pela Honeywell Vocollect. Esse acesso de fora pode provocar um travamento na mesa e interferir no VoiceLink. Use este método por sua conta e risco e somente se ninguém estiver conectado à VL por meio do navegador ou por meio de um dispositivo talkman.\n\nDeseja exportar o DV selecionado ao VoiceLink?'
    , 'dv.alert7' => 'Atualização efetuada com sucesso!!'
    , 'dv.alert8' => 'Confirma que deseja imprimir as etiquetas dos endereços selecionados?'
    , 'dv.alert9' => "Qual é o IP da impressora (xxx.xxx.xxx.xxx:port)?"
    , 'dv.alert10' => "As etiquetas foram enviadas para a impressora com sucesso!!!"
    , 'dv.alert11' => 'Confirma que deseja imprimir as etiquetas dos DVs gerados hoje?'
    , 'dv.alert12' => '*** Use este processo somente se o seu VoiceLink estiver configurado para importar do arquivo texto *** \n\nEste processo gerará um arquivo simples coreloc*.dat (na pasta raiz deste aplicativo) a ser usado para importar endereços no VoiceLink.\n\nVocê terá que mover este arquivo para a pasta correta do servidor VoiceLink manualmente. Geralmente é:\n\nC:\\\Arquivos de Programas\\\Vocollect\\\Import\\\{nome do site} --- onde (nome do site) é o nome do Centro de Distribuição.\n\nMas pode ter sido alterado durante a instalação do VL\n\nDeseja continuar?'
    , 'dv.alert13' => '*** Use este recurso apenas se o seu VoiceLink estiver configurado para importar via tabela ***\n\nEste processo exportará todos os endereços com o DV selecionado para uma tabela temporária no banco de dados do VoiceLink e será importado para o VoiceLink automaticamente\n\nVocê quer continuar?'
    , 'dv.alert14' => '*** Use este recurso apenas se você estiver usando o VoiceLink 5. \n\nDeseja continuar?'
    , 'dv.alert15' => 'Erro ao tentar exportar !! Verifique sua credencial da API. Código de erro = '
    , 'dv.alert16' => 'Isso atualizará todos os DVs em todos os locais no DC.\n\Tem certeza de que deseja fazer isso?'
    , 'dv.alert17' => 'Isso deve ser feito apenas uma vez.\n\nVocê tem mesmo certeza de que deseja fazer isso?'

    , 'connection.failed.parms' => "Falha na conexão ao banco de dados. Reveja os parametros informados."
    , 'connection.ok.table' => "Parâmetros gravados com sucesso. A tabela já existe e não foi alterada !!!"

    , 'back' => "Voltar"
];