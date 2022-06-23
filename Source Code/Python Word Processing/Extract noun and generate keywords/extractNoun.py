import nltk
import csv
from nltk.corpus import wordnet
nltk.download('punkt')
nltk.download('averaged_perceptron_tagger')
nltk.download('wordnet')

with open('General Procedures and Keywords.csv') as csvfile:
    readCSV = csv.reader(csvfile, delimiter=',')
    for row in readCSV:
        synonyms = []   # Reset Synonym list so no duplicates are printed
        txt = row[1]    # Assign the name of General Procedure to txt
        j = 0           # Reset position of j

        # Extracting all nouns from txt
        is_noun = lambda pos: pos[:2] == 'NN'
        tokenized = nltk.word_tokenize(txt)
        nouns = [word for (word,pos) in nltk.pos_tag(tokenized) if is_noun(pos)]

        # Assign the first noun from the txt list of nouns to 'noun'
        noun = nouns[j]

        f = open('Blacklist.txt')       # List of words from procedures that we dont want used
        words = f.readlines()
        newwords = set()

        for item in words:
            newwords.add(item.rstrip())
        
        while True:
            if noun in newwords:
                j += 1
                noun = nouns[j]
            else:
                noun = nouns[j]
                break

        f.close()

        # Extract synonyms from the noun using 'Wordnet' and print them with their rDGDefinition and General Procedure
        for syn in wordnet.synsets(noun):
            for l in syn.lemmas():
                synonyms.append(l.name())
        print(row[0],'-',row[1],'-',set(synonyms))
        
        #print(row[0],'-',row[1],':',row[2])
        #print('@',row[0],'-',row[1],'@: (',row[2], '),')
        #print(set(synonyms))
			
		

					