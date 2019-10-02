# dictionaries - exercise 45
word_data = {
        "lists": "A list stores a series of items in a particular order.",
        "dictionaries": "Python's dictionaries allow you to connect pieces of related information",
        "functions": "Functions are named blocks of code designed to do one specific job.",
        "classes": "Classes are the foundation of object-oriented programming.",
        "exceptions": "Exceptions are special objects that help your programs respond to errors in appropriate ways."
        }

for word, meaning in word_data.items():
    word = word.capitalize()
    print("{}:".format(word))
    print(meaning + "\n")
