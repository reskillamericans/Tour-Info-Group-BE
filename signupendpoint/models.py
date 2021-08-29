from django.db import models
from django.db.models.fields import DateTimeField

# Create your models here.

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

    REQUIRED_FIELDS = ('first name', 'last name', 'phone number')


    #Model created by Eleanor Davies
# group name should be the names of the people in it so the same group can be used again in the future
class Group(models.Model):
    user = models.ForeignKey(User, default="", on_delete = models.PROTECT)
    group_name = models.CharField(max_length=50)
    number_in_group = models.IntegerField()
    trip_start_date = models.DateTimeField()
    trip_end_date = models.DateTimeField()


#Model created by Eleanor Davies
class Group_Member(models.Model):
    group = models.ForeignKey(Group, default="", on_delete= models.PROTECT)
    member_first_name = models.CharField(max_length=50)
    member_last_name = models.CharField(max_length=50)
    member_health_restriction = models.BooleanField()
    member_under_eighteen = models.BooleanField()
    member_email = models.CharField(max_length=50)
    member_phone_number = models.CharField(max_length=50)


#Model created by Eleanor Davies
class Booking(models.Model):
    booking_group = models.ForeignKey(Group, default="", on_delete= models.PROTECT)
    booking_start_date_time = models.DateTimeField()
    booking_end_date_time = models.DateTimeField()
    booking_cost_local_currency = models.IntegerField()
    booking_local_currency_type = models.CharField(max_length = 50)
    booking_location = models.CharField(max_length = 500)
    booking_phone_number = models.CharField(max_length = 50)
    booking_email_address = models.CharField(max_length = 50)
    booking_contact_name = models.CharField(max_length = 50)
    booking_contact_position = models.CharField(max_length = 50)
    booking_website = models.CharField(max_length = 500)
#Booking description includes rules and what to bring
    booking_description = models.CharField(max_length = 500)