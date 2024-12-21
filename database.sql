-- SQL script to create a space shuttle database with four tables: space_crafts, employees, spaceports, and tours.

-- Step 1: Create a new database named 'example_db'
CREATE DATABASE MarsTours_db;

-- Step 2: Create a new user 'example_user' with a secure password 'secure_password'
CREATE USER 'bernard_clark'@'localhost' IDENTIFIED BY 'MT_Shuttle57';

-- Step 3: Grant all privileges on the 'example_db' database to the new user
-- This allows 'example_user' to perform all operations (SELECT, INSERT, UPDATE, DELETE, etc.) on the database
GRANT ALL PRIVILEGES ON MarsTours_db TO 'bernard_clark'@'localhost';

-- Step 4: Apply the changes to ensure the new privileges take effect
FLUSH PRIVILEGES;

-- The database, user, and privileges are now set up and ready to use!

-- Table: space_crafts
CREATE TABLE space_crafts (
    craft_id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each spacecraft
    name VARCHAR(100) NOT NULL,             -- Name of the spacecraft
    capacity INT NOT NULL,                  -- Maximum number of passengers the spacecraft can carry
    manufacturer VARCHAR(100),              -- Manufacturer of the spacecraft
    launch_year YEAR                        -- Year the spacecraft was launched
);

-- Table: employees
CREATE TABLE employees (
    employee_id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each employee
    first_name VARCHAR(50) NOT NULL,            -- Employee's first name
    last_name VARCHAR(50) NOT NULL,             -- Employee's last name
    role VARCHAR(50) NOT NULL,                  -- Employee's role (e.g., pilot, engineer, etc.)
    hire_date DATE NOT NULL,                    -- Date the employee was hired
    craft_id INT,                               -- ID of the spacecraft the employee is assigned to (if applicable)
    FOREIGN KEY (craft_id) REFERENCES space_crafts(craft_id) -- Foreign key linking to space_crafts table
);

-- Table: spaceports
CREATE TABLE spaceports (
    port_id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each spaceport
    name VARCHAR(100) NOT NULL,            -- Name of the spaceport
    location VARCHAR(100) NOT NULL,        -- Location of the spaceport (e.g., city, country)
    capacity INT NOT NULL                  -- Number of spacecrafts the spaceport can accommodate
);

-- Table: tours
CREATE TABLE tours (
    tour_id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each tour
    craft_id INT NOT NULL,                  -- ID of the spacecraft used for the tour
    port_id INT NOT NULL,                   -- ID of the departure spaceport
    destination VARCHAR(100) NOT NULL,      -- Destination of the tour
    tour_date DATE NOT NULL,                -- Date of the tour
    ticket_price DECIMAL(10, 2) NOT NULL,   -- Price per ticket for the tour
    FOREIGN KEY (craft_id) REFERENCES space_crafts(craft_id), -- Foreign key linking to space_crafts table
    FOREIGN KEY (port_id) REFERENCES spaceports(port_id)      -- Foreign key linking to spaceports table
);