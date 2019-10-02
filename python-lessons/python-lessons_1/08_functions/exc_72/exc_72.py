# functions - exercise 72
import my_funcs
from my_funcs import show_magicians
from my_funcs import show_magicians as show
import my_funcs as magic_functions
from my_funcs import *

magicians = ["magician 1", "magician 2", "magician 3"]

my_funcs.show_magicians(magicians)
my_funcs.show_magicians(my_funcs.make_great(magicians))

show_magicians(magicians)

show(magicians)

magic_functions.show_magicians(magicians)
magic_functions.show_magicians(magic_functions.make_great(magicians))

show_magicians(magicians)
show_magicians(make_great(magicians))
