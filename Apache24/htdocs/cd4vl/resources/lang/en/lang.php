<?php

return [
    'welcome.title' => "VoiceLink Addon System"
    , 'welcome.subtitle' => "Location & Check Digits"
    , 'welcome.instruction.title' => "Instructions"

    , 'welcome.instruction.cd4vl' => "CD4VL"
    , 'welcome.instruction.cd4vl.nlines' => "16"
    , 'welcome.instruction.cd4vl.line1' => "<p><strong>Check Digit for Honeywell Vocollect VoiceLink.</strong></p>"
    , 'welcome.instruction.cd4vl.line2' => "<p>This app is intended to simplify the product locations and to create five check digits for each location:</p>"
    , 'welcome.instruction.cd4vl.line3' => "<li>It import the locations from VL in 3 different ways;</li>"
    , 'welcome.instruction.cd4vl.line4' => "<li>Allow to edit those locations to have only aisle and slot information (can have other but it is not recommended);</li>"
    , 'welcome.instruction.cd4vl.line5' => "<li>Generate check digits;</li>"
    , 'welcome.instruction.cd4vl.line6' => "<li>Print labels for the locations.</li>"
    , 'welcome.instruction.cd4vl.line7' => "<li>Export the check digits to VoiceLink in several ways.</li>"
    , 'welcome.instruction.cd4vl.line8' => "<p>It comes with its own Apache v2.4 for Windows. You can run in it in any computer with access to VoiceLink server.</p>"
    , 'welcome.instruction.cd4vl.line9' => "<p><strong><code>*** SQL Server ONLY ***</code></strong></p>"
    , 'welcome.instruction.cd4vl.line10' => "<p>To use it, run the start.bat file and open the browser with the url http://localhost:9080</p>"
    , 'welcome.instruction.cd4vl.line11' => "<p>NOTE:</p>"
    , 'welcome.instruction.cd4vl.line12' => "<li>this app hasn't been tested in production yet. Be sure to have a VoiceLink database backup before testing it.</li>"
    , 'welcome.instruction.cd4vl.line13' => "<li>the label layout is not done. Change the file <code>cd4vl\Apache24\htdocs\cd4vl\public\labels\etiqueta.txt</code>.</li>"
    , 'welcome.instruction.cd4vl.line14' => "<li>the label is using ZPL.</li>"
    , 'welcome.instruction.cd4vl.line15' => "<li>please develop your own label and make it available for others: etiquetaXXmmLLL.txt --> XX - label width, LLL - Printer language (ZPL).</li>"
    , 'welcome.instruction.cd4vl.line16' => "<li>tested in Windowns 8 and Windows 10.</li>"

    , 'welcome.instruction.instalation' => "Instalation"
    , 'welcome.instruction.instalation.nlines' => "6"
    , 'welcome.instruction.instalation.line1' => '<li>Access: <a href="https://github.com/pepetata/cd4vl" target="_blank">https://github.com/pepetata/cd4vl</a>.</li>'
    , 'welcome.instruction.instalation.line2' => "<li>Download the aplication (click on <strong><code>[Clone or Download]</code></strong>.</li>"
    , 'welcome.instruction.instalation.line3' => "<li>Copy the content of the zip file on you machine. It can be any computer with access to the VoiceLink server.</li>"
    , 'welcome.instruction.instalation.line4' => "<li>Run the <code>start.bat</code> file that is on the root folder of the application.</li>"
    , 'welcome.instruction.instalation.line5' => '<li>Access the application at <a href="http://localhost:9080" target="_blank">http://localhost:9080</a></li>'
    , 'welcome.instruction.instalation.line6' => '<li> When you are done with the application, you can close the "Command Prompt" window.</li>'

    , 'welcome.instruction.bplocation' => "Best Practices - Locations"
    , 'welcome.instruction.bplocation.nlines' => "5"
    , 'welcome.instruction.bplocation.line1' => '<p>Following the concept that <strong><code>the less the operator listens, the better; the less the operator speaks, the better</code></strong> we should try to reduce the position identification when using the voice system.</p>'
    , 'welcome.instruction.bplocation.line2' => '<p>When possible, it is recommended to use only two information for identification: corridor and position. Something like:</p>'
    , 'welcome.instruction.bplocation.line3' => "<div class='text-center'><img alt='endreços' src='images/locations.png'></div>"
    , 'welcome.instruction.bplocation.line4' => '<p>To identify the level you can use alphabetic characters like A, B, C, etc:</p>'
    , 'welcome.instruction.bplocation.line5' => '<p>Avoid using pre-aisle and post-aisle information when possible.</p>'

    , 'welcome.instruction.bpcd' => "Best Practices - Check Digits - CD"
    , 'welcome.instruction.bpcd.nlines' => "21"
    , 'welcome.instruction.bpcd.line1' => '<p>The check digit is an important instrument of the voice solution as it allows the increase of accuracy of the operations performed with the voice system. It is therefore essential to take due care of this instrument.</p>'
    , 'welcome.instruction.bpcd.line2' => '<p></p>'
    , 'welcome.instruction.bpcd.line3' => '<p>It is recommended to use only two or three digits in the check digits to make it shorter for the operator to say them and to reduce the possibility of voice recognition error.</p>'
    , 'welcome.instruction.bpcd.line4' => '<p></p>'
    , 'welcome.instruction.bpcd.line5' => '<p>It is okay to repeat the same check digit in the same aisle, but it is important that the repetition is not close to one another. It is also important that repetition is not in the same position in different aisle. That is, each position 10 of each aisle must have a different check digit to prevent the operator from mistaking the aisle but going in the correct slot.</p>'
    , 'welcome.instruction.bpcd.line6' => '<p></p>'
    , 'welcome.instruction.bpcd.line7' => '<p>This is also very important:</p>'
    , 'welcome.instruction.bpcd.line8' => '<li style="color:red"><strong>Never use the slot number (or part of it).</strong></li>'
    , 'welcome.instruction.bpcd.line9' => '<li style="color:blue"><strong>Never use the product code or EAN (or part of it).</strong></li>'
    , 'welcome.instruction.bpcd.line10' => '<li><strong>Do not use special or alphabetic characters.</strong></li>'
    , 'welcome.instruction.bpcd.line11' => '<p></p>'
    , 'welcome.instruction.bpcd.line12' => '<p>A feature of check digit is that operators memorize over time because they visit the positions thousands of times. And this is not good as it can affect the accuracy of the picking since the operator can say the digit before reaching the slot and get the product from the wrong slot.</p>'
    , 'welcome.instruction.bpcd.line13' => '<p></p>'
    , 'welcome.instruction.bpcd.line14' => '<p>To <strong>avoid memorization</strong>, it is recommended to use three or more labels (side by side) with different colors. Each tag contains a different check digit and should be used alternately over time. For example, in the first week the yellow label is used, the second week the red label, etc .:</p>'
    , 'welcome.instruction.bpcd.line15' => "<div class='text-center'><img  style='width:60%' alt='Check digit style' src='images/dv-2.png'></div>"
    , 'welcome.instruction.bpcd.line16' => '<p></p><p>Another example of label to avoid memorization is to use the check digits inside a figure (circle, square, triangle, etc).</p>'
    , 'welcome.instruction.bpcd.line17' => "<div class='text-center'><img  style='width:60%' alt='Check digit style' src='images/dv-1.png'></div>"
    , 'welcome.instruction.bpcd.line18' => '<p></p>'
    , 'welcome.instruction.bpcd.line19' => '<p>Even with this process, you have to <strong>change the check digits from time to time in the most visited positions</strong>.</p>'
    , 'welcome.instruction.bpcd.line20' => '<p></p>'
    , 'welcome.instruction.bpcd.line21' => '<p>The text font for the check digit should be small enough to force the operators to be in front of the slot to be able to read them. If the text font is too large, the operator will be able to read from a far away, say it before arriving at the slot and pick the product from the wrong slot.</p>'

    , 'welcome.instruction.setup' => "Setup"
    , 'welcome.instruction.setup.nlines' => "7"
    , 'welcome.instruction.setup.line1' => " <li>Click the <strong><code>[Setup]</code></strong> button;</li>"
    , 'welcome.instruction.setup.line2' => "<li>Enter the parameters for accessing the VoiceLink database;</li>"
    , 'welcome.instruction.setup.line3' => "<li>Enter the parameters for accessing the VoiceLink API (only if you are using VoiceLink 5 or later);</li>"
    , 'welcome.instruction.setup.line4' => "<li>Save the parameters;</li>"
    , 'welcome.instruction.setup.line5' => "<li>The Check Digit table ('dv_locations') will be created in the VL database;</li>"
    , 'welcome.instruction.setup.line6' => "<li>If the table already exists, it will not be erased;</li>"
    , 'welcome.instruction.setup.line7' => "<li>If necessary, delete the table manually.</li>"

    , 'welcome.instruction.location' => "Location"
    , 'welcome.instruction.location.nlines' => "11"
    , 'welcome.instruction.location.line1' => "<li>Click the <strong><code>[Location]</code></strong> button;</li>"
    , 'welcome.instruction.location.line2' => "<li>The first thing to do is copy the locations from Voicelink;</li>"
    , 'welcome.instruction.location.line3' => "<li>To do this, you have 3 options:</li>"
    , 'welcome.instruction.location.line4' => "<ul><li><strong style='color:red'>Direct access to VoiceLink table</strong>: click the <strong>[Copy VoiceLink Locations]</strong> button --> this method is not recommended by Honeywell Vocollect as it may interfere with the proper operation of VoiceLink;</li>"
    , 'welcome.instruction.location.line5' => "<li><strong style='color:red'>Import Locations from a Flat File</strong>: select the flat file to import and click on the apropriate <strong>[Import]</strong> button. The flat file must have the same layout described in the VoiceLink Implementatio Guide;</li>"
    , 'welcome.instruction.location.line6' => "<li><strong style='color:red'>Import Locations from a CSV File</strong>: select the .csv file to import and click on the apropriate <strong>[Import]</strong> button. The .csv file must have the following fields in this order: scannedVerification, preAisle, aisle, postAisle, slot, spokenVerification.;</li></ul>"
    , 'welcome.instruction.location.line7' => "<li>This can be done at any time because the system will only copy the addresses that do not exist;</li>"
    , 'welcome.instruction.location.line8' => "<li>Modifications are saved automatically when the cursor leaves the field.</li>"
    , 'welcome.instruction.location.line9' => "<li>If the locations of an aisle are the same as another aisle, use the <strong><code>[Copy from Aisle]</code></strong> button;</li>"
    , 'welcome.instruction.location.line10' => "<li><strong>The ideal is to use only the aisle and slot fields;</strong></li>"
    , 'welcome.instruction.location.line11' => "<li><strong>If you need to use level, use letters in the slot: 11A, 45C.</strong></li>"

    , 'welcome.instruction.cd' => "Check Digit"
    , 'welcome.instruction.cd.nlines' => "24"
    , 'welcome.instruction.cd.line1' => "<li>Click the <strong><code>[DV]</code></strong> button;</li>"
    , 'welcome.instruction.cd.line2' => "<li>Select the Distribution Center.</li>"
    , 'welcome.instruction.cd.line3' => "<li>The first time you use the system, you must generate de CDs for all locations.</li>"
    , 'welcome.instruction.cd.line4' => "<li>So, only on the first time, click the <strong><code>[Generate CDs for All Locations]</code></strong> button.</li>"
    , 'welcome.instruction.cd.line5' => "<li>Otherwise, you must select the aisle you want.</li>"
    , 'welcome.instruction.cd.line6' => "<li>Then select all the locations on the aisle or just a few;</li>"
    , 'welcome.instruction.cd.line7' => "<li>Click the <strong><code>[Generate CDs]</code></strong> button to generate the check digits for the selected locations;</li>"
    , 'welcome.instruction.cd.line8' => "<li>Select the number of digits for the CD. <strong>The ideal would be 2 or 3 (it does not matter that the CD repeats in the aisle)</strong>;</li>"
    , 'welcome.instruction.cd.line9' => "<p></p><p>The system will ensure that CD will not be repeated:</p>"
    , 'welcome.instruction.cd.line10' => "<ul><li>in the slot next to it, if it is has no level, ie, the CD on slot 5 will not be the same as in slot 3, 4, 6 or 7;</li>"
    , 'welcome.instruction.cd.line11' => "<li>next to it, if it has level, ie, the CD on slot 5C will not be equal to slot 5B, 5D, 4C or 6C;</li>"
    , 'welcome.instruction.cd.line12' => "<li>in another aisle with equal slot number, ie, the CD of slot 29 will not be the same as another slot 29 of other aisle.</li></ul>"
    , 'welcome.instruction.cd.line13' => "<p></p><p style='color:red'><strong>It is highly recommended to change the CD on the most visited locations.</strong></p>"
    , 'welcome.instruction.cd.line14' => "<p>To do this:</p><ul><li>enter the locations list;<li>click <strong><code>[Search locations from the list]</code></strong>;<li>Select all of the locations;</li><li>Click the <strong><code>[Generate CDs]</code></strong> button;</li></ul>"
    , 'welcome.instruction.cd.line15' => "<p></p><p>To print the labels:</p>"
    , 'welcome.instruction.cd.line16' => "<ul><li>Select the aisle, select the locations and then click <strong><code>[Print Selected CDs]</code></strong> or;</li>"
    , 'welcome.instruction.cd.line17' => "<li>Click <strong><code>[Print CDs Generated Today]</code></strong>;</li></ul>"
    , 'welcome.instruction.cd.line18' => "<p></p><p><strong>Rotate CDs frequently to avoid memorization.</strong></p>"
    , 'welcome.instruction.cd.line19' => "<p>To do this, you have to decide which CD will be used on the day and choose the apropriate export method:</p>"
    , 'welcome.instruction.cd.line20' => "<li><strong style='color:red'>Export CDs to VoiceLink</strong>: this method will access a VoiceLink table directly by this application and this is not recommended by Honeywell Vocollect. This access from outside can provoque a lock on the table and interfere on VoiceLink normal operation. Use this method on your own risk and only if nobody is connected to VL via browser or via a talkman device.</li>"
    , 'welcome.instruction.cd.line21' => "<li><strong style='color:red'>Export CDs to Flat File</strong>: only use this method if your VoiceLink is setup to import from flat file. This method will generate a coreloc*.dat flat file (in the root folder of this application) to be used to import in VoiceLink. You will have to move this file to the correct VoiceLink server folder manually. Usually it is: C:\\Program Files\\Vocollect\\Import\{site name} --- where {site name} is the name of the Distribution Center. But it could have being changed during VL installation.</li>"
    , 'welcome.instruction.cd.line22' => "<li><strong style='color:red'>Export CDs to Import Table</strong>: only use this if your VoiceLink is setup to import from table. This process will export all locations with the selected CD to a temporary table in the VoiceLink database, and will be imported to VoiceLink automatically.</li>"
    , 'welcome.instruction.cd.line23' => "<li><strong style='color:red'>Export CDs via Web Services</strong>: only use this if you are using VoiLink version 5 or later. This process will export all locations with the selected CD via Web Services and will be impirted to Voicelink automatically.</li>"
    , 'welcome.instruction.cd.line24' => "<p></p><p>Do not forget to tell the operation which is the CD of the day.</p>"
    
    , 'acessandodb.title' => "VoiceLink Addon System"
    , 'acessandodb.h1' => "Accessing VoiceLink database"
    , 'acessandodb.h2' => "Wait..."

    , 'errordb.title' => "VoiceLink Addon System"
    , 'errordb.h1' => "There was an error accessing the database!!!"

    , 'configurar.title' => "VoiceLink Addon System"
    , 'configurar.dbparam' => "Database access parameters"
    , 'configurar.vlparam' => "VoiceLink REST parameters"
    , 'configurar.save' => "Save"
    , 'configurar.cancel' => "Cancel"
    , 'configurar.saved' => "Parameters saved successfully. Table already exists and was not changed!!!"
    , 'configurar.permission' =>"Could not create required table !! Possible permission problem."
    , 'configurar.alert1' => 'Wait!! Saving the parameters!'
    , 'configurar.alert2' => "Parameters saved and table created successfully !!!"

    , 'endereco.title' => "VoiceLink Addon System - Locations"
    , 'endereco.selectcd' => "Select DC"
    , 'endereco.cd' => "Distribution Center: "
    , 'endereco.importVL' => "Import Locations from VL"
    , 'endereco.importFix' => "Import Locations from a Flat File"
    , 'endereco.importCSV' => "Import Locations from a CSV File"
    , 'endereco.import' => "Import"
    , 'endereco.copying' => "Wait!! Importing locations..."
    , 'endereco.copyaisle' => "Copy from aisle: "
    , 'endereco.copyaisleB' => "Copy"
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
    , 'endereco.alert9' => 'This import process will access a VoiceLink table directly and this is not recommended by Honeywell Vocollect. This access from outside can provoque a lock on the table and interfere on VoiceLink. Use this process on your own risk and only if nobody is connected to VL via browser or via a talkman device.\n\n Confirm that you want to copy locations from VL?'
    , 'endereco.alert10' => 'Nothing found to copy!!'
    , 'endereco.alert11' => 'Import finished !!! Imported locations = '
    , 'endereco.alert12' => "Select the source aisle !!!"
    , 'endereco.alert13' => 'Do you confirm that you want to copy the locations from the aisle'
    , 'endereco.alert14' => 'This process will only import new locations from the selected flat file.\n\nConfirm that you want to import locations?'
    , 'endereco.alert15' => 'First select a file !!'
    , 'endereco.alert16' => 'Import finished !!! Imported/read locations = '
    , 'endereco.alert17' => 'This process will only import new locations from the selected .csv file.\n\nThe .csv file must have the following fields in this order: scannedVerification, preAisle, aisle, postAisle, slot, spokenVerification.\n\nConfirm that you want to import locations?'
    , 'endereco.alert18' => ''

    , 'dv.title' => "VoiceLink Addon System - Check Digit"
    , 'dv.selectcd' => "Select DC"
    , 'dv.dc' => "Distribution Center: "
    , 'dv.updateVL' => "Export CDs via Database"
    , 'dv.exportFix' => "Export CDs to Flat File"
    , 'dv.exportTable' => "Export CDs via Import Table"
    , 'dv.exportRest' => "Export CDs via Web Services"
    , 'dv.printselected' => "Print selected CDs"
    , 'dv.printtoday' => "Print CDs Generated Today"
    , 'dv.genDVAllLocs' => "Generate CDs for All Locations"
    , 'dv.generatingAll' => "Wait!! Creating CDs for all locations."
    , 'dv.updating' => "Wait!! Exporting Cds ..."
    , 'dv.printing' => "Wait!! Printing labels."
    , 'dv.searchlist' => "Search locations from the list"
    , 'dv.listing' => "Wait!! Searching locations from the list"
    , 'dv.filter' => "Select aisle: "
    , 'dv.generate' => "Generate CDs"
    , 'dv.generating' => "Wait!! Updating CDs for selected locations."
    , 'dv.id' => "Id"
    , 'dv.preaisle' => "Pre-aisle"
    , 'dv.aisle' => "Aisle"
    , 'dv.postaisle' => "Post-aisle"
    , 'dv.slot' => "Slot"
    , 'dv.cd' => "Check Digits"
    , 'dv.error.printing' => "Error during printing!"
    , 'dv.alert1' => "Select locations before !!!"
    , 'dv.alert2' => 'Are you sure to generate CDs for the selected locations?'
    , 'dv.alert3' => "Number of digits for the CD?"
    , 'dv.alert4' => "Enter a number between 2 and 5 !!!"
    , 'dv.alert5' => "Fill in the field with the locations you want to display !!!"
    , 'dv.alert6' => 'This method will access a VoiceLink table directly by this application and this is not recommended by Honeywell Vocollect. This access from outside can provoque a lock on the table and interfere on VoiceLink. Use this method on your own risk and only if nobody is connected to VL via browser or via a talkman device.\n\n Do you want to export the selected CD to VoiceLink?'
    , 'dv.alert7' => 'Export performed successfully!!'
    , 'dv.alert8' => 'Do you want to print the labels for the selected locations?'
    , 'dv.alert9' => "What is the IP of the printer (xxx.xxx.xxx.xxx:port)?"
    , 'dv.alert10' => "The labels were sent to the printer successfully !!!"
    , 'dv.alert11' => 'Do you want to print the labels of the CDs generated today?'
    , 'dv.alert12' => '*** Only use this if your VoiceLink is setup to import from flat file ***\n\nThis method will generate a coreloc*.dat flat file (in the root folder of this application) to be used to import in VoiceLink.\n\nYou will have to move this file to the correct VoiceLink server folder manually. Usually it is:\n\nC:\\\Program Files\\\Vocollect\\\Import\\\{site name} --- where (site name) is the name of the Distribution Center\n\nBut it could have being changed during VL installation\n\nDo you want to continue?'
    , 'dv.alert13' => '*** Only use this if your VoiceLink is setup to import from table ***\n\nThis method will export all locations with the selected CD to a temporary table in the VoiceLink database, and will be imported to VoiceLink automatically\n\nDo you want to continue?'
    , 'dv.alert14' => '*** Only use this if you are using VoiceLink 5 .\n\nDo you want to continue?'
    , 'dv.alert15' => 'Error trying to export!! Check your API Credential. Error code = '
    , 'dv.alert16' => 'This will update all CDs on all locations on the DC. \n\nAre you sure you want to do this?'
    , 'dv.alert17' => 'This should be done only once.\n\n Are you REALLY sure you want to do this?'

    , 'connection.failed.parms' => "Connection to database failed. Review the reported parameters."
    , 'connection.ok.table' => "Parâmetros gravados com sucesso. Tabela já existe!!!"

    , 'back' => "Back"
];
