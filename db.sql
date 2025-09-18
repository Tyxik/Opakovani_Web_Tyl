-- Table 'uzivatele' stores user information (id, name, email, location)
CREATE TABLE uzivatele (
   id INTEGER PRIMARY KEY AUTOINCREMENT,
   jmeno VARCHAR(100) NOT NULL,
   email VARCHAR(100) NOT NULL UNIQUE,
   misto VARCHAR(50) NOT NULL 
);
