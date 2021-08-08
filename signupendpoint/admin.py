from django.contrib import admin

# Register your models here.

# copied from Femi's example for AbstractBaseUser

# from django.contrib import admin already imported above
from .models import User
# Register your models here.

admin.site.register(User)