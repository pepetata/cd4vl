# cd4vl 

Check Digit for Honeywell Vocollect VoiceLink

This app is intended to simplify the product addresses and to create five check digits for each location:

* It copies the locations from VL;
* Allow to edit those locations to have only corridor and slot information (can have other but it is not recommended);
* Generate check digits;
* Print labels for the locations.

It comes with its own Apache v2.4 for Windows.

*** SQL Server ONLY ***

To use it, run the start.bat file and open the browser with the url localhost:9080

NOTE:

* this app hasn't been tested in production yet. Be sure to have a VoiceLink database backup before testing it.
* the label layout is not done. You have to do it: change the file cd4vl\Apache24\htdocs\cd4vl\public\labels\etiqueta.txt.
* the label is using ZPL.
* please develop your own label and make it available for others: etiquetaXXmmLLL.txt --> XX - label width, LLL - Printer language (ZPL).
* tested in Windowns 8 and Windows 10.

# Instalation
* Access: https://github.com/pepetata/cd4vl.
* Download the aplication (click on [Clone or Download].
* Copy the content of the zip file on you machine. This can be any computer with access to the VoiceLink server.
* Run the start.bat file that is on the root folder of the application. It will open a "Command Prompt" window.
* Access the application at http:\\localhost:9080
* When you are done with the application, you can close the "Command Prompt" window.

# Best Practices - Locations
Following the concept that __the less the operator listens, the better; the less the operator speaks, the better__, we should try to reduce the position identification when using the voice system.

When possible, it is recommended to use only two information for identification: corridor and position. Something like:

* aisle 4 slot 56
* aisle 15 slot 2
* aisle 28 slot 123

__To identify the level you can use alphabetic characters like A, B, C, etc:

* aisle 2 slot 3C
* aisle 4 slot 15A
* aisle 18 slot 12D

Avoid using pre-aisle and post-aisle information when possible.

# Best Practices - Check Digit
The check digit is an important instrument of the voice solution as it allows the increase of accuracy of the operations performed with the voice system. It is therefore essential to take due care of this instrument.

It is recommended to use only two or three digits in the check digits to make it shorter for the operator to say them and to reduce the possibility of voice recognition error.

It is okay to repeat the same check digit in the same aisle, but it is important that the repetition is not close to one another. It is also important that repetition is not in the same position in different aisle. That is, each position 10 of each aisle must have a different check digit to prevent the operator from mistaking the aisle but going in the correct slot.

This is also very important:

* __Never use the slot number (or part of it).__
* __Never use the product code or EAN (or part of it).__
* __Do not use special or alphabetic characters.__

A feature of check digits is that operators memorize over time because they visit the positions thousands of times. And this is not good as it can affect the accuracy of the picking since the operator can say the digit before reaching the slot and get the product from the wrong slot.

To avoid memorization, it is recommended to use three or more labels (side by side) with different colors. Each tag contains a different check digit and should be used alternately over time. For example, in the first week the yellow label is used, the second week the red label, etc .:

yellow	|red	|blue	|green
--------|-------|-------|--------
65	|37	|94	|26

Another example of label to avoid memorization is to use the check digits inside a figure (circle, square, triangle, etc).

Even with this process, you have to __change the check digits from time to time in the most visited positions__.

The text font for the check digit should be small enough to force the operators to be in front of the slot to be able to read them. If the text font is too large, the operator will be able to read from a far away, say it before getting to the slot and pick the product from the wrong slot.

# Setup
* Click the __[Setup]__ button;
* Enter the parameters for accessing the VoiceLink database;
* Save the parameters;
* The Check Digit table ('dv_locations') will be created in the VL database;
* If the table already exists, it will not be erased;
* If necessary, delete the table manually.

# Location
* Click the __[Location]__ button;
* The first thing to do is copy the locations from Voicelink;
* To do this, you have 3 options:
** Direct access to VoiceLink table: click the __[Copy VoiceLink Locations]__ button --> this method is not recommended by Honeywell Vocollect as it may interfere with the proper operation of VoiceLink;
** Import Locations from a Flat File: select the flat file to import and click on the apropriate __[Import]__ button;
** Import Locations from a Flat File: select the flat file to import and click on the apropriate __[Import]__ button;
** Import Locations from a CSV File: select the .csv file to import and click on the apropriate __[Import]__ button;
* This can be done at any time because the system will only copy the addresses that do not exist;
* Modifications are saved automatically when the cursor leaves the field.
* If the locations of an aisle are the same as another aisle, use the __[Copy from Aisle]__ button;
* __The ideal is to use only the aisle and slot fields__;
* __If you need to use level, use letters in the slot: 11A, 45C__.

# Check Digit
* Click the __[DV]__ button;
* The first to do is select the Distribution Center and than select the aisle;
* Then select all the locations on the aisle or just a few;
* Click the __[Generate DVs]__ button to generate the check digits of the selected locations;
* Select the number of digits for the CD. __The ideal would be 2 or 3 (it does not matter that the CD repeats in the aisle)__;

The system will ensure that DV will not be repeated:

* in the slot next to it, if it is has no level, ie, the CD on slot 5 will not be the same as in slot 3, 4, 6 or 7;
* next to it, if it has level, ie, the CD on slot 5C will not be equal to slot 5B, 5D, 4C or 6C;
* in another aisle with equal slot number, ie, the CD of slot 29 will not be the same as another slot 29 of other aisle.

__It is highly recommended to change the CD on the most visited locations.__

To do this, enter the locations list, and click __[Search locations from the list]__;

* Select all of the locations;
* Click the __[Generate DVs]__ button;

To print the labels:

* Select the aisle, select the locations and then click __[Print Selected CDs]__ or;
* Click __[Print CDs Generated Today]__;

__Rotate CDs frequently to avoid memorization.__

To do this,

* decide which CD will be used on the day
* click the 'Update CDs in VoiceLink' button.

Do not forget to tell the operation which is the CD of the day.
