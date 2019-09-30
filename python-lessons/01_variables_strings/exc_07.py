# variables and strings 
name_with_whitespaces = "   Behshad "

# Remove spaces to the left of the string:
without_at_beginning = name_with_whitespaces.lstrip()
# Remove spaces to the right of the string:
without_at_end = name_with_whitespaces.rstrip()
#Remove spaces at the beginning and at the end of the string:
without_any = name_with_whitespaces.strip()

print("Without spaces at the beginning: '{}'".format(without_at_beginning))
print("Without spaces at the end: '{}'".format(without_at_end))
print("Without any spaces : '{}'".format(without_any))
