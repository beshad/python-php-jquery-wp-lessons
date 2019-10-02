# for loop vs comprehension

squares = []
for x in range(10):
    squares.append(x ** 2)

squares = [x ** 2 for x in range(10)]

numbers = []
for x in range(100):
    if x % 3 == 0:
        numbers.append(x)

numbers = [x for x in range(100) if x % 3 == 0]

# Finding Primes
noprimes = []
for i in range(2, 8):
    for j in range(i*2, 50, i):
        noprimes.append(j)
primes = []
for x in range(2, 50):
    if x not in noprimes:
        primes.append(x)


noprimes = [j for i in range(2, 8) for j in range(i*2, 50, i)]
primes = [x for x in range(2, 50) if x not in noprimes]

# Remove all vowels from a sentence

sentence = 'Anubhav is the best programmer in the world'

vowels = 'aeiou'
non_list = []
for l in sentence:
    if not l in vowels:
        non_list.append(l)
nonvowels = ''.join(non_list)

vowels = 'aeiou'
nonvowels = ''.join([l for l in sentence if not l in vowels])


# Get a list of all the text files in a directory

import os
files = []
for f in os.listdir('./my_dir'):
    if f.endswith('.txt'):
        files.append(f)

import os
files = [os.path.join('./my_dir', f) for f in os.listdir('./my_dir') if f.endswith('.txt')]