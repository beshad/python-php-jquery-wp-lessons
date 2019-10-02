# if statements - exercise 36
import random

colors = ["green", "yellow", "red"]
alien_color = colors[random.randint(0, len(colors)-1)]

if alien_color == "green":
    print("You earned 5 points!")
elif alien_color == "yellow":
    print("You earned 10 points!")
elif alien_color == "red":
    print("You earned 15 points!")
