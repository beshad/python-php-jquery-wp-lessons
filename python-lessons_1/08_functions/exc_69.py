# functions - exercise 67
def make_great(magicians = []):
    great_list = []
    for magician in magicians:
        great_list.append(magician + " the great")

    return great_list

def show_magicians(magicians = []):
    for magician in magicians:
        print(magician)

magicians = ["magician 1", "magician 2", "magician 3"]

show_magicians(magicians)
show_magicians(make_great(magicians))
