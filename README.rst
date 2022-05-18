Use PHP build simple shopping backend: Getting Started
==========
Build steps:
=========
- First
 - First, create a database named "commodity" in your local sql
 - Execute the file "db.sql" in your "phpadmin"
- Second
 - open your browser
 - The URL field is marked with "http://localhost:82/%E5%95%86%E5%93%81%E6%96%B0%E5%A2%9E%E4%BF%AE%E6%94%B9% E7%B6%B2%E7%AB%99/index.php"
Contents of the database:
=========
- Data Types and Formats
 - ID:Primary Key
  - Data Types:	int(11)
  - Usefulness:Hidden tags used to transfer with different pages
 - Name
  - Data Types: char(64)
  - Usefulness: commodity name
 - Description
  - Data Types: mediumtext
  - Usefulness: record commodity information
 - Price
  - Data Types: int(11)
  - Usefulness: commodity price
 - Picture
  - Data Types: longblob
  - Usefulness: record the image path when uploading