#!/usr/bin/env python

print 'Content-Type: application/json'
print
jsonfile = 'TESTTREE.simple.json'
fh = open(jsonfile, 'r')
cont = fh.read()
print cont

