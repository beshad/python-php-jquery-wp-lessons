# dictionaries - exercise 44
data = {
        "alex": [1,2,3],
        "max": [4,5,6],
        "john": [7,8,9]
        }

for key, value in data.items():
    print("{}s' favorite numbers: {}".format(key, value))
