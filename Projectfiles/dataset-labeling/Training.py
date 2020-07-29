# -*- coding: utf-8 -*-
"""
Created on Tue Jul 28 12:41:33 2020

@author: Osiris
"""


import numpy as np
import matplotlib.pyplot as plt
import pandas as pd

# Assign colum names to the dataset
names = ['Time', 'Score', 'Class']

# Read dataset to pandas dataframe
dataset = pd.read_csv('ds.csv', names=names)
dataset.head()