# list manipulations - exercise 19
import random

invited_persons = ["Daniel", "Mark", "Hunter", "Max"]

for person in invited_persons:
    message = "Hey {}! You are invited to my dinner.".format(person)
    print(message)

non_going_index = random.randint(0, len(invited_persons) - 1)
non_going_person = invited_persons[non_going_index]

print("\nSorry, {} can't come come to your dinner :/\n".format(non_going_person))

invited_persons[non_going_index] = "Clara"

for person in invited_persons:
    message = "{}, you are now invited to my dinner.".format(person)
    print(message)

print("\n{} persons are invited to my dinner".format(len(invited_persons)))
