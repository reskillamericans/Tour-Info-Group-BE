from django.contrib.auth.base_user import BaseUserManager


class UserManager(BaseUserManager):
    
    use_in_migrations = True

    def _create_user(self, first_name, last_name, email, phone_number, **extra_fields):

        """
        Creates and saves a User with the given email.
        """

        if not email:
            raise ValueError('The given email must be set')
        email = self.normalize_email(email)
        user = self.model(first_name = first_name, last_name = last_name, phone_number = phone_number, email=email, **extra_fields)
        user.save(using=self._db)
        return user
    
    
    def create_user(self, first_name, last_name, email, phone_number, password = None,**extra_fields):
        extra_fields.setdefault('is_superuser', False)
        user.set_password(password)
        user.save(using=self._db)
        return self._create_user(first_name, last_name, email, phone_number,password = None, **extra_fields)


    def create_superuser(self, first_name, last_name, email, phone_number, password = None, **extra_fields):
        extra_fields.setdefault('is_superuser', True)

        if extra_fields.get('is_superuser') is not True:
            raise ValueError('Superuser must have is_superuser=True.')
        
        return self._create_user(self, first_name, last_name, email, phone_number, password = None, **extra_fields)