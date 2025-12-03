<h1 align="center">TP Materias - Sistema de Gestión de Materias</h1>

## Descripción del Proyecto

Este repositorio contiene el **Trabajo Práctico Final** desarrollado para la materia **PISWD** (Proyecto de Implementación de Sitios Web Dinámicos).

El proyecto es un **CRUD de materias** para una intranet escolar, que permite gestionar la información de las materias de forma sencilla, incluyendo creación, edición, eliminación y visualización de registros. Está desarrollado con **Laravel** como framework principal, junto con PHP, MySQL y tecnologías de frontend modernas.

## Tecnologías Utilizadas

-   **Backend:** PHP, Laravel
-   **Base de Datos:** MySQL
-   **Frontend:** HTML, TailwindCSS, JavaScript
-   **Servidor Local:** XAMPP

## Estructura del Repositorio

El proyecto sigue la organización típica de un proyecto Laravel, con carpetas funcionales y archivos principales:

### `📁 app`

Contiene la lógica principal de la aplicación:

-   `Http/Controllers/`: **Controladores** que manejan las operaciones del CRUD (4 archivos).
-   `Http/Requests/`: Validaciones de formularios (1 archivo).
-   `Models/`: Modelos de base de datos (2 archivos).
-   `View/Components/`: Componentes reutilizables para las vistas.

### `📁 resources/views`

Contiene las vistas y componentes de frontend:

-   `auth/`: Vistas relacionadas con la autenticación.
-   `components/` y `layouts/`: Componentes y layouts reutilizables para la interfaz.
-   `materias/`: Vistas específicas para la gestión de materias.
-   `welcome.blade.php`: Página principal de bienvenida.

### `📁 routes`

-   `web.php`: Define todas las rutas web de la aplicación.
-   `console.php`: Archivo de comandos de consola (no relevante para este proyecto).

### `📁 database`

-   `migrations/`: Contiene las migraciones de las tablas de la base de datos.

## Despliegue y Uso

### 1. Requisitos

-   Servidor local con **PHP** y **XAMPP**.
-   **Composer** instalado.
-   Base de datos **MySQL**.

### 2. Instalación

1. Clona el repositorio: `git clone https://github.com/davidtejedor01/TP_materias_Php.git`

2. Copia el archivo .env.example y renómbralo a .env

3. Configura las credenciales de la base de datos en el archivo .env.

4. Instala las dependencias de Laravel: `composer install`

5. Genera la APP_KEY de Laravel: `php artisan key:generate`

6. Ejecuta las migraciones para crear las tablas: `php artisan migrate`

7. Inicia el servidor local de Laravel: `php artisan serve`
