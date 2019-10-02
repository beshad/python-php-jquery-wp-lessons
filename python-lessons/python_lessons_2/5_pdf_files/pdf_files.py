# modules for 
import PyPDF2
# pdf file object
# you can find find the pdf file with complete code in below
file= open('file.pdf', 'rb')
# pdf reader object
pdfReader = PyPDF2.PdfFileReader(file)
# number of pages in pdf
print(pdfReader.numPages)
# a page object
page = pdfReader.getPage(0)
# extracting text from page.
# this will print the text you can also save that into String
print(page.extractText())