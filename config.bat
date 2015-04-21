echo off

echo.
echo ---------------------------------
echo Gerando arquivo config.less
echo ---------------------------------
echo.
echo.
echo ---------------------------------
echo Tipografia
echo ---------------------------------
echo.
set /p idFontBase="Fonte Principal:" %=%
set /p idFontSpecial="Fonte Destaque:" %=%
echo.
echo ---------------------------------
echo Paleta de cores
echo.
echo (valores decimais)
echo.
echo ---------------------------------
echo.
set /p idColorBase="Color Base:" %=%
set /p idColorPrimary="Color Primary:" %=%
set /p idColorSecondary="Color Secondary:" %=%
echo.
echo ---------------------------------
echo.
echo Estilo do site
echo.
echo ---------------------------------
echo.
set /p idOnePage="Site onepage? (true ou false)" %=%
set /p idFixedMenu="Menu Fixo? (true ou false)" %=%
echo.
echo.

echo on
echo // Config> dev/less/config.less
echo.>> dev/less/config.less
echo //  Typography>> dev/less/config.less
echo @font-base: "%idFontBase%";>> dev/less/config.less
echo @font-special: "%idFontSpecial%";>> dev/less/config.less
echo.>> dev/less/config.less
echo // Site Style>> dev/less/config.less
echo body{>> dev/less/config.less
echo	#onepage(%idOnePage%);>> dev/less/config.less
echo	#fixedmenu(%idFixedMenu%);>> dev/less/config.less
echo }>> dev/less/config.less
echo.>> dev/less/config.less
echo.>> dev/less/config.less
echo // Colors>> dev/less/config.less
echo @color-base: %idColorBase%;>> dev/less/config.less
echo @color-primary: %idColorPrimary%;>> dev/less/config.less
echo @color-secondary: %idColorSecondary%;>> dev/less/config.less

exit
