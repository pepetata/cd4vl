<?php

return [
      'welcome.title' => "Sistema Auxiliar de VoiceLink"
    , 'welcome.subtitle' => "Ubicación y Dígito de verificación"
    , 'welcome.instruction.title' => "Instruciones"
    
    , 'welcome.instruction.cd4vl' => "CD4VL"
    , 'welcome.instruction.cd4vl.nlines' => "16"
    , 'welcome.instruction.cd4vl.line1' => "<p><strong>Dígito de verificación para Honeywell Vocollect VoiceLink.</strong></p>"
    , 'welcome.instruction.cd4vl.line2' => "<p>Esta aplicación tiene como objetivo simplificar las ubicaciones de los productos y crear cinco dígitos de verificación para cada ubicación:</p>"
    , 'welcome.instruction.cd4vl.line3' => "<li>Importa las ubicaciones desde VL de 3 maneras diferentes;</li>"
    , 'welcome.instruction.cd4vl.line4' => "<li>Permitir editar estas ubicaciones para tener sólo información de pasillo y ubicación (puede tener otras, pero no se recomienda);</li>"
    , 'welcome.instruction.cd4vl.line5' => "<li>Generar dígitos de verificación;</li>"
    , 'welcome.instruction.cd4vl.line6' => "<li>Imprimir etiquetas de las ubicaciones.</li>"
    , 'welcome.instruction.cd4vl.line7' => "<li>Exportar los dígitos de verificación a VoiceLink de varias maneras.</li>"
    , 'welcome.instruction.cd4vl.line8' => "<p></p><p>Viene con su propio Apache v2.4 para Windows. Você pode executá-lo em qualquer computador com acesso ao servidor do VoiceLink.</p>"
    , 'welcome.instruction.cd4vl.line9' => "<p><strong> <code> *** Somente para SQL Server *** </code></strong></p>"
    , 'welcome.instruction.cd4vl.line10' => "<p>Para usarlo, ejecute el archivo start.bat y abra el navegador con la ubicación URL http://localhost:9080</p>"
    , 'welcome.instruction.cd4vl.line11' => "<p>NOTA:</p>"
    , 'welcome.instruction.cd4vl.line12' => "<li>esta aplicación aún no se ha probado en producción. Asegúrese de tener una copia de seguridad de la base de datos de VoiceLink antes de probarlo. </ Li>"
    , 'welcome.instruction.cd4vl.line13' => "<li>el diseño de la etiqueta no se ha hecho. Modifique el archivo <code>cd4vl\Apache24\htdocs\cd4vl\public\labels\etiqueta.txt </code>.</li>"
    , 'welcome.instruction.cd4vl.line14' => "<li>la etiqueta se hizo usando ZPL.</li>"
    , 'welcome.instruction.cd4vl.line15' => "<li>por favor desarrolle su propia etiqueta y hagala disponible para otras personas: etiquetaXXmmLLL.txt -> XX - ancho de la etiqueta, LLL - Lenguaje de la impresora (ZPL).</li>"
    , 'welcome.instruction.cd4vl.line16' => "<li>testado en Windows 8 y Windows 10.</li>"

    , 'welcome.instruction.instalation' => "Instalación"
    , 'welcome.instruction.instalation.nlines' => "6"
    , 'welcome.instruction.instalation.line1' => '<li>Acesse: <a href="https://github.com/pepetata/cd4vl" target="_blank"> https://github.com/pepetata/cd4vl </a>.</li>'
    , 'welcome.instruction.instalation.line2' => "<li>Descargue la aplicación (haga clic en <strong> <code> [Clone o Download] </code></strong>.</li>"
    , 'welcome.instruction.instalation.line3' => "<li>Copie el contenido del archivo zip en tu máquina. Puede ser cualquier equipo con acceso al servidor VoiceLink.</li>"
    , 'welcome.instruction.instalation.line4' => "<li>Ejecute el archivo <code> start.bat </code> que está en la carpeta raíz de la aplicación.</li>"
    , 'welcome.instruction.instalation.line5' => '<li>Accede a la aplicación en<a href="http://localhost:9080" target="_blank">http://localhost:9080</a></li>'
    , 'welcome.instruction.instalation.line6' => '<li></li>'

    , 'welcome.instruction.bplocation' => "Mejores Prácticas - Direcciones"
    , 'welcome.instruction.bplocation.nlines' => "5"
    , 'welcome.instruction.bplocation.line1' => '<p>Siguiendo el concepto de, <strong> <code> cuanto menos el operador escuchar, mejor; cuanto menos el operador hablar, mejor </code></strong>, debemos intentar reducir la identificación de la ubicación al usar el sistema de voz.</p>'
    , 'welcome.instruction.bplocation.line2' => '<p>Cuando sea posible, se recomienda el uso de sólo dos informaciones para identificación: pasillo y ubicación. Algo como:</p>'
    , 'welcome.instruction.bplocation.line3' => "<div class='text-center'><img alt='endreços' src='images/locations.png'></div>"
    , 'welcome.instruction.bplocation.line4' => '<p>Para identificar el nivel, puede utilizar caracteres alfabéticos como A, B, C, etc:</p>'
    , 'welcome.instruction.bplocation.line5' => '<p>Evite utilizar información pre-pasillo y post-pasillo cuando sea posible.</p>'

    , 'welcome.instruction.bpcd' => "Mejores prácticas - Dígito de Verificación - DV"
    , 'welcome.instruction.bpcd.nlines' => "21"
    , 'welcome.instruction.bpcd.line1' => '<p>El DV es un instrumento importante de la solución de voz, pues permite el aumento de la precisión de las operaciones realizadas con el sistema de voz. De esta forma, es esencial tener el debido cuidado con este instrumento.</p>'
    , 'welcome.instruction.bpcd.line2' => '<p></p>'
    , 'welcome.instruction.bpcd.line3' => '<p>Se recomienda utilizar sólo dos o tres dígitos en los dígitos de verificación para que sea más corto para que el operador los diga y reduzca la posibilidad de error de reconocimiento de voz.</p>'
    , 'welcome.instruction.bpcd.line4' => '<p></p>'
    , 'welcome.instruction.bpcd.line5' => '<p>No hay problema en repetir el mismo dígito de verificación en el mismo pasillo, pero es importante que la repetición no esté próxima una de la otra. También es importante que la repetición no esté en la misma ubicación en diferentes pasillos. Es decir, cada ubicación 10 de cada pasillo debe tener un dígito de verificación diferente para evitar que el operador confunda el pasillo, pero va en la ubicación correcta.</p>'
    , 'welcome.instruction.bpcd.line6' => '<p></p>'
    , 'welcome.instruction.bpcd.line7' => '<p>Esto también es muy importante:</p>'
    , 'welcome.instruction.bpcd.line8' => '<li style="color:red"><strong>Nunca utilice el número de la ubicación (o parte de él).</strong></li>'
    , 'welcome.instruction.bpcd.line9' => '<li style="color:blue"><strong>Nunca utilice el código del producto o EAN (o parte de él).</strong></li>'
    , 'welcome.instruction.bpcd.line10' => '<li><strong>No utilice caracteres especiales o alfabéticos.</strong></li>'
    , 'welcome.instruction.bpcd.line11' => '<p></p>'
    , 'welcome.instruction.bpcd.line12' => '<p>Una característica del dígito de verificación es que los operadores memorizan con el tiempo, porque ellos visitan las ubicaciones millares de veces. Y eso no es bueno, ya que puede afectar la precisión del picking, pues el operador puede decir el DV antes de llegar al lugar y recoger el producto del lugar equivocado.</p>'
    , 'welcome.instruction.bpcd.line13' => '<p></p>'
    , 'welcome.instruction.bpcd.line14' => '<p>Para evitar la memorización</strong>, se recomienda utilizar tres o más DV (lado a lado) con diferentes colores. Cada etiqueta contiene un dígito de verificación diferente y se debe utilizar alternativamente a lo largo del tiempo. Por ejemplo, en la primera semana el DV amarillo se utiliza, la segunda semana el DV rojo, etc.:</p>'
    , 'welcome.instruction.bpcd.line15' => "<div class='text-center'><img  style='width:60%' alt='Check digit style' src='images/dv-2.png'></div>"
    , 'welcome.instruction.bpcd.line16' => '<p></p><p>Otro ejemplo de etiqueta para evitar la memorización es utilizar los dígitos de verificación dentro de una figura (círculo, cuadrado, triángulo, etc).</p>'
    , 'welcome.instruction.bpcd.line17' => "<div class='text-center'><img  style='width:60%' alt='Check digit style' src='images/dv-1.png'></div>"
    , 'welcome.instruction.bpcd.line18' => '<p></p>'
    , 'welcome.instruction.bpcd.line19' => '<p>Incluso con este proceso, usted tiene que <strong> cambiar los dígitos de verificación de vez en cuando en las ubicaciones más visitadas</strong>.</p>'
    , 'welcome.instruction.bpcd.line20' => '<p></p>'
    , 'welcome.instruction.bpcd.line21' => '<p>La fuente de texto para el dígito de verificación debe ser lo suficientemente pequeña para obligar a los operadores a estar frente al lugar para poder leerlos. Si la fuente del texto es demasiado grande, el operador puede leer de lejos, decir el DV antes de llegar al lugar y recoger el producto en el lugar equivocado.</p>'

    , 'welcome.instruction.setup' => "Configurar"
    , 'welcome.instruction.setup.nlines' => "7"
    , 'welcome.instruction.setup.line1' => "<li>Haga clic en el botón<strong><code>[Configurar]</code></strong>;</li>"
    , 'welcome.instruction.setup.line2' => "<li>Introduzca los parámetros para acceder a la base de datos de VoiceLink;</li>"
    , 'welcome.instruction.setup.line3' => "<li>Ingrese los parámetros para acceder a la API de VoiceLink (solo si está usando VoiceLink 5 o posterior);</li>"
    , 'welcome.instruction.setup.line4' => "<li>Grabe los parametros;</li>"
    , 'welcome.instruction.setup.line5' => "<li>La tabla de los Dígitos de Verificación se guardará en la base de datos del VL;</li>"
    , 'welcome.instruction.setup.line6' => "<li>Si la tabla ya existe, no se borrará;</li>"
    , 'welcome.instruction.setup.line7' => "<li>Si es necesario, borre la tabla ('dv_locations') manualmente.</li>"
    
    , 'welcome.instruction.location' => "Ubicación"
    , 'welcome.instruction.location.nlines' => "11"
    , 'welcome.instruction.location.line1' => "<li>Haga clic en el botón <strong> <code> [Ubicaciones] </code></strong>;</li>"
    , 'welcome.instruction.location.line2' => "<li>El primero en hacer es copiar las ubicaciones del Voicelink;</li>"
    , 'welcome.instruction.location.line3' => "<li>Para ello, tienes 3 opciones:</li>"
    , 'welcome.instruction.location.line4' => "<ul><li><strong style='color:red'>Acceso directo a la tabla de VoiceLink</strong>: haga clic en el botón <strong>[Copiar ubicaciones de VoiceLink]</strong> -> Honeywell Vocollect no recomienda este método ya que puede interferir con el funcionamiento correcto de VoiceLink;</li>"
    , 'welcome.instruction.location.line5' => "<li><strong style='color:red'>Importar ubicaciones desde un archivo plano</strong>: seleccione el archivo plano para importar y haga clic en el botón <strong>[Importar]</strong> apropiado. El archivo plano debe tener el mismo diseño descrito en la VoiceLink Implementatio Guide;</li>"
    , 'welcome.instruction.location.line6' => "<li><strong style='color:red'>Importar ubicaciones desde un archivo .CSV</strong>: seleccione el archivo .csv para importar y haga clic en el botón <strong>[Importar]</strong> correspondiente. El archivo .csv debe tener los siguientes campos en este orden: ScanedVerification, PreAisle, pasillo, postAisle, slot, spokenVerification;</li></ul>"
    , 'welcome.instruction.location.line7' => "<li>Esto se puede hacer en cualquier momento porque el sistema sólo va a copiar las ubicaciones que no existe;</li>"
    , 'welcome.instruction.location.line8' => "<li>Las modificaciones se guardan automáticamente cuando el cursor sale del campo.</li>"
    , 'welcome.instruction.location.line9' => "<li>Si las ubicaciones de un pasillo son iguales a otro pasillo, utilice el botón <strong> <code> [Copiar del pasillo]</code></strong>;</li>"
    , 'welcome.instruction.location.line10' => "<li><strong>Lo ideal es utilizar sólo los campos pasillo y ubicación;</strong></li>"
    , 'welcome.instruction.location.line11' => "<li><strong>Si necesita usar nivel, utilice letras en la ubicación: 11A, 45C.</strong></li>"
    
    , 'welcome.instruction.cd' => "Dígitos de Verificación"
    , 'welcome.instruction.cd.nlines' => "24"
    , 'welcome.instruction.cd.line1' => "<li>Haga clic en el botón <strong> <code> [DV]</code></strong>;</li>"
    , 'welcome.instruction.cd.line2' => "<li>Seleccione el Centro de Distribución.</li>"
    , 'welcome.instruction.cd.line3' => "<li>La primera vez que utilice el sistema, debe generar DV de todas las ubicaciones.</li>"
    , 'welcome.instruction.cd.line4' => "<li>Entonces, solo la primera vez, haga clic en el botón <strong> <code> [Generar CD para todas las ubicaciones]</code></strong>. Por lo tanto, solo la primera vez, haga clic en el botón <strong><code>[Generar DV para todas las ubicaciones]</code></strong>.</li>"
    , 'welcome.instruction.cd.line5' => "<li>De lo contrario, debe seleccionar el pasillo que desee.</li>"
    , 'welcome.instruction.cd.line6' => "<li>Luego seleccione todas las ubicaciones en el pasillo o solo unas pocas;</li>"
    , 'welcome.instruction.cd.line7' => "<li>Haga clic en el botón <strong> <code> [Generar DVs] </code></strong> para la generación de los dígitos de verificación de las ubicaciones seleccionadas;</li>"
    , 'welcome.instruction.cd.line8' => "<li>Seleccione la cantidad de dígitos para el DV. <strong> El ideal sería 2 o 3 (no importa que el DV se repetir en el pasillo)</strong></li>"
    , 'welcome.instruction.cd.line9' => "<p></p><p>El sistema se asegurará de que el DV no se repite en las ubicaciones:</p>"
    , 'welcome.instruction.cd.line10' => "<li>al lado si es sin nivel, es decir, el DV de la ubicación 5 no será igual a la ubicación 3, 4, 6 o 7;</li>"
    , 'welcome.instruction.cd.line11' => "<li>al lado si es con nivel, o sea, el DV de la ubicación 5C no será igual a la ubicación 5B, 5D, 4C o 6C;</li>"
    , 'welcome.instruction.cd.line12' => "<li>en otro pasillo con ubicación igual, es decir, el DV de la ubicación 29 no será igual a otra ubicación 29 de otros pasillos.</li>"
    , 'welcome.instruction.cd.line13' => "<p></p><p style='color:red'><strong>Es muy recomendable cambiar el DV de las ubicaciones más visitadas.</strong></p>"
    , 'welcome.instruction.cd.line14' => "<p>Para ello, introduzca la lista de estas ubicaciones y haga clic en <strong> <code> [Buscar ubicaciones de la lista]</code></strong>;</p>"
    , 'welcome.instruction.cd.line15' => "<p></p><p>Para imprimir las etiquetas:</p>"
    , 'welcome.instruction.cd.line16' => "<li>Seleccione el pasillo, seleccione las ubicaciones y, a continuación, haga clic en <strong> <code> [Imprimir DV seleccionados]</code></strong>;</li>"
    , 'welcome.instruction.cd.line17' => "<li>Haga clic en <strong> <code> [Imprimir DVs generados hoy]</code></strong>;</li>"
    , 'welcome.instruction.cd.line18' => "<p></p><p><strong>Haga el giro de los DV con frecuencia para evitar la memorización</strong>.</p>"
    , 'welcome.instruction.cd.line19' => "<p>Para hacer esto, debe decidir qué DV se usará el día y elegir el método de exportación apropiado:</p>"
    , 'welcome.instruction.cd.line20' => "<li><strong style='color:red'>Exportar DVs a VoiceLink</strong>: este método accederá a una tabla de VoiceLink directamente con esta aplicación y Honeywell Vocollect no lo recomienda. Este acceso desde el exterior puede provocar un bloqueo en la tabla e interferir en el funcionamiento normal de VoiceLink. Utilice este método bajo su propio riesgo y solo si nadie está conectado a VL a través del navegador o a través de un dispositivo Talkman.</li>"
    , 'welcome.instruction.cd.line21' => "<li><strong style='color:red'>Exportar DVs a archivo plano</strong>: solo use este método si su VoiceLink está configurado para importar desde un archivo plano. Este método generará un archivo coreloc*.dat (en la carpeta raíz de esta aplicación) que se usará para importar en VoiceLink. Tendrá que mover este archivo a la carpeta correcta del servidor VoiceLink manualmente. Normalmente es: C:\\Archivos de programa\\Vocollect\\Import\\{nombre del sitio} --- donde {nombre del sitio} es el nombre del Centro de distribución. Pero podría haber sido cambiado durante la instalación de VL.</li>"
    , 'welcome.instruction.cd.line22' => "<li><strong style='color:red'>Exportar DVs para Tabla Temporaria</strong>: use esto solo si su VoiceLink está configurado para importar desde via tablas. Este proceso exportará todas las ubicaciones con el DV seleccionado a una tabla temporal en la base de datos de VoiceLink y se importará a VoiceLink automáticamente.</li>"
    , 'welcome.instruction.cd.line23' => "<li><strong style = 'color: red'>Exportar DV a través de servicios web</strong>: use esto solo si está utilizando VoiLink versión 5 o posterior. Este proceso exportará todas las ubicaciones con el DV seleccionado a través de Servicios Web y se incorporará automáticamente a Voicelink.</li>"
    , 'welcome.instruction.cd.line24' => "<p></p><p>No se olvide de avisar a la operación cuál es el DV del día.</p>"

    , 'acessandodb.title' => "Sistema Auxiliar de VoiceLink"
    , 'acessandodb.h1' => "Acceso a la base de datos de VoiceLink"
    , 'acessandodb.h2' => "Por favor espere..."

    , 'errordb.title' => "Sistema Auxiliar de VoiceLink"
    , 'errordb.h1' => "Ha habido un error para acceder a la base de datos !!!"

    , 'configurar.title' => "Sistema Auxiliar de VoiceLink - Configurar"
    , 'configurar.dbparam' => "Configuración de la base de datos"
    , 'configurar.vlparam' => "Parámetros de REST de VoiceLink"
    , 'configurar.save' => "Grabar"
    , 'configurar.cancel' => "Cancelar"
    , 'configurar.saved' => "Parámetros grsabados con éxito. La tabla ya existe y no fue cambiada !!!"
    , 'configurar.permission' =>"No se pudo crear la tabla requerida !! Posible problema de permiso."
    , 'configurar.alert1' => '¡¡Espere!! ¡Grsabando los parámetros!!'
    , 'configurar.alert2' => "¡Parámetros guardados y tabla creada con éxito!"

    , 'endereco.title' => "Sistema Auxiliar de VoiceLink - Ubicación"
    , 'endereco.selectcd' => "Seleccione el CD"
    , 'endereco.cd' => "Centro de distribución: "
    , 'endereco.importVL' => "Importar ubicación de VL"
    , 'endereco.importFix' => "Importar ubicación de archivo texto"
    , 'endereco.importCSV' => "Importar ubicación de archivo .csv"
    , 'endereco.import' => "Importar"
    , 'endereco.copying' => "Espera!! Importando ubicaciones ..."
    , 'endereco.copyaisle' => "Copiar del pasillo: "
    , 'endereco.copyaisleB' => "Copiar del pasillo"
    , 'endereco.copyingaisle' => "Espera !! Copiando ubicaciones del pasillo."
    , 'endereco.filter' => "Filtrar por pasillo: "
    , 'endereco.id' => "Código"
    , 'endereco.preaisle' => "Pré-pasillo"
    , 'endereco.preaisleH' => "Rellenar el pre-pasillo con el contenido informado"
    , 'endereco.preaisleXH' => "Borrar el contenido existente en el pre-pasillo"
    , 'endereco.aisle' => "Pasillo"
    , 'endereco.postaisle' => "Pós-pasillo"
    , 'endereco.postaisleH' => "Rellenar el post-pasillo con el contenido informado"
    , 'endereco.postaisleXH' => "Borrar el contenido existente en el post-pasillo"
    , 'endereco.slot' => "Ubicación"
    , 'endereco.add1' => "+1 Todos"
    , 'endereco.add1H' => "Cambiar el contenido de todas las ubicaciones iniciando por el número que va a ser informado"
    , 'endereco.alert1' => "¡Llene el campo con el contenido que desea!"
    , 'endereco.alert2' => 'Confirme que desea copiar el siguiente texto en todos los campos pos-pasillo:'
    , 'endereco.alert3' => '¿Desea eliminar el contenido de todos los campos pos-pasillo a continuación?'
    , 'endereco.alert4' => '¿Desea copiar el siguiente texto en todos los campos de Pre-pasillo?'
    , 'endereco.alert5' => '¿Desea eliminar el contenido en todos los campos de Pre-pasillo a continuación?'
    , 'endereco.alert6' => '¿Quieres numerar todas las ubicaciones de abajo?'
    , 'endereco.alert7' => '¿Número inicial?'
    , 'endereco.alert8' => '¡Seleccione el centro de distribución antes!'
    , 'endereco.alert9' => 'Este proceso de importación accederá directamente a la tabla de VoiceLink y Honeywell Vocollect no lo recomienda. Este acceso desde el fuera puede provocar un bloqueo en las tablas e interferir en VoiceLink. Utilice este proceso bajo su propio riesgo y solo si nadie está conectado a VL a través del navegador o mediante un dispositivo de talkman.\n\n¿Confirma que desea importar ubicaciones de VL?'
    , 'endereco.alert10' => '¡Nada encontrado para copiar!'
    , 'endereco.alert11' => '¡Copia terminada! Ubicaciones copiadas ='
    , 'endereco.alert12' => "¡Seleccione el pasillo de origen!"
    , 'endereco.alert13' => '¿Confirma que desea copiar las ubicaciones desde el pasillo'
    , 'endereco.alert14' => 'Este proceso sólo importará nuevas ubicaciones del archivo seleccionado. \n\n¿Confirma que desea importar ubicaciones?'
    , 'endereco.alert15' => 'Seleccione el arquivo !!'
    , 'endereco.alert16' => '¡Importación finalizada !!! Ubicaciones importadas/leídas = '
    , 'endereco.alert17' => 'Este proceso sólo importará nuevas ubicaciones del archivo seleccionado.\n\nEl archivo .csv debe tener los siguientes campos en este orden: scannedVerification, preAisle, aisle, postAisle, slot.\n\n¿Confirma que desea importar ubicaciones?'
    , 'endereco.alert18' => ''

    , 'dv.title' => "Sistema Auxiliar de VoiceLink - Dígitos de Verificación"
    , 'dv.selectcd' => "Seleccione el CD"
    , 'dv.dc' => "Centro de distribución: "
    , 'dv.updateVL' => "Exportar DVs para VoiceLink"
    , 'dv.exportFix' => "Exportar DVs para Archivo Plano"
    , 'dv.exportTable' => "Exportar DVs para Tabla Temporaria"
    , 'dv.exportRest' => "Exportar DVs via Web Services"
    , 'dv.printselected' => "Imprimir DVs seleccionados"
    , 'dv.printtoday' => "Imprimir DVs creados hoy"
    , 'dv.genDVAllLocs' => "Generar DV para todas las ubicaciones"
    , 'dv.generatingAll' => "¡¡Espere!! Creación de DVs para todas las ubicaciones."
    , 'dv.updating' => "Espera !! Actualizando los DVs en VoiceLink."
    , 'dv.printing' => "Espera !! Imprimiendo las etiquetas."
    , 'dv.searchlist' => "Buscar ubicaciones de la lista"
    , 'dv.listing' => "Espera !! Buscar ubicaciones de la lista"
    , 'dv.filter' => "Filtrar por pasillo: "
    , 'dv.generate' => "Generar DVs"
    , 'dv.generating' => "Espera !! Generando DVs para las ubicaciones seleccionadas"
    , 'dv.id' => "Código"
    , 'dv.preaisle' => "Pré-pasillo"
    , 'dv.aisle' => "Pasillo"
    , 'dv.postaisle' => "Pós-pasillo"
    , 'dv.slot' => "Ubicación"
    , 'dv.cd' => "Dígito de Verificación"
    , 'dv.error.printing' => "¡Error durante la impresión!"
    , 'dv.alert1' => "¡Seleccione ubicaciones antes!"
    , 'dv.alert2' => '¿Está seguro de generar DVs para las ubicaciones seleccionadas?'
    , 'dv.alert3' => "¿Número de dígitos para el DV?"
    , 'dv.alert4' => "¡Introduzca un número entre 2 y 5!"
    , 'dv.alert5' => "¡Rellene el campo con las ubicaciones que desea mostrar!"
    , 'dv.alert6' => 'Este método accederá a una tabla de VoiceLink directamente por esta aplicación y esto no es recomendado por Honeywell Vocollect. Este acceso desde el exterior puede provocar un bloqueo en la tabla e interferir en VoiceLink. Utilice este método bajo su propio riesgo y solo si nadie está conectado a VL a través del navegador o mediante un dispositivo de talkman.\n\n¿Desea exportar el DV seleccionado en VoiceLink?'
    , 'dv.alert7' => '¡Actualización realizada con éxito!'
    , 'dv.alert8' => '¿Quieres imprimir las etiquetas de las ubicaciones seleccionadas?'
    , 'dv.alert9' => "¿Cuál es la IP de la impresora (xxx.xxx.xxx.xxx:port)?"
    , 'dv.alert10' => "¡Las etiquetas fueron enviadas a la impresora con éxito!"
    , 'dv.alert11' => '¿Quieres imprimir las etiquetas de los DVs generados hoy?'
    , 'dv.alert12' => '*** Solo use este proceso si su VoiceLink está configurado para importar desde un archivo plano ***\n\nEste proceso generará un archivo plano coreloc*.dat (en la carpeta raíz de esta aplicación) que se usará para importar en VoiceLink.\n\nTendrá que mover este archivo a la carpeta correcta del servidor VoiceLink manualmente. Por lo general, es:\n\nC:\\\Archivos de programa\\\Vocollect\\\Import\\\{nombre del sitio} --- donde (nombre del sitio) es el nombre del Centro de distribución\n\nPero quizá lo han cambiado durante la instalación de VL\n\n¿Desea continuar?'
    , 'dv.alert13' => '*** Solo use esto si su VoiceLink está configurado para importar desde la tabla ***\n\nEste proceso exportará todas las ubicaciones con el DV seleccionado a una tabla temporal en la base de datos de VoiceLink, y se importará a VoiceLink automáticamente\n\n¿Quieres continuar?'
    , 'dv.alert14' => '*** Solo use esto si está utilizando VoiceLink 5.\n\n¿Desea continuar?'
    , 'dv.alert15' => 'Error al intentar exportar !! Compruebe su credencial API. Código de error = '
    , 'dv.alert16' => 'Esto actualizará todos los DVs en todas las ubicaciones en el CD.\n\n¿Estás seguro de que quieres hacer esto?'
    , 'dv.alert17' => 'Esto se debe hacer solo una vez.\n\n¿Está REALMENTE seguro de que quiere hacer esto?'

    , 'connection.failed.parms' => "Error en la conexión a la base de datos. Revise los parámetros informados."
    , 'connection.ok.table' => "Parámetros grabados con éxito. La tabla ya existe y no se ha cambiado"

    , 'back' => "Regresar"
];