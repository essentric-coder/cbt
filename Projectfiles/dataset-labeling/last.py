# -*- coding: utf-8 -*-
"""
Spyder Editor

This is a temporary script file.
"""

import pandas as pd
import numpy as np
import os
#Load the dataset
dataset = pd.read_csv('dataset.csv')
# lets take a look at the data
dataset.head()
#check which column has null values
dataset.isnull().sum()
# get a statistical summary of the data
dataset.describe()
print('Number of rows', dataset.shape[0])
print('Number of columns', dataset.shape[1])
# lets look at the column with null values
label_nan = dataset.label.isnull().sum()
pct = (label_nan/dataset.shape[0]) * 100
print('The percentage of the missing values in the label column: {}%'. format(pct))
# use the following condition to label the data
dataset['label'] = np.where( ((dataset.score < 6 ) | (dataset.time > 38)), 'threat', dataset['label'])
dataset['label'] = np.where( ((dataset.score >= 6) & (dataset.time <= 38)), 'medium_threat', dataset['label'])
dataset['label'] = np.where( ((dataset.score >= 8) & (dataset.time <= 25)), 'no_threat', dataset['label'])
#check the data to see if the labelling worked
dataset.sample(10)
#check to see if the conditions are met

medium_threat = dataset[((dataset.score >= 6) & (dataset.time <= 38))]
medium_threat['label'].unique()

#save the labelled data to the working directory
dataset.to_csv('File.csv')
