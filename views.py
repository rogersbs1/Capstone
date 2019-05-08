from django.http import HttpResponse


def index(request):
    return HttpResponse("<h1> This is the main page for Sassy Cat Bakery</h1>")
