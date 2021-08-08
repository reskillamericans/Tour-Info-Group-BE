from rest_framework import serializers
from .models import User

# Commented out to try to use the serializer mirrored from Femi's
# class UserSerializer(serializers.ModelSerializer):

#     class Meta:
#         model = User
#         fields = "__all__"

#     def create(self, validated_data):
#         return User.objects.create(**validated_data)

# copied from Femi's example for AbstractBaseUser. Edited by Eleanor to what I think it should be

from rest_framework import validators
# from rest_framework.authtoken.models import Token don't need this for my work
from django.contrib.auth import get_user_model#, authenticate this is not needed for my work- in login serializer

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
                # instead of copying each feild, you could also do: fields = "__all__"
    
    def create(self, validated_data):
        user = User.objects.create(**validated_data)
        return user

# No account balance for my work
# class AccountBalanceSerializer(serializers.ModelSerializer):

#     class Meta:
#         model = User
#         fields = ('id', 'btc_wallet_balance', 'eth_wallet_balance')

# Don't need a login model for my work
# class UserLoginSerializer(serializers.ModelSerializer):

#     email = serializers.EmailField(required=True, write_only=True)
#     password = serializers.CharField(required=True, write_only=True)
#     token = serializers.CharField(read_only=True, allow_blank=False)

#     class Meta:
#         model = User
#         fields = ('email', 'password', 'token')

    
#     def validate(self, attrs):
#         email = attrs.get('email', None)
#         password = attrs.get('password', None)

#         if not email or not password:
#             raise serializers.ValidationError("Please enter email address or password")
            
#         user = authenticate(email=email, password=password)

#         if not user:
#             raise serializers.ValidationError("Wrong email or password")

#         if not user.is_active:
#             raise serializers.ValidationError("User is not active, Please contact administrator")

#         token, created = Token.objects.get_or_create(user=user)
#         attrs['token'] = token.key
        
#         return attrs