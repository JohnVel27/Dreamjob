CREATE TABLE JOBDREAMERS ( 
    JobDreamerID INT PRIMARY KEY AUTO_INCREMENT, -- Primary key with auto-increment for unique JOBDREAMERS IDs 
    Firstname TEXT NOT NULL, -- Name of the Firstname (cannot be null) 
    Lastname TEXT NOT NULL, -- Name of the Lastname (cannot be null) 
    Email TEXT NOT NULL,-- Name of the Email (cannot be null) 
    Gender TEXT NOT NULL,-- Name of the Gender (cannot be null) 
    DreamJob TEXT NOT NULL,-- Name of the DreamJob (cannot be null) 
    DateAdded TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Timestamp when the transaction record was added 
);
