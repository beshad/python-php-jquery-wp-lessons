# files and exceptions - exercise 74
filename = "learning_python.txt"

with open(filename) as file_object:
    for line in file_object:
        line = line.strip()
        line = line.replace("Python", "Ruby")
        print(line)
