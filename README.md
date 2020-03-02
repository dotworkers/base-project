## Dotworkers Skeleton

Este proyecto sirve como base para estructurar un nuevo proyecto. Inicialmente luego de instalar Laravel se deben 
realizar una serie de configuraciones que se describen a continuación.

### Modificaciones

- **Cambiar ubicación por defecto de entidad ```User```:**
    
    - Crear una carpeta llamada ```Users``` y dentro de ésta una carpeta llamada ```Entities```
    - Copiar la entidad ```User.php``` desde la carpeta ```app``` a la carpeta ```Entities``` recién creada
    - Actualizar el namespace de la entidad User.php de ```namesapce App;``` a ```namespace App\Users\Entities```
    - Actualizar el llamado a la entidad ```User``` en el archivo ```config/auth.php``` en el ítem ```providers``` de 
    ```App\User::class``` a ```App\Users\Entities\User::class```
    
- **Borrar la carpeta ```Auth``` de la carpeta ```Controllers```:** Esta carpeta contiene el autenticado *Out of the box* 
de Laravel el cual no utilizamos porque por lo general no cumplen con nuestros requerimientos

- **Borrar las carpetas ```js``` y ```sass``` de ```resources```:** Estas carpetas poseen archivos ```javascript``` y 
```sass``` por defecto que no se van a utilizar

- **Actualizar el archivo ```composer.json```:**

    - Actualizar el atributo ```name``` de la siguiente forma ```"name": "dotworkers/nombre-del-proyecto"```
    - Actualizar el atributo ```description``` de la siguiente forma ```"description": "Descripción del proyecto"```
    - Actualizar el atributo ```license``` de la siguiente forma ```"license": "Proprietary"```
    - Agregar keywords relacionadas al proyecto en el atributo ```keywords```
    - Agregar el atributo ```respositories```  como se muestra a continuación para poder instalar los proyectos internos
    de Dotworkers:
    ```
    "repositories": [
        {
            "type": "composer",
            "url": "http://packages.dotworkers.net"
        }
    ],
    ```
    - Agregar el atributp ```"secure-http": false``` al ítem ```config``` como se muestra a continuación:
     ```
    "config": {
        "optimize-autoloader": true,
        "preferred-install": "dist",
        "sort-packages": true,
        "secure-http": false
    },
   ```
