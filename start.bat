rm -rf public/.git
bower install && npm install
git add .
git commit -a -m "dependecias instaladas"
git push origin master
rm -rf start.bat
grunt

