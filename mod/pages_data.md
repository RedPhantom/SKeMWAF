
File Listing System
===================
A files.list file is a simple csv database that contains the files that can be outputted to the system.
Currently, these files have to be modified manually.

The data in the file is stored in the following method:

	* Lines in the file (seperated by CR / LF / CRLF) are representing different '''records'''.
	* Columns in the file (seperated by the , [comma] character) are representing ___file data___.
Column 1: File ID
Column 2: File Address (inside folder ./files/)
Column 3: File Title


Exaple row:

info,./files/p/info.htm/Information

File ID: To navigate to the file, you'll have to visit the url <site_root_directory>/index.php?p=___info___
File Address: The contents of the .htm file (or any file/filetype you specify) will be pulled out of the file and displayed.
File Title: The Title of the page will include this value. Depends on the format you specify in the top of index.php.