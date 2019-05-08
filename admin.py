from django.contrib import admin
from .models import Furniture, Employee, Sale, Perishable

admin.site.register(Furniture)
admin.site.register(Employee)
admin.site.register(Sale)
admin.site.register(Perishable)
