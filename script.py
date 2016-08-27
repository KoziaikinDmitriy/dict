#!c:/Python27/ python
# -*- coding: utf-8 -*-
# -*- coding: ascii -*-
import pymorphy2, json
import os
import sys

if len (sys.argv) > 1:
    word = format (sys.argv[1] ) 
word = word.decode('utf-8')
morph = pymorphy2.MorphAnalyzer()
y=0
z=0
lis = []
while y<len(morph.parse(word)):
	p = morph.parse(word)[y]
	x=0
	while x<len(p.lexeme):
		s=p.lexeme[x].word
		lis.insert(z, s)
		x+=1
		z+=1
	y+=1

print(lis)