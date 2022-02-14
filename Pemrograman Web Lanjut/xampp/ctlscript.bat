@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\hypersonic\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\server\hsql-sample-database\scripts\ctl.bat START)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\ingres\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\ingres\scripts\ctl.bat START)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\mysql\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\mysql\scripts\ctl.bat START)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\postgresql\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\postgresql\scripts\ctl.bat START)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\apache\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\apache\scripts\ctl.bat START)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\openoffice\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\openoffice\scripts\ctl.bat START)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\apache-tomcat\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\apache-tomcat\scripts\ctl.bat START)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\resin\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\resin\scripts\ctl.bat START)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\jetty\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\jetty\scripts\ctl.bat START)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\subversion\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\lucene\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\lucene\scripts\ctl.bat START)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\third_application\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\third_application\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\third_application\scripts\ctl.bat STOP)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\lucene\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\subversion\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\subversion\scripts\ctl.bat STOP)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\jetty\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\jetty\scripts\ctl.bat STOP)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\hypersonic\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\resin\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\resin\scripts\ctl.bat STOP)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\apache-tomcat\scripts\ctl.bat STOP)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\openoffice\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\openoffice\scripts\ctl.bat STOP)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\apache\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\apache\scripts\ctl.bat STOP)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\ingres\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\ingres\scripts\ctl.bat STOP)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\mysql\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\mysql\scripts\ctl.bat STOP)
if exist D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\postgresql\scripts\ctl.bat (start /MIN /B D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\postgresql\scripts\ctl.bat STOP)

:end

