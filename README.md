
# Prueba Técnica Full Stack - Backend Laravel

Este proyecto implementa una API REST utilizando Laravel que expone un endpoint protegido con autenticación por API Key. El objetivo es retornar una lista de sedes sin necesidad de conexión a base de datos.

---

## 🛠 Requisitos

- PHP >= 8.2
- Composer
- Laravel 11
- Postman o herramienta similar para probar APIs
- No se requiere base de datos

---

## 🚀 Instalación

1. **Clona el repositorio:**

```bash
git clone https://github.com/xlreconlx/prueba-laravel.git
cd prueba-laravel
```

2. **Instala dependencias con Composer:**

```bash
composer install
```

3. **Copia el archivo de entorno y genera clave:**

```bash
cp .env.example .env
php artisan key:generate
```

4. **Agrega la API Key al archivo `.env`:**

```env
API_KEY=1234567890abcdef
```

Puedes generar una clave segura con:

```bash
php -r "echo 'API_KEY=' . bin2hex(random_bytes(16)) . PHP_EOL;" >> .env
```

5. **Levanta el servidor:**

```bash
php artisan serve
```

La aplicación estará disponible en `http://localhost:8000`

---

## 📡 Endpoint

### Obtener lista de sedes

```
GET /api/locations
```

#### Headers requeridos

| Clave         | Valor                          |
|--------------|----------------------------------|
| Authorization | Bearer 1234567890abcdef         |

> Reemplaza el valor por tu API_KEY configurada en `.env`

#### Ejemplo de respuesta

```json
[
  {
    "code": 1,
    "name": "Sede Norte",
    "image": "https://dummyimage.com/600x400/000/fff&text=Sede+Principal",
    "creationDate": "2023-01-01"
  },
  {
    "code": 2,
    "name": "Sede Sur",
    "image": "https://dummyimage.com/600x400/000/fff&text=Sede+Norte",
    "creationDate": "2023-02-15"
  }
]
```

---

## 🧪 Pruebas de calidad de código

Puedes usar las siguientes herramientas opcionales para validar y mejorar la calidad del código.

### Laravel Pint (formateo)

```bash
composer pint
```

### PHP CodeSniffer

```bash
composer phpcs
```

### PHPStan (análisis estático)

```bash
composer phpstan
```

---

## 🧩 Estructura del proyecto

```
app/
├── Http/
│   ├── Controllers/
│   │   └── SedeController.php
│   ├── Middleware/
│   │   └── ApiKeyMiddleware.php
├── Services/
│   └── SedeService.php
routes/
└── api.php
.env
```

---

## 📌 Notas adicionales

- No se utiliza base de datos. La lista de sedes es simulada desde el backend.
- El middleware `ApiKeyMiddleware` intercepta las peticiones y valida la cabecera `Authorization`.

---

## 🧠 Autor

Prueba técnica realizada por Anderson Urrego para evaluación de habilidades full stack con Laravel y React.
