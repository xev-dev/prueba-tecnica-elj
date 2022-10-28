# Prueba_Tecnica_Dogs

Para esta prueba he creado dos servicios separados, por un lado un backend con Laravel y por otro lado un frontend con Vue.js. Se que se puede programar el frontend dentro de la estructura de Laravel, pero estoy acostumbrado a separar los servicios al utilizar Docker para desplegar las aplicaciones web. 

Tecnologias necesarias para iniciar el proyecto en local: 
1. Composer
2. Node.js
3. Servicio Mysql o MariaDB (Docker o instalado localmente)

Pasos a seguir para iniciar el proyecto en local: 
1. Iniciar una terminal
2. Dirigirse dentro de la carpeta 'backend'
3. 'composer install'
4. 'npm install'
5. Duplicar el archivo .env.example y renombrarlo a .env
6. Crear una base de datos MySQL o MariaDB y tener iniciado el servicio de base de datos
7. Introducir tus datos en el archivo .env anteriormente copiado (nombre usuario, password, nombre de la bbdd)
8. 'php artisan key:generate'
9. 'php artisan migrate'
10. 'php artisan serve' 
11. Nos dirigimos dentro de frontend ahora
12. 'npm install'
13. 'npm run dev'
14. Abrimos el navegador y entramos en http://localhost:5173/
15. Listo :)

Manual de usuario: 

La web se divide en 3 vistas:  Una vista de bienvenida con unas graciosas fotos de perros, una vista con un formulario y una vista para ver todos los perros que vas introduciendo. 

Para moverse entre vistas, tienes un navegador en la parte superior (header) con 3 links a los que puedes ir clicando en todo momento. 

En el formulario tienes que rellenar todos los campos (algunos tienen valores por default y otros no).
