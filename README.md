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
