#!/usr/bin/env python
# -*- coding: utf-8 -*-
import random

print '�׷��K�X�ASTART!!!'
num=random.randrange(1,100)
x=input('�q�@��1~99���Ʀr:')
sum=1
a=1
b=99
while x!=num:
	if x>num:
		print '�{�b�d��O%d~%d' %(a,x)
	else:
		print '�{�b�d��O%d~%d' %(x,b)
	x=input('�A�q�@�ӼƦr:')
	sum+=1
print '���ߧA�q��!�׷��K�X�O%d�A�A��F%d���q���C' %(num,sum)