file = open("file.txt", 'w')
file.write("Lorem ipsum dolor sit amet, consectetur adipiscing elit,")
file.close()


# or
with open("foo.txt", 'w') as file:
    file.write("Lorem ipsum dolor sit amet, consectetur adipiscing elit,")

# Different types of file modes
# "w", "w+", "r", "r+", "b"


