from django.db import models
from django.db.models.fields import DateTimeField

# Create your models here.

# Eleanor Davies Create Sign up Endpoint- Only post method because this only deals with the creation of an account

# class User(models.Model):
#     first_name = models.CharField(max_length=255)
#     last_name = models.CharField(max_length=255)
#     # email = models.EmailField()
#     email = models.EmailField(unique=True)
#     # Unique, no repeats of emails for different accounts
#     phone_number = models.CharField(max_length=255, unique=True) #Unique, no repeats of phone numbers for different accounts
#     created_at = models.DateTimeField(auto_now_add=True)
#     # date/time to register when a user was created
#     updated_at = models.DateTimeField(auto_now_add=True)
    # date/time to register when the user gets updated

# This is copied directly from Femi's example for AbstractBaseUser and edited to be what Eleanor thinks it should be

from django.contrib.auth.base_user import AbstractBaseUser
from django.contrib.auth.models import PermissionsMixin
from django.core.validators import MinValueValidator, MaxValueValidator
from django.utils.translation import ugettext_lazy as _

from .managers import UserManager
# Create your models here.


class User(AbstractBaseUser, PermissionsMixin):
    first_name = models.CharField(_('first name'), max_length=511)
    last_name = models.CharField(_('last name'), max_length=512)
    email = models.EmailField(_('email'), unique=True)
    phone_number = models.CharField(_('phone_number'), max_length=255, unique=True)
    created_at = models.DateTimeField(_('created at'), auto_now_add=True)
    # date/time to register when a user was created
    updated_at = models.DateTimeField(_('updated at'), auto_now_add=True)
    # date/time to register when the user gets updated

    username = None #added because of attribute error "AttributeError: type object 'User' has no attribute 'USERNAME_FIELD'"
    USERNAME_FIELD = 'email'  #added because of attribute error "AttributeError: type object 'User' has no attribute 'USERNAME_FIELD'"
    
    objects = UserManager()

# Do not need email to be in required fields if it is the username field
    REQUIRED_FIELDS = ('first name', 'last name', 'phone number')