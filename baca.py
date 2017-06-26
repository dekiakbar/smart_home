#!/usr/bin/python

import serial 

device = '/dev/ttyACM0' 
try:
  arduino = serial.Serial(device, 38400) 
except: 
  print "Failed to connect on",device    
try: 
  data = arduino.readline()  
  print data  
except:
  print "Failed to get data from Arduino!"
