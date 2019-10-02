# if statements - exercise 35
import random

colors = ["green", "yellow", "red"]
alien_color = colors[random.randint(0, len(colors)-1)]

if alien_color == "green":
    print("You earned 5 points!")
else:
    print("You earned 10 points!")
