#!/usr/bin/env python
# -*- coding: big5 -*-

account=5000
x=raw_input('�п�J���ڪ��B:')
withdraw=int(x)
total=(account-withdraw)
f=open("ATM.txt","a")

if total<0:
	print '�z���s�ڤ���!'
	f.write('�z���s�ڤ���!\n')
	f.close()
elif total==0:
	print '�z���s�ڵL�Ѿl�s��'
	f.write('�z���s�ڤ��Ѿl�s��\n')
	f.close()
else:
	print '�z���s���ٳ�%d��' %total
	f.write('�z���s���ٳ�%d��\n' %total)
	f.close()