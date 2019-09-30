# files and exceptions - exercise 78
filenames = ["dogs", "cats"]

for filename in filenames:
    full_filename = "{}.txt".format(filename)

    try:
        print("{} names:\n".format(filename))

        with open(full_filename) as file_object:
            for name in file_object:
                name = name.strip()
                print(name)

    except FileNotFoundError as e:
        print("\nSorry, couldn't find {}".format(full_filename))
