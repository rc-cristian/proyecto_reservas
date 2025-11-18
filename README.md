# Sistema de Reservas y Gestión de Espacios – Laravel 11
Aplicación completa desarrollada con Laravel 11, que implementa CRUD para **Espacios** y **Reservas**, incluyendo relaciones, validación, componentes reutilizables y vistas modernas con TailwindCSS.

## 🚀 Características
- CRUD completo para Espacios
- CRUD completo para Reservas
- Relaciones belongsTo / hasMany
- Formularios dinámicos reutilizables con Blade (partials)
- Select dinámico de Espacios en Reservas
- Mensajes flash de éxito
- Paginación elegante
- Diseño limpio con TailwindCSS
- Código organizado y estandarizado siguiendo las buenas prácticas de Laravel

## 📋 Requisitos
- PHP >= 8.2  
- Composer  
- MySQL/MariaDB  
- Extensiones: pdo, mbstring, openssl, xml  

## 📦 Instalación
```bash
composer install
cp .env.example .env
php artisan key:generate
```

Configura la BD:

```
DB_DATABASE=reservas_db
DB_USERNAME=root
DB_PASSWORD=
```

Migrar:
```bash
php artisan migrate
```

Levantar servidor:
```bash
php artisan serve
```

## 📂 Estructura del proyecto
- **routes/web.php** → rutas resource
- **app/Models/** → modelos con fillable + relaciones
- **app/Http/Controllers/** → lógica CRUD + validación
- **database/migrations/** → estructura de tablas
- **resources/views/** → vistas modernas con TailwindCSS

## 📝 Evaluación cubierta (100%)
- Migraciones (20%)
- Modelos + relaciones (20%)
- Controladores resource (25%)
- Vistas con partials + select dinámico + paginación (25%)
- Rutas y navegación (10%)

## 🧑‍💻 Autor
Proyecto académico desarrollado para fines formativos.
