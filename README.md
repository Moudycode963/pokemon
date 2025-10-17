# 🧩 Pokémon Pokedex Project

A simple PHP-based web application that displays, creates, updates, and deletes Pokémon entries using a MySQL database.

---

## 🚀 Features

- 📜 **List all Pokémon** in a styled table  
- 🔍 **View details** of a single Pokémon  
- 🆕 **Add new Pokémon** to the database  
- ✏️ **Update existing Pokémon**  
- ❌ **Delete Pokémon**  
- 🎨 Clean HTML + PHP table rendering  
- 💾 MySQL database integration (via PDO)  

---

## 🗄️ Database Setup

Run the following SQL script to create the database and initial Pokémon data:

```sql
DROP DATABASE IF EXISTS pokedex;
CREATE DATABASE pokedex;
USE pokedex;

CREATE TABLE pokemon
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    caught BOOLEAN DEFAULT FALSE,
    type ENUM(
        'Grass', 'Fire', 'Water', 'Bug', 'Normal',
        'Poison', 'Electric', 'Ground', 'Fairy',
        'Fighting', 'Psychic', 'Rock', 'Ghost'
    ) NOT NULL
);
