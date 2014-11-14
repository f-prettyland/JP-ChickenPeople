# empty the table
DELETE FROM mentees;

# load new records into it
LOAD DATA LOCAL INFILE 'mentees.txt' INTO TABLE mentees;
