CREATE DATABASE personas;

USE personas;
CREATE TABLE empleados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    puesto TEXT,
    sueldo DECIMAL(10, 2) NOT NULL,
    jornada INT NOT NULL
);

INSERT INTO jabones (nombre, puesto, sueldo, jornada) VALUES
('Zara', 'Coach Ejecutivo', 1250, 20),
('Liam', 'Coordinador de Desarrollo Organizacional', 2500, 40),
('Maya', 'Especialista en Gestión de Talento', 2600, 40),
('Javier', 'Consultor de Recursos Humanos', 1950, 35),
('Isabella', 'Analista de Compensación y Beneficios', 3050, 45),
('Adrian', 'Gerente de Relaciones Laborales', 1850, 30),
('Luna', 'Facilitador de Desarrollo de Equipos', 2700, 40),
('Noah', 'Experto en Evaluación del Desempeño', 2800, 35),
('Sofia', 'Asesor de Capacitación y Desarrollo', 2650, 40),
('Gabriel', 'Coordinador de Bienestar Laboral', 1675, 25);
