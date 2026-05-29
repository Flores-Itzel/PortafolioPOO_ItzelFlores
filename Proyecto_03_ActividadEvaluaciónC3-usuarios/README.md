# Actividad de Evaluación C3
## Sistema de Usuarios con Herencia en Python

## Objetivo del Proyecto
Aplicar el concepto de herencia y polimorfismo creando una clase base Usuario y clases derivadas (Admin, Cliente, Invitado), reutilizando atributos y métodos. 
Implementar un sistema modular en Python utilizando los pilares de la Programación Orientada a Objetos (POO) para gestionar diferentes roles de usuario (Admin, Cliente, Invitado) a partir de una clase base común.

## Problema que resuelve
Resuelve la necesidad de centralizar la administración de distintos tipos de usuarios en un mismo sistema, permitiendo que cada tipo tenga comportamientos específicos (polimorfismo) manteniendo una estructura de datos unificada (herencia).

## Tecnologías utilizadas
- Lenguaje: Python 3.x
- Conceptos POO: Clases, Objetos, Herencia, Encapsulamiento básico (validación en constructor) y Polimorfismo.

## Conceptos aplicados 
- Clase Base y Herencia: Uso de la clase Usuario como superclase, de la cual heredan Admin, Cliente e Invitado.

- Polimorfismo: Implementación del mismo método (ej. acceso_sistema y saludar) con comportamientos distintos en cada subclase.

- Sobrescritura de métodos: Uso de super() para extender la funcionalidad de la clase base en las clases hijas.

- Listas dinámicas: Gestión de objetos en una lista usuarios para realizar operaciones en lote.

## Instrucciónes de ejecución 
Para ejecutar este proyecto, asegúrate de tener instalado Python en tu equipo:
- Descarga todos los archivos .py en una misma carpeta.
- Abre una terminal o consola de comandos en la ubicación de la carpeta.
- Ejecuta el archivo principal mediante el comando: python Main.py
- Interactúa con el menú numérico (1-5) para gestionar los usuarios.

## Reflexión personal
### ¿Qué aprendí?
Aprendí cómo la herencia reduce la duplicación de código al definir atributos comunes en una sola clase (Usuario).

### ¿Qué fue difícil?
Entender cómo aplicar el polimorfismo correctamente para que el mismo método acceso_sistema se comportara de forma distinta según el tipo de objeto.

### ¿Qué mejoraría?
El manejo de la herencia y los polimorfismos 
