@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist G:\XAMPP\hypersonic\scripts\ctl.bat (start /MIN /B G:\XAMPP\server\hsql-sample-database\scripts\ctl.bat START)
if exist G:\XAMPP\ingres\scripts\ctl.bat (start /MIN /B G:\XAMPP\ingres\scripts\ctl.bat START)
if exist G:\XAMPP\mysql\scripts\ctl.bat (start /MIN /B G:\XAMPP\mysql\scripts\ctl.bat START)
if exist G:\XAMPP\postgresql\scripts\ctl.bat (start /MIN /B G:\XAMPP\postgresql\scripts\ctl.bat START)
if exist G:\XAMPP\apache\scripts\ctl.bat (start /MIN /B G:\XAMPP\apache\scripts\ctl.bat START)
if exist G:\XAMPP\openoffice\scripts\ctl.bat (start /MIN /B G:\XAMPP\openoffice\scripts\ctl.bat START)
if exist G:\XAMPP\apache-tomcat\scripts\ctl.bat (start /MIN /B G:\XAMPP\apache-tomcat\scripts\ctl.bat START)
if exist G:\XAMPP\resin\scripts\ctl.bat (start /MIN /B G:\XAMPP\resin\scripts\ctl.bat START)
if exist G:\XAMPP\jboss\scripts\ctl.bat (start /MIN /B G:\XAMPP\jboss\scripts\ctl.bat START)
if exist G:\XAMPP\jetty\scripts\ctl.bat (start /MIN /B G:\XAMPP\jetty\scripts\ctl.bat START)
if exist G:\XAMPP\subversion\scripts\ctl.bat (start /MIN /B G:\XAMPP\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist G:\XAMPP\lucene\scripts\ctl.bat (start /MIN /B G:\XAMPP\lucene\scripts\ctl.bat START)
if exist G:\XAMPP\third_application\scripts\ctl.bat (start /MIN /B G:\XAMPP\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist G:\XAMPP\third_application\scripts\ctl.bat (start /MIN /B G:\XAMPP\third_application\scripts\ctl.bat STOP)
if exist G:\XAMPP\lucene\scripts\ctl.bat (start /MIN /B G:\XAMPP\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist G:\XAMPP\subversion\scripts\ctl.bat (start /MIN /B G:\XAMPP\subversion\scripts\ctl.bat STOP)
if exist G:\XAMPP\jetty\scripts\ctl.bat (start /MIN /B G:\XAMPP\jetty\scripts\ctl.bat STOP)
if exist G:\XAMPP\hypersonic\scripts\ctl.bat (start /MIN /B G:\XAMPP\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist G:\XAMPP\jboss\scripts\ctl.bat (start /MIN /B G:\XAMPP\jboss\scripts\ctl.bat STOP)
if exist G:\XAMPP\resin\scripts\ctl.bat (start /MIN /B G:\XAMPP\resin\scripts\ctl.bat STOP)
if exist G:\XAMPP\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT G:\XAMPP\apache-tomcat\scripts\ctl.bat STOP)
if exist G:\XAMPP\openoffice\scripts\ctl.bat (start /MIN /B G:\XAMPP\openoffice\scripts\ctl.bat STOP)
if exist G:\XAMPP\apache\scripts\ctl.bat (start /MIN /B G:\XAMPP\apache\scripts\ctl.bat STOP)
if exist G:\XAMPP\ingres\scripts\ctl.bat (start /MIN /B G:\XAMPP\ingres\scripts\ctl.bat STOP)
if exist G:\XAMPP\mysql\scripts\ctl.bat (start /MIN /B G:\XAMPP\mysql\scripts\ctl.bat STOP)
if exist G:\XAMPP\postgresql\scripts\ctl.bat (start /MIN /B G:\XAMPP\postgresql\scripts\ctl.bat STOP)

:end
