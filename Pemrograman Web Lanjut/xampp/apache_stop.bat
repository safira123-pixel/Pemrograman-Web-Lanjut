@echo off
cd /D %~dp0
cmd.exe /C start "" /MIN call "D:\Fira\Kuliah\KULIAH TEKNIK INFORMATIKA\SEMESTER 3\Desain dan Pemrograman Web\xampp\killprocess.bat" "httpd.exe"
if not exist apache\logs\httpd.pid GOTO exit
del apache\logs\httpd.pid

:exit
