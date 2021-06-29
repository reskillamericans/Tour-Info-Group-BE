#Eleanor Davies: This import is throwing an error when I try to make migrations. It can't find the file to import from. I am commenting out to make my code run
#from _typeshed import FileDescriptor
from django.db import models
from django.db.models import Model
from django.db.models.fields import DateTimeField, IntegerField

# Create your models here.

# The one user may have multiple trips comprised of multiple group members. Maybe the next trip will be comprised of different people than this. This way you can assign multiple bookings to this specific group, and the next one will be assigned to a different group.

#Model created by Eleanor Davies
class User(models.Model):
    first_name = models.CharField(max_length=50)
    last_name = models.CharField(max_length = 50)
    email = models.CharField(max_length = 50)
    phone = models.CharField(max_length = 50)


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