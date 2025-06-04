# 🎧 ProMusic – Plataforma de Streaming de Música

ProMusic es una plataforma web que permite a los usuarios registrarse, iniciar sesión, subir canciones en formato .mp3, reproducirlas, y administrarlas. Inspirada en Spotify, esta app web fue creada como parte de un proyecto escolar.

---

## 🛠️ Tecnologías utilizadas

### Frontend:
- HTML5, CSS3
- JavaScript (ES6)
- [p5.js](https://p5js.org/) + [p5.sound.js](https://p5js.org/reference/#/libraries/p5.sound)

### Backend:
- PHP 7+
- MySQL

### Otros:
- XAMPP para pruebas locales
- Compatible con Vercel + Render para despliegue

---

## 📁 Estructura del proyecto

```
ProMusic/
├── frontend/
│   ├── login.html
│   ├── registro.html
│   ├── panel.html
│   ├── styles/
│   └── assets/
├── backend/
│   ├── conexion.php
│   ├── login.php
│   ├── registro.php
│   ├── canciones.php
│   ├── subir_cancion.php
│   └── eliminar_cancion.php
└── database/
    └── esquema.sql
```

---

## 🚀 Cómo ejecutar el proyecto localmente (XAMPP)

1. Descargá o cloná este repositorio.
2. Copiá la carpeta `ProMusic/` dentro de `C:/xampp/htdocs/`.
3. Abrí XAMPP y encendé `Apache` y `MySQL`.
4. Ingresá a `http://localhost/phpmyadmin` desde tu navegador.
5. Creá una nueva base de datos llamada `pro_music`.
6. Importá el archivo `database/esquema.sql`.
7. Accedé a `http://localhost/ProMusic/frontend/login.html`.


---

## 🧑‍💻 Autor

Proyecto realizado por Tomás Arquíbola  
7° 2° – EEST N.º 1 “Eduardo Ader” Vicente López  
2025
