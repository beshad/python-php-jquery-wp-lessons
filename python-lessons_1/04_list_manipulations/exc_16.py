# list manipulations - exercise 16
invited_persons = ["Daniel", "Mark", "Hunter"]

for person in invited_persons:
    message = "Hey {}! You are invited to my dinner.".format(person)
    print(message)

print("\nA bigger table is available! I will invite a few more people!\n")

# inserts an element to the list at a given index
invited_persons.insert(0, "Claris")
invited_persons.insert(2, "Mandy")

#Adds its argument as a single element to the end of a list
invited_persons.append("Doris")

for person in invited_persons:
    message = "Hey {}! You are invited to my dinner.".format(person)
    print(message)


invited_persons_more = ['Tom', 'Jack'] 
# Iterates over its argument and adding each element to the list and extending the list.
invited_persons.extend(invited_persons_more) 
print(invited_persons) 
