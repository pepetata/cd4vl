<?php

return [
      'welcome.title' => "Sistema Auxiliar de VoiceLink"
    , 'welcome.subtitle' => "Ubicación y Dígito de verificación"
    , 'welcome.instruction.title' => "Instrucciones"
    , 'welcome.instruction.setup' => "Configurar"
    , 'welcome.instruction.setup.line1' => "Haga clic en el botón [Configurar];"
    , 'welcome.instruction.setup.line2' => "Introduzca los parámetros para acceder a la base de datos de VoiceLink;"
    , 'welcome.instruction.setup.line3' => "Grabe los parámetros;"
    , 'welcome.instruction.setup.line4' => "La tabla de los Dígitos de Verificación se guardará en la base de datos del VL;"
    , 'welcome.instruction.setup.line5' => "Si la tabla ya existe, no se borrará;"
    , 'welcome.instruction.setup.line6' => "Si es necesario, borre la tabla ('dv_locations') manualmente."
    , 'welcome.instruction.location' => "Ubicación"
    , 'welcome.instruction.location.line1' => "Haga clic en el botón [Ubicación];"
    , 'welcome.instruction.location.line2' => "El primero en hacer es copiar las direcciones del Voicelink;"
    , 'welcome.instruction.location.line3' => "Para ello, haga clic en el botón [Copiar ubicaciones de VoiceLink];"
    , 'welcome.instruction.location.line4' => "Esto se puede hacer en cualquier momento porque el sistema sólo copia las ubicaciones que no existe;"
    , 'welcome.instruction.location.line5' => "Las modificaciones se guardan automáticamente cuando el cursor sale del campo."
    , 'welcome.instruction.location.line6' => "Si las ubicaciones de un pasillo son iguales a otro pasillo, utilice el botón [Copiar del pasillo];"
    , 'welcome.instruction.location.line7' => "Lo ideal es utilizar sólo los campos pasillo y ubicación;"
    , 'welcome.instruction.location.line8' => "Si necesita usar nivel, utilice letras en la ubicación: 11A, 45C."
    , 'welcome.instruction.cd' => "Dígitos de Verificación"
    , 'welcome.instruction.cd.line1' => "Haga clic en el botón [DV];"
    , 'welcome.instruction.cd.line2' => "El primero en hacer es seleccionar cada pasillo;"
    , 'welcome.instruction.cd.line3' => "A continuación, seleccione todas las direcciones del pasillo o sólo algunos;"
    , 'welcome.instruction.cd.line4' => "Haga clic en el botón [Generar DVs] para la generación de los dígitos de verificación de las ubicaciones seleccionadas;"
    , 'welcome.instruction.cd.line5' => "Seleccione la cantidad de dígitos para el DV. <strong> El ideal sería 2 o 3 (no importa que el DV se repite en el pasillo)</strong>"
    , 'welcome.instruction.cd.line6' => "El sistema se asegurará de que el DV no se repite en las ubicaciones:"
    , 'welcome.instruction.cd.line7' => "al lado si es sin nivel, es decir, el DV de la ubicación 5 no será igual a las ubicaciones 3, 4, 6 o 7;"
    , 'welcome.instruction.cd.line8' => "al lado si es con nivel, o sea, el DV de la ubicación 5C no será igual a las ubicaciones 5B, 5D, 4C o 6C;"
    , 'welcome.instruction.cd.line9' => "en otro pasillo con ubicación igual, es decir, el DV de la ubicación 29 no será igual a otra ubicación 29 de otros pasillos."
    , 'welcome.instruction.cd.line10' => "Es muy recomendable cambiar el DV de las ubicaciones más visitadas."
    , 'welcome.instruction.cd.line11' => "Para ello, introduzca la lista de estas ubicaciones y haga clic en [Buscar ubicaciones de la lista];"
    , 'welcome.instruction.cd.line12' => "Para imprimir las etiquetas:"
    , 'welcome.instruction.cd.line13' => "Seleccione el pasillo, seleccione las ubicaciones y luego haga clic en [Imprimir DVs seleccionados];"
    , 'welcome.instruction.cd.line14' => "Haga clic en [Imprimir DV generados hoy];"
    , 'welcome.instruction.cd.line15' => "Haga el giro de los DV con frecuencia para evitar la memorización."
    , 'welcome.instruction.cd.line16' => "Para ello, decida cuál será utilizado en el día y haga clic en los botones de 'Actualizar DVs en VoiceLink'"
    , 'welcome.instruction.cd.line17' => "No se olvide de avisar a la operación cuál es el DV del día."

    , 'acessandodb.title' => "Sistema Auxiliar de VoiceLink"
    , 'acessandodb.h1' => "Acceso a la base de datos de VoiceLink"
    , 'acessandodb.h2' => "Por favor espere..."

    , 'errordb.title' => "Sistema Auxiliar de VoiceLink"
    , 'errordb.h1' => "Ha habido un error para acceder a la base de datos !!!"

    , 'configurar.title' => "Sistema Auxiliar de VoiceLink - Configurar"
    , 'configurar.h2' => "Configuración de la base de datos"
    , 'configurar.save' => "Grabar"
    , 'configurar.cancel' => "Cancelar"
    , 'configurar.saved' => "Parámetros grsabados con éxito. La tabla ya existe y no fue cambiada !!!"
    , 'configurar.permission' =>"No se pudo crear la tabla requerida !! Posible problema de permiso."
    , 'configurar.alert1' => '¡¡Espere!! ¡Grsabando los parámetros!!'
    , 'configurar.alert2' => "¡Parámetros guardados y tabla creada con éxito!"

    , 'endereco.title' => "Sistema Auxiliar de VoiceLink - Ubicación"
    , 'endereco.selectcd' => "Seleccione el CD"
    , 'endereco.cd' => "Centro de distribución: "
    , 'endereco.copyVL' => "Copiar ubicaciones de VoiceLink"
    , 'endereco.copying' => "Espera !! Copiando ubicaciones de VoiceLink"
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
    , 'endereco.alert9' => '¿Confirmar que desea copiar las ubicaciones de VL?'
    , 'endereco.alert10' => '¡Nada encontrado para copiar!'
    , 'endereco.alert11' => '¡Copia terminada! Ubicaciones copiadas ='
    , 'endereco.alert12' => "¡Seleccione el pasillo de origen!"
    , 'endereco.alert13' => '¿Confirma que desea copiar las ubicaciones desde el pasillo'

    , 'dv.title' => "Sistema Auxiliar de VoiceLink - Dígitos de Verificación"
    , 'dv.selectcd' => "Seleccione el CD"
    , 'dv.dc' => "Centro de distribución: "
    , 'dv.updateVL' => "Actualizar DV en VoiceLink"
    , 'dv.printselected' => "Imprimir DVs seleccionados"
    , 'dv.printtoday' => "Imprimir DVs creados hoy"
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
    , 'dv.alert6' => '¿Desea actualizar el DV seleccionado en VoiceLink?'
    , 'dv.alert7' => '¡Actualización realizada con éxito!'
    , 'dv.alert8' => '¿Quieres imprimir las etiquetas de las ubicaciones seleccionadas?'
    , 'dv.alert9' => "¿Cuál es la IP de la impresora (xxx.xxx.xxx.xxx:port)?"
    , 'dv.alert10' => "¡Las etiquetas fueron enviadas a la impresora con éxito!"
    , 'dv.alert11' => '¿Quieres imprimir las etiquetas de los DVs generados hoy?'

    , 'connection.failed.parms' => "Error en la conexión a la base de datos. Revise los parámetros informados."
    , 'connection.ok.table' => "Parámetros grabados con éxito. La tabla ya existe y no se ha cambiado"

    , 'back' => "Regresar"
];