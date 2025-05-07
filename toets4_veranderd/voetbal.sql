-- Maak de database aan
CREATE DATABASE voetbal;

-- Gebruik de database
USE voetbal;

-- Maak de tabel 'voetballers' aan
CREATE TABLE voetballers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    voornaam VARCHAR(50) NOT NULL,
    achternaam VARCHAR(50) NOT NULL,
    geboortedatum DATE,
    foto_url VARCHAR(150) NOT NULL

);

-- Voeg de voetballers van het Nederlands Elftal 1974 toe
INSERT INTO voetballers (voornaam, achternaam, geboortedatum, foto_url) VALUES
    ('Jan', 'Jongbloed', '1940-11-25',  'Jan_Jongbloed.jpg' ),
    ('Wim', 'Suurbier', '1945-01-16', 'Wim_Suurbier.jpg'),
    ('Ruud', 'Krol', '1949-03-24', 'Ruud_Krol.jpg'),
    ('Wim', 'Rijsbergen', '1952-01-18', 'Wim_Rijsbergen.jpg'),
    ('Arie', 'Haan', '1948-11-16', 'Arie_Haan.jpg'),
    ('Theo', 'de Jong', '1947-08-11', 'Theo_de_Jong.jpg'),
    ('Johan', 'Neeskens', '1951-09-15', 'Johan_Neeskens.jpg'),
    ('Wim', 'van Hanegem', '1944-02-20', 'Wim_van_Hanegem.jpg'),
    ('Johan', 'Cruijff', '1947-04-25', 'Johan_Cruijff.jpg'),
    ('Johnny', 'Rep', '1951-11-25', 'Johnny_Rep.jpg'),
    ('Rob', 'Rensenbrink', '1947-07-03', 'Rob_Rensenbrink.jpg');
