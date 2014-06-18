from django.conf.urls import patterns, url

from linCC import views
from linCC.views import HomeView

urlpatterns = patterns('',
    url(r'^$', HomeView.as_view()),
)