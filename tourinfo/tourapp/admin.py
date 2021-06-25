from django.contrib import admin

# Register your models here.
from django.db import models
from datetime import datetime
from django.db.models.base import Model
from django.db.models.deletion import CASCADE

class TouristPlaces (model.Models):
   name = models.Charfield(max_length=255)
   location = models.CharField (max_length=255)
   description = models.Charfield (max_length=255) 
   def __str__(self):
        return self.name
