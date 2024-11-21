# Formulario de Registro de Eventos en PHP

Este proyecto permite a los usuarios registrarse para un evento mediante un formulario HTML y procesar los datos en PHP. Se utiliza el método POST para enviar los datos y Bootstrap para estilizar el formulario.

## Requisitos

1. **Formulario HTML:**
   - Información Personal (nombre, correo, teléfono, fecha de nacimiento, género).
   - Información del Evento (fecha, tipo de entrada, preferencias de comida).
   - Información de Acceso (usuario, contraseña y confirmación).
   - Preferencias de Contacto (notificaciones y aceptación de términos).
   - Encuesta Adicional (calificación y comentarios).

2. **Validación en HTML:**
   - Uso del atributo `required` en los campos obligatorios.
   - Estilo de validación con clases de Bootstrap (`is-invalid`, `invalid-feedback`).

3. **Procesamiento en PHP:**
   - Validación de campos usando `isset` y `empty`.
   - Procesamiento de datos con PHP en el archivo `procesar.php`.
   - Mensajes de error si algún campo está vacío o no cumple los requisitos.

## Archivos del Proyecto

- `index.html`: Contiene el formulario HTML.
- `procesar.php`: Lógica para procesar y validar los datos enviados.

## Instrucciones de Uso

Clona el repositorio:

```bash
git clone https://github.com/usuario/proyecto.git
