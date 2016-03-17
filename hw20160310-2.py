#!/usr/bin/env python
# -*- coding: utf-8 -*-

x=raw_input('請輸入一正整數:')
num=int(x)
f=open("1.txt","a")

for y in range(2,num):
	if num%y==0:
		prime=0
		break
if 	prime==1:
	print '是質數'
	f.write('是質數\n')
	f.close()
else:
	print '不是質數\n'
	f.write('不是質數\n')
	f.close()