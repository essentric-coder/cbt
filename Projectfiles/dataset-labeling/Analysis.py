import csv
import numpy as np
with open("file.csv", 'r') as f:
    wines = list(csv.reader(f, delimiter=";"))

wines = np.array(wines[1:])
print(wines)
