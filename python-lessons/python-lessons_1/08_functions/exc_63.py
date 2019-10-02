# functions - exercise 63
def make_shirt(size, message):
    sentence = "Your shirt has the message '{}' and the size is {}.".format(message, size)
    print(sentence)

make_shirt("L", "Manchester United is cool")
make_shirt(message = "A cool message", size = "M")
