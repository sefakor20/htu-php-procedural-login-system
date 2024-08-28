### Step-by-Step Guide to Setting Up a Database in phpMyAdmin

1. **Access phpMyAdmin**:
   - Open your web browser and go to `http://localhost/phpmyadmin/`. If you're using a custom port, the URL might look like `http://localhost:8080/phpmyadmin/`.
   - Log in with your MySQL username (`root`) and password.

2. **Create a New Database**:
   - Once logged in, you will see the phpMyAdmin dashboard.
   - Click on the **"Databases"** tab at the top of the page.
   - In the **"Create database"** section, enter the name of the database, e.g., `login_system`.
   - Select the collation `utf8mb4_general_ci` from the dropdown (this is generally recommended for compatibility).
   - Click **"Create"** to create the database.

3. **Create a New Table**:
   - After creating the database, you will be taken to the new database's structure page.
   - In the **"Create table"** section, enter the table name, e.g., `users`.
   - Set the number of columns to `3` (for ID, username, and password), then click **"Go"**.

4. **Define the Table Structure**:
   - Fill in the columns as follows:

     | Column Name | Type       | Length/Values | Index      | Attributes | Extra       |
     |-------------|------------|---------------|------------|------------|-------------|
     | `id`        | INT        |               | PRIMARY    | UNSIGNED   | AUTO_INCREMENT |
     | `username`  | VARCHAR    | 50            | UNIQUE     |            |             |
     | `password`  | VARCHAR    | 255           |            |            |             |

   - Click **"Save"** to create the table.

### Summary of Table Structure:
- **`id`**: An auto-incrementing primary key to uniquely identify each user.
- **`username`**: A unique field to store the username of each user.
- **`password`**: A field to store the hashed password securely.

### Step 5: Verify the Setup
1. Once saved, you should see the table `users` listed under your database `login_system` on the left sidebar.
2. You can now start using this table with your PHP code for user registration and login as previously outlined.
