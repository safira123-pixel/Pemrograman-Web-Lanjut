@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop


"D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\mysql\bin\mysqld" --defaults-file="D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\mysql\bin\my.ini" --standalone
if errorlevel 1 goto error
goto finish

:stop
cmd.exe /C start "" /MIN call "D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\killprocess.bat" "mysqld.exe"

if not exist "D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\mysql\data\%computername%.pid" goto finish
echo Delete %computername%.pid ...
del "D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\mysql\data\%computername%.pid"
goto finish


:error
echo MySQL could not be started

:finish
exit
