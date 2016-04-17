#!/usr/bin/env python
# -*- coding: big5 -*-

account=5000
x=raw_input('請輸入提款金額:')
withdraw=int(x)
total=(account-withdraw)
f=open("ATM.txt","a")

if total<0:
	print '您的存款不足!'
	f.write('您的存款不足!\n')
	f.close()
elif total==0:
	print '您的存款無剩餘存款'
	f.write('您的存款不剩餘存款\n')
	f.close()
else:
	print '您的存款還剩%d元' %total
	f.write('您的存款還剩%d元\n' %total)
	f.close()