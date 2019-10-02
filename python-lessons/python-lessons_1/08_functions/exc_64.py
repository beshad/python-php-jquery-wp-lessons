# functions - exercise 64
def make_shirt(size, message = "I love Python."):
    sentence = "Your shirt has the message '{}' and the size is {}.".format(message, size)
    print(sentence)

make_shirt("L")
make_shirt("M")
make_shirt("S", "Ruby is cool.")
