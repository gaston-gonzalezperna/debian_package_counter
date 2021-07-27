Debian usa paquetes * deb para implementar y actualizar software. Los paquetes se almacenan en repositorios y cada repositorio contiene el llamado "índice de contenido".
El formato de ese archivo está bien descrito aquí https://wiki.debian.org/RepositoryFormat#A.22Contents.22_indices

Esta herramienta en PHP toma la arquitectura (amd64, arm64, mips, etc.) como argumento y descarga el archivo de contenido comprimido asociado a ella desde un mirror de Debian.
El programa analiza el archivo y genera las estadísticas de los 10 paquetes principales que tienen la mayoría de los archivos asociados.

La forma de utilizarlo es pasando un parámetro (ej. udeb-armel) seguido del entry point del programa (package_statistics.php):

php package_statistics.php udeb-armel

1.<nombre del paquete 1> <número de archivos>
2.<nombre del paquete 2> <número de archivos>
......
10. <nombre del paquete 10> <número de archivos>

El mirror de Debian utilizado es el siguiente http://ftp.uk.debian.org/debian/dists/stable/main/.

Es un ejercicio relativamente sencillo donde se aplica el uso de Array, manejo de archivos (descargar de URL y entrar en un .gz), manejo de excepciones, y como mostrar por CLI los datos.