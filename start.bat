echo "Installing dependencies..."
bower install && npm install && grunt compile
rm -rf start.bat
rm start
rm construtor
exit
