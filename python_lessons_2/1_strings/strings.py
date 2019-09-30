def main():
    """This is a string"""
    'This is also a string'
    "This again is a string"

    a_variable = "some string"
    print(a_variable)
    print("There are {} days in a week".format(7))

    foo = "hello" + " world!"
    a = "Jaison"
    b = "Sabu"
    print(a + " " + b)

    # String slicing

    t = "Anubhav Yadav"
    print(t[0])
    print(t[:7])
    print(t[8:])

    s = "A very very long string"
    s.find("very")

    s[s.find("very"):s.find("very") + len("very")]

    # Common string method

    "anubhav".capitalize()
    "Senior Product Engineer".startswith("Senior")
    "Founder and CEO".endswith("CEO")
    "9028810894".isdigit()
    "anubhav.yadav@fullcontact.com, anubhav.yadav@gmx.com, anubhav1691@gmail.com, yadav@hans-otto-film.de".split(",")

if __name__ == '__main__':
    main()