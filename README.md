# cd4vl 

Check Digit for Honeywell Vocollect VoiceLink 

  

This app is intended to simplify the product addresses and to create five check digits for each location:

	- It copies the locations from VL;
	- Allow to edit those locations to have only corridor and slot information (can have other but it is not recommended);
	- Generate check digits;
	- Print labels for the locations.

It comes with its own Apache v2.4 for Windows. 

*** SQL Server ONLY ***  
--> you need to install Microsoft ODBC Driver for SQL Server:
	- check your version
	- https://www.microsoft.com/en-us/download/details.aspx?id=56567
	
To use it, run the start.bat file and open the browser with the url localhost:9080 

 
NOTE: 
- this app hasn't been tested in production yet. Be sure to have a VoiceLink database backup before testing it.
- the label layout is not done. You have to do it: change the file cd4vl\Apache24\htdocs\cd4vl\public\labels\etiqueta.txt.
- please develop your own label and make it available for others: etiquetaXXmmLLL.txt --> XX - label width, LLL - Printer language (ZPL).
- the label is using XPL. 
- tested in Windowns 8.

 

