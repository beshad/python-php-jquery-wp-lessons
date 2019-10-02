# if statements - exercise 37
import random

age = random.randint(0, 80)

if age < 2:
    print("The person is a baby. (Age: {})".format(age))
elif age >= 2 and age < 4:
    print("The person is a toddler. (Age: {})".format(age))
elif age >= 3 and age < 13:
    print("The person is a kid. (Age: {})".format(age))
elif age >= 13 and age < 20:
    print("The person is a teenager. (Age: {})".format(age))
elif age >= 13 and age < 65:
    print("The person is an adult. (Age: {})".format(age))
else:
    print("The person is an elder. (Age: {})".format(age))
