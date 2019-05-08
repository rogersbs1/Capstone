from django.db import models


class Employee(models.Model):
    ssn = models.CharField(max_length=100)
    name = models.CharField(max_length=100)
    DOB = models.CharField(max_length=100)
    pay = models.CharField(max_length=100)
    date_of_hire = models.CharField(max_length=100)

    def __str__(self):
        return self.ssn + ' - ' + self.name

class Sale(models.Model):
    date = models.CharField(max_length=100)
    dollar_amount = models.CharField(max_length=100)
    staff_on_hand = models.CharField(max_length=100)
    events = models.CharField(max_length=200)

    def __str__(self):
        return self.date + ' - ' + self.dollar_amount


class Furniture(models.Model):
    category = models.CharField(max_length=100)
    number_of_item = models.CharField(max_length=100)
    cost = models.CharField(max_length=100)
    DOP = models.CharField(max_length=100)

    def __str__(self):
        return self.category + ' - ' + self.number_of_item


class Perishable(models.Model):
    name = models.CharField(max_length=100)
    amount = models.CharField(max_length=100)
    cost = models.CharField(max_length=100)
    expiration_date = models.CharField(max_length=100)

    def __str__(self):
        return self.name + ' - ' + self.amount

