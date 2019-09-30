# files and exceptions - exercise 79
filename = "article.txt"
alice_count = 0

with open(filename) as file_object:
    for line in file_object:
        alice_count += line.strip().lower().count("alice")

print("The name 'Alice' appears {} times in the text.".format(alice_count))
