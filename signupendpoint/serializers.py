from rest_framework import serializers
from .models import User
from rest_framework import validators
from django.contrib.auth import get_user_model
from decimal import Decimal


User = get_user_model()


class UserSerializer(serializers.ModelSerializer):

    first_name = serializers.CharField(required=True)
    last_name = serializers.CharField(required=True)
    email = serializers.EmailField(required=True,
                                validators = [validators.UniqueValidator(queryset=User.objects.all())])
    phone_number = serializers.CharField(required=True)

    class Meta:
        model = User
        fields = ('first_name', 
                'last_name', 
                'email', 
                'phone_number',
                'created_at',
                'updated_at'
                )
                
    
    def create(self, validated_data):
        user = User.objects.create(**validated_data)
        return user
