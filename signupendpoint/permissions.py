# # Commented out because I am not sure I need this

# # This file was created and the body is copied and pasted from Femi's example for AbstractBaseUser- cannot makemigrations

# from rest_framework.permissions import BasePermission

# class IsAdmin(BasePermission):
    
#     def has_object_permission(self, request):
#         if request.method in permissions.SAFE_METHODS:
#             return True
#         return request.user.is_admin