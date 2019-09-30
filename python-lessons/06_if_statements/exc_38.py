# if statements - exercise 38
import random

fruits = ["apples", "cherries", "bananas", "lemons", "pears", "oranges"]

favorite_fruits = fruits[:]
random.shuffle(favorite_fruits)
favorite_fruits = favorite_fruits[:3]

for fruit in fruits:
    if fruit in favorite_fruits:
        print("Your really like {}!".format(fruit))
