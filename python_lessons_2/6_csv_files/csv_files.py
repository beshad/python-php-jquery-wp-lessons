import csv

# Reading from csv

file = open("test.csv")
reader = csv.reader(file)
for row in reader:
    print(row)
file.close()

# Writing to CSV

rows = ["some list with hypothetical data"]
file = open("output.csv", 'w')
writer = csv.writer(file)
for row in rows:
    writer.writerow(row)