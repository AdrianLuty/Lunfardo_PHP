@echo off
php interprete.php ejemplo.lunf
pause
cls
echo En caso de que esten dentro de carpetas.
echo ten en cuenta que debes es posible que 
echo tengas que agregar la ruta de los archivos
pause
cls
php\php Lunfardo\interprete.php Lunfardo\ejemplo.lunf
pause
cls
echo En caso de que quieras implementar directo
echo debes cambiar la linea que dice:
echo $archivo = $argv[1] ?? null;
echo.
echo $argv[1] instancia el archivo que le decis.
echo en caso de que quieras ejecutar un archivo
echo puedes usar:
echo $archivo = $_GET['file'] ?? null;
echo o
echo $archivo = 'ejemplo.lunf';
echo.
echo.
pause
