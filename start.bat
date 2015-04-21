echo "Installing dependencies..."
bower install && npm install && grunt compile
del start.bat
rd /s /q "construtor"
exit
