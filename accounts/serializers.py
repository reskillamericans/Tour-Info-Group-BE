# from typing_extensions import Required
# Eleanor Davies created this following the "Python: User Authentication with Django REST Framework" video
from rest_framework import serializers
# This is for serializing the fields
from rest_framework.validators import UniqueValidator
from django.contrib.auth.models import User
# Using inbuilt django User model


class UserValidationSerializer(serializers.ModelSerializer):
    first_name = serializers.CharField(required = True, max_length=255, write_only=True)
    first_name = serializers.CharField(required = True, max_length=255, write_only=True)
    email = serializers.EmailField(required = True, validators = [UniqueValidator(queryset=User.objects.all())])
    # Validates that no other user has this email address when they are creating an account
    phone_number = serializers.CharField(required = True, validators = [UniqueValidator(queryset=User.objects.all())], write_only=True)
    

    def create(self,validated_data):
        user = User.objects.create_user(validated_data['first_name'],
                                    validated_data['last_name'],
                                    validated_data['email'],
                                    validated_data['phone_number'])
        return user

    class Meta:
        model = User
        fields = ('id', 'first_name', 'last_name', 'email', 'phone_number')