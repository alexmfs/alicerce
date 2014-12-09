echo "Installing dependencies..."
bower install && npm install && grunt initial
rm -rf start.bat
rm publicold
rm start
start C:/gitbash
exit
