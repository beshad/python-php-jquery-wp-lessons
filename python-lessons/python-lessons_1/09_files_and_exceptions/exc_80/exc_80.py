# files and exceptions - exercise 80
import json

data = { "number": 13 }

with open("number.json", "w", encoding="utf-8") as output:
    output.write(json.dumps(data))

with open("number.json") as number_file:
    json_data = json.load(number_file)

print("I know your favorite number! It's {}".format(json_data["number"]))
