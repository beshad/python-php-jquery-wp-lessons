# list manipulations - exercise 17
invited_persons = ["Daniel", "Mark", "Hunter"]

for person in invited_persons:
    message = "Hey {}! You are invited to my dinner.".format(person)
    print(message)

print("\nA bigger table is available! I will invite a few more people!\n")

invited_persons.insert(0, "Claris")
invited_persons.insert(2, "Mandy")
invited_persons.append("Doris")

for person in invited_persons:
    message = "Hey {}! You are invited to my dinner.".format(person)
    print(message)

print("\nDamn! Things changed sadly, I just can invite two peolple :/\n")

while True:
    if len(invited_persons) > 2:
        # Negative numbers mean that counting from the right instead of the left.
        person = invited_persons[-1]
        message = "Sorry {}, you can't come anymore :/".format(person)
        print(message)
       # no parameter is passed, the default index -1 is passed as an argument which returns the last item.
        invited_persons.pop()
    else:
        break

print("\n")

for person in invited_persons:
    message = "Hey {}! You are still invited to my dinner.".format(person)
    print(message)

del(invited_persons[0])
del(invited_persons[-1])

print(invited_persons)
