#!/usr/bin/env python
# -*- coding: utf-8 -*-
import random

print '終極密碼，START!!!'
num=random.randrange(1,100)
x=input('猜一個1~99的數字:')
sum=1
a=1
b=99
while x!=num:
	if x>num:
		print '現在範圍是%d~%d' %(a,x)
	else:
		print '現在範圍是%d~%d' %(x,b)
	x=input('再猜一個數字:')
	sum+=1
print '恭喜你猜中!終極密碼是%d，你花了%d次猜中。' %(num,sum)