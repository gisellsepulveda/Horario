# Horario 📅

Sistema web para la **gestión de horarios de clases y estudiantes**, desarrollado con **Laravel**.

## ⚙️ ¿Cómo funciona?

Horario está pensado como una herramienta centralizada para organizar la carga académica de una institución educativa. Su lógica gira en torno a tres elementos principales que se relacionan entre sí:

- **Estudiantes**: cada uno pertenece a un grupo o programa académico y tiene asignado un conjunto de clases.
- **Clases/asignaturas**: cada una cuenta con un docente, un aula y una franja horaria específica (día y hora de inicio/fin).
- **Horarios**: el sistema cruza estudiantes, clases, docentes y aulas para generar la agenda semanal de cada estudiante, evitando que se solapen horarios entre sí (por ejemplo, que un mismo docente o aula queden asignados a dos clases al mismo tiempo).

### Flujo de uso típico

1. Un administrador registra las **asignaturas**, los **docentes** y las **aulas** disponibles.
2. Se crean los **grupos o programas** en los que se matriculan los estudiantes.
3. El sistema asigna las clases a cada grupo, generando el **horario semanal** correspondiente.
4. Cada estudiante puede consultar su horario personal: qué clase tiene, en qué aula, con qué docente y a qué hora.
5. Si se intenta crear un cruce de horarios (mismo docente, aula o estudiante en dos clases simultáneas), el sistema debe evitarlo o alertar del conflicto.

### Arquitectura interna

Al estar construido sobre Laravel, el proyecto sigue el patrón **MVC (Modelo-Vista-Controlador)**:

- **Modelos** (`app/Models`): representan las entidades del sistema (Estudiante, Clase, Docente, Aula, Horario) y sus relaciones en la base de datos, gestionadas mediante el ORM **Eloquent**.
- **Controladores** (`app/Http/Controllers`): contienen la lógica que procesa las peticiones — por ejemplo, crear un horario, matricular a un estudiante o validar que no existan cruces.
- **Vistas** (`resources/views`): son las páginas que ve el usuario, construidas con plantillas Blade y estilizadas con Tailwind CSS.
- **Rutas** (`routes/web.php`): definen las URLs de la aplicación y qué controlador atiende cada una.
- **Base de datos** (`database/migrations`): define la estructura de las tablas y sus relaciones (por ejemplo, un estudiante tiene muchas clases, una clase pertenece a un docente y un aula).

En resumen: cuando un usuario visita una página, Laravel enruta la petición a un controlador, este consulta o modifica los datos a través de los modelos, y finalmente devuelve una vista con la información — todo dentro del ciclo estándar de una aplicación Laravel.

## 🛠️ Tecnologías utilizadas

| Categoría | Tecnología |
|---|---|
| Framework backend | **Laravel** (PHP) |
| Frontend / Estilos | **Tailwind CSS** |
| Bundler de assets | **Vite** |
| Base de datos | Configurable vía `.env` |
| ORM | **Eloquent** |
| Testing | **PHPUnit** |

## 📂 Estructura del proyecto

```
app/            # Modelos, controladores y lógica de negocio
bootstrap/      # Arranque del framework
config/         # Archivos de configuración
database/       # Migraciones, seeders y factories
public/         # Punto de entrada público y assets compilados
resources/      # Vistas Blade, CSS y JS fuente
routes/         # Definición de rutas (web.php, api.php, etc.)
storage/        # Archivos generados, logs, cache
tests/          # Pruebas automatizadas
```

## 🤝 Contribuciones

Las contribuciones son bienvenidas. Si deseas colaborar:

1. Haz un fork del proyecto
2. Crea una rama para tu funcionalidad (`git checkout -b feature/nueva-funcionalidad`)
3. Haz commit de tus cambios (`git commit -m "Agrega nueva funcionalidad"`)
4. Sube la rama (`git push origin feature/nueva-funcionalidad`)
5. Abre un Pull Request


## 👤 Autor

Desarrollado por [gisellsepulveda](https://github.com/gisellsepulveda)
