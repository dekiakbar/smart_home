#!/usr/bin/python
# -*- coding: utf-8 -*-
import serial 
import sys

device = '/dev/ttyACM1' 
try:
  arduino = serial.Serial(device, 38400) 
except: 
  print "Arduino tidak terhubung",device    
try: 
  data = arduino.readline()  
  print data  
except:
 print "Gagal membaca data dari arduino"
