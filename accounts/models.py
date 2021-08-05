from django.db import models
from django.contrib.auth.base_user import AbstractBaseUser
from django.contrib.auth.models import PermissionsMixin
from django.core.validators import MinValueValidator, MaxValueValidator
from django.utils.translation import ugettext_lazy as _

from .managers import UserManager
# Create your models here.


class User(AbstractBaseUser, PermissionsMixin):

    first_name = models.CharField(_('first name'), max_length=512)
    last_name = models.CharField(_('last name'), max_length=512)
    email = models.EmailField(_('email'), unique=True)
    phone_number = models.CharField(_('phone number'), max_length=512, unique=True)

    objects = UserManager()

    USERNAME_FIELD = 'email'
    REQUIRED_FIELDS = ('fullname', )