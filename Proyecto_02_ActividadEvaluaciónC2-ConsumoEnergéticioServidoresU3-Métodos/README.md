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
<p align="center">
<img width="500" alt="430" alt="Captura de pantalla 2026-05-27 155535" src="https://github.com/user-attachments/assets/1aac9bfc-8474-4d2f-8c77-e038ab17fe94" />
</p>

- IntegradorNumerico.php
<p align="center">
<img width="500" alt="430" alt="Captura de pantalla 2026-05-27 155610" src="https://github.com/user-attachments/assets/4c82f510-698b-4daf-a954-a02f3ad274d0" />
</p>
<p align="center">
<img width="500" alt="430" alt="Captura de pantalla 2026-05-27 155631" src="https://github.com/user-attachments/assets/d46b7001-71ca-4aec-a38a-7aa1eea0765d" />
</p>
- index.php
<p align="center">
<img width="500" alt="430" alt="Captura de pantalla 2026-05-27 155702" src="https://github.com/user-attachments/assets/298cf8a3-fdbd-48e0-9f1f-84355c7c0c87" />
</p>
<p align="center">
<img width="500" alt="430" alt="Captura de pantalla 2026-05-27 155724" src="https://github.com/user-attachments/assets/51772dbc-569b-4bda-89c5-3e707a3c4a3d" />
</p>
<p align="center">
<img width="500" alt="449" alt="Captura de pantalla 2026-05-27 155744" src="https://github.com/user-attachments/assets/44730cbb-d678-4259-9135-d8038fa7b0e6" />
</p>
- style.css
<p align="center">
<img width="300" alt="430" alt="Captura de pantalla 2026-05-27 155844" src="https://github.com/user-attachments/assets/16e33599-5390-43b3-9b8d-b5cd1f624f58" />
</p>
<p align="center">
<img width="300" alt="430" alt="Captura de pantalla 2026-05-27 155907" src="https://github.com/user-attachments/assets/83d40dd6-1e01-4345-b076-833bf947a158" />
</p>
<p align="center">
<img width="300" alt="430" alt="Captura de pantalla 2026-05-27 155927" src="https://github.com/user-attachments/assets/25043e71-0eb8-4e4f-962a-1effbe97e494" />
</p>
- Resultado
<p align="center">
<img width="300" alt="420" alt="Captura de pantalla 2026-04-19 111029" src="https://github.com/user-attachments/assets/94104ae0-4748-4a97-a4eb-6850c99badfc" />
</p>

## Instrucciones de ejecución
