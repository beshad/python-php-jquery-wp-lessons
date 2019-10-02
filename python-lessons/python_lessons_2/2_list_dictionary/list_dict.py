a_list = ["apple", "banana", "orange", "watermelon"]
a_dict = {"name": "Anubhav", "phone": "9028810894", "email": "anubhav1691@gmail.com"}

# Iteration of list

for item in a_list:
    print(item)

# Iteration of a dictionary

for key, value in a_dict.items():
    print("{}:{}".format(key, value))

# Create a list of numbers
range(100)

# appending a list
a_list.append("Pineapple")
a_list.extend(['a', 'b', 'c'])

# indexing
a_list[0]
a_list[1]

# Slicing
a_list[:]
a_list[1:2]

# Check if an object is there in the list
"apple" in a_list

# Reversing a list
a_list.reverse()
a_list[::-1]

# Dictionary

a_dict['name']
a_dict['phone']
a_dict['email']

# Get all keys as list
a_dict.keys()

# You can add dictionary in lists and vice versa
