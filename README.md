# SGIMP - Sistema Gestor de Información Médico-Paciente

## Repositorio en Github
https://github.com/JordiQOtz/sgimp

## Instalación
### 1. Importar la base de datos
Usando un servidor tipo XAMPP o WAMPP, importar la base de datos 'sgimp.sql'.
	
### 2. Montar aplicación en el servidor (2 opciones)
	
#### 2.1. Visualizar en Servidor XAMPP o WAMPP (opción 1)
Mover el proyecto completo a la carpeta htdocs del servidor, dependiendo del S.O.
Levantar el servidor.
	
#### 2.2. Visualizar en el Servidor de Laravel - Instalar Composer (opción 2)

##### 2.2.1. Para linux
Ejecutar los siguientes scripts en la terminal de linux:

1. Descargar el instalador en el directorio
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
```

2. Comprobar el SHA-384 del instalador
```
php -r "if (hash_file('sha384', 'composer-setup.php') === e0012edf3e80b6978849f5eff0d4b4e4c79ff1609dd1e613307e16318854d24ae64f26d17af3ef0bf7cfb710ca74755a') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
```

3. Ejecutar el instalador
```
php composer-setup.php --install-dir=bin
```

4. Eliminar el instalador
```
php -r "unlink('composer-setup.php');"
```

##### 2.2.2 Para Windows
Usando el instalador.
Descargar y ejecutar [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe). Instalará la versión más reciente de Composer y configurará el PATH para que se pueda llamar desde cualquier directorio en la linea de comandos.
	
#### 3. Instalar Laravel
Ejecutar el comando:
composer global require laravel/installer

#### 4. Levantar el servidor
Abrir una terminal en la ruta de la carpeta (ejemplo: '*RUTA*/sgimp').
Ejecutar el comando: php artisan serve
*No terminar la ejecución del comando ya que esto parará al servidor*

#### 5. Ejecutar página
Dependiendo del servidor en el que se montó o instaló se deberá ingresar a:

Servidor Laravel | Servidor XAMPP/WAMPP
-----------------|----------------------
'localhost:8000'|'localhost'