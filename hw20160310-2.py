#!/usr/bin/env python
# -*- coding: utf-8 -*-

x=raw_input('�п�J�@�����:')
num=int(x)
f=open("1.txt","a")

for y in range(2,num):
	if num%y==0:
		prime=0
		break
if 	prime==1:
	print '�O���'
	f.write('�O���\n')
	f.close()
else:
	print '���O���\n'
	f.write('���O���\n')
	f.close()