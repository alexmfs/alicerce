echo "Installing dependencies..."
bower install && npm install && grunt initial
rm -rf start.bat
rm start
rm publicold
exit
