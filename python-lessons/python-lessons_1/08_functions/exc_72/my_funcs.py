# functions - exercise 72
def make_great(magicians = []):
    great_list = []
    for magician in magicians:
        great_list.append(magician + " the great")

    return great_list

def show_magicians(magicians = []):
    for magician in magicians:
        print(magician)
