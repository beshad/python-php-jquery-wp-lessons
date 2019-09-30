# dictionaries - exercise 47
country_rivers = {
        "China": "Yangtze",
        "China": "Yangtze",
        "China": "Ob-Irtysh",
        "Germany": "Elbe",
        "Germany": "Oder",
        "Germany": "Rhine",
        "USA": "Missouri",
        "USA": "Yukon",
        "USA": "Colorado"
        }

country_river_list = {}

for country, river in country_rivers.items():
    if country not in country_river_list:
        country_river_list[country] = []

    country_river_list[country].append(river)

for country, rivers in country_river_list.items():
    print("Rivers in {}: {}".format(country, set(rivers)))
