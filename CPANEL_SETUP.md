# Master Era deployment checklist

1. In cPanel, upload and extract the corrected website into the domain's document root.
2. Open **MySQL Databases** and confirm that the database name, user, and password match `db_connect.php`. cPanel normally prefixes both the database and user name (for example, `mastec2a_masterera`).
3. Assign the database user to the database with **ALL PRIVILEGES**.
4. In phpMyAdmin, select that same database and import `masterera.sql`. The database selected in phpMyAdmin is what matters; the `masterera` name in the dump is only a comment.
5. Visit `/admin-panel/`. It redirects to the working login screen in `/admin/login.php`.
6. Sign in once with the existing admin credentials. The legacy plain-text password is upgraded to a secure hash on that successful login.
7. Submit a test inquiry through `/contact.php`, then confirm it appears in **Contact Inquiries** in the admin panel.

If the contact form still reports an error, check cPanel's PHP error log. The application logs the database error there without displaying database credentials publicly.