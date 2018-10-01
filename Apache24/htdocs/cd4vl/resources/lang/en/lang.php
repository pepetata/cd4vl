<?php

return [
    'welcome.title' => "VoiceLink Addon System"
    , 'welcome.subtitle' => "Location & Check Digits"
    , 'welcome.instruction.title' => "Instructions"
    , 'welcome.instruction.setup' => "Setup"
    , 'welcome.instruction.setup.line1' => "Click the [Setup] button;"
    , 'welcome.instruction.setup.line2' => "Enter the parameters for accessing the VoiceLink database;"
    , 'welcome.instruction.setup.line3' => "Save the parameters;"
    , 'welcome.instruction.setup.line4' => "The Check Digit table will be created in the VL database;"
    , 'welcome.instruction.setup.line5' => "If the table already exists, it will not be erased;"
    , 'welcome.instruction.setup.line6' => "If necessary, delete the table ('dv_locations') manually."
    , 'welcome.instruction.location' => "Location"
    , 'welcome.instruction.location.line1' => "Click the [Location] button;"
    , 'welcome.instruction.location.line2' => "The first thing to do is copy the locations from Voicelink;"
    , 'welcome.instruction.location.line3' => "To do this, click the [Copy VoiceLink Locations] button;"
    , 'welcome.instruction.location.line4' => "This can be done at any time because the system will only copy the addresses that do not exist;"
    , 'welcome.instruction.location.line5' => "Modifications are saved automatically when the cursor leaves the field."
    , 'welcome.instruction.location.line6' => "If the locations of an aisle are the same as another aisle, use the [Copy from Aisle] button;"
    , 'welcome.instruction.location.line7' => "The ideal is to use only the aisle and slot fields;"
    , 'welcome.instruction.location.line8' => "If you need to use level, use letters in the slot: 11A, 45C.</strong>"
    , 'welcome.instruction.cd' => "Check Digit"
    , 'welcome.instruction.cd.line1' => "Click the [DV] button;"
    , 'welcome.instruction.cd.line2' => "The first to do is select the aisle;"
    , 'welcome.instruction.cd.line3' => "Then select all the locations on the aisle or just a few;"
    , 'welcome.instruction.cd.line4' => "Click the [Generate DVs] button to generate the check digits of the selected locations;"
    , 'welcome.instruction.cd.line5' => "Select the number of digits for the CD. <strong>The ideal would be 2 or 3 (it does not matter that the CD repeats in the aisle)</strong>;"
    , 'welcome.instruction.cd.line6' => "The system will ensure that DV will not be repeated:"
    , 'welcome.instruction.cd.line7' => "in the slot next to it, if it is has no level, ie, the CD on slot 5 will not be the same as in slot 3, 4, 6 or 7;"
    , 'welcome.instruction.cd.line8' => "next to it, if it has level, ie, the CD on slot 5C will not be equal to slot 5B, 5D, 4C or 6C;"
    , 'welcome.instruction.cd.line9' => "in another aisle with equal slot number, ie, the CD of slot 29 will not be the same as another slot 29 of other aisle."
    , 'welcome.instruction.cd.line10' => "It is highly recommended to change the CD on the most visited locations."
    , 'welcome.instruction.cd.line11' => "To do this, enter the locations list, and click [Search locations from the list];"
    , 'welcome.instruction.cd.line12' => "To print the labels:"
    , 'welcome.instruction.cd.line13' => "Select the aisle, select the locations and then click [Print Selected CDs] or;"
    , 'welcome.instruction.cd.line14' => "Click [Print CDs Generated Today];"
    , 'welcome.instruction.cd.line15' => "Rotate CDs frequently to avoid memorization."
    , 'welcome.instruction.cd.line16' => "To do this, decide which will be used on the day and click the 'Update CDs in VoiceLink' button."
    , 'welcome.instruction.cd.line17' => "Do not forget to tell the operation which is the CD of the day."
    
    , 'acessandodb.title' => "VoiceLink Addon System"
    , 'acessandodb.h1' => "Accessing VoiceLink database"
    , 'acessandodb.h2' => "Wait..."

    , 'errordb.title' => "VoiceLink Addon System"
    , 'errordb.h1' => "There was an error accessing the database!!!"

    , 'configurar.title' => "VoiceLink Addon System"
    , 'configurar.h2' => "Database access parameters"
    , 'configurar.save' => "Save"
    , 'configurar.cancel' => "Cancel"
    , 'configurar.saved' => "Parameters saved successfully. Table already exists and was not changed!!!"
    , 'configurar.permission' =>"Could not create required table !! Possible permission problem."
    , 'configurar.alert1' => 'Wait!! Saving the parameters!'
    , 'configurar.alert2' => "Parameters saved and table created successfully !!!"

    , 'endereco.title' => "VoiceLink Addon System - Locations"
    , 'endereco.selectcd' => "Select DC"
    , 'endereco.cd' => "Distribution Center: "
    , 'endereco.copyVL' => "Copy VoiceLink Locations"
    , 'endereco.copying' => "Wait!!Copying VoiceLink locations."
    , 'endereco.copyaisle' => "Copy from aisle: "
    , 'endereco.copyaisleB' => "Copy from aisle"
    , 'endereco.copyingaisle' => "Wait!! Copying slots from aisle."
    , 'endereco.filter' => "Select aisle: "
    , 'endereco.id' => "Id"
    , 'endereco.preaisle' => "Pre-aisle"
    , 'endereco.preaisleH' => "Fill pre-aisle with the content informed"
    , 'endereco.preaisleXH' => "Delete existing content in the pre-aisle field"
    , 'endereco.aisle' => "Aisle"
    , 'endereco.postaisle' => "Post-aisle"
    , 'endereco.postaisleH' => "Fill in the post-aisle with the content informed"
    , 'endereco.postaisleXH' => "Delete existing content in post-aisle"
    , 'endereco.slot' => "Slot"
    , 'endereco.add1' => "+1 to all"
    , 'endereco.add1H' => "Change the content of all slots starting with the number you will inform"
    , 'endereco.alert1' => "Fill in the field with the content you want !!!"
    , 'endereco.alert2' => 'Confirm that you want to copy the following text in all Post-aisle fields:'
    , 'endereco.alert3' => 'Do you want to delete the content in all Post-aisle fields below?'
    , 'endereco.alert4' => 'Do you want to copy the following text in all Pre-aisle fields:'
    , 'endereco.alert5' => 'Do you want to delete the content in all Pre-aisle fields below?'
    , 'endereco.alert6' => 'Do you want to number all the slots below?'
    , 'endereco.alert7' => 'Starting number?'
    , 'endereco.alert8' => 'Select the Distribution Center before !!!'
    , 'endereco.alert9' => 'Confirm that you want to copy locations from VL?'
    , 'endereco.alert10' => 'Nothing found to copy!!'
    , 'endereco.alert11' => 'Copy finished !!! Copied locations = '
    , 'endereco.alert12' => "Select the source aisle !!!"
    , 'endereco.alert13' => 'Do you confirm that you want to copy the locations from the aisle'

    , 'dv.title' => "VoiceLink Addon System - Check Digit"
    , 'dv.selectcd' => "Select DC"
    , 'dv.dc' => "Distribution Center: "
    , 'dv.updateVL' => "Update CDs in VoiceLink"
    , 'dv.printselected' => "Print selected CDs"
    , 'dv.printtoday' => "Print CDs Generated Today"
    , 'dv.updating' => "Wait!!Updating CDs in VoiceLink."
    , 'dv.printing' => "Wait!! Printing labels."
    , 'dv.searchlist' => "Search locations from the list"
    , 'dv.listing' => "Wait!! Searching locations from the list"
    , 'dv.filter' => "Select aisle: "
    , 'dv.generate' => "Generate DVs"
    , 'dv.generating' => "Wait!! Updating CDs for selected locations."
    , 'dv.id' => "Id"
    , 'dv.preaisle' => "Pre-aisle"
    , 'dv.aisle' => "Aisle"
    , 'dv.postaisle' => "Post-aisle"
    , 'dv.slot' => "Slot"
    , 'dv.cd' => "Check Digits"
    , 'dv.alert1' => "Select locations before !!!"
    , 'dv.alert2' => 'Are you sure to generate DVs for the selected locations?'
    , 'dv.alert3' => "Number of digits for the CD?"
    , 'dv.alert4' => "Enter a number between 2 and 5 !!!"
    , 'dv.alert5' => "Fill in the field with the locations you want to display !!!"
    , 'dv.alert6' => 'Do you want to update the selected CD in VoiceLink?'
    , 'dv.alert7' => 'Update performed successfully!!'
    , 'dv.alert8' => 'Do you want to print the labels of the selected locations?'
    , 'dv.alert9' => "What is the IP of the printer?"
    , 'dv.alert10' => "The labels were sent to the printer successfully !!!"
    

    , 'connection.failed.parms' => "Connection to database failed. Review the reported parameters."
    , 'connection.ok.table' => "Parâmetros gravados com sucesso. Tabela já existe!!!"
    , 'back' => "Back"
];
