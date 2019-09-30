# working with lists - exercise 29
numbers = range(1, 21)

first_items = numbers[:3]
list_length = len(numbers)
middle_items = numbers[((list_length/2)-1):(((list_length/2)-1)+3)]
last_items = numbers[-3:]

print("The first three items in the list are: {}".format(first_items))
print("Three items from the middle of the list are:: {}".format(middle_items))
print("The last three items in the list are: {}".format(last_items))
