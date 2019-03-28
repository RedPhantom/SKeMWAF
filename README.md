README
======

Required configuration for peoper functioning of the application:
see "./config.php" for more information. For any questions, submit
a ticket.

Database:
	
	PDO is used and must be installed on the system. Any other connection
	method is not guarenteed to insure application functionality.
	
	A user with SELECT, INSERT, DELETE etc... permission user name & password
	must be used.

	ulogin files were modified and therefore must be used as included. You MUST NOT
	use a clean installation of ulogin. If you do, a reconfiguration of all of the config
	files is required. The propability of proper application functionalities
	is very low.
	
	For any case, review and edit ./files/p/ulogin/config/main.inc.php .
	
	You can custom edit ./index.php to your needs. Reading of the ulogin documentation
	is a must for proper set up of the system.
	
	The database snapshot is located in ./dbsnapshot.sql, and you can import it to your
	database via phpmyadmin or just execute the file.
	
	Default username and password for the development setup is:
		username:	test
		password:	1234
		
Software:
	PHP 5.6.24 or higher. The development machine uses PHP 5.6.24-0+deb8u1.
	mysql  Ver 14.14 Distrib 5.5.50.
	PDO Plugin for PHP.
	Apache or other server software.
	A linux installation is recommended.

Hardware:
	This application will operate fully on a local address network
	and does not require an internet connection.
	A connection to the database is required, however.
