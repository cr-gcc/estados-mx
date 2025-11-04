<p align="center"><a href="https://mck.agency/" target="_blank"><img src="https://mck.agency/images/logo-mck.png" width="200" alt="mck Logo"></a></p>

# Tabla dinámica de estados de la república mexicana, con registros del INEGI

Este proyecto es una aplicación web construida con **Laravel 12**, **Bootstrap 4** y **Vite**, que consume datos de la API del INEGI de México para mostrar información geográfica en tablas interactivas con **DataTables**. Como prueba técnica por parte de MCK Agenncy.

---

## Características

-   Laravel 12 con PHP ^8.2
-   Frontend con Bootstrap 4 y DataTables
-   Consumo de la API de geografía del INEGI (`https://gaia.inegi.org.mx/wscatgeo/mgee/`)
-   Gestión de dependencias con Composer y NPM (Vite + Axios)
-   Entorno de desarrollo con Laravel Sail (opcional)
-   Tablas dinámicas y responsivas usando DataTables

---

## Requisitos

-   PHP 8.2 o superior
-   Composer
-   Node.js y NPM
-   Servidor web (opcional: Sail, Valet, XAMPP, etc.)

---

## Instalación

1. **Clonar el repositorio**

```bash
git clone https://github.com/cr-gcc/estados-mx.git
cd estados-mx
```

2. **Instalación de dependencias**

```bash
composer install
npm install
```

3. **Comandos de Laravel**

```bash
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

4. **Comandos de Vite**

```bash
npm run dev
```
