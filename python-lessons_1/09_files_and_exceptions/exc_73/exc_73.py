# files and exceptions - exercise 73
filename = "learning_python.txt"

print("All contents at once:\n")
with open(filename) as file_object:
    contents = file_object.read()

print(contents)

lines = []

print("All contents line by line:\n")
with open(filename) as file_object:
    for line in file_object:
        line = line.strip()
        lines.append(line)
        print(line)

print("\nAll contents from stored list:\n")
for line in lines:
    print(line)
