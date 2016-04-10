#!/usr/bin/env python
# -*- coding: utf-8 -*-

def isPrime(N):
	i=2
	num=0
	while i<N:
		if N%i==0:
			num=num+1
		i=i+1
	if num==0:
		return 1
	else:
		return 0

		


N=2
while N<=1000:
	sum=0	
	x=isPrime(N)
	if x==1:
		sum=sum+N
	N=N+1	