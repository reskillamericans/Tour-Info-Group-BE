from django.contrib import admin
from .models import User, Group, Group_Member, Booking
# Register your models here.
 
admin.site.register(User)
admin.site.register(Group)
admin.site.register(Group_Member)
admin.site.register(Booking)