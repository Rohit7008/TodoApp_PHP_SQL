

# 📝 Todo App (PHP + MySQL)

A simple Todo List web application built using PHP and MySQL that allows users to add, complete, and delete tasks.

## 🚀 Features

- Add new tasks
- Mark tasks as completed
- Delete tasks
- Task list automatically updates
- Simple and clean UI

## 🛠️ Tech Stack

- **Front-end:** HTML, CSS
- **Back-end:** PHP (Procedural)
- **Database:** MySQL
- **Server:** XAMPP (Apache + MySQL)

---

## 🧑‍💻 How to Set Up and Run the Project

### ✅ Prerequisites

- XAMPP installed on your machine
- Web browser (Chrome, Firefox, etc.)

---

## 📂 Folder Structure

```
todolist/
├── index.php
├── style.css
└── README.md
```

---

## 📦 Setup Instructions

### 1. 🧬 Start XAMPP

- Open the XAMPP Control Panel.
- Start **Apache** and **MySQL**.

### 2. 🌐 Open phpMyAdmin

- Go to your browser and open:  
  `http://localhost/phpmyadmin`

### 3. 🛠️ Create Database and Table

Follow these steps:

#### Step 1: Create the Database

- Click on **"New"** from the left sidebar.
- Enter `todolist` as the database name.
- Click **"Create"**.

#### Step 2: Create the Table

- Click on the `todolist` database from the left.
- Click **"SQL"** tab from the top menu.
- Paste the following SQL and hit **Go**:

```sql
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL,
    status VARCHAR(50) DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

> ✅ This creates the `tasks` table with the columns your app expects.

---

### 4. 📁 Place Project Files

- Copy your project folder `todolist/` into:  
  `C:\xampp\htdocs\`

Your full path should be:  
`C:\xampp\htdocs\todolist\index.php`

---

### 5. ▶️ Run the App

Open your browser and visit:

```
http://localhost/todolist
```

You can now start adding tasks!

---

## 🧠 Notes

- Make sure the table name is exactly `tasks`.
- Avoid using `root` password unless set.
- For security, consider using **prepared statements** instead of directly inserting user input.

---

## 📸 Demo

![image](https://github.com/user-attachments/assets/b8d82fe8-9174-4435-98d9-4f89263c2954)
---

## 📬 Contact

Made by Rohit Pottavathini  

