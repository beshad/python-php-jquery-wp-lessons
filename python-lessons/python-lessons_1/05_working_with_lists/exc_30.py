# working with lists - exercise 30
my_pizzas = ["mista", "salami", "pepperoni"]
friend_pizzas = my_pizzas[:]

my_pizzas.append("parma")
friend_pizzas.append("magaritha")

print("My favorite pizzas are:")
for pizza in my_pizzas:
    print(pizza)

print("\nMy friends' favorite pizzas are:")
for pizza in friend_pizzas:
    print(pizza)
