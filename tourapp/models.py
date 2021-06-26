from django.db import models
from datetime import datetime
from django.db.models.base import Model
from django.db.models.deletion import CASCADE
# Create your models here.

class TouristPlaces (models.Model):
   name = models.CharField(max_length=255)
   location = models.CharField(max_length=255)
   description = models.CharField(max_length=255) 

   class Meta:
      db_table = 'tour'
   
   def __str__(self):
        return self.name
