# Actividad de Evaluación C2
## Consumo energético servidores

## Objetivo 
Desarrollar una herramienta web capaz de calcular el consumo energètico (en joules y convertido a kWh) de un centro de datos mediante mètodos de integraciòn numérica, permitiendo evaluar el rendimiento bajo diferetes perfiles de arga.

## Problemas que resuelve 
El proyecto resuelve la dificultad de estimar el consumo energético acumulado de un servidor a lo largo de un intervalo de tiempo específico, cuando la tasa de potencia no es constante sino que varía según el modo de operación (IDLE, AVERAGE, STRESS).

## Tecnologías utilizadas
- PHP
- HTML
- CSS
- XAMPP
- POO

## Conceptos aplicados 
- Integración numérico: Aplicación de la **Regla del Trapecio** para calcular el área bajo la curva de la función de potencia P(t), estimando así la energía total consumida.
- POO en PHP: Uso de clases (IntegradorNumerico, FuncionesEnergía), namespaces (App\Calculo), manejo de excepciones (Exception), y métodos estáticos.
- Formularios y superglobales: procesamiento de datos de entrada mediante $_POST.

## Capturas
- FuncionesEnergia.php
- 
