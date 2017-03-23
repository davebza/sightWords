# sightWords

This is very much a work in progress, and as such concise and clear running instructions are not possible right now. These will follow as soon as the database structure is stable.

This app is both a flash card generator for the first 150 Dolch sight words in English & other levelled content related words, and a way of generating multiple choice questions to check whether students can recognize these words. 

Currently, there is a test set of words stored in a single database and a single table - this will change soon however. 

2 main use modes:

- read the words in flashcard sets
- Test knowledge of the words: either through jumbled letter misspelling distractors or through randomly selecting other words 

Components:

HTML and CSS frame
Javascript game function elements - JSON objects are parsed, and questions and word flashcards are developed
PHP processes server-side information, and retrieves from and updates the database.
mySQL contains user and word data
