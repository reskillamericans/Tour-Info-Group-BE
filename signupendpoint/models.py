from django.db import models
from django.db.models.fields import DateTimeField

# Create your models here.

# Eleanor Davies Create Sign up Endpoint- Only post method because this only deals with the creation of an account

class User(models.Model):
    first_name = models.CharField(max_length=255)
    last_name = models.CharField(max_length=255)
    # email = models.EmailField()
    email = models.EmailField(unique=True)
    # Unique, no repeats of emails for different accounts
    phone_number = models.CharField(max_length=255, unique=True) 
    #Unique, no repeats of phone numbers for different accounts
    created_at = models.DateTimeField(auto_now_add=True)
    # date/time to register when a user was created
    updated_at = models.DateTimeField(auto_now_add=True)
    # date/time to register when the user gets updated
