rm -rf public/.git
bower install && npm install && grunt initial
git add .
git commit -a -m "dependecias instaladas"
rm -rf start.bat
grunt
